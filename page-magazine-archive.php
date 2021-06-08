<?php
/*
Template Name: page-magazine-archive
*/
?>
<?php get_header();?>
<!-- main-->
<main id="BODY">
<div id="MAIN">
<?php if (have_posts()): ?>
<?php while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php else: ?>
<!-- 投稿が無い場合の処理 -->
<?php endif; ?>
<div class="detailArea">
<div class="listSec">
<ul>
<?php $args = array(
				'post_type' => array('magazine'), // 投稿タイプのスラッグを指定
				'post_status' => 'publish',// 公開済の投稿を指定
				'paged' => $paged, 
				'posts_per_page' => 12 // 投稿件数の指定
				);
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $the_query = new WP_Query($args); 
    if($the_query->have_posts()):?>
<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
<li><dl><dt><time><?php the_time('Y/m/d'); ?></time>
            <?php
                $categories = get_the_category();
                if ( $categories ) {
                    echo '<div class="category"><a class="'.$categories[0]->slug.'" href="'.esc_url(get_category_link( $categories[0]->term_id )).'">'.$categories[0]->name.'</a></div>';
                }?>
        </dt>
    <dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
    </dl></li>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</ul>
<!--ページネーション-->
<div class="pagination">
	<?php
		$big = 999999999; // need an unlikely integer
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $the_query->max_num_pages
		) );
	?>
</div>
<!-- /listSec --></div>

<p class="pageTop"><span><a href="#TOP">ページトップへ戻る</a></span></p>
<!-- /detailArea --></div>
<!-- /MAIN --></div>
</main>
<!-- /main-->
<?php get_footer();?>