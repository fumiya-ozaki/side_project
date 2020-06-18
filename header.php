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
        <?php
          wp_nav_menu( array(
          'theme_location' => 'mobile_global'
          ));
        ?>
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
            <div class="header-left"><a class="link-logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt=""></a></div>
              <ul class="header-center">
                <?php
                  wp_nav_menu( array(
                  'theme_location' => 'place_global'
                  ));
                ?>
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
        </header>
