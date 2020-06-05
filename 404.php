<?php get_header(); ?>  <!--header-import-->

<main class="e404">
  <div class="error-container content-width content-height">
    <p class="error-title font-lg">SORRY NOT FOUND 404</p>
    <p class="error-content">
      ページが見つかりません<br>
      お探しのページは、移動または<br>削除された可能性があります<br>
      サイト内検索、またはヘッダーリンクより<br>目的のページをお探しください<br>
      <a class="top-link" href="<?php echo home_url(); ?>">トップへ戻る</a>
    </p>
    

    <form class="search-form" method="get" role="search"  action="<?php echo esc_url( home_url() );?>">
      <div class="search-box">
        <input type="text" name="s" class="search-input" placeholder="キーワードを入力" value="<?php the_search_query();?>">
        <button type="submit" class="button button-submit"><i class="fas fa-search fa-sm"></i></button>
      </div>  
    </form>  
  
  </div>
</main>


<?php get_footer(); //footerimport