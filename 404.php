<?php get_header(); ?>  <!--header-import-->

<main class="404">
  <div class="error-container content-width content-height">
    <p class="font-lg">SORRY 404</p>
    <h1>ページが見つかりません</h1>
    <p>お探しのページは、移動または削除された可能性があります</p>
    <p>サイト内検索、またはフッターリンクより目的のページをお探しください</p>
    <form class="search-form" method="get" role="search"  action="<?php echo esc_url( home_url() );?>">
      <div class="search-box">
        <input type="text" name="s" class="search-input" placeholder="キーワードを入力" value="<?php the_search_query();?>">
          <button type="submit" class="button button-submit"><i class="fas fa-search fa-sm"></i></button>
      </div>  
    </form>  
  </div>
</main>


<?php get_footer(); //footerimport