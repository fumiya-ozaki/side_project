<aside class="side-bar">
  <ul class="side-bar__container">
    <li class="side-author side-content">
      <h1 class="side-title font-lr">AUTHOR</h1>
      <p>FUMIYA OZAKI</p>
    </li>
    <li class="side-recommend side-content">
      <h1 class="side-title font-lr">RECOMMEND</h1>
      <p>おすすめ記事１</p>
      <p>おすすめ記事２</p>
      <p>おすすめ記事３</p>
      <p>おすすめ記事４</p>
      <p>おすすめ記事５</p>
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
        <p>
          <a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
        </p>
      <?php endforeach; ?>
    </li>
    <li class="side-tag side-content">
      <h1 class="side-title font-lr">TAG</h1>
      <p><?php wp_tag_cloud('order=ASC&format=list'); ?></p>
    </li>
    <li class="side-link side-content">
      <h1 class="side-title font-lr">LINK</h1>
      <p>リンク１</p>
      <p>リンク２</p>
      <p>リンク３</p>
    </li>
  </ul>

</aside>