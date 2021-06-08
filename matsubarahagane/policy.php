<?php

//処理文字コードの指定
mb_language("Japanese");
mb_internal_encoding("UTF-8");
mb_regex_encoding("UTF-8");

require_once "echo_commonhtml.php";

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="title" content="松原鋼商店 | 個人情報保護方針">
<meta name="description" content="松原鋼商店では、「窒化鋼」「ばね鋼」を取扱っております。   SACM645は、窒化処理により硬さの高い表面層を得るために、アルミニウム，クロムを添加し、また窒化層を強靭にするためにモリブデン，バナジウムなどを添加した鋼であります。疲れ強さ、耐摩耗性、耐食性に優れ、シリンダー及びライナー、大型歯車などに使用されています。">
<meta name="keywords" content="松原鋼商店,窒化鋼,ばね鋼,SACM645,窒化処理,アルミニウム・クロム添加,窒化層,モリブデン・バナジウム添加,疲れ強さ、耐摩耗性、耐食性,シリンダー,ライナー,大型歯車">
<meta property="og:title" content="松原鋼商店 | 個人情報保護方針">
<meta property="og:type" content="article">
<meta property="og:description" content="松原鋼商店では、「窒化鋼」「ばね鋼」を取扱っております。   SACM645は、窒化処理により硬さの高い表面層を得るために、アルミニウム，クロムを添加し、また窒化層を強靭にするためにモリブデン，バナジウムなどを添加した鋼であります。疲れ強さ、耐摩耗性、耐食性に優れ、シリンダー及びライナー、大型歯車などに使用されています。">
<meta property="og:url" content="http://www.hotta-hagane.co.jp/matsubarahagane/policy.php">
<meta property="og:site_name" content="松原鋼商店">
<title>松原鋼商店</title>
<link rel="stylesheet" type="text/css" href="common.css">

<? echo_jslink(); ?>

<? echo_bootstrap(); ?>

<!-- jQueryThumbnails -->
<script type="text/javascript" type="text/javascript" src="jquery/plugin/jquery.thumbnails.js"></script>

<script type="text/javascript">
$(document).ready(function(e) {
	$(".thumbs").thumbnails();
<? echo echo_imagepreload (); ?>
});
<? echo echo_funcpreload (); ?>
</script>
</head>
<body>
	<div id="wrapper">
		<div id="container">
<? echo echo_header(); ?>
			<div id="contBody">
<? echo echo_headmenu(); ?>
				<div id="breadCrumb">
					<a href="./" class="breadcrumblink">ホーム</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;
					<a href="policy.php" class="breadcrumblink">個人情報保護方針</a>
				</div>
				<div class="contBodyRowCell">
					<h3 class="subtitle marginTop40">&nbsp;個人情報保護方針</h3>
					<div class="divisionLine"></div>
					<span class="cellText"><br>
						松原鋼商店は、当ウェブサイト「松原鋼ホームページ」をご利用になる方(以下
						「ユーザー」といいます)のプライバシーを尊重し、ユーザーの個人情報の管理に細
						心の注意を払いこれを取扱うものとします。<br><br>
						個人情報の収集について<br>
						当ウェブサイトの一部サービスにつきましては、利用者ご本人から同意を得る事を前
						提として、お名前やご住所、 Mailアドレスなどの個人情報をご提供いただく場合が
						あります。<br><br>
						個人情報の利用目的<br>
						収集した個人情報については、当サイトの設置目的である製品情報送付等の業務にの
						み利用するものとします。<br><br>
						収集した個人情報について<br>
						収集した個人情報については、使用範囲を利用目的に限定し、適切に取り扱うことを
						お約束します。また、利用者本人からの同意なくして個人情報を第三者に提供・開示
						いたしません。当サイトでは個人情報保護法に従い利用者の皆様の個人情報保護に務
						めます。<br><br>
						権利の尊重について<br>
						当サイトは、個人情報に関する個人の権利を尊重し、 自己の個人情報に対し開示、
						訂正、削除を求められたときは、合理的な期間と妥当な範囲内でこれに応じ、利用者
						の皆様の権利を保護する対応を行います。<br><br>
						安全対策の実施<br>
						当サイトは、個人情報が楽団外に流出する、不当に改竄されるなどといったトラブル
						を引き起こさないように安全対策に努力をしております。個人情報の輸送や破棄も含
						め、各場面でのリスクに応じた措置を講じ、個人情報の保護を徹底いたします。ご理
						解・ご協力の程、何卒よろしくお願い申し上げます。<br><br>
						以上<br>
					</span>
					<div class="marginBottom200"></div>
				</div>
			</div>
			<div class="clearBoth"></div>
		</div>
<? echo echo_footer(); ?>
	</div>
</body>
</html>