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