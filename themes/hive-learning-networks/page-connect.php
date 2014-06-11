  <?php
  /*
  Template Name: "Get Involved" page
  */

  get_header(); ?>

    <div class="general-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>
              <?php
                  if ( have_posts() ) : while( have_posts() ) : the_post(); the_title(); endwhile; endif;
              ?>
            </h1>
            <p class="page-description">
              We're passionate about promoting connected learning opportunities for youth around the world. Connect with any of the Hive Communities and Hive Learning Networks  -- we welcome your contributions.
            </p>
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
          <div class="row">
            <div class="col-md-2">
              <div class="placeholder-img round"></div>
            </div>
            <div class="col-md-10">
              <div class="">Name</div>
              <div class="">Title</div>
              <div class="">E-mail</div>
              <div class="">Twitter</div>
            </div>
          </div>
        </div>
        <div class="col-md-4" id="sidebar">
          <div id="sidebar-container">
            <h3>Connect with Us</h3>
            <div>
              <a mailto="info@hivelearningnetworkds.org">info@hivelearningnetworkds.org</a>
            </div>
          </div>
        </div>
      </div>
    </div>

</div> <!-- closing #wrap -->


<?php get_footer(); ?>
