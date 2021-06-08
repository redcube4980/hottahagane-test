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
<meta name="title" content="松原鋼商店 | お問い合わせ">
<meta name="description" content="松原鋼商店では、「窒化鋼」「ばね鋼」を取扱っております。   SACM645は、窒化処理により硬さの高い表面層を得るために、アルミニウム，クロムを添加し、また窒化層を強靭にするためにモリブデン，バナジウムなどを添加した鋼であります。疲れ強さ、耐摩耗性、耐食性に優れ、シリンダー及びライナー、大型歯車などに使用されています。">
<meta name="keywords" content="松原鋼商店,窒化鋼,ばね鋼,SACM645,窒化処理,アルミニウム・クロム添加,窒化層,モリブデン・バナジウム添加,疲れ強さ、耐摩耗性、耐食性,シリンダー,ライナー,大型歯車">
<meta property="og:title" content="松原鋼商店 | お問い合わせ">
<meta property="og:type" content="article">
<meta property="og:description" content="松原鋼商店では、「窒化鋼」「ばね鋼」を取扱っております。   SACM645は、窒化処理により硬さの高い表面層を得るために、アルミニウム，クロムを添加し、また窒化層を強靭にするためにモリブデン，バナジウムなどを添加した鋼であります。疲れ強さ、耐摩耗性、耐食性に優れ、シリンダー及びライナー、大型歯車などに使用されています。">
<meta property="og:url" content="http://www.hotta-hagane.co.jp/matsubarahagane/inquiry.php">
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
					<a href="policy.php" class="breadcrumblink">お問い合せ</a>
				</div>
				<div class="contBodyRowCell">
					<h3 class="subtitle marginTop40">&nbsp;お問い合せ</h3>
					<div class="divisionLine"></div>
					<span class="cellText"><br>
						お問い合せは下記の連絡先まで宜しくお願い申し上げます。商品に対するお問い合せなどお待ち申し上げております。<br><br>
						〒550-0015&nbsp;&nbsp;大阪府大阪市西区南堀江4丁目17－18&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;原田ビル3F&nbsp;312号<br><br>
					</span>
					<span class="cellTextB"><br>
						電話番号&nbsp;&nbsp;06-6541-7321&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FAX番号&nbsp;&nbsp;&nbsp;06-6541-7322<br>
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
