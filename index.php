<?php
/*
Template Name: index
*/
?>
<?php get_header();?>
<!-- main-->
<main id="BODY">
<?php if (have_posts()): ?>
<?php while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php else: ?>
<!-- 投稿が無い場合の処理 -->
<?php endif; ?>
</main>
<!-- /main-->
<?php get_footer();?>