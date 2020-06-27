<aside class="side-bar">
  <ul class="side-bar__container">
    <li class="side-author side-content">
      <h1 class="side-title font-lr">AUTHOR</h1>
      <p>FUMIYA OZAKI</p>
    </li>
    <li class="side-recommend side-content">
      <h1 class="side-title font-lr">RECOMMEND</h1>
      <?php 
        $arg = array(
          'posts_per_page'=>5,
          'orderby'=>'date',
          'order'=>'DESC',
          'tag'=>'recommend'
        );
      $posts = get_posts($arg);
      if($posts):?>
        <?php foreach($posts as $post):
          setup_postdata($post);?>
          <p class="rec-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
        <?php endforeach?>
      <?php endif;wp_reset_postdata();wp_reset_query(); ?>
    </li>
    <li class="side-category side-content">
      <h1 class="side-title font-lr">CATEGORY</h1>
      <?php
        $args = array(
          'parent' => 0,
          'orderby' => 'term_order',
          'order' => 'ASC'
        );
        $categories = get_categories( $args );
      ?>
      <?php foreach( $categories as $category ) : ?>
        <p class="side-category-contents">
          <a class="side-category-content" href="<?php echo get_category_link( $category->term_id ); ?>">
            <span class="side-category-label"><?php echo $category->name; ?></span>
            <span class="side-category-amt"><?php echo $category->count; ?></span>
          </a>
        </p>
      <?php endforeach;?>
    </li>
    <li class="side-tag side-content">
      <h1 class="side-title font-lr">TAG</h1>
      <p><?php wp_tag_cloud('order=ASC&format=list'); ?></p>
    </li>
    <li class="side-link side-content">
      <h1 class="side-title font-lr">LINK</h1>
    </li>
  </ul>

</aside>