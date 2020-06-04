<?php get_header(); ?>  <!--header-import-->

<?php if(have_posts()): the_post(); ?><!--mainloopstart-->
<article <?php post_class( 'article-content' ); ?>><!--getpostinfostart-->

<section class="post-image content-width"></section>

<main class="main-contents content-width content-height">
  <ul class="content-info">
    <li class="content-info__category">
      <span class="tab <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
        <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
      </span>
    </li>
    <li class="content-info__date">
      <time datetime="<?php the_time('Y-m-d'); ?>"> <!--time-tag-->
        <?php the_time( get_option( 'date_format' )); ?><!--content-date-->
      </time>
    </li>
    <li class="content-info__title">
      <p><?php the_title(); ?></p><!--title-->
    </li>
    <li>
      <p class="content-info__author"><?php the_author(); ?></p><!--author-->
    </li>
    <li class="content-info__text">
      <?php the_content(); ?><!--content-->
    </li>
  </ul>
  
  <div class="more-news"><!--next/prevbuttonstart-->
    <?php 
      $next_post = get_next_post();
      $prev_post = get_previous_post();
    if ( $prev_post ):
    ?>
  
    <div class="prev">
      <a class="another-link" href="<?php echo get_permalink( $prev_post ->ID )?>">
      <i class="fas fa-arrow-left fa-sm"></i>PREV
      </a>
    </div>
  
  <?php
    endif;
    if( $next_post ):
      ?>
    <div class="next">
      <a class="another-link" href="<?php echo get_permalink( $next_post ->ID )?>">
        NEXT<i class="fas fa-arrow-right fa-sm"></i>
      </a>
    </div>
    
    <?php endif;?>
  </div><!--next/prevbuttonend-->
</main>




</article><!--getpostinfoend-->
<?php endif; ?><!--mainloopend-->

<?php get_footer(); //footerimport