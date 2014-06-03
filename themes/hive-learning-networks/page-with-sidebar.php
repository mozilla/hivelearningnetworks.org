<?php
/*
Template Name: Page with sidebar
*/

get_header(); ?>

  <div id="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>
            <?php
                if ( have_posts() ) : while( have_posts() ) : the_post(); the_title(); endwhile; endif;
            ?>
          </h1>
          <h2>Page description</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-8" id="main">
        <?php
            if ( have_posts() ) : while( have_posts() ) : the_post(); the_content(); endwhile; endif;
        ?>
      </div>
      <div class="col-md-4" id="sidebar">
        <div id="sidebar-container">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
