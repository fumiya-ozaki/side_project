<?php get_header(); ?>  <!--header-import-->

<?php if(have_posts()): the_post(); ?><!--mainloopstart-->
<article <?php post_class( 'article-content' ); ?>><!--getpostinfostart-->

<section class="post-image content-width"></section>

<main class="main-contents content-width content-height sidebar-wrapper">
<?php get_sidebar(); ?>  <!--sidebar-import-->
<div class="left-contents">

  <ul class="content-info">
    <li class="content-info__category">
      <?php if (is_singular('column')) {?><!--カスタム投稿ページ条件分岐-->
        <!--何も表示しない-->
      <?php }else{ ?>
        <span class="tab <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
          CATEGORY : <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
        </span>
      <?php } ?>
    </li>
    <li class="content-info__date">
      <time> <!--time-tag-->
        <span class="tab date" datetime="<?php the_time('Y-m-d'); ?>">
          DATE : <?php the_time( get_option( 'date_format' )); ?><!--content-date-->
        </span>
      </time>
    </li>
    <li>
    <div>
      <span class="tab tag">
        TAGS : 
        <?php $posttags = get_the_tags(); //タグの取得
          if ($posttags) {
            foreach($posttags as $tag) {
              echo $tag->name . ' ';
            }
          }
        ?>
      </span>
    </div>

    </li>
    <li class="content-info__title font-lr">
      <p><?php the_title(); ?></p><!--title-->
    </li>
    <li>
      <p class="content-info__author"><?php the_author(); ?></p><!--author-->
    </li>
    <li class="content-info__text font-sm">
      <?php the_content(); ?><!--content-->
    </li>
  </ul>
  </div>
  
</main>
<!--pagenavigationstart-->
<div class="content-width">
  <?php while( have_posts() ) : the_post(); ?>
  <article class="post">
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
  </article>
  <?php endwhile;?>
  <?php the_post_navigation(
    array(
      'prev_text'           => '← PREV',
      'next_text'           => 'NEXT →',
      'screen_reader_text'  => 'Page Navigation',
      'in_same_term' => true,
      )
    ); ?>
  <!--pagenavigationend-->
</div>

</article><!--getpostinfoend-->
<?php endif; ?><!--mainloopend-->

<?php get_footer(); //footerimport