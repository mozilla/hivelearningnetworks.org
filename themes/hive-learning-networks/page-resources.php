  <?php
  /*
  Template Name: "Resources" page
  */

  get_header(); ?>

    <div class="general-banner" id="resources-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="page-title">
              <?php
                  if ( have_posts() ) : while( have_posts() ) : the_post(); the_title(); endwhile; endif;
              ?>
            </h1>
            <div class="page-description">
              <p>Use these Hive logos for your events, websites and printed materials. The Hive Cookbook offers more in-depth information about Hive events, communities and learning networks.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container resources">
      <div class="row">
        <div class="col-md-8" id="main">
          <section class="row">
            <div class="col-md-4 col-sm-4">
              <a href="/resources/at-a-glance" class="icon-link">
                <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/resources/Icon_Hive_Learning_Networks_at_a_Glance.png" /></div>
                <p class="h3 text-center">Hive Learning Networks at a Glance</p>
              </a>
            </div>
            <div class="col-md-4 col-sm-4">
              <a href="/resources/events" class="icon-link">
                <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/resources/Icon_Resources_for_Running_a_Hive_Event.png" /></div>
                <p class="h3 text-center">Running a Hive Event</p>
              </a>
            </div>
            <div class="col-md-4 col-sm-4">
              <a href="/resources/community" class="icon-link">
                <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/resources/Icon_Resources_for_Starting_a_Hive_Community.png" /></div>
                <p class="h3 text-center">Building a Hive Community</p>
              </a>
            </div>
          </section>


          <section class="row">
            <h3 class="col-md-12" id="hive-logos-and-graphics">Hive Logos and Graphics</h3>

            <div class="col-md-12 subsection">
              <div class="row">
                <h5 class="col-md-12">Horizontal Lockups</h5>
                <div class="col-md-4 col-sm-4 col-xs-6">
                  <p>Hive Event</p>
                  <img src="<?php echo get_template_directory_uri(); ?>/resources/Horizontal_Lockups_Preview_Hive_Event.png" />
                  <a href="<?php echo get_template_directory_uri(); ?>/resources/Horizontal_Lockups_Hive_Event.ai" class="download-link">.AI</a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6">
                  <p>Hive Learning Community</p>
                  <img src="<?php echo get_template_directory_uri(); ?>/resources/Horizontal_Lockups_Preview_Hive_Community.png" />
                  <a href="<?php echo get_template_directory_uri(); ?>/resources/Horizontal_Lockups_Hive_Community.ai" class="download-link">.AI</a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6">
                  <p>Hive Learning Network</p>
                  <img src="<?php echo get_template_directory_uri(); ?>/resources/Horizontal_Lockups_Preview_Hive_Network.png" />
                  <a href="<?php echo get_template_directory_uri(); ?>/resources/Horizontal_Lockups_Hive_Network.ai" class="download-link">.AI</a>
                </div>
              </div>
            </div>

            <div class="col-md-12 subsection">
              <div class="row">
                <h5 class="col-md-12">Vertical Lockups</h5>
                <div class="col-md-4 col-sm-4 col-xs-6">
                  <p>Hive Event</p>
                  <img src="<?php echo get_template_directory_uri(); ?>/resources/Vertical_Lockups_Preview_Hive_Event.png" />
                  <a href="<?php echo get_template_directory_uri(); ?>/resources/Vertical_Lockups_Hive_Event.ai" class="download-link">.AI</a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6">
                  <p>Hive Learning Community</p>
                  <img src="<?php echo get_template_directory_uri(); ?>/resources/Vertical_Lockups_Preview_Hive_Community.png" />
                  <a href="<?php echo get_template_directory_uri(); ?>/resources/Vertical_Lockups_Hive_Community.ai" class="download-link">.AI</a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6">
                  <p>Hive Learning Network</p>
                  <img src="<?php echo get_template_directory_uri(); ?>/resources/Vertical_Lockups_Preview_Hive_Network.png" />
                  <a href="<?php echo get_template_directory_uri(); ?>/resources/Vertical_Lockups_Hive_Network.ai" class="download-link">.AI</a>
                </div>
              </div>
            </div>

            <div class="col-md-12 subsection">
              <div class="row">
                <h5 class="col-md-12">Templates</h5>
                <div class="col-md-4 col-sm-4 col-xs-6">
                  <p>Hive Event</p>
                  <img src="<?php echo get_template_directory_uri(); ?>/resources/Logo_Template_Preview_Hive_Event.png" />
                  <a href="<?php echo get_template_directory_uri(); ?>/resources/Logo_Template_Hive_Event.ai" class="download-link">.AI</a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6">
                  <p>Hive Learning Community</p>
                  <img src="<?php echo get_template_directory_uri(); ?>/resources/Logo_Template_Preview_Hive_Community.png" />
                  <a href="<?php echo get_template_directory_uri(); ?>/resources/Logo_Template_Hive_Community.ai" class="download-link">.AI</a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6">
                  <p>Hive Learning Network</p>
                  <img src="<?php echo get_template_directory_uri(); ?>/resources/Logo_Template_Preview_Hive_Network.png" />
                  <a href="<?php echo get_template_directory_uri(); ?>/resources/Logo_Template_Hive_Network.ai" class="download-link">.AI</a>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="row">
                <h5 class="col-md-12">Presentation</h5>
                <div class="col-md-12">
                  <p>Slide Template</p>
                  <iframe src="https://docs.google.com/presentation/d/1gAz9uKp4a0c9uNaZCVjK6dZDRSJaMFyeuHufOI14-Qc/embed?start=false&loop=false&delayms=0" frameborder="0" width="100%" height="500px" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
                  <p class="text-center"><a href="http://bit.ly/HiveSlides" class="external-link">Open in Google Slides</a></p>
                </div>
              </div>
            </div>

          </section>


        </div>
        <div class="col-md-4" id="sidebar">
          <?php get_template_part( 'cookbook-and-question-sidebar' ); ?>
        </div>
      </div>
    </div>

</div> <!-- closing #wrap -->


<?php get_footer(); ?>
