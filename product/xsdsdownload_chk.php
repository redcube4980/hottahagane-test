<?php

//入力値を保存
$varGET = $_GET;
$varPOST = $_POST;

//戻り値の初期値を設定
$ret['result'] = true;
$ret['name'] = '';
$ret['mail'] = '';
$ret['company'] = '';
$ret['fname'] = '';

//サニタイジング
foreach( $varPOST as $wkKey => $wkVar ){
	$varPOST[$wkKey] = mb_ereg_replace('<', '&lt;', $varPOST[$wkKey] );
	$varPOST[$wkKey] = mb_ereg_replace('>', '&gt;', $varPOST[$wkKey] );
	$ret[$wkKey] = $varPOST[$wkKey];
}

//ダウンロードするファイルのチェック
switch( true ){ //case判定は「true」と「===」により厳密な判定を使用
case $varPOST['dl'] === 'pb':
	$fname = '/pdf/pb.pdf';
	break;
case $varPOST['dl'] === 'nonpb':
	$fname = '/pdf/nonpb.pdf';
	break;
case $varPOST['dl'] === 'stainless':
	$fname = '/pdf/stainless.pdf';
	break;
default:
	$fname = '';
	$ret['result'] = false;
	break;
}

//名前チェック
$varPOST['inp_name'] = mb_convert_kana( $varPOST['inp_name'], 'AKV' ); //全角半角のコントロール
$varPOST['inp_name'] = trim_emspace( $varPOST['inp_name'] );
if( mb_strlen( $varPOST['inp_name'] ) == 0 ){
	$ret['result'] = false;
	$ret['name'] = '正しい氏名を入力して下さい。';
}
$ret['inp_name'] = $varPOST['inp_name'];

//メールアドレスチェック
$varPOST['inpu_mail'] = mb_convert_kana( $varPOST['inp_mail'], 'aKV' ); //全角半角のコントロール
if( mb_strlen( $varPOST['inp_mail'] ) == 0 ){
	$ret['result'] = false;
	$ret['mail'] = 'メールアドレスを入力して下さい。';
} else {
	if( ! filter_var($varPOST['inp_mail'], FILTER_VALIDATE_EMAIL) ){
		$ret['result'] = false;
		$ret['mail'] = '入力されたメールアドレスに誤りがあります。';
	}
}
$ret['inp_mail'] = $varPOST['inp_mail'];

//会社名チェック
$varPOST['inp_company'] = trim_emspace( $varPOST['inp_company'] );
if( mb_strlen( $varPOST['inp_company'] ) == 0 ){
	$ret['result'] = false;
	$ret['company'] = '正しい会社名を入力して下さい。';
}

if( $varGET['mode'] === 'check' || $ret['result'] === false ){
	echo json_encode($ret);
	exit(0); //checkの場合もしくは入力エラーの場合、終了
} else if( $varGET['mode'] === 'confirm' ){
	//データベース接続
	$dbUser = "here2"; $dbPass = "otXwUH9ZA7Mn"; $charset = "utf-8"; $host = "localhost";
	$dsn = 'mysql:dbname='.$dbUser.';host='.$host.';';
	//$dsn = 'mysql:dbname='.$dbUser.';host='.$host.';charset='.$charset.";"; //PHP5.3.6以降の文字コード指定付
	$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'"); //PHP5.3.6未満の文字コード指定
	try{
		$pdo = new PDO($dsn, $dbUser, $dbPass, $options);
	} catch (PDOException $err) {
		$errMessage = $err->getMessage();
		$ret['result'] = false;
		echo json_encode($ret);
		exit(0); //db接続の場合、終了
	}
	
	//時刻取得
	$dateSerial = time();
	$dateString = date('Y/m/d H:i:s',$dateSerial);
	
	//ダウンロロード用ファイル名(hash)作成
	mt_srand( microtime() * 100000 );
	$uniqid = md5(uniqid(rand(), true));
	
	//属性設定、静的プレースホルダを使用
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Catch Exception
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true); //mysqlベースのコード(fetchallではなくfetchの連続使用)
	
	try{
		//入力データの保存
		$preparedSQL = "insert into SDS_REQUEST ( name, mail, company, branch, zip, address, file, hash, regdate ) values ( :name, :mail, :company, :branch, :zip, :address, :file, :hash, :regdate )";
		$query = $pdo->prepare($preparedSQL);
		$query->bindParam(':name', $varPOST['inp_name'], PDO::PARAM_STR);
		$query->bindParam(':mail', $varPOST['inp_mail'], PDO::PARAM_STR);
		$query->bindParam(':company', $varPOST['inp_company'], PDO::PARAM_STR);
		$query->bindParam(':branch', $varPOST['inp_branch'], PDO::PARAM_STR);
		$query->bindParam(':zip', $varPOST['inp_zip'], PDO::PARAM_STR);
		$query->bindParam(':address', $varPOST['inp_address'], PDO::PARAM_STR);
		$query->bindParam(':file', $fname, PDO::PARAM_STR);
		$query->bindParam(':hash', $uniqid, PDO::PARAM_STR);
		$query->bindParam(':regdate', $dateSerial, PDO::PARAM_INT);
		$query->execute();
	}catch (PDOException $e){
		$ret['result'] = false;
		echo json_encode($ret);
		exit(0); //dbに追加失敗の場合、終了
	}
	$ret['fname'] = $uniqid;
	
	echo json_encode($ret);
	exit(0);
} else {
	//modeの入力値が不正な場合
	$ret['result'] = false;
	echo json_encode($ret);
	exit(0);
}

//全角半角スペースのTrim
function trim_emspace ($str) {
	// 先頭の半角、全角スペースを、空文字に置き換える
	$str = preg_replace('/^[ 　]+/u', '', $str);
	// 最後の半角、全角スペースを、空文字に置き換える
	$str = preg_replace('/[ 　]+$/u', '', $str);
	return $str;
}

?>
