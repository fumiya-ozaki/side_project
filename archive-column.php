<?php get_header(); ?>  <!--header-import-->


<?php if(have_posts()):while(have_posts()):the_post();?>
<?php echo get_the_date();?>
<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
<?php endwhile;?>
<?php endif;?>


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

<?php get_footer(); //footerimport