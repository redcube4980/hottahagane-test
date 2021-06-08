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
<meta name="title" content="松原鋼商店 | 営業品目">
<meta name="description" content="松原鋼商店では、「窒化鋼」「ばね鋼」を取扱っております。   SACM645は、窒化処理により硬さの高い表面層を得るために、アルミニウム，クロムを添加し、また窒化層を強靭にするためにモリブデン，バナジウムなどを添加した鋼であります。疲れ強さ、耐摩耗性、耐食性に優れ、シリンダー及びライナー、大型歯車などに使用されています。">
<meta name="keywords" content="松原鋼商店,窒化鋼,ばね鋼,SACM645,窒化処理,アルミニウム・クロム添加,窒化層,モリブデン・バナジウム添加,疲れ強さ、耐摩耗性、耐食性,シリンダー,ライナー,大型歯車">
<meta property="og:title" content="松原鋼商店 | 営業品目">
<meta property="og:type" content="article">
<meta property="og:description" content="松原鋼商店では、「窒化鋼」「ばね鋼」を取扱っております。   SACM645は、窒化処理により硬さの高い表面層を得るために、アルミニウム，クロムを添加し、また窒化層を強靭にするためにモリブデン，バナジウムなどを添加した鋼であります。疲れ強さ、耐摩耗性、耐食性に優れ、シリンダー及びライナー、大型歯車などに使用されています。">
<meta property="og:url" content="http://www.hotta-hagane.co.jp/matsubarahagane/product.php">
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
					<a href="product.php" class="breadcrumblink">営業品目</a>
				</div>
				<div id="contImageProduct" class="contImage">営業品目</div>
				<div class="contBodyCustomF contentProduct">
					<h3 class="subtitle cellTextTransparent">&nbsp;素材販売</h3>
					<!--<div class="divisionLine"></div>-->
					<span class="cellTextTransparent">機械構造用炭素鋼・炭素工具鋼・特殊工具鋼・高速度鋼・ダイス鋼・強靭鋼・不銹鋼・窒化鋼(主力製品)<br></span>
					<span class="cellTextTransparent">ばね鋼・ステンレス鋼・構造用合金鋼・八角鋼・六角鋼・特殊鋼二次製品・ピアノ線・鋼線・ドリルロッド<br></span>
					<h3 class="subtitle cellTextTransparent">&nbsp;製造方法</h3>
					<!--<div class="divisionLine"></div>-->
					<span class="cellTextTransparent">鋳造・鍛造・特殊鋼全般鍛造・ローリング鍛造<br></span>
					<h3 class="subtitle cellTextTransparent">&nbsp;金属溶射</h3>
					<!--<div class="divisionLine"></div>-->
					<span class="cellTextTransparent">セラミック，超硬，その他<br></span>
					<h3 class="subtitle cellTextTransparent">&nbsp;機械加工</h3>
					<!--<div class="divisionLine"></div>-->
					<span class="cellTextTransparent">プラスチック機械各種製造，深穴明加工　BAT方式<br></span>
					<span class="cellTextTransparent">シリンダ、ライナー加工より完成品まで<br></span>
					<span class="cellTextTransparent">スクリュー加工より完成品まで<br></span>
					<h3 class="subtitle cellTextTransparent">&nbsp;研削研磨</h3>
					<!--<div class="divisionLine"></div>-->
					<span class="cellTextTransparent">研削，羽布研磨，液体研磨，その他<br></span>
					<h3 class="subtitle cellTextTransparent">&nbsp;金属表面処理</h3>
					<!--<div class="divisionLine"></div>-->
					<span class="cellTextTransparent">イオン窒化，ガス窒化，液体窒化，その他<br></span>
					<h3 class="subtitle cellTextTransparent">&nbsp;メッキ</h3>
					<!--<div class="divisionLine"></div>-->
					<span class="cellTextTransparent">硬質クローム，銅，亜鉛，無電解ニッケル，その他<br></span>
					<h3 class="subtitle cellTextTransparent">&nbsp;超硬加工</h3>
					<!--<div class="divisionLine"></div>-->
					<span class="cellTextTransparent">ダイヤモンド，セラミック，超硬合金，その他成形加工<br></span>
					<h3 class="subtitle cellTextTransparent">&nbsp;セラミック加工</h3>
					<!--<div class="divisionLine"></div>-->
					<span class="cellTextTransparent">セラミック刃物，パイプ，工具，その他<br></span>
					<h3 class="subtitle cellTextTransparent">&nbsp;肉盛加工</h3>
					<!--<div class="divisionLine"></div>-->
					<span class="cellTextTransparent">合金，軽合金，ゴム，樹脂，その他<br></span>
					<h3 class="subtitle cellTextTransparent">&nbsp;その他</h3>
					<!--<div class="divisionLine"></div>-->
					<span class="cellTextTransparent">&nbsp;<br></span>
				</div>
			</div>
			<div class="clearBoth"></div>
		</div>
<? echo echo_footer(); ?>
	</div>
</body>
</html>
