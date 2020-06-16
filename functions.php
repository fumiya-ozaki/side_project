<?php
// head-import
function theme_script(){
  $version = filemtime( get_template_directory() . '/style.css' );
  // $version = wp_get_theme()->get( 'Version' );//style.css記述のversionで管理する
  // $version = time();//バージョンをタイムスタンプにする(開発用)
  wp_enqueue_style('theme-reset', get_template_directory_uri() . '/styles/venders/_reset.css', array(),$version ); //resetcss
  wp_enqueue_style('theme-style', get_template_directory_uri() . '/styles/style.min.css', array(),$version ); //stylecss 
  wp_enqueue_style('responsive-style', get_template_directory_uri() . '/styles/responsive.min.css', array(),$version ); //responsivecss 
  wp_enqueue_script('font-awsome', get_template_directory_uri() . '/scripts/venders/fontawesome.js', array(),$version ); //fontawesome 
  wp_deregister_script( 'jquery' ); //defaultjqueryreset
  wp_deregister_script( 'jquery-migrate' ); //defaultjqueryreset
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), $version ); //latestjquery
  wp_enqueue_script('mainjquery', get_template_directory_uri() . '/scripts/jquery.js', array('jquery'),$version ); //jquery
  wp_enqueue_script('main', get_template_directory_uri() . '/scripts/main.js', array('jquery'),$version ); //mainjs
  if(is_page( 'about' )){ //aboutページの分岐
    wp_enqueue_script('about', get_template_directory_uri() . '/scripts/about.js', array(),$version ); //aboutjs
  }else if(is_page( 'demo' )){ //demoページの分岐
    wp_enqueue_style('swiper-css','https://unpkg.com/swiper/css/swiper.min.css', array(),$version ); //swipercss 
    wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper/js/swiper.min.js', array(),$version ); //swiper
    wp_enqueue_script( 'GSAP', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js', array('jquery'),$version ); //GSAP
    wp_enqueue_script( 'scrollmagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', array('jquery'),$version ); //scrollmagic
    wp_enqueue_script( 'scrollmagic-debug', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js', array('jquery'),$version ); //scrollmagicdebug
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
      'mobile_global' => 'モバイル', //“メニュー英語名” =>”メニュー名”,
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

  //抜粋の省略表示変更
  function cms_excerpt_more() {
    return '...';
  }
  add_filter( 'excerpt_more', 'cms_excerpt_more' );
  
  //デフォルトの抜粋文字数を80へ変更
  function cms_excerpt_length() {
    return 80;
  }
  add_filter( 'excerpt_mblength', 'cms_excerpt_length' );
  
  // 抜粋機能を固定ページに使えるよう設定
  // add_post_type_support( 'page', 'excerpt' );
  
  //関数で抜粋文に文字数を渡して処理
  function get_flexible_excerpt( $number ) {
    $value = get_the_excerpt();
    $value = wp_trim_words( $value, $number, '...' );
    return $value;
  }

  // カスタム投稿タイプの追加
  function cpt_register_test() {
    $labels = [
      "name"          =>"コラム", //管理画面などで表示する名前
      "singular_name" =>"コラム", //管理画面などで表示する名前（単数形）
      "menu_name"     =>"コラム", //管理画面メニューで表示する名前（nameより優先される）
      "add_new_item"  =>"新しい投稿", //新規作成ページのタイトルに表示される名前
      "add_new"       =>"新規投稿", //新規作成ページのタイトルに表示される名前
      "new_item"      =>"投稿の追加", //一覧ページの新規追加ボタンのラベル？
      "edit_item"     =>"編集ページ", //編集ページのタイトルに表示される名前
      "view_item"     =>"編集", //編集ページの投稿を表示ボタンのラベル
      "search_item"   =>"テストの検索", //一覧ページの検索ボタンのラベル
      "not_found"     =>"見つかりません", //一覧ページに投稿が見つからないときの表示
      "not_found_in_trash"  =>"ゴミ箱にはありません" //ゴミ箱に何も入っていないときの表示
    ];
    $args = [
      "label"                 => "コラム",
      "labels"                => $labels,
      "description"           => "",//カスタム投稿タイプの説明
      "public"                => true,//ユーザーが内容を投稿する場合true(通常はtrue)
      "rest_base"             => "", //REST API使用時URLのベースとなる名前 (省略時はカスタム投稿タイプ名)
      "rest_controller_class" => "WP_REST_Posts_Controller", //REST API使用時処理するコントローラ名。基本省略でOK
      "has_archive"           => true, //アーカイブページを作成する(trueでindexページを作成)
      "delete_with_user"      => false,
      "exclude_from_search"   => false, //検索機能から検索した場合、検索対象にするかどうか
      "map_meta_cap"          => true, //WordPress が持つデフォルトのメタ権限処理を使用するかどうか。
      "hierarchical"          => true,//記事の階層構造を許可
      "rewrite"               => ["slug" => "column","with_front"=>true], //ページごとにパーマリンクを設定した場合有効にする
      "query_var"             => true, //個別ページのURLフォーマット（投稿タイプ名＝記事のスラッグ）
      "menu_position"         => 5,//管理画面左サイドメニュー表示位置
      "supports"              => ["title","editor","thumbnail"],//投稿時に使用できる投稿用パーツ指定
      "taxonomies"            => [],//投稿の分類に用いるカテゴリ・カスタムタグ（配列）
    ];
    register_post_type("column",$args);
  }
  add_action('init','cpt_register_test');


  function column_posts($query){
    //管理画面、メインクエリに鑑賞させない
    if(is_admin()||!$query->is_main_query()){
      return;
    }
    //カスタム投稿設定で作成した一覧ページ表示件数変更
    if($query->is_post_type_archive('column')){
      $query->set('posts_per_page','10');
      return;
    }
  }
  add_action('pre_get_posts','column_posts');

  //WordPressファイル更新日をバージョンに設定
  function default_style_version( $styles ) {
    $version = filemtime( get_template_directory() . '/style.css' );
    $styles->default_version = $version;
  }
  add_action( 'wp_default_styles', 'default_style_version' );



function theme_search_mark( $str ) {
	if ( is_search() ) {
		$search_query = trim( get_search_query() );
		$search_query = mb_convert_kana( $search_query, 'as', 'UTF-8' );
		if ( !empty( $search_query ) ) {
			$str = str_replace( $search_query, '<mark>' . $search_query . '</mark>', $str );
		}
	}
	return $str;
}
add_action( 'the_title',   'theme_search_mark' );
add_action( 'the_excerpt', 'theme_search_mark' );
