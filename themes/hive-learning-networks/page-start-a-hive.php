  <?php
  /*
  Template Name: "Start a Hive" page
  */

  get_header(); ?>

    <div class="general-banner" id="start-a-hive-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>
              <?php
                  if ( have_posts() ) : while( have_posts() ) : the_post(); the_title(); endwhile; endif;
              ?>
            </h1>
            <div class="page-description">
              <p>Hives empower educators to build  connected learning experiences and teach the  digital literacy skills to youth. Become involved through our graduated levels of engagement.</p>
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
            <div class="subsection">
              <h3>Have questions?</h3>
              <p>
                f you would like more information about starting a Hive in your community, please email us.
              </p>
              <div>
                <a class="btn hive-btn full-width" mailto="info@hivelearningnetworkds.org">
                  Email Us
                </a>
              </div>
            </div>
            <div class="subsection">
              <h3>The Hive Cookbook</h3>
              <p>
                The Hive Cookbook contains detailed information about the global Hive Community.
              </p>
              <div>
                <a class="btn hive-btn full-width" href="https://wiki.mozilla.org/Webmaker/HiveCookbook">
                  Read the Cookbook
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</div> <!-- closing #wrap -->


<?php get_footer(); ?>
