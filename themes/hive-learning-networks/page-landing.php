  <?php
  /*
  Template Name: "Landing" page
  */

  get_header(); ?>

    <div id="home-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="welcome-box">
              <h2>Welcome to</h2>
              <h1 class="page-title">Hive Learning Networks</h1>
              <p class="page-description">
                 We are a growing constellation of communities around the globe that are championing digital skills and web literacy through connected learning.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div id="home-main">
      <div class="container">
        <div class="row">
          <!-- left half -->
          <div class="col-md-6 col-lg-8">
            <video controls width="100%" poster="<?php echo get_template_directory_uri(); ?>/media/preview.png">
              Sorry, your browser doesn't support embedded videos.
              <source src="<?php echo get_template_directory_uri(); ?>/media/Hive_Video.mp4" type="video/mp4" />
              <source src="<?php echo get_template_directory_uri(); ?>/media/Hive_Video.ogg" type="video/ogg" />
              <source src="<?php echo get_template_directory_uri(); ?>/media/Hive_Video.webm" type="video/webm" />
            </video>
          </div>
          <div class="col-md-3 col-sm-6" id="hive-intro-menu">
            <h4 class="all-caps">Hive Learning Networks</h4>
            <div>
              <ul class="hive-list networks no-bullet">
                <?php if ( dynamic_sidebar('hive-short-intro-networks-widget') ) : else : endif; ?>
              </ul>
            </div>

            <h4 class="all-caps">Hive Learning Communities</h4>
            <div>
              <ul class="hive-list communities no-bullet">
                <?php if ( dynamic_sidebar('hive-short-intro-communities-widget') ) : else : endif; ?>
              </ul>
            </div>
          </div>

          </div>
        </div>
      </div>
    </div>

  </div> <!-- closing #wrap -->

    <?php get_footer(); ?>

