<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="imagetoolbar" content="no">
<meta name="description" content="時代のニーズに応える含ニッケル鋼のスペシャリスト、堀田ハガネ。調達から加工、流通まで「まかせて良かった」の笑顔のために、価値ある鋼をお届けいたします。">
<meta name="keywords" content="SNC415,SNC631,SNC815,SNCM220H,SNCM420H,SNCM220,SNCM420,SNCM439,SNCM447,SNCM616,SNCM630,SNCM815,特殊鋼,ステンレス鋼,堀田ハガネ">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/hotta-logo.jpg">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/hotta-logo.jpg">
<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-precomposed.png">
<title>株式会社 堀田ハガネ</title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css"/>
<link href="<?php echo get_stylesheet_uri(); ?>?<?php echo date_i18n('Ymd-His'); ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/layouts.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/module.css"/>
<?php if( is_front_page() ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/index.css"/>
<?php elseif(is_page()): ?>
    <?php if( is_page('company-song') ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/gannikkeruman.css"/>
    <?php elseif( is_page('recruit') ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/import.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/mediaboxAdvBlack21.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/recruit.css"/>
    <?php elseif( is_page('network') ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/import.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/network.css"/>
    <?php elseif( is_page (array('contact','kakunin','error','kanryou')) ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact-form.css"/>
        <?php if( is_page('error') ): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/error.css"/>
        <?php elseif( is_page('kakunin') ): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/kakunin.css"/>
        <?php elseif( is_page('kanryou') ): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/kanryou.css"/>
        <?php endif; ?>
    <?php elseif( is_page('corporate') ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/import.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/mediaboxAdvBlack21.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/corporate/corporate.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/corporate/about.css"/>
    <?php elseif( is_page (array('history','officers')) ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/import.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/mediaboxAdvBlack21.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/corporate/corporate.css"/>
    <?php elseif( is_page (array('facilities','facilities_cutting-a','facilities_cutting-b','facilities_cutting-c')) ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/import.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/corporate/corporate.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/corporate/facilities.css"/>
    <?php elseif( is_page('notice') ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/import.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/mediaboxAdvBlack21.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/corporate/corporate.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/corporate/notice.css"/>
    <?php elseif( is_page (array('product','sncm-strong','snc-marubou','scm-marubou','snb-marubou','dense-bar','stainless','stainless02','stainless03','stainless04','stainless05','stainless06','stainless07','kakou','sds','01_sncm220h','01_sncm420h','01_sncm616','01_sncm815','02_sncm439','02_sncm447','02_sncm630','03_snc415','03_snc631','03_snc815','03_snc836','04_scm415h','04_scm420h','04_scm435h_r','04_scm440h','04_scm435h_h','04_scm440h_h','05_snb7_r','05_snb7_h','05_snb7_drawn','05_snb16','sdsdownload')) ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/import.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/product/product.css"/>
		<?php if(is_page('sdsdownload')): ?>
		<!-- 郵便番号→住所 -->
		<script src="https://zipaddr.github.io/zipaddra.js" charset="UTF-8"></script>
		<!--
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/wizard/wizard.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/zipcloud/jquery.zipcloud.css">
		-->
		<?php endif; ?>
    <?php elseif( is_page('topics') ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/import.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/topics.css" type="text/css">
    <?php elseif( is_page('magazine-archive') ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/import.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/topics.css" type="text/css">
    <?php endif; ?>
<?php elseif(is_single()): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css">
<?php elseif(is_archive()): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css">
<?php endif; ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/colorbox/colorbox.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/gun.css"/>
<?php wp_head(); ?>
</head>
    
<body>
<div id="TOP" class="topage">
<header id="HEADER">
<div class="titleArea">
	<p class="logo tChip"><a href="<?php echo esc_url( home_url( '/') ); ?>">HOTTA HAGANE CO., LTD</a></p>
	<p class="contact"><span><a href="<?php echo esc_url( home_url( '/contact/') ); ?>">お問い合わせ</a></span></p>
	<p class="charactor"><a class='inline' href="#inline_content"><img class="autoWidth" src="<?php echo get_template_directory_uri(); ?>/common/img/movie_button.gif" alt="【踊る】ガンニッケルマン ムービー公開中" /></a></p>
</div><!-- /titleArea -->
<!-- ▼▼▼This contains the hidden content for inline calls▼▼▼-->
<div style='display:none;'>
	<div id='inline_content' style='padding:10px; background:#fff;'>
		<div id="gun_bg">
			<div id="gun_tit">無敵鋼人！ガンニッケルマン</div>
			<div id="gun_prof">
				<div class="gun_01">
					<div class="bl_txt fl">身　長　　</div>129.3㎝
					<br clear="all"><br />
					<div class="bl_txt fl">体　重　　</div>607.6㎏
					<br clear="all"><br />
					<div class="bl_txt fl">素　材　　</div>含ニッケル合金製(SNCM/SNC/SCM/SNB/ステンレス)
					<br clear="all"><br />
					<div class="bl_txt fl">生年月日　</div>2003年4月17日
				</div>
				<br clear="all"><br />
				<div class="bl_txt"><span class="txt_20">●</span>性格</div>
				どんな苛酷な状況にも耐える鋼の精神と肉体の持ち主。<br />
				強くて頼れる存在だが、繊細な一面も。世話好きで<br />
				ちょっぴりおせっかい。好きな言葉は「任せてよかった」<br /><br />
				<div class="bl_txt"><span class="txt_20">●</span>出身地</div>
				大阪市西区九条 町工場<br />
				『スクラップの山の中に埋もれている僕を<br />
				堀田社長が拾ってくれたんだ！』<br /><br />
				<div class="bl_txt"><span class="txt_20">●</span>特技</div>
				『いろんなものに変身するのが大の得意！<br />
				身の周りのボルトやナット、歯車などに変身して困った人を助けに行くよ！』
			</div>
			<div id="gun_print"><a href="<?php echo esc_url( home_url( '/') ); ?>/colorbox/images/gun/gun.pdf" target="_blank">印刷する(PDF)</a></div>
			<div id="gun_foot">含ニッケル鋼のスペシャリスト、堀田ハガネのヒミツをガンニッケルマンが大解剖！！乞うご期待！</div>
		</div>
		<div id="gun_movie" class="clearfix">
			<h4>行け！ガンニッケルマン ～ロボットダンス編～</h4>
			<div id="contYouTube">
				<iframe id="youtube2" src="https://www.youtube.com/embed/SkV1p1uo7kM?rel=0&modestbranding=0&showinfo=0&fs=0&controls=1&autohide=1" frameborder="0" width="560" height="315" allowfullscreen></iframe>
				<p>堀田ハガネのCompany Song（社歌）に合わせてガンニッケルマンが踊ります。<span>GOODボタン</span>を押してください。</p>
			</div>
		</div>
	</div>
	
</div>
<!-- ▲▲▲This contains the hidden content for inline calls▲▲-->
<div id="gNavi">
<ul>
<li id="gNaviProduct">
<dl>
<dt class="tChip">製品情報</dt>
<dd>
<ul class="tChip nthChild">
<li><a href="<?php echo esc_url( home_url( '/product/') ); ?>"><span>SNCM鋼【肌焼鋼】</span></a></li>
<li><a href="<?php echo esc_url( home_url( '/sncm-strong/') ); ?>"><span>SNCM鋼【強靭鋼】</span></a></li>
<li><a href="<?php echo esc_url( home_url( '/snc-marubou/') ); ?>"><span>SNC鋼 丸棒</span></a></li>
<li><a href="<?php echo esc_url( home_url( '/scm-marubou/') ); ?>"><span>SCM鋼 丸棒</span></a></li>
<li><a href="<?php echo esc_url( home_url( '/snb-marubou/') ); ?>"><span>SNB鋼 丸棒</span></a></li>
<li><a href="<?php echo esc_url( home_url( '/dense-bar/') ); ?>"><span>デンスバー</span></a></li>
<li><a href="<?php echo esc_url( home_url( '/stainless/') ); ?>"><span>ステンレス鋼</span></a></li>
<li><a href="<?php echo esc_url( home_url( '/kakou/') ); ?>"><span>加工品</span></a></li>
<li><a href="<?php echo esc_url( home_url( '/sds/') ); ?>"><span>安全データシート</span></a></li>
</ul>
</dd>
</dl>
</li>

<li id="gNaviCorporate">
<dl>
<dt class="tChip">企業情報</dt>
<dd>
<ul class="tChip nthChild">
<li><a href="<?php echo esc_url( home_url( '/corporate/') ); ?>"><span>概要</span></a></li>
<li><a href="<?php echo esc_url( home_url( '/history/') ); ?>"><span>沿革</span></a></li>
<li><a href="<?php echo esc_url( home_url( '/officers/') ); ?>"><span>役員</span></a></li>
<li><a href="<?php echo esc_url( home_url( '/facilities/') ); ?>"><span>設備</span></a></li>
<li><a href="<?php echo esc_url( home_url( '/corporate/notice/') ); ?>"><span>電子公告</span></a></li>
</ul>
</dd>
</dl>
</li>

<li id="gNaviTopics" class="tChip"><a href="<?php echo esc_url( home_url( '/topics/') ); ?>">TOPICS</a></li>
<li id="gNaviRecruit" class="tChip"><a href="<?php echo esc_url( home_url( '/recruit/') ); ?>">リクルート</a></li>
<li id="gNaviNetwork" class="tChip"><a href="<?php echo esc_url( home_url( '/network/') ); ?>">ネットワーク</a></li>
</ul>
<!-- /gNavi --></div>
</header>
<!-- /HEADER -->