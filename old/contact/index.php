<?php
// 口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口
//
// 堀田ハガネメールフォーム　入力フォーム
//
// 口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口

include_once("common.php");

decode();


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
function checkForm() {
	var f = document.inquiryForm;
	var szErr = '';

	// 必須入力部分をチェック
	if( f.namae.value == '' ) {
		szErr += '●お名前\n';
	}
	if( f.phonetic.value == '' ) {
		szErr += '●フリガナ\n';
	}
	if( f.mail.value == '' ) {
		szErr += '●メールアドレス\n';
	}
	else {
		if( f.mail.value != f.mailB.value ) {
			szErr += '●メールアドレス\n';
		} else {
			if( !f.mail.value.match(/^.+@.+\..+$/) ) {
				szErr += '●メールアドレス\n';
			}
		}
	}
	if( f.detail.value == '' ) {
		szErr += '●お問い合わせ内容\n';
	}

	// 未必須入力部分をチェック
	if( f.zipcodeA.value != '' && f.zipcodeB.value == "" || 
		f.zipcodeA.value == '' && f.zipcodeB.value != "") {
		szErr += '●郵便番号\n';
	}
	else {
		if( f.zipcodeA.value != '' && f.zipcodeB.value != '' ) {
			if( f.zipcodeA.value.match(/^[0-9]{3}$/) && f.zipcodeB.value.match(/^[0-9]{4}$/) ) {
				// Correct
			}
			else {
				szErr += '●郵便番号\n';
			}
		}
	}
	if( f.telA.value != '' && f.telB.value != "" && f.telC.value != "" ||
		f.telA.value == '' && f.telB.value == "" && f.telC.value == "" ) {
		if( f.telA.value != '' && f.telB.value != "" && f.telC.value != "" ) {
			if( f.telA.value.match(/^[0-9]{2,4}$/) && f.telB.value.match(/^[0-9]+$/) && f.telC.value.match(/^[0-9]+$/) ) {
				// Correct
			}
			else {
				szErr += '●電話番号\n';
			}
		}
	}
	else {
		szErr += '●電話番号\n';
	}

	// Show error message.
	if( szErr != '' ) {
		alert('下記項目についてもう一度ご確認ください。\n\n'+szErr);
		return false;
	}
	else {
		// Submit form.
		f.action="inquiry.php?p=c";
		f.method="post";
		
		return true;
	}
}

function resetForm() {
	var f = document.inquiryForm;
	
	f.reset();
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

<p class="lead">ご入力いただく個人情報は、ご入力いただいた情報のご返信先として活用させていただきます。<br>
会社宛の場合はお勤め先をご記入ください。</p>




<div class="inputArea">
<form name="inquiryForm" onsubmit="return checkForm()">
<ul class="form">
<li class="typeName"><dl>
<dt><label for="name">お名前</label></dt>
<dd class="example"><span class="mandatory">※必須</span>例） 堀田太郎</dd>
<dd class="input"><input id="namae" type="text" value="<?php print $namae ?>" name="namae"></dd>
</dl></li>
<li class="typePhonetic"><dl>
<dt><label for="phonetic">フリガナ</label></dt>
<dd class="example"><span class="mandatory">※必須</span>例） ホッタタロウ （全角カタカナのみ）</dd>
<dd class="input"><input id="phonetic" type="text" value="<?php print $phonetic ?>" name="phonetic"></dd>
</dl></li>
<li class="typeMail"><dl>
<dt><label for="mail">Eメールアドレス</label></dt>
<dd class="example"><span class="mandatory">※必須</span>例） taro_xxxx@hotta.co.jp （半角英数のみ）</dd>
<dd class="input"><input id="mail" type="text" value="<?php print $mail ?>" name="mail"></dd>
<dd class="example"><span class="mandatory">※確認のため再度入力してください</span></dd>
<dd class="input"><input id="mailB" type="text" value="<?php print $mailB ?>" name="mailB"></dd>
</dl></li>
<li class="typeVocational"><dl>
<dt><label for="vocational">ご職業</label></dt>
<dd class="example">例） 会社員</dd>
<dd class="input">
<select id="vocational" name="vocational"><!--
--><option value="未選択">お選びください</option><!--
<?php

foreach( $vocational_list as $value ) {
	print "--><option value=\"$value\"";
	if( $vocational == $value ) {
		print " selected=\"selected\"";
	}
	print ">$value</option><!--\n";
}

?>
--></select></dd>
</dl></li>
<li class="typeCompany"><dl>
<dt><label for="company">会社名</label></dt>
<dd class="example">例） 株式会社堀田ハガネ</dd>
<dd class="input"><input id="company" type="text" value="<?php print $company ?>" name="company"></dd>
</dl></li>
<li class="typeDivision"><dl>
<dt><label for="division">部署名</label></dt>
<dd class="example">例） 営業部</dd>
<dd class="input"><input id="division" type="text" value="<?php print $division ?>" name="division"></dd>
</dl></li>
<li class="typeZipcode"><dl>
<dt><label for="zipcodeA">郵便番号</label></dt>
<dd class="example">例） 123-4567 （半角数字のみ）</dd>
<dd class="input"><input id="zipcodeA" type="text" value="<?php print $zipcodeA ?>" name="zipcodeA" maxlength="3"><span class="hyphen">-</span><input id="zipcodeB" type="text" value="<?php print $zipcodeB ?>" name="zipcodeB" maxlength="4"></dd>
</dl></li>
<li class="typeAddress"><dl>
<dt><label for="addressA">ご住所</label></dt>
<dd class="example">例） 大阪府</dd>
<dd class="input">
<select id="addressA" name="addressA"><!--
--><option value="0">お選びください</option><!--
<?php

for( $i=1; $i<count($pref_list); $i++ ) {
	print "--><option value=\"".$i."\"";
	if( $i == (0+$addressA) ) {
		print " selected=\"selected\"";
	}
	print '>'.$pref_list[$i]."</option><!--\n";
}

?>
--></select></dd>
<dd class="example">例） ××市×区××町1-2-3</dd>
<dd class="input"><input id="addressB" type="text" value="<?php print $addressB ?>" name="addressB"></dd>
</dl></li>
<li class="typeTel"><dl>
<dt><label for="telA">電話番号</label></dt>
<dd class="example"> 例） 06-1234-5678 （半角数字のみ）</dd>
<dd class="input"><input id="telA" type="text" value="<?php print $telA ?>" name="telA" maxlength="4"><span class="hyphen">-</span><input id="telB" type="text" value="<?php print $telB ?>" name="telB" maxlength="4"><span class="hyphen">-</span><input id="telC" type="text" value="<?php print $telC ?>" name="telC" maxlength="4"></dd>
</dl></li>
<li class="typeDetail"><dl>
<dt><label for="detail">お問い合わせ内容</label></dt>
<dd class="example"><span class="mandatory">※必須</span>詳しくご記入ください</dd>
<dd class="input"><textarea id="detail" name="detail" cols="40" rows="5"><?php print $detail ?></textarea></dd>
</dl></li>
</ul>

<p class="btnConfirm"><input type="image" src="img/btn_confirm_n.jpg" alt="お問い合わせ内容の確認"></p>
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