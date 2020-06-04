<?php
// head-import
function theme_script(){
  $version = wp_get_theme()->get( 'Version' );
  wp_enqueue_style('theme-reset', get_template_directory_uri() . '/styles/venders/_reset.css', array(),$version ); //resetcss
  wp_enqueue_style('theme-style', get_template_directory_uri() . '/styles/style.min.css', array(),$version ); //stylecss 
  wp_enqueue_style('responsive-style', get_template_directory_uri() . '/styles/responsive.min.css', array(),$version ); //responsivecss 
  wp_enqueue_script('font-awsome', get_template_directory_uri() . '/scripts/venders/fontawesome.js', array(),$version ); //fontawesome 
  wp_deregister_script( 'jquery' ); //defaultjqueryreset
  wp_deregister_script( 'jquery-migrate' ); //defaultjqueryreset
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), $version ); //latestjquery
  wp_enqueue_script('main', get_template_directory_uri() . '/scripts/main.js', array('jquery'),$version ); //mainjs
  if(is_page( 'about' )){ //aboutページの分岐
    wp_enqueue_script('about', get_template_directory_uri() . '/scripts/about.js', array(),$version ); //aboutjs
  }else if(is_page( 'demo' )){ //demoページの分岐
    wp_enqueue_style('swiper-css','https://unpkg.com/swiper/css/swiper.min.css', array(),$version ); //swipercss 
    wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper/js/swiper.min.js', array(),$version ); //swiper
    wp_enqueue_script( 'GSAP', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js', array('jquery'),$version ); //swiper
    wp_enqueue_script('demo',get_template_directory_uri() . '/scripts/demo.js', array(),$version ); //demojs
  }
}
add_action( 'wp_enqueue_scripts' ,'theme_script' );
// head-import

// Add thumbnail function
add_theme_support('post-thumbnails');
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

  //省略の変更
  function cms_excerpt_more() {
    return '...';
  }
  add_filter( 'excerpt_more', 'cms_excerpt_more' );
  
  //デフォルトの抜粋文字数を80へ変更
  function cms_excerpt_length() {
    return 80;
  }
  add_filter( 'excerpt_mblength', 'cms_excerpt_length' ); //
  
  // 抜粋機能を固定ページに使えるよう設定
  add_post_type_support( 'page', 'excerpt' );
  
  //関数で抜粋文に文字数を渡して処理
  function get_flexible_excerpt( $number ) {
    $value = get_the_excerpt();
    $value = wp_trim_words( $value, $number, '...' );
    return $value;
  }