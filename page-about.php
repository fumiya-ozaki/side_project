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
    <span class="sticky-container">
     
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
        <div class="what-con about-con1">
          <p class="what-con-title font-lg">WORK</p>
            <!-- <button class="what-con__btn" id="modalOpen1">MORE</button> -->
          <span class="text-wrapper">
            <span class="what-conL">
              <p class="textL"><i class="fas fa-pen-nib" data-fa-transform="shrink-5"></i> design</p>
              <p class="textL"><i class="fas fa-fill-drip" data-fa-transform="shrink-5"></i> color</p>
              <p class="textL"><i class="fas fa-tools" data-fa-transform="shrink-5"></i> maint</p>
              <p class="textL"><i class="fas fa-cogs" data-fa-transform="shrink-5"></i> exp.</p>
            </span>
            <span class="what-conR">
              <p class="textR">シンプルで美しく機能的なデザイン</p>
              <p class="textR">イメージとロジックで効果的な配色</p>
              <p class="textR">保守・運用コストのかからない制作</p>
              <p class="textR">拡張できるコーディング</p>
            </span>
          </span>

        </div>
        <div class="what-con about-con2">
          <p class="title font-lg">SKILL</p>
          <!-- <button class="what-con__btn" id="modalOpen2">MORE</button> -->
          <span class="text-wrapper">
            <span class="what-conL">
              <p class="textL"><i class="fab fa-html5" data-fa-transform="shrink-5"></i> HTML</p>
              <p class="textL"><i class="fab fa-css3-alt" data-fa-transform="shrink-5"></i> CSS(SCSS)</p>
              <p class="textL"><i class="fab fa-js" data-fa-transform="shrink-5"></i> JavaScript</p>
              <p class="textL"><i class="fab fa-vuejs" data-fa-transform="shrink-5"></i> Vue.js</p>
              <p class="textL"><i class="fab fa-wordpress" data-fa-transform="shrink-5"></i> Wordpress</p>
              <p class="textL"><i class="fab fa-github-square" data-fa-transform="shrink-5"></i> Git etc</p>
            </span>
            <span class="what-conR">
              <p class="textR">テキストテキスト</p>
              <p class="textR">テキストテキスト</p>
              <p class="textR">テキストテキスト</p>
              <p class="textR">テキストテキスト</p>
              <p class="textR">テキストテキスト</p>
              <p class="textR">テキストテキスト</p>
            </span>
          </span>

        </div>
        <div class="what-con about-con3">
          <p class="title font-lg">TOOL</p>
          <!-- <button class="what-con__btn" id="modalOpen3">MORE</button> -->
          <span class="text-wrapper">
            <span class="what-conL">
              <p class="textL"><i class="fas fa-laptop" data-fa-transform="shrink-5"></i> PC</p>
              <p class="textL"><i class="fas fa-edit" data-fa-transform="shrink-5"></i> editor</p>
              <p class="textL"><i class="fas fa-camera-retro" data-fa-transform="shrink-5"></i>camera</p>
            </span>
            <span class="what-conR">
              <p class="textR">MacBook Pro (13-inch)</p>
              <p class="textR">VS CODE</p>
              <p class="textR">Sony</p>
            </span>
          </span>

        </div>
        <div class="what-con about-con4">
          <p class="title font-lg">HOBBY</p>
          <!-- <button class="what-con__btn" id="modalOpen4">MORE</button> -->
          <span class="text-wrapper">
            <span class="what-conL">
              <p class="textL"><i class="fas fa-golf-ball" data-fa-transform="shrink-5"></i> golf</p>
              <p class="textL"><i class="fas fa-music" data-fa-transform="shrink-5"></i> music</p>
              <p class="textL"><i class="fas fa-film" data-fa-transform="shrink-5"></i>  movie</p>
              <p class="textL"><i class="fas fa-book" data-fa-transform="shrink-5"></i> book</p>
              <p class="textL"><i class="fas fa-graduation-cap" data-fa-transform="shrink-5"></i> english</p>
            </span>
            <span class="what-conR">
              <p class="textR">永遠のアマチュアゴルファー</p>
              <p class="textR">20代はプレーヤー30代はリスナー</p>
              <p class="textR">サスペンスが大好物</p>
              <p class="textR">ビジネス書 / 小説</p>
              <p class="textR">上手になりたい</p>
            </span>
          </span>
          <div class="modal-area content-width" id="modalArea">

            <!-- <div class="modal" id="modal1">
              <p>・デザイン</p>
              <p>４原則（近接・整列・反復・コントラスト）を大切にしています</p>
              <p>優れたデザインはひと目で情報を伝えるためです</p>
              <p>要素やコンテンツの意味やまとまりを整え</p>
              <p>人間の目の動きと負担を最小限にすることで</p>
              <p>ユーザーへ情報を早く的確に伝えます</p>

              <P>・色</P>
              <P>イメージや好みなどの感覚と</P>
              <P>色相環や色彩心理などの論理を</P>
              <P>調和させた配色を大切にしています</P>

              <p>・保守性</p>
              <p>修正に負担がかからない制作を大切にしています</p>
              <p>保守と安定を担保した制作をいたします</p>
              
              <p>・拡張性</p>
              <p>ビジネスの拡大に沿って拡張可能な制作をいたします</p>
              <p>コンテンツの追加や変更に強く</p>
              <p>リリースに負担がかからない制作をいたします</p>

            </div>

            <div class="modal" id="modal2">
              <p>モーダル2</p>
              <p>これはモーダル２です</p>
            </div>

            <div class="modal" id="modal3">
              <p>モーダル3</p>
              <p>これはモーダル３です</p>
            </div>
            <div class="modal" id="modal4">
              <p>モーダル4</p>
              <p>これはモーダル４です</p>
            </div>
            <a id="modalClose" class="modalClose mobile-menu__btn">
              <span></span>
              <span></span>
            </a>
          </div>
          <div class="mask" id="mask"></div> -->

        </div>
        <div class="under-arrow">
          <div class="arrow1"></div>
        </div>
      </main>
    </section>

    <section id="whosMe" class="about-who-content content-width content-height2">
      <p class="prof-title font-lg">Profile</p>
      <span class="prof-con-wrapper">
        <div class="prof-conL">
          <div class="prof-conL-wrapper">
            <img class="prof-picture" src="<?php echo get_template_directory_uri();?>/img/about_profile.jpeg" alt="写真">
            <p class="prof-name font-md">尾崎 文哉 - OZAKI fumiya -</p>
            <p class="prof-text">1983年 東京出身 学習院大学卒業後<br>独学でWEBデザインを学び今に至る<br>主にフロントエンドの開発が得意</p>
          </div>
        </div>
        <div class="prof-conR history">
          <p class="history-title font-md">at present ...</p>
          <span class="history-wrapper">
            <div class="history-date">
              <p>1980.4</p>
              <p>2006.3</p>
              <p>2006.4</p>
              <p>2011.11</p>
              <p>2016.5 〜</p>

            </div>
            <div class="history-text">
              <p>東京都大田区に生まれる</p>
              <p>学習院卒大学 経済学部 経営学科卒業</p>
              <p>ソニーマーケティング株式会社</p>
              <p>LG electronics japan</p>
              <p>現在に至る</p>
            </div>
          </span>
        </div>
      </span>
      <div class="under-arrow">
        <div class="arrow1"></div>
      </div>
    </section>

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

    <?php get_footer(); //footerimport