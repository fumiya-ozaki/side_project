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
  
  <?php while( have_posts() ) : the_post(); ?>
    <article class="post">
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </article>
  <?php endwhile;?>
  <?php the_post_navigation(
    array(
      'prev_text'           => '前の記事 - %title',
      'next_text'           => '次の記事 - %title',
      'screen_reader_text'  => 'page navigation',
      'in_same_term' => true,
    )
  ); ?>

</main>

</article><!--getpostinfoend-->
<?php endif; ?><!--mainloopend-->

<?php get_footer(); //footerimport