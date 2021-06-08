<?php
/*
Template Name: sidebar-notice
*/
?>
<!-- MENU -->
<div id="archive">
<h2 class="title tChip">アーカイブ</h2>
<div id="financial-results">
<h3>公告事項</h3>
<ul>
    <?php $args = array(
				'post_type' => 'notice', // 投稿タイプのスラッグを指定
				'post_status' => 'publish',// 公開済の投稿を指定
				'paged' => $paged, 
                'tax_query' => array(
                    // 2つ以上のタクソノミーを指定する場合の論理的な関係。指定できる値は 'AND'か 'OR' 
                    'relation' => 'AND',
                    array(
                        // タクソノミーを指定
                        'taxonomy' => 'notice_tax',
                        // パラメータtermsで使用する種類を指定。指定できる値は 'term_id'（デフォルト）, 'name', 'slug'
                        'field' => 'slug',
                        // タームを指定（パラメータfieldで指定した種類で指定）
                        'terms'    => 'financial-results',
                        // 階層構造を持もつタクソノミーの場合、子タクソノミーを含めるかを判断。含める場合はtrue（デフォルト）
                        'include_children' => true,
                        // 演算子。指定できる値は 'IN'(デフォルト), 'NOT IN', 'AND', 'EXISTS' (4.1.0以降) と 'NOT EXISTS'(4.1.0以降) 
                        'operator' => 'NOT IN',
                    ),
                ),
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
<div id="announcements">
<h3>決算公告</h3>
<ul>
<?php $args = array(
				'post_type' => 'notice', // 投稿タイプのスラッグを指定
				'post_status' => 'publish',// 公開済の投稿を指定
				'paged' => $paged, 
                'tax_query' => array(
                    // 2つ以上のタクソノミーを指定する場合の論理的な関係。指定できる値は 'AND'か 'OR' 
                    'relation' => 'AND',
                    array(
                        // タクソノミーを指定
                        'taxonomy' => 'notice_tax',
                        // パラメータtermsで使用する種類を指定。指定できる値は 'term_id'（デフォルト）, 'name', 'slug'
                        'field' => 'slug',
                        // タームを指定（パラメータfieldで指定した種類で指定）
                        'terms'    => 'announcements',
                        // 階層構造を持もつタクソノミーの場合、子タクソノミーを含めるかを判断。含める場合はtrue（デフォルト）
                        'include_children' => true,
                        // 演算子。指定できる値は 'IN'(デフォルト), 'NOT IN', 'AND', 'EXISTS' (4.1.0以降) と 'NOT EXISTS'(4.1.0以降) 
                        'operator' => 'NOT IN',
                    ),
                ),
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