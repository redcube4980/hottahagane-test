<?php

//入力値を保存
$varGET = $_GET;
$varPOST = $_POST;

//戻り値の初期値を設定
$ret['result'] = true;
$ret['name'] ='';
$ret['mail'] ='';
$ret['company'] ='';

//ダウンロードするファイルのチェック
switch( true ){ //case判定は「true」と「===」により厳密な判定を使用
case $varPOST['dl'] === 'pb':
	$ret['fname'] = 'pb.pdf';
	break;
case $varPOST['dl'] === 'nonpb':
	$ret['fname'] = 'nonpb.pdf';
	break;
case $varPOST['dl'] === 'stainless':
	$ret['fname'] = 'stainless.pdf';
	break;
default:
	$ret['result'] = false;
	break;
}

//名前チェック
$varPOST['inp_name'] = trim_emspace( $varPOST['inp_name'] );
if( mb_strlen( $varPOST['inp_name'] ) == 0 ){
	$ret['result'] = false;
	$ret['name'] = '正しい氏名を入力して下さい。';
}

//メールアドレスチェック
if( mb_strlen( $varPOST['inp_mail'] ) == 0 ){
	$ret['result'] = false;
	$ret['mail'] = 'メールアドレスを入力して下さい。';
} else {
	if( ! filter_var($varPOST['inp_mail'], FILTER_VALIDATE_EMAIL) ){
		$ret['result'] = false;
		$ret['mail'] = '入力されたメールアドレスに誤りがあります。';
	}
}

//会社名チェック
$varPOST['inp_company'] = trim_emspace( $varPOST['inp_company'] );
if( mb_strlen( $varPOST['inp_company'] ) == 0 ){
	$ret['result'] = false;
	$ret['company'] = '正しい会社名を入力して下さい。';
}

if( $varGET['mode'] === 'check' ){
	echo json_encode($ret);
	exit(0);
} else {
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
