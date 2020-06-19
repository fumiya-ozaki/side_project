<?php
/*
Template Name: about
*/
?>

<?php get_header(); ?>  <!--header-import-->

    <section class="about-main-visual">
      <div class="bg-img">
        <p class="about-main-title font-lg">About me...<br>What's me...<br>Who's me...</p>
        <div class="under-arrow">
          <div class="arrow1"></div>
        </div>
      </div>
    </section>
    <div class="sticky-container"><!--stickystart-->

      <div class="about-nav ">
        <ul class="about-nav-lists font-md content-width">
          <li class="about-nav-list"><a class="a-nav-text" href="#whatsMe"><span class="hover-Uline">What's me</span></a></li>
          <li class="about-nav-list"><a class="a-nav-text" href="#whosMe"><span class="hover-Uline">Who's me</span></a></li>
          <li class="about-nav-list"><a class="a-nav-text" href="#aboutGallery"><span class="hover-Uline">Gallery</span></a></li>
        </ul>
      </div>

      <section id="whatsMe" class="about-what-content content-width content-height2">
        <p class="about-what-title font-lg">What's me</p>
        <main class="about-what-grid">
          <span id="scrollTrigger1"></span>
          <div class="what-con about-con1" id="scrollelement1">
            <p class="what-con-title font-lg">WORK</p>
            <div class="text-wrapper">
              <ul class="what-conL">
                <li class="textL"><i class="fas fa-pen-nib" data-fa-transform="shrink-5"></i> design</li>
                <li class="textL"><i class="fas fa-fill-drip" data-fa-transform="shrink-5"></i> color</li>
                <li class="textL"><i class="fas fa-tools" data-fa-transform="shrink-5"></i> maint</li>
                <li class="textL"><i class="fas fa-cogs" data-fa-transform="shrink-5"></i> exp.</li>
              </ul>
              <ul class="what-conR">
                <li class="textR">シンプルで美しく機能的なデザイン</li>
                <li class="textR">イメージとロジックで効果的な配色</li>
                <li class="textR">保守・運用コストのかからない制作</li>
                <li class="textR">拡張できるコーディング</li>
              </ul>
            </div>
          </div>
          <span id="scrollTrigger2"></span>
          <div class="what-con about-con2" id="scrollelement2">
            <p class="title font-lg">SKILL</p>
            <div class="text-wrapper">
              <ul class="what-conL">
                <li class="textL"><i class="fab fa-html5" data-fa-transform="shrink-5"></i> HTML</li>
                <li class="textL"><i class="fab fa-css3-alt" data-fa-transform="shrink-5"></i> CSS(SCSS)</li>
                <li class="textL"><i class="fab fa-js" data-fa-transform="shrink-5"></i> JavaScript</li>
                <li class="textL"><i class="fab fa-vuejs" data-fa-transform="shrink-5"></i> Vue.js</li>
                <li class="textL"><i class="fab fa-wordpress" data-fa-transform="shrink-5"></i> Wordpress</li>
                <li class="textL"><i class="fab fa-github-square" data-fa-transform="shrink-5"></i> Git etc</li>
              </ul>
              <ul class="what-conR">
                <li class="textR">★★★★★★★★★★★</li>
                <li class="textR">★★★★★★★★★★★</li>
                <li class="textR">★★★★★★★★★★</li>
                <li class="textR">★★★★★★★★</li>
                <li class="textR">★★★★★★★★★★</li>
                <li class="textR">★★★★★★★★★★★</li>
              </ul>
            </div>
          </div>
          <span id="scrollTrigger3"></span>
          <div class="what-con about-con3" id="scrollelement3">
            <p class="title font-lg">TOOL</p>
            <div class="text-wrapper">
              <ul class="what-conL">
                <li class="textL"><i class="fas fa-laptop" data-fa-transform="shrink-5"></i> PC</li>
                <li class="textL"><i class="fas fa-edit" data-fa-transform="shrink-5"></i> editor</li>
                <li class="textL"><i class="fas fa-camera-retro" data-fa-transform="shrink-5"></i>camera</li>
                <li class="textL"><i class="fas fa-microphone-alt" data-fa-transform="shrink-5"></i>mic</li>
                <li class="textL"><i class="fas fa-guitar" data-fa-transform="shrink-5"></i>guiter</li>
              </ul>
              <ul class="what-conR">
                <li class="textR">MacBook Pro (13-inch)</li>
                <li class="textR">VS CODE</li>
                <li class="textR">Sony NEX-5N</li>
                <li class="textR">Under consideration</li>
                <li class="textR">Fender Telecaster</li>
              </ul>
            </div>
          </div>
          <span id="scrollTrigger4"></span>
          <div class="what-con about-con4" id="scrollelement4">
            <p class="title font-lg">HOBBY</p>
            <div class="text-wrapper">
              <ul class="what-conL">
                <li class="textL"><i class="fas fa-golf-ball" data-fa-transform="shrink-5"></i> golf</li>
                <li class="textL"><i class="fas fa-music" data-fa-transform="shrink-5"></i> music</li>
                <li class="textL"><i class="fas fa-film" data-fa-transform="shrink-5"></i>  movie</li>
                <li class="textL"><i class="fas fa-book" data-fa-transform="shrink-5"></i> book</li>
                <li class="textL"><i class="fas fa-graduation-cap" data-fa-transform="shrink-5"></i> english</li>
              </ul>
              <ul class="what-conR">
                <li class="textR">永遠のアマチュアゴルファー</li>
                <li class="textR">20代はプレーヤー30代はリスナー</li>
                <li class="textR">サスペンスが大好物</li>
                <li class="textR">ビジネス書 / ミステリー小説</li>
                <li class="textR">上手になりたい</li>
              </ul>
            </div>
          </div>
          <div class="under-arrow">
            <div class="arrow1"></div>
          </div>
        </main>
      </section>
      <?php get_template_part("sec","about");?>
    <section id="aboutGallery" class="about-gallery content-width content-height2">
      <p class="about-gallery-title font-lg">Gallery</p>
      <ul class="about-gallery-content">
        <li class="g-picture picture1">
          <p class="g-picture-text bg-zoom-content">
            2020-01-01<br>
            テキストテキスト
          </p>
        </li>
        <li class="g-picture picture2">
          <p class="g-picture-text bg-zoom-content">
            2020-01-01<br>
            テキストテキスト<br>
            
          </p>
        </li>
        <li class="g-picture picture3">
          <p class="g-picture-text bg-zoom-content">
            2020-01-01<br>
            テキストテキスト<br>
          </p>
        </li>
      </ul>
    </section>
    </div><!--stickyend-->

    <?php get_footer(); //footerimport