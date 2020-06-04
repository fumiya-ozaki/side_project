<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?><!--headerfookpoint-->
    <title>Side project</title>
  </head>
  <body <?php body_class(); ?>> <!--bodystartpoint-->
  <?php wp_body_open(); ?> <!--bodyfookpoint-->

    <!-- mobile-slide-link -->
    <div id="global-container">
      <nav class="mobile-menu">
        <ul class="mobile-menu__main">
          <li class="mobile-menu__item">
            <a class="mobile-menu__link" href="<?php echo home_url(); ?>">
              <span class="main-title">HOME</span>
              <span class="sub-title">トップへ戻る</span>
            </a>
          </li>
          <li class="mobile-menu__item">
            <a class="mobile-menu__link" href="<?php echo home_url('/works'); ?>">
              <span class="main-title">WORKS</span>
              <span class="sub-title">実績</span>
            </a>
          </li>
          <li class="mobile-menu__item">
          <a class="mobile-menu__link" href="<?php echo home_url('/news'); ?>">
              <span class="main-title">NEWS</span>
              <span class="sub-title">お知らせ</span>
            </a>
          </li>
          <li class="mobile-menu__item">
            <a class="mobile-menu__link" href="<?php echo home_url('/blog'); ?>">
              <span class="main-title">BLOG</span>
              <span class="sub-title">ブログ</span>
            </a>
          </li>
          <li class="mobile-menu__item">
            <a class="mobile-menu__link" href="<?php echo home_url('/about'); ?>">
              <span class="main-title">ABOUT</span>
              <span class="sub-title">ご紹介</span>
            </a>
          </li>
          <li class="mobile-menu__item">
            <a class="mobile-menu__link" href="<?php echo home_url('/demo')?>">
              <span class="main-title">DEMO</span>
              <span class="sub-title">デモページ</span>
            </a>
          </li>
          <li class="mobile-menu__item">
            <a class="mobile-menu__link" href="<?php echo home_url('/contact'); ?>">
              <span class="main-title">CONTACT</span>
              <span class="sub-title">お問い合わせ</span>
            </a>
          </li>
        </ul>
      </nav>

      <div id="container">
        <div class="mobile-menu__cover"></div>
        <header class="grobal-header font-md">
          <!-- mobile-header-btn-->
          <button id="mobile-menu-btn" class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
          
          <!-- main-header -->
          <nav class="header-container content-width">
            <div class="header-left"><a class="link-logo" href="<?php echo home_url(); ?>">GO home</a></div>
            <ul class="header-center">
            <!-- メニューPHP化 -->
            <?php /* wp_nav_menu( array(
              'theme_location'=>'place_global', 
              'container'     =>'', 
              'menu_class'    =>'',
              'items_wrap' => '%3$s',//<ul>を出力しない
            ));*/ ?>
              <li class="link-text hover-Uline"><a href="<?php echo home_url('works'); ?>">WORKS</a></li>
              <li class="link-text hover-Uline"><a href="<?php echo home_url('news'); ?>">NEWS</a></li>
              <li class="link-text hover-Uline"><a href="<?php echo home_url('blog'); ?>">BLOG</a></li>
              <li class="link-text hover-Uline"><a href="<?php echo home_url('about'); ?>">ABOUT</a></li>
              <li class="link-text hover-Uline"><a href="<?php echo home_url('demo'); ?>">DEMO</a></li>
              <li class="link-text hover-Uline"><a href="<?php echo home_url('contact'); ?>">CONTACT</a></li>
            </ul>
            <div class="header-right">
              <div class="option-icon iconL hover-Uline">
                <span class="language-selector" id="langSelector">
                  <i class="fas fa-globe fa-sm"></i> language
                </span>
                <div class="language-box" id="langBox">
                  <a class="language-text" href="#">Japanese</a>
                  <a class="language-text" href="#">English</a>
                </div>
              </div>
              <div class="option-icon iconR hover-Uline">
                <span id="searchBtn">
                  <i class="fas fa-search fa-sm"></i> search
                </span>
                <form class="search-form fixed" id="searchForm" method="get" role="search"  action="<?php echo esc_url(home_url());?>">
                  <div class="search-box">
                    <input class="search-input" type="text" name="s" placeholder="キーワードを入力">
                    <button type="submit" class="button button-submit"><i class="fas fa-search fa-sm"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </nav>

          <div id="scrollValue"></div> <!--スクロール値デバッグ用-->

        </header>
