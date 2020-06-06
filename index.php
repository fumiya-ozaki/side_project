<?php get_header(); ?>  <!--header-import-->
    
        <main class="main-contents-area">
          <section class="content-width content-height">
            <ul class="contents">
              <li class="content con1 bg-zoom">
                <span class="content__link bg-zoom-content" href="#">
                  <span class="category">label</span>
                  <span class="content-info">
                    <p class="content-name">texttexttexttext</p>
                    <time class="content-date">2020-01-02</time>
                    <p class="content-place">tokyo</p>
                  </span>
                </span>
              </li>
              <li class="content con2 bg-zoom">
                <span class="content__link bg-zoom-content" href="#">
                  <span class="category">label</span>
                  <span class="content-info">
                    <p class="content-name">texttexttexttext</p>
                    <time class="content-date">2020-01-01</time>
                    <p class="content-place">tokyo</p>
                  </span>
                </span>
              </li>
              <li class="content con3 bg-zoom">
                <span class="content__link bg-zoom-content" href="#">
                  <span class="category">label</span>
                  <span class="content-info small">
                    <p class="content-name">texttexttexttext</p>
                    <time class="content-date">2020-01-01</time>
                    <p class="content-place">tokyo</p>
                  </span>
                </span>
              </li>
              <li class="content con4 bg-zoom">
                <span class="content__link bg-zoom-content" href="#">
                  <span class="category">label</span>
                  <span class="content-info small">
                    <p class="content-name">texttexttexttext</p>
                    <time class="content-date">2020-01-01</time>
                    <p class="content-place">tokyo</p>
                  </span>
                </span>
              </li>
              <li class="content con5 bg-zoom">
                <span class="content__link bg-zoom-content" href="#">
                  <span class="category">label</span>
                  <span class="content-info small">
                    <p class="content-name">texttexttexttext</p>
                    <time class="content-date">2020-01-01</time>
                    <p class="content-place">tokyo</p>
                  </span>
                </span>
              </li>
              <li class="content con6 bg-zoom">
                <span class="content__link bg-zoom-content" href="#">
                  <span class="category">label</span>
                  <span class="content-info small">
                    <p class="content-name">texttexttexttext</p>
                    <time class="content-date">2020-01-01</time>
                    <p class="content-place">tokyo</p>
                  </span>
                </span>
              </li>
              <li class="content con7 bg-zoom">
                <span class="content__link bg-zoom-content" href="#">
                  <span class="category">label</span>
                  <span class="content-info small">
                    <p class="content-name">texttexttexttext</p>
                    <time class="content-date">2020-01-01</time>
                    <p class="content-place">tokyo</p>
                  </span>
                </span>
              </li>
              <li class="content con8 bg-zoom">
                <span class="content__link bg-zoom-content" href="#">
                  <span class="category">label</span>
                  <span class="content-info small">
                    <p class="content-name">texttexttexttext</p>
                    <time class="content-date">2020-01-01</time>
                    <p class="content-place">tokyo</p>
                  </span>
                </span>
              </li>
              <li class="content con9 bg-zoom">
                <span class="content__link bg-zoom-content" href="#">
                  <span class="category">label</span>
                  <span class="content-info small">
                    <p class="content-name">texttexttexttext</p>
                    <time class="content-date">2020-01-01</time>
                    <p class="content-place">tokyo</p>
                  </span>
                </span>
              </li>
              <li class="content con10 bg-zoom">
                <span class="content__link bg-zoom-content" href="#">
                  <span class="category">label</span>
                  <span class="content-info small">
                    <p class="content-name">texttexttexttext</p>
                    <time class="content-date">2020-01-01</time>
                    <p class="content-place">tokyo</p>
                  </span>
                </span>
              </li>
            </ul>
          </section>
        </main>
      
        <section class="news " id="news">
          <div class="con-container content-width content-height">
          <div class="news-title font-lg">information</div>
          <ul class="news-lists">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?> <!--roopstart-->
              <li class="news-list">
                <a class="news-link" href="<?php the_permalink(); ?>"> <!--content-link-->
                  <span class="conL">
                    <span class="tab <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
                      <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
                    </span>
                    <time datetime="<?php the_time('Y-m-d'); ?>"> <!--time-tag-->
                      <?php the_time( get_option( 'date_format' )); ?><!--content-date-->
                    </time>
                  </span>
                  <span class="conC">
                    <p class="title"><?php the_title(); ?></p>
                    <p class="content"><?php echo get_flexible_excerpt(15); ?></p>
                  </span><!--content-title-->
                  <span class="conR">
                    <?php the_post_thumbnail('medium'); ?>
                  </span><!--content-image-->
                </a>
              </li>
            <?php endwhile; endif; ?> <!--roopend-->
          </ul>
          <a class="news-btn" href="<?php echo home_url('/category/news/'); ?>">VIEW MORE</a>
        </div>
        </section>
      
        <section class="bottom-banners">
          <a class="banner banner-1" href="#">
            <div class="banner-content bg-zoom-content">
              <p>under construction</p>
            </div>
          </a>
          <a class="banner banner-2" href="#">
            <div class="banner-content bg-zoom-content">
              <p>under construction</p>
            </div>
          </a>
          <a class="banner banner-3" href="#">
            <div class="banner-content bg-zoom-content">
              <p>under construction</p>
            </div>
          </a>
        </section>


<?php get_footer(); //footerimport