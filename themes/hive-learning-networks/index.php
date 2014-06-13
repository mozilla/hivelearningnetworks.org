
    <?php get_header(); ?>

    <div id="home-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="welcome-box">
              <h2>Welcome to</h2>
              <h1>Hive Learning Networks</h1>
              <p>
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
          <div class="col-md-6 col-sm-12">
            <video controls width="100%" poster="<?php echo get_template_directory_uri(); ?>/media/preview.png">
              Sorry, your browser doesn't support embedded videos.
              <source src="<?php echo get_template_directory_uri(); ?>/media/Hive_Video.mp4" type="video/mp4" />
              <source src="<?php echo get_template_directory_uri(); ?>/media/Hive_Video.ogg" type="video/ogg" />
              <source src="<?php echo get_template_directory_uri(); ?>/media/Hive_Video.webm" type="video/webm" />
            </video>
          </div>
          <!-- right half -->
          <div class="col-md-3 col-sm-6" id="hive-intro-box">
            <h2>Get Updates from Hive</h2>
            <p>
              Join our mailing list to learn about Hive and fine opportunities to get involved.
            </p>
            <div>
              <a class="btn hive-btn full-width" href="https://sendto.mozilla.org/page/s/hive-learning-networks-updates">
                Join our mailing list
              </a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6" id="hive-intro-menu">
            <h4 class="all-caps">Hive Networks</h4>
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

  </div> <!-- closing #wrap -->

    <?php get_footer(); ?>

