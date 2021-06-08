<?

//設定項目
//メールの雛形を指定
$customerMail = getcwd() . '/product/mail/customer.txt';
$companyMail = getcwd() . '/product/mail/company.txt';

$fromAddress = 'no-reply@hotta-hagane.co.jp';
$fromName = '株式会社　堀田ハガネ';

$toAddress = 'tantou@f-spirits,in';
$customerSubject = 'ダウンロードありがとうございました';
$companySubject = 'ダウンロードのお知らせ';
$bccAddress = 'test@f-spirits.in';
//ダウンロードリンクの有効期限
$limSecond = 72000;

//フラグ定義
$errFLG = false;

//include設定
require_once getcwd() . "/phpmailer/PHPMailerAutoload.php";

//時刻取得
$dateSerial = time();
$dateString = date('Y/m/d H:i:s',$dateSerial);

//hashを取得(GET値不正対応含む)
if( mb_ereg_replace('[0-9a-zA-Z]', '', $_GET['hash']) == '' ){
	$hash = $_GET['hash'];
} else {
	$hash = '';
}

$limdateSerial = $dateSerial - $limSecond;

//データベース接続
$dbUser = "here2"; $dbPass = "otXwUH9ZA7Mn"; $charset = "utf-8"; $host = "localhost";
$dsn = 'mysql:dbname='.$dbUser.';host='.$host.';';
//$dsn = 'mysql:dbname='.$dbUser.';host='.$host.';charset='.$charset.";"; //PHP5.3.6以降の文字コード指定付
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'"); //PHP5.3.6未満の文字コード指定
try{
	$pdo = new PDO($dsn, $dbUser, $dbPass, $options);
} catch (PDOException $err) {
	$errFLG = true;
}

if( $errFLG == false ){
	//属性設定、静的プレースホルダを使用
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Catch Exception
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true); //mysqlベースのコード(fetchallではなくfetchの連続使用)
		
	//入力データの保存
	try {
		$preparedSQL = "select * from SDS_REQUEST where hash = :hash and regdate >= :regdate order by regdate desc";
		$query = $pdo->prepare($preparedSQL);
		$query->bindParam(':hash', $hash, PDO::PARAM_STR);
		$query->bindParam(':regdate', $limdateSerial, PDO::PARAM_INT);
		$query->execute();
		if( $query->rowCount() > 0 ){
			$datas = $query->fetchAll(PDO::FETCH_ASSOC);
			$query->closeCursor();
			$data = $datas[0];
		} else {
			$errFLG = true;
		}
	}catch (PDOException $e){
		$err = $e->getMessage();
		$errFLG = true;
	}
}

if( $errFLG == false ){
	//メールの内容を読込
	$mailCustomer = @file_get_contents($customerMail);
	$mailCompany = @file_get_contents($companyMail);
	
	//メールの内容を更新
	$data['dateString'] = $dateString;
	foreach( $data as $wkKey => $wkData ){
		$mailCustomer = mb_ereg_replace("#####{$wkKey}#####", $wkData, $mailCustomer);
		$mailCompany =  mb_ereg_replace("#####{$wkKey}#####", $wkData, $mailCompany);
	}
	$mailCustomer = mb_ereg_replace("#####[a-zA-Z0-9_-]{1,}#####\n", '', $mailCustomer);
	$mailCompany = mb_ereg_replace("#####[a-zA-Z0-9_-]{1,}#####\n", '', $mailCompany);
	
	$mail = new PHPMailer();
	$mail->CharSet = "ISO-2022-JP";
	$mail->Encoding = "7bit";
	//お客様へ送信
	$mail->ClearAddresses();  // 宛先アドレスを前に指定した場合はクリア
	$mail->From = $fromAddress;
	$mail->FromName = mb_encode_mimeheader( $fromName );
	$mail->AddAddress( $data['mail'] );
	$mail->Subject = mb_encode_mimeheader( $customerSubject );
	$mail->Body = mb_convert_encoding( $mailCustomer,'JIS','UTF-8' );
	$result = $mail->Send(); //メール送信
	//お知らせを送信
	$mail->ClearAddresses();  // 宛先アドレスを前に指定した場合はクリア
	$mail->From = $fromAddress;
	$mail->FromName = mb_encode_mimeheader( $fromName );
	$mail->AddAddress( $toAddress );
	$mail->AddBCC( $bccAddress );
	$mail->Subject = mb_encode_mimeheader( $companySubject );
	$mail->Body = mb_convert_encoding( $mailCompany,'JIS','UTF-8' );
	$result = $mail->Send(); //メール送信
	
	//強制的にダウンロードとして出力
	$filepath = getcwd() . $data['file'];
	header( 'HTTP/1.1 200 OK', true, 200 );
	header( 'Content-Type: application/force-download' );
	header( 'Content-disposition: attachment; filename=download.pdf' );
	readfile( $filepath );
	exit(0); //強制的にダウンロード後終了
} else {
	//エラーの場合404 Not Foundを強制出力
	header("HTTP/1.0 404 Not Found", true, 404);
	exit(0);
}

?>
