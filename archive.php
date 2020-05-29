<?php
/*
Template Name: archive
*/
?>


<?php get_header(); ?>  <!--header-import-->

    <main class="news">
      <div class="con-container content-width content-height">
        <div class="archive-title font-lg">Works / News Archives</div>
        <ul class="category-lists">
          <lic class="category-list hover-Uline">タグ1</lic>
          <lic class="category-list hover-Uline">タグ2</lic>
          <lic class="category-list hover-Uline">タグ3</lic>
          <lic class="category-list hover-Uline">タグ4</lic>
          <lic class="category-list hover-Uline">タグ5</lic>
        </ul>
        <ul class="news-lists">
          <li class="news-list">
            <a class="news-link" href="#">
              <span class="conL"><p>カテゴリー</p><date>日付</date></span>
              <span class="conC"><p>テキストテキストテキストテキストテキスト</p></span>
              <span class="conR"><img class="news-image" src="./img/business_01.jpeg" alt="写真"></span>
            </a>
          </li>
          <li class="news-list">
            <a class="news-link" href="#">
              <span class="conL"><p>カテゴリー</p><date>日付</date></span>
              <span class="conC"><p>テキストテキストテキストテキストテキスト</p></span>
              <span class="conR"><img class="news-image" src="./img/business_02.jpeg" alt="写真"></span>
            </a>
          </li>
          <li class="news-list">
            <a class="news-link" href="#">
              <span class="conL"><p>カテゴリー</p><date>日付</date></span>
              <span class="conC"><p>テキストテキストテキストテキストテキスト</p></span>
              <span class="conR"><img class="news-image" src="./img/business_03.jpeg" alt="写真"></span>
            </a>
          </li>
          <li class="news-list">
            <a class="news-link" href="#">
              <span class="conL"><p>カテゴリー</p><date>日付</date></span>
              <span class="conC"><p>テキストテキストテキストテキストテキスト</p></span>
              <span class="conR"><img class="news-image" src="./img/business_04.jpeg" alt="写真"></span>
            </a>
          </li>
        </ul>
      </div>
    </main>

<?php get_footer(); //footerimport