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
<meta name="title" content="松原鋼商店 | 在庫表-ばね鋼-">
<meta name="description" content="松原鋼商店では、「窒化鋼」「ばね鋼」を取扱っております。   SACM645は、窒化処理により硬さの高い表面層を得るために、アルミニウム，クロムを添加し、また窒化層を強靭にするためにモリブデン，バナジウムなどを添加した鋼であります。疲れ強さ、耐摩耗性、耐食性に優れ、シリンダー及びライナー、大型歯車などに使用されています。">
<meta name="keywords" content="松原鋼商店,窒化鋼,ばね鋼,SACM645,窒化処理,アルミニウム・クロム添加,窒化層,モリブデン・バナジウム添加,疲れ強さ、耐摩耗性、耐食性,シリンダー,ライナー,大型歯車">
<meta property="og:title" content="松原鋼商店 | 在庫表-ばね鋼-">
<meta property="og:type" content="article">
<meta property="og:description" content="松原鋼商店では、「窒化鋼」「ばね鋼」を取扱っております。   SACM645は、窒化処理により硬さの高い表面層を得るために、アルミニウム，クロムを添加し、また窒化層を強靭にするためにモリブデン，バナジウムなどを添加した鋼であります。疲れ強さ、耐摩耗性、耐食性に優れ、シリンダー及びライナー、大型歯車などに使用されています。">
<meta property="og:url" content="http://www.hotta-hagane.co.jp/matsubarahagane/inquiry.php">
<meta property="og:site_name" content="松原鋼商店">
<title>松原鋼商店</title>
<link rel="stylesheet" type="text/css" href="common.css">

<? echo_jslink(); ?>

<? echo_bootstrap(); ?>

<script type="text/javascript">
$(document).ready(function(e) {
	var DataLeftRows;
	var DataRightRows;
	var postdata;
	$.ajax({
		type: "GET",
		url: 'banekou.json',
		data: postdata,
		dataType: 'json',
		success: function(msg){
			cntLeft = parseInt(msg.length / 2) + (msg.length % 2);
			for( i = 0; i < msg.length; i++ ){
				if( cntLeft > 0 ){
					DataLeftRows = DataLeftRows + "<tr><td class='tblStockR1'>" + msg[i][0] + "</td><td class='tblStockR2'>" + msg[i][1] + "</td><td class='tblStockR3'>" + msg[i][2] + "</td><td class='tblStockR6'>" + msg[i][3] + "</td></tr>\n";
					cntLeft -= 1;
				} else {
					DataRightRows = DataRightRows + "<tr><td class='tblStockR1'>" + msg[i][0] + "</td><td class='tblStockR2'>" + msg[i][1] + "</td><td class='tblStockR3'>" + msg[i][2] + "</td><td class='tblStockR6'>" + msg[i][3] + "</td></tr>\n";
				}
			}
			$("#tblStockData1").after(DataLeftRows);
			$("#tblStockData2").after(DataRightRows);
		},
	});
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
					<a class="breadcrumblink" href="./">ホーム</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;
					<a class="breadcrumblink" href="material.php">取扱製品</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;
					<a class="breadcrumblink" href="stock_bane.php">ばね鋼</a>
				</div>
				<div id="contImageStockBane" class="contImage">ばね鋼</div>
				<div class="contBodyRowCellS">
					<table class="tblSubtitle">
						<tr>
							<td class="tblCell50t tblTextProduct">SUP9</td>
							<td class="tblCell50rt tblTextExp">
								マンガンクロム鋼で熱間加工性と焼き入れ性に優れています。<br>自動車や建設機械、または鉄道車両など比較的大型のばねによく使われます。
							</td>
						</tr>
					</table>
					<table class="tblSpec">
						<tr>
							<td rowspan="2" class="tblCell10t tblTextRTitle"><span class="">主成分<br>JIS&nbsp;G4801<br></span></td>
							<td class="tblCell10t tblTextCTitle">C</td>
							<td class="tblCell10t tblTextCTitle">Si</td>
							<td class="tblCell10t tblTextCTitle">Mn</td>
							<td class="tblCell10t tblTextCTitle">P</td>
							<td class="tblCell10t tblTextCTitle">S</td>
							<td class="tblCell10t tblTextCTitle">Cr</td>
							<td class="tblCell10t tblTextCTitle"><br></td>
							<td class="tblCell10t tblTextCTitle"><br></td>
							<td class="tblCell10rt tblTextCTitle"><br></td>
						</tr>
						<tr>
							<td class="tblCell10">0.52～0.60</td>
							<td class="tblCell10">0.15～0.35</td>
							<td class="tblCell10">0.65～0.95</td>
							<td class="tblCell10">0.030以下</td>
							<td class="tblCell10">0.030以下</td>
							<td class="tblCell10">0.65～0.95</td>
							<td class="tblCell10"><br></td>
							<td class="tblCell10"><br></td>
							<td class="tblCell10r"><br></td>
						</tr>
						<tr>
							<td rowspan="4" class="tblCell10 tblTextRTitle"><span class="">機械的性質<br>参考値</span></td>
							<td colspan="2" class="tblCell10 tblTextCTitle">熱処理</td>
							<td colspan="4" class="tblCell10 tblTextCTitle">引張試験(4号試験片)</td>
							<td class="tblCell10 tblTextCTitle" colspan="2">衝撃試験(3号試験片)</td>
							<td class="tblCell10r tblTextCTitle">硬さ試験</td>
						</tr>
						<tr>
							<td rowspan="2" class="tblCell10">焼入れ</td>
							<td rowspan="2" class="tblCell10">焼戻し</td>
							<td class="tblCell10">降伏点</td>
							<td class="tblCell10">引張強さ</td>
							<td class="tblCell10">伸び</td>
							<td class="tblCell10">絞り</td>
							<td class="tblCell10" colspan="2">シャルピー衝撃値</td>
							<td class="tblCell10r">硬さ</td>
						</tr>
						<tr>
							<td class="tblCell10">N/m㎡以上</td>
							<td class="tblCell10">N/m㎡以上</td>
							<td class="tblCell10">％以上</td>
							<td class="tblCell10">％以上</td>
							<td class="tblCell10" colspan="2">J/c㎡以上</td>
							<td class="tblCell10r">HBW</td>
						</tr>
						<tr>
							<td class="tblCell10">830～860<br>油冷</td>
							<td class="tblCell10">460～510</td>
							<td class="tblCell10">1080</td>
							<td class="tblCell10">1230</td>
							<td class="tblCell10">9</td>
							<td class="tblCell10">20</td>
							<td class="tblCell10" colspan="2">－</td>
							<td class="tblCell10r">363～429</td>
						</tr>
					</table>
					<table class="tblSubtitle">
						<tr>
							<td class="tblCell50t tblTextProduct">SUP10</td>
							<td class="tblCell50rt tblTextExp">
								クロムバナジウム鋼で焼入れ性が良く、耐衝撃性に優れています。<br>高応力のコイルばねやトーションバー、大型ばねに用いられています。
							</td>
						</tr>
					</table>
					<table class="tblSpec">
						<tr>
							<td rowspan="2" class="tblCell10t tblTextRTitle"><span class="">主成分<br>JIS&nbsp;G4801<br></span></td>
							<td class="tblCell10t tblTextCTitle">C</td>
							<td class="tblCell10t tblTextCTitle">Si</td>
							<td class="tblCell10t tblTextCTitle">Mn</td>
							<td class="tblCell10t tblTextCTitle">P</td>
							<td class="tblCell10t tblTextCTitle">S</td>
							<td class="tblCell10t tblTextCTitle">Cr</td>
							<td class="tblCell10t tblTextCTitle">V</td>
							<td class="tblCell10t tblTextCTitle"><br></td>
							<td class="tblCell10rt tblTextCTitle"><br></td>
						</tr>
						<tr>
							<td class="tblCell10">0.47～0.55</td>
							<td class="tblCell10">0.15～0.35</td>
							<td class="tblCell10">0.65～0.95</td>
							<td class="tblCell10">0.030以下</td>
							<td class="tblCell10">0.030以下</td>
							<td class="tblCell10">0.80～1.10</td>
							<td class="tblCell10">0.15～0.25</td>
							<td class="tblCell10"><br></td>
							<td class="tblCell10r"><br></td>
						</tr>
						<tr>
							<td rowspan="4" class="tblCell10 tblTextRTitle"><span class="">機械的性質<br>参考値</span></td>
							<td colspan="2" class="tblCell10 tblTextCTitle">熱処理</td>
							<td colspan="4" class="tblCell10 tblTextCTitle">引張試験(4号試験片)</td>
							<td class="tblCell10 tblTextCTitle" colspan="2">衝撃試験(3号試験片)</td>
							<td class="tblCell10r tblTextCTitle">硬さ試験</td>
						</tr>
						<tr>
							<td rowspan="2" class="tblCell10">焼入れ</td>
							<td rowspan="2" class="tblCell10">焼戻し</td>
							<td class="tblCell10">降伏点</td>
							<td class="tblCell10">引張強さ</td>
							<td class="tblCell10">伸び</td>
							<td class="tblCell10">絞り</td>
							<td class="tblCell10" colspan="2">シャルピー衝撃値</td>
							<td class="tblCell10r">硬さ</td>
						</tr>
						<tr>
							<td class="tblCell10">N/m㎡以上</td>
							<td class="tblCell10">N/m㎡以上</td>
							<td class="tblCell10">％以上</td>
							<td class="tblCell10">％以上</td>
							<td class="tblCell10" colspan="2">J/c㎡以上</td>
							<td class="tblCell10r">HBW</td>
						</tr>
						<tr>
							<td class="tblCell10">840～870<br>油冷</td>
							<td class="tblCell10">470～540<br></td>
							<td class="tblCell10">1080</td>
							<td class="tblCell10">1230</td>
							<td class="tblCell10">10</td>
							<td class="tblCell10">30</td>
							<td class="tblCell10" colspan="2">－</td>
							<td class="tblCell10r">363～429</td>
						</tr>
					</table>
					<div class="contBodyHalf">
						<table class="tblStock">
							<tr>
								<td class="tblStockR1 tblStockTextHead borderTopNone" rowspan="2">寸法</td>
								<td class="tblStockR6 tblStockTextHead borderTopNone" colspan="3">鋼種</td>
							</tr>
							<tr id="tblStockData1">
								<td class="tblStockR2 tblStockTextHead">SUP9</td>
								<td class="tblStockR3 tblStockTextHead">SUP9A</td>
								<td class="tblStockR6 tblStockTextHead">SUP10</td>
							</tr>
						</table>
					</div>
					<div class="contBodyHalf marginLeft20">
						<table class="tblStock">
							<tr>
								<td class="tblStockR1 tblStockTextHead borderTopNone" rowspan="2">寸法</td>
								<td class="tblStockR6 tblStockTextHead borderTopNone" colspan="3">鋼種</td>
							</tr>
							<tr id="tblStockData2">
								<td class="tblStockR2 tblStockTextHead">SUP9</td>
								<td class="tblStockR3 tblStockTextHead">SUP9A</td>
								<td class="tblStockR6 tblStockTextHead">SUP10</td>
							</tr>
						</table>
					</div>
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="clearBoth"></div>
		</div>
<? echo echo_footer(); ?>
	</div>
</body>
</html>