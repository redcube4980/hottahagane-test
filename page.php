<?php
/*
Template Name: page
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
<?php if( is_page (array('corporate','history','officers','facilities','facilities_cutting-a','facilities_cutting-b','facilities_cutting-c','notice')) ): ?>
<?php get_sidebar('mod_side'); ?>
<?php elseif( is_page (array('product','sncm-strong','snc-marubou','scm-marubou','snb-marubou','dense-bar','stainless','stainless02','stainless03','stainless04','stainless05','stainless06','stainless07','kakou','sds','01_sncm220h','01_sncm420h','01_sncm616','01_sncm815','02_sncm439','02_sncm447','02_sncm630','03_snc415','03_snc631','03_snc815','03_snc836','04_scm415h','04_scm420h','04_scm435h_r','04_scm440h','04_scm435h_h','04_scm440h_h','05_snb7_r','05_snb7_h','05_snb7_drawn','05_snb16')) ): ?>
<?php get_sidebar('mod_menu'); ?>
<?php endif; ?>
</main>
<!-- /main-->
<?php get_footer();?>