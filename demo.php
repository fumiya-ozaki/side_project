<?php
/*
Template Name: demo
*/
?>

<?php get_header(); ?>  <!--header-import-->
<main class="demo content-width">
  <h1 class="font-lg">DEMO</h1>
  <p>制作のデモコンテンツです</p>

    <!--sliderdemostart-->
  <section class="demo-container">  
    <p class="demo-con-title font-lr">スライダー</p>

    <div class="demo-section slider-area">
      <div class="SAwrapper">
        <div class="SAwrapper__left">
          <h1>スクロールスライダー</h1>
          <p>定番のスライダー</p>
          <p>見やすく安定感があります</p>
        </div>
        <div class="SAwrapper__right">
          <div class="swiper-container" id="swiper-1">
            <div class="swiper-wrapper">
              <div class="swiper-slide slide1"></div>
              <div class="swiper-slide slide2"></div>
              <div class="swiper-slide slide3"></div>
              <div class="swiper-slide slide4"></div>
              <div class="swiper-slide slide5"></div>
              <div class="swiper-slide slide6"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="demo-section slider-area">
      <div class="SAwrapper">
        <div class="SAwrapper__left">
          <h1>マルチスライダー</h1>
          <p>複数写真をスライドします</p>
          <p>商品リストやメニューにおすすめです</p>
        </div>
        <div class="SAwrapper__right">
          <div class="swiper-container" id="swiper-5">
            <div class="swiper-wrapper">
              <div class="swiper-slide slide1"></div>
              <div class="swiper-slide slide2"></div>
              <div class="swiper-slide slide3"></div>
              <div class="swiper-slide slide4"></div>
              <div class="swiper-slide slide5"></div>
              <div class="swiper-slide slide6"></div>
            </div>
            <div class="swiper-scrollbar"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="demo-section slider-area">
      <div class="SAwrapper">
        <div class="SAwrapper__left">
          <h1>フェードスライダー</h1>
          <p>写真が透過しながら入れ替わります</p>
          <p>柔らかく優しい印象です</p>
        </div>
        <div class="SAwrapper__right">
          <div class="swiper-container" id="swiper-2">
            <div class="swiper-wrapper">
              <div class="swiper-slide slide1"></div>
              <div class="swiper-slide slide2"></div>
              <div class="swiper-slide slide3"></div>
              <div class="swiper-slide slide4"></div>
              <div class="swiper-slide slide5"></div>
              <div class="swiper-slide slide6"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="demo-section slider-area">
      <div class="SAwrapper">
        <div class="SAwrapper__left">
          <h1>キュービックスライダー</h1>
          <p>立方体が回転するように入れ替わります</p>
          <p>立体感のあるサイトにおすすめです</p>
        </div>
        <div class="SAwrapper__right">
          <div class="swiper-container" id="swiper-3">
            <div class="swiper-wrapper">
              <div class="swiper-slide slide1"></div>
              <div class="swiper-slide slide2"></div>
              <div class="swiper-slide slide3"></div>
              <div class="swiper-slide slide4"></div>
              <div class="swiper-slide slide5"></div>
              <div class="swiper-slide slide6"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="demo-section slider-area">
      <div class="SAwrapper">
        <div class="SAwrapper__left">
          <h1>フリップスライダー</h1>
          <p>カードをめくるようにスライドします</p>
          <p>スタイリッシュな印象です</p>
        </div>
        <div class="SAwrapper__right">
          <div class="swiper-container" id="swiper-4">
            <div class="swiper-wrapper">
              <div class="swiper-slide slide1"></div>
              <div class="swiper-slide slide2"></div>
              <div class="swiper-slide slide3"></div>
              <div class="swiper-slide slide4"></div>
              <div class="swiper-slide slide5"></div>
              <div class="swiper-slide slide6"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="demo-section slider-area">
      <div class="SAwrapper">
        <div class="SAwrapper__left">
          <h1>３Dマルチスライダー</h1>
          <p>立体スライドのマルチスライダーです</p>
          <p>メインビジュアルにも使えます</p>
        </div>
        <div class="SAwrapper__right">
          <div class="swiper-container" id="swiper-6">
            <div class="swiper-wrapper">
              <div class="swiper-slide slide1"></div>
              <div class="swiper-slide slide2"></div>
              <div class="swiper-slide slide3"></div>
              <div class="swiper-slide slide4"></div>
              <div class="swiper-slide slide5"></div>
              <div class="swiper-slide slide6"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--sliderdemoend-->

  <!--charanimationstart-->
  <section class="demo-container play-ground">
    <p class="demo-con-title font-lr">アニメーション</p>
    <div class="demo-section animation-area">
      <div class="animation-char" id="aniChar1">
        Lorem ipsum dolor sit amet,consectetur
      </div>
      <div class="animation-char" id="aniChar2">
        adipiscing elit, sed do eiusmod tempor
      </div>
      <div class="animation-char" id="aniChar3">
        <div class="block-animation">incididunt</div>
        <div class="block-animation">ut</div>
        <div class="block-animation">labore</div>
        <div class="block-animation">et</div>
        <div class="block-animation">dolore</div>
        <div class="block-animation">magna</div>
        <div class="block-animation">aliqua</div>
      </div>
    </div>
    <p>文字アニメーションサンプルです</p>
    <p>段落/単語/文字などアニメーション単位や</p>
    <p>スピード/イージング/フェードなど</p>
    <p>ご希望に合わせ対応可能です</p>
    <div class="playback_controls_row">
      <a href="#0" class="playbackButton playButton">Play</a>
      <a href="#0" class="playbackButton pauseButton">Pause</a>
      <a href="#0" class="playbackButton resumeButton">Resume</a>
      <a href="#0" class="playbackButton reverseButton">Reverse</a>
      <a href="#0" class="playbackButton slowButton">Slow</a>
      <a href="#0" class="playbackButton fastButton">Fast</a>
      <a href="#0" class="playbackButton seekButton">Seek</a>
      <a href="#0" class="playbackButton progressButton">Progress</a>
    </div>
  </section>
  <!--charanimationstart-->

  <section class="demo-container scroll-area">
    <p class="demo-con-title font-lr">スクロール</p>

    <div id="intro">
      <div class="content">
        <div class="img-logo"></div>
        <h1>The title</h1>
        <p>
          Short and sharp ScrollAnimation demos,<br>
        </p>
      </div>
    </div>

    <div class="main-container" id="main">

      <div id="project01" class="project">
        <div class="img"></div>
        <h1>Project title</h1>
        <p class=info>
          Lorem ipsum dolor sit amet, consectetur<br>
          adipiscing elit, sed do eiusmod tempor incididunt<br>
          ut labore et dolore magna aliqua. Ut enim ad<br>
          minim veniam, quis nostrud exercitation ullamco<br>
          laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>
      
      <div id="project02" class="project">
        <div class="img"></div>
        <h1>Project title</h1>
        <p class=info>
          Lorem ipsum dolor sit amet, consectetur<br>
          adipiscing elit, sed do eiusmod tempor incididunt<br>
          ut labore et dolore magna aliqua. Ut enim ad<br>
          minim veniam, quis nostrud exercitation ullamco<br>
          laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>
      
      <div id="project03" class="project">
        <div class="img"></div>
        <h1>Project title</h1>
        <p class=info>
          Lorem ipsum dolor sit amet, consectetur<br>
          adipiscing elit, sed do eiusmod tempor incididunt<br>
          ut labore et dolore magna aliqua. Ut enim ad<br>
          minim veniam, quis nostrud exercitation ullamco<br>
          laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>
    </div>
  </section>


</main>
<?php get_footer(); //footerimport


