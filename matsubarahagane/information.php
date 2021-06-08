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
<meta name="title" content="松原鋼商店 | 会社案内">
<meta name="description" content="松原鋼商店では、「窒化鋼」「ばね鋼」を取扱っております。   SACM645は、窒化処理により硬さの高い表面層を得るために、アルミニウム，クロムを添加し、また窒化層を強靭にするためにモリブデン，バナジウムなどを添加した鋼であります。疲れ強さ、耐摩耗性、耐食性に優れ、シリンダー及びライナー、大型歯車などに使用されています。">
<meta name="keywords" content="松原鋼商店,窒化鋼,ばね鋼,SACM645,窒化処理,アルミニウム・クロム添加,窒化層,モリブデン・バナジウム添加,疲れ強さ、耐摩耗性、耐食性,シリンダー,ライナー,大型歯車">
<meta property="og:title" content="松原鋼商店 | 会社案内">
<meta property="og:type" content="article">
<meta property="og:description" content="松原鋼商店では、「窒化鋼」「ばね鋼」を取扱っております。   SACM645は、窒化処理により硬さの高い表面層を得るために、アルミニウム，クロムを添加し、また窒化層を強靭にするためにモリブデン，バナジウムなどを添加した鋼であります。疲れ強さ、耐摩耗性、耐食性に優れ、シリンダー及びライナー、大型歯車などに使用されています。">
<meta property="og:url" content="http://www.hotta-hagane.co.jp/matsubarahagane/information.php">
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
					<a href="information.php" class="breadcrumblink">会社案内</a>
				</div>
				<div id="contImageInfo" class="contImage">会社案内</div>
				<div class="contBodyCustomF contentInformation">
					<h3 class="subtitle cellTextTransparent">&nbsp;会社概要</h3>
					<!--<div class="divisionLine"></div>-->
					<table style="display:none;">
						<tr><td><span class="cellText">会社名&nbsp;&nbsp;&nbsp;<br></span></td><td><span class="cellText">松原鋼商店<br></span></td></tr>
						<tr><td><span class="cellText">所在地&nbsp;&nbsp;&nbsp;<br><br></span></td><td><span class="cellText">〒550－0015<br>大阪府大阪市西区南堀江4丁目17－18&nbsp;&nbsp;原田ビル3F&nbsp;312号</span></td></tr>
						<tr><td><span class="cellText">電話番号&nbsp;&nbsp;&nbsp;<br></span></td><td><span class="cellText">06-6541-7321<br></span></td></tr>
						<tr><td><span class="cellText">FAX番号&nbsp;&nbsp;&nbsp;<br></span></td><td><span class="cellText">06-6541-7322<br></span></td></tr>
						<tr><td><span class="cellText">代表者&nbsp;&nbsp;&nbsp;<br></span></td><td><span class="cellText">松原&nbsp;&nbsp;太郎<br></span></td></tr>
						<tr><td><span class="cellText">資本金&nbsp;&nbsp;&nbsp;<br></span></td><td><span class="cellText"><br></span></td></tr>
						<tr><td><span class="cellText">従業員数&nbsp;&nbsp;&nbsp;<br></span></td><td><span class="cellText">3名<br></span></td></tr>
						<tr><td><span class="cellText">設立年月&nbsp;&nbsp;&nbsp;<br></span></td><td><span class="cellText">昭和16年4月<br></span></td></tr>
						<tr><td><span class="cellText">取引銀行&nbsp;&nbsp;&nbsp;<br></span></td><td><span class="cellText">三井住友銀行&nbsp;大阪西支店<br></span></td></tr>
						<tr><td><span class="cellText">主要仕込先&nbsp;&nbsp;&nbsp;<br></span></td><td><span class="cellText">㈱堀田ハガネ<br></span></td></tr>
					</table>
					<h3 class="subtitle cellTextTransparent">&nbsp;沿革</h3>
					<!--<div class="divisionLine"></div>-->
					<span class="cellTextTransparent">
						昭和16年、西区立売堀にて故松原清知と故松原清教により創業。<br>
						特殊鋼統制販売組合に特約店を許可され継続して営業。<br>
						その後、大戦により罹災し縮小するが、戦後再開し、<br>
						平成2年12月より大正区千鳥に、平成21年に南堀江に移転し、現在に至る。<br>
						特色、窒化鋼を精密機械の素材として供給している。<br>
					</span>
					<h3 class="subtitle cellTextTransparent">&nbsp;事業内容</h3>
					<!--<div class="divisionLine"></div>-->
					<span class="cellTextTransparent">
						実需家の要望にいかなる需要にも対応できる体勢を整え、<br>
						長きにわたる経験と確かな技術で、自信と責任をもって施工致します。<br>
					</span>
				</div>
			</div>
			<div class="clearBoth"></div>
		</div>
<? echo echo_footer(); ?>
	</div>
</body>
</html>
