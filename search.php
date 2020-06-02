<?php get_header(); ?>  <!--header-import-->
<main class="news">
  <div class="con-container content-width content-height">
    <p class="font-lg">
      SEARCH
    </p>
    <form class="search-form" method="get" role="search"  action="<?php echo esc_url( home_url() );?>">
      <div class="search-box">
        <input type="text" name="s" class="search-input" placeholder="キーワードを入力" value="<?php the_search_query();?>">
        <button type="submit" class="button button-submit"><i class="fas fa-search fa-sm"></i></button>
      </div>  
    </form>  

    <div class="searchResult-wrapper">
      <?php if ( get_search_query() ): ?>
        <div class="serchResult-head">
          <h1><?php the_search_query();?>の検索結果</h1>
          <div class="total"><?php echo $wp_query->found_posts; ?>件</div>
        </div>  
      <?php endif; ?>  
    </div>

    <?php if(have_posts() && get_search_query()) :
      while(have_posts()): the_post();?>
        <ul class="news-lists">
          <li class="news-list">
            <a class="news-link" href="<?php the_permalink(); ?>">
              <span class="conL">
                <p>
                  <span class="tab <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
                </p>
                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time( get_option( 'date_format' )); ?></time>
              </span>
              <span class="conC"><p><?php the_title(); ?></p></span>
              <span class="conR">
                <?php the_post_thumbnail('medium'); ?>
              </span>
            </a>
          </li>
        </ul>
      <?php endwhile;?>
      
      <div class="pager">
        <ul class="pagerList">
          <?php
            if(function_exists( 'page_navi' )):
              page_navi();
            endif;
          ?> 
        </ul>
      </div>

    <?php elseif(! get_search_query() ):?>
      <p>検索ワードが入力されていません</p>
    <?php else: ?>
      <p>該当する記事は見つかりませんでした</p>
    <?php endif; ?>
  </div>

</main>

<?php get_footer(); //footerimport