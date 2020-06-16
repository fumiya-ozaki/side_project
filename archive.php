<?php get_header(); ?>  <!--header-import-->
<main class="news">
  <div class="con-container content-width content-height">
    <?php if (in_category(array('works'))) {?>
      <div class="archive-title font-lg">
        <?php the_archive_title(); ?>
      </div>
      <?php if(have_posts()): while(have_posts()): the_post();?>
      <ul class="news-lists">
        <li class="news-list hover-scale">
          <a class="news-link" href="<?php the_permalink(); ?>"> <!--content-link-->
            <div class="conL">
              <div>
                <span class="tab <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
                  <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
                </span>
              </div>
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
              <p class="content"><?php echo get_flexible_excerpt(30); ?></p>
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
      <?php endwhile; endif; ?>

  <?php } elseif(in_category(array('news'))){ ?>
    <div class="archive-title font-lg">
      <?php the_archive_title(); ?>
    </div>
    <?php if(have_posts()): while(have_posts()): the_post();?>
    <ul class="news-lists">
        <li class="news-list hover-scale">
          <a class="news-link" href="<?php the_permalink(); ?>"> <!--content-link-->
            <div class="conL">
              <div>
                <span class="tab <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
                  <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
                </span>
              </div>
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
              <p class="content"><?php echo get_flexible_excerpt(30); ?></p>
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
    <?php endwhile; endif; ?>

  <?php } elseif(in_category(array('blog'))){ ?>
    <div class="archive-title font-lg">
      <?php the_archive_title(); ?>
    </div>
    <?php if(have_posts()): while(have_posts()): the_post();?>
      <ul class="news-lists">
        <li class="news-list hover-scale">
          <a class="news-link" href="<?php the_permalink(); ?>"> <!--content-link-->
            <div class="conL">
              <div>
                <span class="tab <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
                  <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
                </span>
              </div>
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
              <p class="content"><?php echo get_flexible_excerpt(30); ?></p>
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
    <?php endwhile; endif; ?>
    
  <?php } ?>
  
  <!--pagenavigation-->
  <?php 
  the_posts_pagination( array(
    'before_page_number' => '',
    'next_text'          => 'Next',
    'prev_text'          => 'Prev',
    'show_all'           => __return_true(),
    'screen_reader_text' => 'Post Navigation'
  ));
  ?>
  </div>
</main>
<?php get_footer(); //footerimport