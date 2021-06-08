<?php
//サムネイル使用可
add_theme_support( 'post-thumbnails' );

/* 投稿内の画像を相対パスに */
function delete_domain_from_attachment_url( $url ) {
 if ( preg_match( '/^http(s)?:\/\/[^\/\s]+(.*)$/', $url, $match ) ) {
 $url = $match[2];
 }
 return $url;
}
add_filter( 'wp_get_attachment_url', 'delete_domain_from_attachment_url' );

/* 投稿内の画像を相対パスに */
function imagepassshort($arg) {
$content = str_replace('"img/', '"' . get_bloginfo('template_directory') .'/img/', $arg);
return $content;
}
add_action('the_content', 'imagepassshort');

/* 投稿内のショートコード有効 */
function my_php_Include($params = array()) {
    extract(shortcode_atts(array('file' => 'default'), $params));
    ob_start();
    include(STYLESHEETPATH . "/$file.php");
    return ob_get_clean();
}
add_shortcode('php', 'my_php_Include');

add_filter('the_content', 'wpautop_filter', 9);
function wpautop_filter($content) {
  global $post;
  $remove_filter = false;
 
  $arr_types = array('page'); //自動整形を無効にする投稿タイプを記述 ＝固定ページ
  $post_type = get_post_type( $post->ID );
  if (in_array($post_type, $arr_types)){
                $remove_filter = true;
        }
 
  if ( $remove_filter ) {
    remove_filter('the_content', 'wpautop');
    remove_filter('the_excerpt', 'wpautop');
  }
 
  return $content;
}






?>