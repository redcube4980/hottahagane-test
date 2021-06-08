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
<meta name="title" content="松原鋼商店 | 取扱製品">
<meta name="description" content="松原鋼商店では、「窒化鋼」「ばね鋼」を取扱っております。   SACM645は、窒化処理により硬さの高い表面層を得るために、アルミニウム，クロムを添加し、また窒化層を強靭にするためにモリブデン，バナジウムなどを添加した鋼であります。疲れ強さ、耐摩耗性、耐食性に優れ、シリンダー及びライナー、大型歯車などに使用されています。">
<meta name="keywords" content="松原鋼商店,窒化鋼,ばね鋼,SACM645,窒化処理,アルミニウム・クロム添加,窒化層,モリブデン・バナジウム添加,疲れ強さ、耐摩耗性、耐食性,シリンダー,ライナー,大型歯車">
<meta property="og:title" content="松原鋼商店 | 取扱製品">
<meta property="og:type" content="article">
<meta property="og:description" content="松原鋼商店では、「窒化鋼」「ばね鋼」を取扱っております。   SACM645は、窒化処理により硬さの高い表面層を得るために、アルミニウム，クロムを添加し、また窒化層を強靭にするためにモリブデン，バナジウムなどを添加した鋼であります。疲れ強さ、耐摩耗性、耐食性に優れ、シリンダー及びライナー、大型歯車などに使用されています。">
<meta property="og:url" content="http://www.hotta-hagane.co.jp/matsubarahagane/material.php">
<meta property="og:site_name" content="松原鋼商店">
<title>松原鋼商店</title>
<link rel="stylesheet" type="text/css" href="common.css">

<? echo_jslink(); ?>

<? echo_bootstrap(); ?>

<script type="text/javascript">
$(document).ready(function(e) {
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
					<a href="material.php" class="breadcrumblink">取扱製品</a>
				</div>
				<div id="contImageMaterial" class="contImage">取扱製品</div>
				<div class="contBodyCustomF contentMaterial">
					<div id="locationNitro">
						<a href="stock_nitro.php" alt="工事中"><img src="images/balloonclick.png" width="190" height="60" alt=""/></a>
					</div>
					<!--<div class="divisionLine"></div>-->
					<!--<span class="cellText">
						窒素鋼は最も窒化しやすくするために様々な元素を入れた鋼で、引張強さ、強靭性などが高く非常に優れています。<br>
						鋼の表面を非常に硬い窒素層で覆った窒素処理鋼は他の鋼にない素晴らしいものです。<br>
					</span>-->
					<div id="locationBane">
						<a href="stock_bane.php" alt="工事中"><img src="images/balloonclick.png" width="190" height="60" alt="工事中"/></a>
					</div>
					<!--<div class="divisionLine"></div>-->
					<span class="cellTextTransparent"></span>
					<div class="marginBottom200"></div>
				</div>
			</div>
			<div class="clearBoth"></div>
		</div>
<? echo echo_footer(); ?>
	</div>
</body>
</html>
