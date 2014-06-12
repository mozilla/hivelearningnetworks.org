
    <?php get_header(); ?>


    <div id="home-main">
      <div class="container">
        <div class="row">
          <!-- left half -->
          <div class="col-md-6">
            <video controls width="100%" poster="<?php echo get_template_directory_uri(); ?>/media/preview.png">
              Sorry, your browser doesn't support embedded videos.
              <source src="<?php echo get_template_directory_uri(); ?>/media/Hive_Video.mp4" type="video/mp4" />
              <source src="<?php echo get_template_directory_uri(); ?>/media/Hive_Video.ogg" type="video/ogg" />
              <source src="<?php echo get_template_directory_uri(); ?>/media/Hive_Video.webm" type="video/webm" />
            </video>
          </div>
          <!-- right half -->
          <div class="col-md-3" id="hive-intro-box">
            <h2>Get Updates from Hive ... static CTA instead? social media?</h2>
          </div>
          <div class="col-md-3">
            <h4 class="all-caps">Hive Networks</h4>
            <div>
              <ul class="hive-list">
                <?php if ( dynamic_sidebar('hive-short-intro-networks-widget') ) : else : endif; ?>
              </ul>
            </div>

            <h4 class="all-caps">Hive Learning Communities</h4>
            <div>
              <ul class="hive-list">
                <?php if ( dynamic_sidebar('hive-short-intro-communities-widget') ) : else : endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div> <!-- closing #wrap -->

    <?php get_footer(); ?>

