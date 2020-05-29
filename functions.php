<?php
// head-import
function theme_script(){
  $version = wp_get_theme()->get( 'Version' );
  wp_enqueue_style('theme-reset', get_template_directory_uri() . '/styles/venders/_reset.css', array(),$version ); //resetcss OK
  wp_enqueue_style('theme-style', get_template_directory_uri() . '/styles/style.min.css', array(),$version ); //stylecss OK
  wp_enqueue_style('responsive-style', get_template_directory_uri() . '/styles/responsive.min.css', array(),$version ); //responsivecss OK
  wp_enqueue_script('fant-awsome', get_template_directory_uri() . '/scripts/all.js', array(),$version ); //fontawsome OK
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Kameron&family=Noto+Sans+JP:wght@100&display=swap', array(),'5.4.1'); //google font NG
}
add_action( 'wp_enqueue_scripts' ,'theme_script' );
// head-import

  // Add thumbnail function
  add_theme_support('post-thumbnails');
  add_image_size('thumbside', 300, 300, true);


  // Add title element.
  add_theme_support( 'title-tag' );
  // Add post-feed, comment-feed.
  add_theme_support( 'automatic-feed-links' );
  
  // Add custom menu function
  register_nav_menus( //add menu-function
  array(
  'place_global' => 'グローバル', //“メニュー英語名” =>”メニュー名”,
  'place_utility' => 'ユーティリティ',
  'place_sidebar' => 'サイドメニュー',
  'place_footer' => 'フッター',
  )
  );

  // 不要な情報の削除
  function theme_remove_head(){
    // Remove emoji DNS prefetch.
    add_filter( 'emoji_svg_url', '__return_false' );
    // Remove emoji script and style remove.
    remove_action( 'wp_head',             'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles',     'print_emoji_styles' );
    remove_action( 'admin_print_styles',  'print_emoji_styles' );
    
    // Remove WordPress version information.
    remove_action('wp_head', 'wp_generator' );
  
    // Remove wlwmanifest address.
    remove_action('wp_head', 'wlwmanifest_link');
  
    // Remove EditURI address.
    remove_action('wp_head', 'rsd_link');
  
    // Remove Short Link.
    remove_action('wp_head', 'wp_shortlink_wp_head');
  }
  add_action( 'after_setup_theme','theme_remove_head' );

  /* the_archive_title 余計な文字を削除 */
  add_filter( 'get_the_archive_title', function ($title) {
  if (is_category()) {
      $title = single_cat_title('',false);
  } elseif (is_tag()) {
      $title = single_tag_title('',false);
  } elseif (is_tax()) {
      $title = single_term_title('',false);
  } elseif (is_post_type_archive() ){
      $title = post_type_archive_title('',false);
  } elseif (is_date()) {
      $title = get_the_time('Y年n月');
  } elseif (is_search()) {
      $title = '検索結果：'.esc_html( get_search_query(false) );
  } elseif (is_404()) {
      $title = '「404」ページが見つかりません';
  } else {

}
  return $title;
});
  /* the_archive_title 余計な文字を削除 */
