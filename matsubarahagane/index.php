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
<meta name="title" content="松原鋼商店">
<meta name="description" content="松原鋼商店では、「窒化鋼」「ばね鋼」を取扱っております。   SACM645は、窒化処理により硬さの高い表面層を得るために、アルミニウム，クロムを添加し、また窒化層を強靭にするためにモリブデン，バナジウムなどを添加した鋼であります。疲れ強さ、耐摩耗性、耐食性に優れ、シリンダー及びライナー、大型歯車などに使用されています。">
<meta name="keywords" content="松原鋼商店,窒化鋼,ばね鋼,SACM645,窒化処理,アルミニウム・クロム添加,窒化層,モリブデン・バナジウム添加,疲れ強さ、耐摩耗性、耐食性,シリンダー,ライナー,大型歯車">
<meta property="og:title" content="松原鋼商店">
<meta property="og:type" content="website">
<meta property="og:description" content="松原鋼商店では、「窒化鋼」「ばね鋼」を取扱っております。   SACM645は、窒化処理により硬さの高い表面層を得るために、アルミニウム，クロムを添加し、また窒化層を強靭にするためにモリブデン，バナジウムなどを添加した鋼であります。疲れ強さ、耐摩耗性、耐食性に優れ、シリンダー及びライナー、大型歯車などに使用されています。">
<meta property="og:url" content="http://www.hotta-hagane.co.jp/matsubarahagane/">
<meta property="og:site_name" content="松原鋼商店">
<title>松原鋼商店</title>
<link rel="stylesheet" type="text/css" href="common.css">

<? echo_jslink(); ?>

<? echo_bootstrap(); ?>

<script src="jquery/plugin/imagesloaded/imagesloaded.pkgd.min.js"></script>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=ja"></script>

<script src="jquery/plugin/colorbox/jquery.colorbox-min.js"></script>
<script src="jquery/plugin/colorbox/i18n/jquery.colorbox-ja.js"></script>
<link rel="stylesheet" type="text/css" href="jquery/plugin/colorbox/colorbox.css">

<script type="text/javascript">
var timerID; //setInterval管理用
var	num;

$(document).ready(function(e) {
	num = $("#curtainSlide").children().length;
	//二枚目以降のスライドを非表示に
	$("#curtainSlide").children().each(function(ind,elem){
		if( $(this).attr('sequence') != 0 ){
			$(this).css('display','none');
		}
	});
	var flgo = 0;
	var flg = 0;
	//全画像読込完了時に「開く」を有効化
	$("#curtainSlide0").imagesLoaded(function(){
		flg += 1;
		if( flg >= 63 ) {
			$("#curtainOpen").removeAttr("disabled");
			if( flgo == 0 ) setTimeout("curtainOpen()", 3000);
			flgo = 1;
		}
	});
	$("#curtainSlide1").imagesLoaded(function(){
		flg += 2;
		if( flg >= 63 ) {
			$("#curtainOpen").removeAttr("disabled");
			if( flgo == 0 ) setTimeout("curtainOpen()", 3000);
			flgo = 1;
		}
	});
	$("#curtainSlide2").imagesLoaded(function(){
		flg += 4;
		if( flg >= 63 ) {
			$("#curtainOpen").removeAttr("disabled");
			if( flgo == 0 ) setTimeout("curtainOpen()", 3000);
			flgo = 1;
		}
	});
	$("#curtainSlide3").imagesLoaded(function(){
		flg += 8;
		if( flg >= 63 ) {
			$("#curtainOpen").removeAttr("disabled");
			if( flgo == 0 ) setTimeout("curtainOpen()", 3000);
			flgo = 1;
		}
	});
	$("#curtainSlide4").imagesLoaded(function(){
		flg += 16;
		if( flg >= 63 ) {
			$("#curtainOpen").removeAttr("disabled");
			if( flgo == 0 ) setTimeout("curtainOpen()", 3000);
			flgo = 1;
		}
	});
	$("#curtainSlide5").imagesLoaded(function(){
		flg += 32;
		if( flg >= 63 ) {
			$("#curtainOpen").removeAttr("disabled");
			if( flgo == 0 ) setTimeout("curtainOpen()", 3000);
			flgo = 1;
		}
	});
	
	$curtainopen = false;
	$('#curtainOpen').click(function(){
		var interval = ( parseInt($("#curtainSlide").attr('interval')) > 0 )? parseInt($("#curtainSlide").attr('interval')) : 50;
		timerID = setInterval("curtainSlides()", interval);
	});

	$("#DispChitkamanProf").colorbox({inline:true, width:"80%", fitContentsHeight:true, opacity:0.9});

	gmap_initialize();
<? echo echo_imagepreload (); ?>
});
<? echo echo_funcpreload (); ?>

$(document).on("click","#chitkamanProf",function(){
	$.colorbox.close();
});

function curtainOpen() {
	var interval = ( parseInt($("#curtainSlide").attr('interval')) > 0 )? parseInt($("#curtainSlide").attr('interval')) : 50;
	timerID = setInterval("curtainSlides()", interval);
}

var seq = 0;
function curtainSlides() {
$("#curtainSlide").children().each(function(idx, elem) {
		if( parseInt($(this).attr('sequence')) == seq ){
			$(this).css('display','none');
		} else if( parseInt($(this).attr('sequence')) == seq + 1 ){
			$(this).css('display','block');
			//console.log($(this).attr('id'));
		}
	});
	if( seq >= num - 1 ){
		$("#jcurtain").css('display','none');
		clearInterval(timerID);
	} else {
		seq += 1;
	}
}

//GoogleMaps関連
latlng = new google.maps.LatLng(34.672877,135.48429);
imageIcon = 'images/chitka_mini.png';
marker = new google.maps.Marker({
	position: latlng,
	title: "松原鋼商店",
	icon: imageIcon
});
function gmap_initialize() {
	myOption = {
		zoom: 16,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		navigationControl: true,
		navigationControlOptions: {
			style: google.maps.NavigationControlStyle.MEDIUM,
			position: google.maps.ControlPosition.TOP_RIGHT
		},
		mapTypeControl: true,
		mapTypeControlOptions: {
			style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
			position: google.maps.ControlPosition.TOP_LEFT
		},
		scaleControl: true,
		scaleControlOptions: { position: google.maps.ControlPosition.LEFT_BOTTOM },
		streetViewControl: true,
		streetViewControlOptions: { position: google.maps.ControlPosition.TOP_RIGHT }
	};
	var gmap = new google.maps.Map(document.getElementById("GoogleMap"), myOption);
	var myOption_center = { center: latlng };
	gmap.setOptions(myOption_center);
	marker.setMap(gmap);
}
</script>
<style type="text/css">
<!--
#curtainSlide {
	list-style: none;
	margin: 0px;
}
-->
</style>
</head>
<body>
	<div id="wrapper">
		<div id="container">
<? echo echo_header(); ?>
			<div id="contBody">
<? echo echo_headmenu(); ?>
			 	<div id="contMainImage"><img src="images/mainimage.png" alt="" /></div>
				<!-- <div id="contOpenBtn"><button id="curtainOpen" class="btn btn-xsmall btn-warning" type="button" disabled>開く</button></div> -->
				<div class="contBodyRow">
					<div class="contBodyCustomL contCustomAddress">
						<a href="https://www.google.co.jp/maps/place/%E6%9D%BE%E5%8E%9F%E9%8B%BC%E5%95%86%E5%BA%97/@34.672877,135.48429,17z/data=!3m1!4b1!4m2!3m1!1s0x6000e7abc6c5bdb5:0x1665f6243f260caa" target="_blank" class="linktomap">
							<address>
								〒550-0015&nbsp;&nbsp;大阪府大阪市西区南堀江4丁目17－18<br>
								原田ビル3F&nbsp;312号<br>
								電話番号&nbsp;&nbsp;06-6541-7321<br>
								FAX番号&nbsp;&nbsp;&nbsp;06-6541-7322<br>
							</address>
						</a>
						<div id="GoogleMap">地図を表示中です。<br />しばらくお待ちください。</div>
					</div>
					<div class="contBodyCustomR contCustomTopics"></div>
					<div class="contBodyCustomR contCustomChitkaman">
						<span class="cellTextTransparent">特殊鋼戦隊チッカマンが<br>お客様のご要望を解決！<br></span>
						<a id="DispChitkamanProf" href="#chitkamanProf"><div class="chitkaman"></div></a>
					</div>
					<div class="clearBoth"></div>
				</div>
				<div id="jcurtain">
					<ul id="curtainSlide" interval="200">
						<li id="sequence0" sequence="0"><img id="curtainSlide0" src="images/jcurtain0.png" alt="" /></li>
						<li id="sequence1" sequence="1"><img id="curtainSlide1" src="images/jcurtain1.png" alt="" /></li>
						<li id="sequence2" sequence="2"><img id="curtainSlide2" src="images/jcurtain2.png" alt="" /></li>
						<li id="sequence3" sequence="3"><img id="curtainSlide3" src="images/jcurtain3.png" alt="" /></li>
						<li id="sequence4" sequence="4"><img id="curtainSlide4" src="images/jcurtain4.png" alt="" /></li>
						<li id="sequence5" sequence="5"><img id="curtainSlide5" src="images/jcurtain5.png" alt="" /></li>
					</ul>
				</div>
<!--
				<div class="leftcurtain"><img src="images/curtainleft.png"/></div>
				<div class="rightcurtain"><img src="images/curtainright.png"/></div>
-->
			</div>
			<div class="clearBoth"></div>
		</div>
<? echo echo_footer(); ?>
	</div>
	<!-- チッカマンProfile -->
	<div style='display:none'>
		<div id="chitkamanProf">
			<img src="images/chitkamanprof.jpg" alt="" id="imgChitkamanProf" />
		</div>
	</div>
</body>
</html>
