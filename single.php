<?php
/*
Template Name: single
*/
?>
<?php get_header();?>
<!-- main-->
<main id="BODY">
<div id="MAIN">
<?php if (get_post_type() === 'post'): ?>
<div class="titleSec">
<div><img src="<?php echo get_template_directory_uri(); ?>/img/topics/title.jpg" width="197" height="59" alt="TOPICS"></div>
</div><!-- /titleSec -->
<?php elseif (get_post_type() === 'notice'): ?>
<div class="titleArea">
<div><img src="<?php echo get_template_directory_uri(); ?>/img/notice/title.jpg" width="649" height="59" alt="概要　時代のニーズ、変化の兆しを敏感に受け止め、ロングセラーの継続とさらなる改良を目指します。"></div>
</div><!-- /titleArea -->
<?php elseif (get_post_type() === 'magazine'): ?>
<div class="titleSec">
<h1><img src="<?php echo get_template_directory_uri(); ?>/img/topics/title_mz.jpg" width="197" height="59" alt="ときどき通信"></h1>
</div><!-- /titleSec -->
<?php endif; ?>

<?php if (have_posts()): ?>
<?php while (have_posts()) : the_post(); ?>
<article>
<time><?php the_time('Y年m月d日'); ?></time>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
</article>
<?php endwhile; ?>
<?php else: ?>
<!-- 投稿が無い場合の処理 -->
<?php endif; ?>
<div class="pagination">
    <?php previous_post_link('%link', '＜ 前の投稿'); ?>
    <?php next_post_link('%link', '次の投稿 ＞'); ?>
</div>
</div>
<?php if (get_post_type() === 'post'): ?>
<?php get_sidebar('post'); ?>
<?php elseif (get_post_type() === 'notice'): ?>
<?php get_sidebar('notice'); ?>
<?php elseif (get_post_type() === 'magazine'): ?>
<?php get_sidebar('magazine'); ?>
<?php endif; ?>
</main>
<!-- /main-->
<?php get_footer();?>