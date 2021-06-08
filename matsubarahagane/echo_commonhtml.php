<?php

//処理文字コードの指定
mb_language("Japanese");
mb_internal_encoding("UTF-8");
mb_regex_encoding("UTF-8");

function echo_jslink(){
echo <<< EOF
<!-- jQuery-1.11.4 jQueryUI-1.11.4 css-1.11.4 -->
<script src="jquery/jquery.min.js" type="text/javascript"></script>
<script src="jquery/jquery-ui.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="jquery/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="jquery/jquery-ui.structure.min.css">
<link rel="stylesheet" type="text/css" href="jquery/jquery-ui.theme.min.css">

EOF;
}

function echo_bootstrap(){
echo <<< EOF
<!-- jQuery-1.11.4 jQueryUI-1.11.4 css-1.11.4 -->
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.min.css">

EOF;
}


function echo_fancybox(){
echo <<< EOF
<!-- jQuery FancyBox -->
<link rel="stylesheet" href="/jquery/plugin/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="jquery/plugin/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="jquery/plugin/fancybox/jquery.mousewheel-3.0.6.pack.js"></script> <!-- mousewheel plugin (optional) -->
<!-- jQuery FancyBox Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="jquery/plugin/fancybox/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
<script type="text/javascript" src="jquery/plugin/fancybox/helpers/jquery.fancybox-buttons.js"></script>
<script type="text/javascript" src="jquery/plugin//fancybox/helpers/jquery.fancybox-media.js"></script>
<link rel="stylesheet" href="jquery/plugin/fancybox/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
<script type="text/javascript" src="jquery/plugin/fancybox/helpers/jquery.fancybox-thumbs.js"></script>

EOF;
}

function echo_TMPL(){
echo <<< EOF
<!-- jQuery TMPL(HereDocument実装) -->
<script src="jquery/plugin/tmpl/jquery.tmpl.min.js" type="text/javascript"></script>
<script src="jquery/plugin/tmpl/jquery.tmplPlus.min.js" type="text/javascript"></script>

EOF;
}

function echo_animsition(){
echo <<< EOF
<!-- jQuery Animsition -->
<script src="jquery/plugin/animsition/js/jquery.animsition.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="jquery/plugin/animsition/css/animsition.min.css" type="text/css" media="screen" />

EOF;
}

function echo_coverflow(){
echo <<< EOF
<!-- jQuery coverFlow -->
<script src="jquery/plugin/coverflow/reflection.js" type="text/javascript"></script><!-- Optional: Reflection -->
<script src="jquery/plugin/coverflow/jquery.mousewheel.js" type="text/javascript"></script><!-- Mousewheel -->
<script src="jquery/plugin/coverflow/jquery.interpolate.js" type="text/javascript"></script><!-- interpolate, depends on jQ 1.8.0+ -->
<script src="jquery/plugin/coverflow/jquery.coverflow.js" type="text/javascript"></script>

EOF;
}

function echo_footer (){
echo <<< EOF
		<div id="contFoot">
			<div id="contFootMenu">
				<div id="contFootMenuL">
				 	<!--<a href="">サイトのご利用について</a>&nbsp;&nbsp;|&nbsp;&nbsp;-->
				 	<a href="policy.php">プライバシーポリシー</a>&nbsp;&nbsp;|&nbsp;&nbsp;
				 	<a href="inquiry.php">お問い合せ</a>
				</div>
				<div id="contFootMenuR">
				 	copyright&nbsp;©2015&nbsp;&nbsp;Matsubarahaganeshouten
				</div>
				<div class="clearBoth"></div>
			</div>
		</div>

EOF;
}

function echo_header (){
echo <<< EOF
			<div id="contHead">
				<div id="contHeadLeft">
					<h1 class="corpname"><a href="./"><img src="images/trademark.png" alt="松原鋼商店"/></a></h1>
				</div>
				<div id="contHeadRight" class="marginTop24">
					<a id="inquiry" href="inquiry.php"><img id="btninquiry" src="images/transparent_1x1.png" /></a>
					<!--
					<div class="marginTop8">
						<input id="inputsearch" type="text"><img src="images/btnsearch.jpg" alt="検索" />
					</div>
					-->
				</div>
				<div class="clearBoth"></div>
			</div>

EOF;
}

function echo_headmenu (){
echo <<< EOF
				<div id="contBodyTband"></div>
				<div id="contMenu">
					<ul id="mainMenu">
						<a href="information.php"><li class="menu_information"></li></a>
						<a href="material.php"><li class="menu_material"></li></a>
						<a href="product.php"><li class="menu_product"></li></a>
						<a href="link.php"><li class="menu_link"></li></a>
					</ul>
					<div class="clearBoth"></div>
				</div>

EOF;
}

function echo_imagepreload (){
echo <<< EOF
	preload([
		'images/menu_information_hover.jpg',
		'images/menu_product_hover.jpg',
		'images/menu_material_hover.jpg',
		'images/menu_link_hover.jpg',
		'images/btninquiry_hover.png'
	]);

EOF;
}

function echo_funcpreload (){
echo <<< EOF
function preload(arrayOfImages) {
    $(arrayOfImages).each(function(){ $('<img/>')[0].src = this; });
}

EOF;
}

?>
