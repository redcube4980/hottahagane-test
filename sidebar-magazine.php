<?php
/*
Template Name: sidebar-magazine
*/
?>
<!-- MENU -->
<div id="archive">
<h2 class="title tChip">ときどきアーカイブ</h2>
<div id="magazine">
<ul>
    <?php $args = array(
				'post_type' => 'magazine', // 投稿タイプのスラッグを指定
				'post_status' => 'publish',// 公開済の投稿を指定
				'paged' => $paged, 
				'posts_per_page' => -1 // 投稿件数の指定
                
				);
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $the_query = new WP_Query($args); 
    if($the_query->have_posts()):?>
  <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
  <li><a href="<?php the_permalink(); ?>">【<?php the_time('Y年m月d日'); ?>】 <?php the_title(); ?></a></li>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</ul>
</div>
</div>
<!-- /MENU -->