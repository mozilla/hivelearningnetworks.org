  <?php
  /*
  Template Name: "Resources - Building a Hive Community" page
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
              <p>Learn more about the Hive Learning Networks model.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container resources">
      <div class="row">
        <div class="col-md-8" id="main">
          <?php
              if ( have_posts() ) : while( have_posts() ) : the_post(); the_content(); endwhile; endif;
          ?>
          <section class="row">
            <div class="col-md-12">
              <h3>Hive Learning Networks Presentation</h3>
              <p>This editable slide presentation offers an overview of Hive Learning Networks, plus city-specific considerations, asset mapping, and next steps for starting a Hive Community.</p>
              <iframe src="https://docs.google.com/presentation/d/1gAz9uKp4a0c9uNaZCVjK6dZDRSJaMFyeuHufOI14-Qc/embed?start=false&loop=false&delayms=0" frameborder="0" width="100%" height="500px" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
              <p class="text-center"><a href="http://bit.ly/HiveSlides" class="external-link">Open in Google Slides</a></p>
            </div>
          </section>

          <section class="row">
            <div class="col-md-4">
              <img src="<?php echo get_template_directory_uri(); ?>/resources/Hive_ThemePreview.png" />
            </div>
            <div class="col-md-8">
              <h3>Hive Wordpress Theme</h3>
              <p>
                The Hive Wordpress theme can help your website look good and meet the Hive branding guidelines.
              </p>
              <p>
                Get the Hive Wordpress theme for <a href="https://github.com/MozillaHive/hive-theme">free on Github</a>.
              </p>
              <p>
                Guidance for installing and using the Wordpress theme can be found on the <a href="https://github.com/MozillaHive/hive-theme/wiki">wiki</a>.
              </p>
            </div>
          </section>

          <section class="row">
            <div class="col-md-12">
              <h3>Sample Memorandum of Understanding</h3>
              <p>This <a href="https://docs.google.com/file/d/0By3iomeqwUgBRm9hTFJDV3lmWkk/edit">sample memorandum of understanding</a> (MOU) helps members and stakeholders agree on and work towards a common objective. Edit this document to meet your needs.</p>
            </div>
          </section>

        </div>
        <div class="col-md-4" id="sidebar">
          <?php get_template_part( 'resources-sidebar' ); ?>
        </div>
      </div>
    </div>

</div> <!-- closing #wrap -->


<?php get_footer(); ?>
