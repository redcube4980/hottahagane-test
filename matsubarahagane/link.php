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
<meta name="title" content="松原鋼商店 | リンク">
<meta name="description" content="松原鋼商店では、「窒化鋼」「ばね鋼」を取扱っております。   SACM645は、窒化処理により硬さの高い表面層を得るために、アルミニウム，クロムを添加し、また窒化層を強靭にするためにモリブデン，バナジウムなどを添加した鋼であります。疲れ強さ、耐摩耗性、耐食性に優れ、シリンダー及びライナー、大型歯車などに使用されています。">
<meta name="keywords" content="松原鋼商店,窒化鋼,ばね鋼,SACM645,窒化処理,アルミニウム・クロム添加,窒化層,モリブデン・バナジウム添加,疲れ強さ、耐摩耗性、耐食性,シリンダー,ライナー,大型歯車">
<meta property="og:title" content="松原鋼商店 | リンク">
<meta property="og:type" content="article">
<meta property="og:description" content="松原鋼商店では、「窒化鋼」「ばね鋼」を取扱っております。   SACM645は、窒化処理により硬さの高い表面層を得るために、アルミニウム，クロムを添加し、また窒化層を強靭にするためにモリブデン，バナジウムなどを添加した鋼であります。疲れ強さ、耐摩耗性、耐食性に優れ、シリンダー及びライナー、大型歯車などに使用されています。">
<meta property="og:url" content="http://www.hotta-hagane.co.jp/matsubarahagane/link.php">
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
					<a href="link.php" class="breadcrumblink">リンク</a>
				</div>
				<div id="contImageLink" class="contImage">リンク</div>
				<div class="contBodyCustomF contentLink">
					<!--
					<h3 class="subtitle">&nbsp;事業内容</h3>
					<div class="divisionLine"></div>
					<span class="cellText">
						実需家の要望にいかなる需要にも対応できる体勢を整え、<br>
						長きにわたる経験と確かな技術で、自信と責任をもって施工致します。<br>
					</span>
					-->
					<h3 class="subtitle cellTextTransparent">&nbsp;主要仕込先</h3>
					<!--<div class="divisionLine"></div>-->
					<div id="linkHottaHagane">
						<a href="http://www.hotta-hagane.co.jp/" target="_blank" class="thumbs links">
							<img src="images/transparent_1x1.png" style="width: 96px; height: 24px;" alt="" />
						</a>
					</div>
				</div>
			</div>
			<div class="clearBoth"></div>
		</div>
<? echo echo_footer(); ?>
	</div>
</body>
</html>
