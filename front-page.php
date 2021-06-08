<?php
/*
Template Name: front-page
*/
?>
<?php get_header();?>
<!-- main-->
<main id="BODY">
<!-- leadArea -->
<div class="leadArea">
<div class="slider">
<ul class="bxslider">
<li><img src="<?php echo get_template_directory_uri(); ?>/img/index/slider01.jpg" width="720" height="240" /></li>
<li><img src="<?php echo get_template_directory_uri(); ?>/img/index/slider02.jpg" width="720" height="240" /></li>
<li><img src="<?php echo get_template_directory_uri(); ?>/img/index/slider03.jpg" width="720" height="240" /></li>
<li><img src="<?php echo get_template_directory_uri(); ?>/img/index/slider04.jpg" width="720" height="240" /></li>
<li><img src="<?php echo get_template_directory_uri(); ?>/img/index/slider05.jpg" width="720" height="240" /></li>
</ul>
</div>
<p class="recruit"><a href="<?php echo esc_url( home_url( '/recruit/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/index/banner_recruit.jpg" width="220" height="117" alt="リクルート"></a></p>
<p class="companysong"><a href="<?php echo esc_url( home_url( '/company-song/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/index/banner_companysong.jpg" width="220" height="117" alt="CompanySong"></a></p>
</div>
<!-- /leadArea -->
<!-- detailArea -->
<div class="detailArea">
<div class="productSec">
<div class="box01">
<h2><img src="<?php echo get_template_directory_uri(); ?>/img/index/head_product.gif" width="240" height="18" alt="製品情報"></h2>

<ul class="nthChild">
<li><a href="<?php echo esc_url( home_url( '/product/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/index/btn_product_sncm-hadayaki_n.jpg" width="243" height="40" alt="SNCM鋼 【肌焼鋼】"></a></li>
<li><a href="<?php echo esc_url( home_url( '/sncm-strong/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/index/btn_product_sncm-strong_n.jpg" width="243" height="40" alt="SNCM鋼 【強靭鋼】"></a></li>
<li><a href="<?php echo esc_url( home_url( '/snc-marubou/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/index/btn_product_snc-marubou_n.jpg" width="243" height="40" alt="SNC鋼 丸棒"></a></li>
</ul>
<!-- /box01 --></div>

<ul class="nthChild">
<li><a href="<?php echo esc_url( home_url( '/scm-marubou/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/index/btn_product_scm-marubou_n.jpg" width="245" height="40" alt="SCM鋼 丸棒"></a></li>
<li><a href="<?php echo esc_url( home_url( '/snb-marubou/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/index/btn_product_snb-marubou_n.jpg" width="245" height="40" alt="SNB鋼 丸棒"></a></li>
<li><a href="<?php echo esc_url( home_url( '/dense-bar/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/index/btn_product_dense-bar_n.jpg" width="245" height="40" alt="デンスバー"></a></li>
<li><a href="<?php echo esc_url( home_url( '/stainless/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/index/btn_product_stainless_n.jpg" width="245" height="40" alt="ステンレス鋼"></a></li>
</ul>
<div class="btnKakou"><a href="<?php echo esc_url( home_url( '/kakou/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/index/btn_product_kakou.jpg" alt="加工品"></a></div>
<div class="btnKakou"><a href="<?php echo esc_url( home_url( '/sds/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/index/btn_product_sds.jpg" alt="安全データシート"></a></div>
<!-- /productSec --></div>


<div class="topicsSec">
<h2><img src="<?php echo get_template_directory_uri(); ?>/img/index/head_topics.gif" width="445" height="23" alt="TOPICS"></h2>

<ul>
<?php $args = array(
				'post_type' => array('post'),// 投稿タイプのスラッグを指定
				'post_status' => 'publish',// 公開済の投稿を指定
				'paged' => $paged, 
				'posts_per_page' => -1 // 投稿件数の指定
				);
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $the_query = new WP_Query($args); 
    if($the_query->have_posts()):?>
<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
<li><time class="post-time"><?php the_time('Y/m/d'); ?></time><h3 class="title"><a class="post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></li>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</ul>
</div>
<!-- /topicsSec -->

<div class="bannerSec"><a href="http://nickel-market.seesaa.net/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/index/banner_ad.jpg" width="485" height="51" alt=""></a>
<!-- /bannerSec --></div>
<div class="bannerSec"><a href="/magazine-archive/"><img src="<?php echo get_template_directory_uri(); ?>/img/index/banner_mz.jpg" width="485" height="51" alt=""></a>
<!-- /bannerSec -->
<ul>
<?php $args = array(
				'post_type' => array('magazine'),// 投稿タイプのスラッグを指定
				'post_status' => 'publish',// 公開済の投稿を指定
				'paged' => $paged, 
				'posts_per_page' => 4 // 投稿件数の指定
				);
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $the_query = new WP_Query($args); 
    if($the_query->have_posts()):?>
<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
<li><time class="post-time"><?php the_time('Y/m/d'); ?></time><h3 class="title"><a class="post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></li>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</ul>
</div>

</div>
<!-- /detailArea -->
</main>
<!-- /main-->
<?php get_footer();?>