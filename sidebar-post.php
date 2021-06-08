<?php
/*
Template Name: sidebar-post
*/
?>
<!-- MENU -->
<div id="archive">
<h2 class="title tChip">アーカイブ</h2>

<ul>
<?php $args = array(
				'post_type' => array('post','magazine'), // 投稿タイプのスラッグを指定
				'post_status' => 'publish',// 公開済の投稿を指定
				'paged' => $paged, 
				'posts_per_page' => -1 // 投稿件数の指定
				);
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $the_query = new WP_Query($args); 
    if($the_query->have_posts()):?>
<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
<li><dl><dt><time class="post-time"><?php the_time('Y/m/d'); ?></time></dt><dd><a class="post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd></dl></li>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</ul>
</div>
<!-- /MENU -->