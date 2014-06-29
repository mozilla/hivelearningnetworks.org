  <?php
  /*
  Template Name: "Resources" page
  */

  get_header(); ?>

    <div class="general-banner" id="resources-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="page-title">Resources</h1>
            <div class="page-description">
              <p>Use these Hive logos for your events, websites and printed materials. The Hive Cookbook offers more in-depth information about Hive events, communities and learning networks.</p>
            </div>
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
            <?php
                if (has_nav_menu('resources-page-nav')) {
                  wp_nav_menu(array(
                    'theme_location' => 'resources-page-nav',
                    'menu_class'      => 'menu',
                    // 'menu_id'         => '',
                    'container' => false,
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth' => 2
                  ));
                }
              ?>
          </div>
        </div>
      </div>
    </div>

</div> <!-- closing #wrap -->


<?php get_footer(); ?>
