<?php
/*
Template Name: Locations page
*/

get_header(); ?>

  <div class="container">
    <?php
        if ( have_posts() ) : while( have_posts() ) : the_post(); the_content(); endwhile; endif;
    ?>
  </div>

<?php get_footer(); ?>
