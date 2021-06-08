<?php
// 口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口
//
// 堀田ハガネメールフォーム　メール送信
//
// 口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口
mb_internal_encoding('UTF-8');

include_once("common.php");

decode();

if( $namae == '' or $mail == '' or $phonetic == '' or $detail == '' ) {
	header("Location: index.php");
	exit;
}
$subject = mb_encode_mimeheader($subject, 'ISO-2022-JP',"B");
$subjectG = mb_encode_mimeheader($subjectG, 'ISO-2022-JP',"B");

$d_detail = preg_replace("/\r/","",htmlspecialchars_decode($detail));
if( $company == "")		$d_company = '（入力なし）';
			else		$d_company = $company;
if( $division == "")	$d_division = '（入力なし）';
			else		$d_division = $division;
if( $addressB == "")	$d_addressB = '（入力なし）';
			else		$d_addressB = $addressB;
if( $zipcodeA == "")	$d_zipcode = '（入力なし）';
			else		$d_zipcode = "{$zipcodeA}-{$zipcodeB}";
if( $telA == "")		$d_tel = '（入力なし）';
			else		$d_tel = "{$telA}-{$telB}-{$telC}";

$mailbody =	"お問い合わせが到着しました。\n".
			"\n".
			"------------------------------------------------------------\n".
			"お名前　：{$namae}\n".
			"フリガナ：{$phonetic}\n".
			"メール　：{$mail}\n".
			"職業　　：{$vocational}\n".
			"会社名　：{$d_company}\n".
			"部署名　：{$d_division}\n".
			"郵便番号：{$d_zipcode}\n".
			"住所　　：{$pref_list[$addressA]}\n".
			"　　　　：{$d_addressB}\n".
			"電話番号：{$d_tel}\n".
			"お問い合わせ内容：\n".
			"{$d_detail}\n".
			"------------------------------------------------------------\n";
$add_headers =	"Return-Path: <$mailfrom>\r\n".
				"From: <$mailfrom>\r\n".
				"MIME-Version: 1.0\r\n".
				"Content-type: text/plain; charset=ISO-2022-JP\r\n".
				"Content-Transfer-Encoding: 7bit";

if( !mail(	$mailto,
			$subject,
			mb_convert_encoding($mailbody,"ISO-2022-JP","UTF-8"),
			$add_headers) ) {
	header("Location: index.php");
	exit;
} else {
	$mailbody =	"株式会社堀田ハガネです。下記お問合わせを承りました。\n内容を確認後、ご返信させて頂きますのでしばらくお待ち下さい。\n".
				"\n".
				"------------------------------------------------------------\n".
				"お名前　：{$namae}\n".
				"フリガナ：{$phonetic}\n".
				"メール　：{$mail}\n".
				"職業　　：{$vocational}\n".
				"会社名　：{$d_company}\n".
				"部署名　：{$d_division}\n".
				"郵便番号：{$d_zipcode}\n".
				"住所　　：{$pref_list[$addressA]}\n".
				"　　　　：{$d_addressB}\n".
				"電話番号：{$d_tel}\n".
				"お問い合わせ内容：\n".
				"{$d_detail}\n".
				"------------------------------------------------------------\n";
	$add_headers =	"Return-Path: <$mailto>\r\n".
					"From: <$mailfrom>\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=ISO-2022-JP\r\n".
					"Content-Transfer-Encoding: 7bit";
	mail($mail, $subjectG, mb_convert_encoding($mailbody,"ISO-2022-JP","UTF-8"), $add_headers);
}

header("Location: thanks.shtml");
exit;
?>
