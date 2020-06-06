<?php get_header(); ?>  <!--header-import-->
<main class="news">
  <div class="con-container content-width content-height">
    <?php if (in_category(array('works'))) {?>
      <div class="archive-title font-lg">
        <?php the_archive_title(); ?>
      </div>
      <ul class="category-lists">
        <li class="category-list hover-Uline">workstag1</li>
        <li class="category-list hover-Uline">workstag2</li>
        <li class="category-list hover-Uline">workstag3</li>
        <li class="category-list hover-Uline">workstag4</li>
        <li class="category-list hover-Uline">workstag5</li>
      </ul>

      <?php if(have_posts()): while(have_posts()): the_post();?>
        <ul class="news-lists">
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
        </ul>
      <?php endwhile; endif; ?>

  <?php } elseif(in_category(array('news'))){ ?>
    <div class="archive-title font-lg">
      <?php the_archive_title(); ?>
    </div>
    <ul class="category-lists">
      <li class="category-list hover-Uline">newstag1</li>
      <li class="category-list hover-Uline">newstag2</li>
      <li class="category-list hover-Uline">newstag3</li>
      <li class="category-list hover-Uline">newstag4</li>
      <li class="category-list hover-Uline">newstag5</li>
    </ul>
    <?php if(have_posts()): while(have_posts()): the_post();?>
      <ul class="news-lists">
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
      </ul>
    <?php endwhile; endif; ?>

  <?php } elseif(in_category(array('blog'))){ ?>
    <div class="archive-title font-lg">
      <?php the_archive_title(); ?>
    </div>
    <ul class="category-lists">
      <li class="category-list hover-Uline">blogtag1</li>
      <li class="category-list hover-Uline">blogtag2</li>
      <li class="category-list hover-Uline">blogtag3</li>
      <li class="category-list hover-Uline">blogtag4</li>
      <li class="category-list hover-Uline">blogtag5</li>
    </ul>
    <?php if(have_posts()): while(have_posts()): the_post();?>
      <ul class="news-lists">
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
      </ul>
    <?php endwhile; endif; ?>
  <?php } ?>
  
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