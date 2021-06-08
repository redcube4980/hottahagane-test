<?php
// 口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口
//
// 堀田ハガネメールフォーム　確認画面
//
// 口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口

include_once("common.php");

decode();

if( $namae == '' or $mail == '' or $phonetic == '' or $detail == '' ) {
	header("Location: index.php");
	exit;
}

$d_detail = nl2br($detail);
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

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<meta http-equiv="content-script-type" content="text/javascript">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="imagetoolbar" content="no">
<meta name="description" content="">
<meta name="keywords" content="">
<title>お問い合わせ | 株式会社 堀田ハガネ</title>
<link rel="stylesheet" href="/common/css/import.css" type="text/css" media="screen,print">
<link rel="stylesheet" href="css/index.css" type="text/css" media="screen,print">
<script type="text/javascript" src="/common/js/common.js"></script>
<script type="text/javascript">
function confirmBack() {
	var f = document.confirmForm;

	f.action="index.php";
	f.method="post";
	
	f.submit();
}
</script>
</head>
<body>
<div id="TOP">
<?php
// htmlのインクルード
print file_get_contents("../common/ssi/mod_header.ssi");
?>
<div id="BODY">
<div class="titleArea">
<h1><img src="img/title.jpg" width="449" height="59" alt="お名前、Eメールアドレス、お問い合わせ内容をご記入ください。"></h1>
<!-- /titleArea --></div>

<p class="lead">ご入力いただいた内容に誤りがないかご確認ください。<br>
ご入力された内容を修正する場合は〔お問い合わせの入力に戻る〕ボタンを、誤りがなければ〔送信〕ボタンを押してください。</p>


<div class="inputArea">
<form action="inquiry.php?p=s" method="post" name="confirmForm">
<ul class="form">
<li class="typeName"><dl>
<dt>お名前</dt>
<dd class="input"><?php print $namae ?></dd>
</dl></li>
<li class="typePhonetic"><dl>
<dt>フリガナ</dt>
<dd class="input"><?php print $phonetic ?></dd>
</dl></li>
<li class="typeMail"><dl>
<dt>Eメールアドレス</dt>
<dd class="input"><?php print $mail ?></dd>
</dl></li>
<li class="typeVocational"><dl>
<dt>ご職業</dt>
<dd class="input"><?php print $vocational ?></dd>
</dl></li>
<li class="typeCompany"><dl>
<dt>会社名</dt>
<dd class="input"><?php print $d_company ?></dd>
</dl></li>
<li class="typeDivision"><dl>
<dt>部署名</dt>
<dd class="input"><?php print $d_division ?></dd>
</dl></li>
<li class="typeZipcode"><dl>
<dt>郵便番号</dt>
<dd class="input"><?php print $d_zipcode ?></dd>
</dl></li>
<li class="typeAddress"><dl>
<dt>ご住所</dt>
<dd class="input"><?php print $pref_list[$addressA] ?></dd>
<dd class="input"><?php print $d_addressB ?>
</dd>
</dl></li>
<li class="typeTel"><dl>
<dt>電話番号</dt>
<dd class="input"><?php print $d_tel ?></dd>
</dl></li>
<li class="typeDetail"><dl>
<dt>お問い合わせ内容</dt>
<dd class="input"><?php print $d_detail ?></dd>
</dl></li>
</ul>

<ul class="submit">
<li><a href="javascript:confirmBack()"><img id="back" name="back" class="tChip" src="img/btn_return_n.jpg" alt="お問い合わせの入力に戻る"></a></li>
<li><input id="send" name="send" class="tChip" type="image" src="img/btn_submit_n.jpg" alt="送信"></li>
</ul>
<input type="hidden" name="namae" value="<?php print $namae ?>">
<input type="hidden" name="phonetic" value="<?php print $phonetic ?>">
<input type="hidden" name="mail" value="<?php print $mail ?>">
<input type="hidden" name="mailB" value="<?php print $mailB ?>">
<input type="hidden" name="vocational" value="<?php print $vocational ?>">
<input type="hidden" name="company" value="<?php print $company ?>">
<input type="hidden" name="division" value="<?php print $division ?>">
<input type="hidden" name="zipcodeA" value="<?php print $zipcodeA ?>">
<input type="hidden" name="zipcodeB" value="<?php print $zipcodeB ?>">
<input type="hidden" name="addressA" value="<?php print $addressA ?>">
<input type="hidden" name="addressB" value="<?php print $addressB ?>">
<input type="hidden" name="telA" value="<?php print $telA ?>">
<input type="hidden" name="telB" value="<?php print $telB ?>">
<input type="hidden" name="telC" value="<?php print $telC ?>">
<input type="hidden" name="detail" value="<?php print $detail ?>">
</form>
<!-- /inputArea --></div>

<p class="pageTop"><span><a href="#TOP">ページトップへ戻る</a></span></p>
<!-- /BODY --></div>
<?php
// htmlのインクルード
print file_get_contents("../common/ssi/mod_footer.ssi");
?>
<!-- /TOP --></div>
</body>
</html>