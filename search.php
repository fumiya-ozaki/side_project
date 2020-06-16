<?php get_header(); ?>  <!--header-import-->
<main class="news">
  <div class="con-container content-width content-height">
    <p class="font-lg">
      SEARCH
    </p>

    <form class="search-form fixed" method="get" role="search"  action="<?php echo esc_url( home_url() );?>">
      <div class="search-box">
        <input type="text" name="s" class="search-input" placeholder="キーワードを入力" value="<?php the_search_query();?>">
        <button type="submit" class="button button-submit"><i class="fas fa-search fa-sm"></i></button>
      </div>  
    </form>  

    <div class="searchResult-wrapper">
      <?php if ( get_search_query() ): ?>
        <div class="serchResult-head">
          <h1><?php the_search_query();?>の検索結果</h1>
          <span class="total"><?php echo $wp_query->found_posts; ?>件</span>
        </div>  
      <?php endif; ?>  
    </div>

    <?php if(have_posts() && get_search_query()) :
      while(have_posts()): the_post();?>
      <ul class="news-lists">
        <li class="news-list hover-scale">
          <a class="news-link" href="<?php the_permalink(); ?>"> <!--content-link-->
            <div class="conL">
              <?php if (get_post_type() === 'column') {?><!--カスタム投稿ページ条件分岐-->
                <div>
                  <span class="tab <?php echo esc_html(get_post_type_object(get_post_type())->name); ?>">
                    <?php echo esc_html(get_post_type_object(get_post_type())->name); ?>
                  </span>
                </div>
              <?php }else{ ?>
                <div>
                  <span class="tab <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
                    <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
                  </span>
                </div>
              <?php } ?>
              <time> <!--time-tag-->
                <span class="tab date" datetime="<?php the_time('Y-m-d'); ?>">
                  <?php the_time( get_option( 'date_format' )); ?><!--content-date-->
                </span>
              </time>
              <div>
                <span class="tab tag">
                  <?php $posttags = get_the_tags(); //タグの取得
                    if ($posttags) {
                      foreach($posttags as $tag) {
                        echo $tag->name . ' ';
                      }
                    }
                  ?>
                </span>
              </div>
            </div>
            <div class="conC">
              <p class="title"><?php the_title(); ?></p>
              <p class="content"><?php the_excerpt(); ?></p>
            </div><!--content-title-->
            <div class="conR">
              <?php if(has_post_thumbnail()){
                 the_post_thumbnail('medium');
              }else{?>
                <img class="no-image" src="<?php echo get_template_directory_uri();?>/img/business_06.jpeg" alt="thumbnail-pic">
                <?php }?>
            </div><!--content-image-->
          </a>
        </li>
      </ul>
      <?php endwhile;?>

      <?php 
        the_posts_pagination( array(
          'before_page_number' => '',
          'next_text'          => 'Next',
          'prev_text'          => 'Prev',
          'show_all'           => __return_true(),
          'screen_reader_text' => 'Post Navigation'
        ));
      ?>

    <?php elseif(! get_search_query() ):?>
      <p>検索ワードが入力されていません</p>
    <?php else: ?>
      <p>該当する記事は見つかりませんでした</p>
    <?php endif; ?>
  </div>

</main>

<?php get_footer(); //footerimport