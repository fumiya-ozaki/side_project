<?php
/*
Template Name: demo
*/
?>
<?php get_header(); ?>  <!--header-import-->
<main class="demo content-width">

  <div class="top-content">
    <h1 class="top-content__title font-lg">DEMO</h1>
    <p class="top-content__text">制作のデモコンテンツです</p>
  </div>

    <!--sliderdemostart-->
  <section class="demo-container">  
    <p class="demo-con-title font-lr">スライダー</p>

    <div class="slider-area">
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

    <div class="slider-area">
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

    <div class="slider-area">
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

    <div class="slider-area">
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

    <div class="slider-area">
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

    <div class="slider-area">
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
  <section class="demo-container animation-area">
    <p class="demo-con-title font-lr">アニメーション</p>

    <div class="animation-area">
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

  <section class="demo-container tab-demo">
    <p class="demo-con-title font-lr">タブ</p>
    <div class="tab-demo__container">
      <ul class="tab-demo__label">
        <li><a href="#" class="active" data-id="tab-demo__info">タブ１</a></li>
        <li><a href="#" data-id="tab-demo__product">タブ２</a></li>
        <li><a href="#" data-id="tab-demo__contact">タブ３</a></li>
      </ul>

      <section class="tab-demo__content active" id="tab-demo__info">
        タブ１の情報
      </section>
      <section class="tab-demo__content" id="tab-demo__product">
        タブ２の情報
      </section>
      <section class="tab-demo__content" id="tab-demo__contact">
        タブ３の情報
      </section>
    </div>
  </section>

  <section class="demo-container acordion-demo">
    <p class="demo-con-title font-lr">アコーディオン</p>

    <p class="acordion-name">アコーディオン１（１つだけ開きます）</p>
    <dl class="acordion" id="acordion1">
      <dt class="acordion__title arrow">お問い合わせ１</dt>
      <dd class="acordion__content acordion__content1">
        回答１<br>
        お問い合わせ１の回答です
        <span class="closeBtn closeBtn1">閉じる</span>
      </dd>
      <dt class="acordion__title arrow">お問い合わせ２</dt>
      <dd class="acordion__content acordion__content1">
        回答2<br>
        お問い合わせ２の回答です
        <span class="closeBtn closeBtn1">閉じる</span>
      </dd>
      <dt class="acordion__title arrow">お問い合わせ３</dt>
      <dd class="acordion__content acordion__content1">
        回答3<br>
        お問い合わせ３の回答です
        <span class="closeBtn closeBtn1">閉じる</span>
      </dd>
    </dl>

    <p class="acordion-name">アコーディオン２ (複数開けられます)</p>
    <dl class="acordion" id="acordion2">
      <dt class="acordion__title arrow">お問い合わせ１</dt>
      <dd class="acordion__content acordion__content2">
        回答１<br>
        お問い合わせ１の回答です
        <span class="closeBtn closeBtn2">閉じる</span>

      </dd>
      <dt class="acordion__title arrow">お問い合わせ２</dt>
      <dd class="acordion__content acordion__content2">
        回答2<br>
        お問い合わせ２の回答です
        <span class="closeBtn closeBtn2">閉じる</span>
      </dd>
      <dt class="acordion__title arrow">お問い合わせ３</dt>
      <dd class="acordion__content acordion__content2">
        回答3<br>
        お問い合わせ３の回答です
        <span class="closeBtn closeBtn2">閉じる</span>
      </dd>
    </dl>

  </section>


</main>
<?php get_footer(); //footerimport



