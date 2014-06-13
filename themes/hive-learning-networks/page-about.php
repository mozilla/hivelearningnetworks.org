  <?php
  /*
  Template Name: "About" page
  */

  get_header(); ?>

    <div class="general-banner" id="about-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>
              <?php
                  if ( have_posts() ) : while( have_posts() ) : the_post(); the_title(); endwhile; endif;
              ?>
            </h1>
            <div class="page-description">
              <p>Hive Learning Networks prepare youth to thrive in school, work, and civic life. We empower educators to build connected learning experiences and teach the  digital literacy skills essential for young people to discover and shape their world</p>
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
              <h3>Get Updates from Hive</h3>
              <p>
                The Hive mailing list is the best way to learn about Hive global activity and find opportunities to become involved.
              </p>
              <div>
                <a class="btn hive-btn full-width" href="https://sendto.mozilla.org/page/s/hive-learning-networks-updates">
                  Join our mailing list
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</div> <!-- closing #wrap -->


<?php get_footer(); ?>
