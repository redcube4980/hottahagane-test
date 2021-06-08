<?php
/*
Template Name: page-notice
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
<h4 class="ttl_style01">公告事項</h4>
<table class="tbl_style01 mb30" summary="公告事項">
<tbody>
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
  <tr>
    <td><a href="<?php the_permalink(); ?>">【<?php the_time('Y年m月d日'); ?>】 <?php the_title(); ?></a></td>
  </tr>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</tbody>
</table>
<h4 class="ttl_style01">決算公告</h4>
<table class="tbl_style01 mb30" summary="決算公告">
  <tbody>
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
  <tr>
    <td><a href="<?php the_permalink(); ?>">【<?php the_time('Y年m月d日'); ?>】 <?php the_title(); ?></a></td>
  </tr>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</tbody>
</table>
<div class="pdfBox">
    <div class="fltL">
        <a href="http://get.adobe.com/jp/reader/" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/common/Get_Adobe_Acrobat_Reader_DC_web_button_158x39.fw.png" alt="Get ADOBE READER" width="158" height="39"></a>
    </div>
    <p><a href="http://get.adobe.com/jp/reader/" target="_blank" rel="noopener">PDF書類をご覧になる場合は、Adobe Reader 5.0以降が必要です。お持ちでない方はこちらよりダウンロードしてください。</a></p>
</div>

<p class="pageTop"><span><a href="#TOP">ページトップへ戻る</a></span></p>
<!-- /detailArea --></div>
<!-- /MAIN --></div>
<?php get_sidebar('mod_side'); ?>
</main>
<!-- /main-->
<?php get_footer();?>