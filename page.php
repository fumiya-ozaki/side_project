<?php get_header(); ?>  <!--header-import-->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?> <!--roopstart-->
  <?php remove_filter('the_content', 'wpautop'); ?><!--pタグの自動挿入削除-->
  <?php the_content(); ?>
<?php endwhile; endif; ?> <!--roopend-->

<?php get_footer(); //footerimport
