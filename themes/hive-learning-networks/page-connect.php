  <?php
  /*
  Template Name: "Connect" page
  */

  get_header(); ?>

    <div class="general-banner" id="connect-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>
              <?php
                  if ( have_posts() ) : while( have_posts() ) : the_post(); the_title(); endwhile; endif;
              ?>
            </h1>
            <div class="page-description">
              <p>We're passionate about promoting connected learning opportunities for youth around the world. Connect with any of the Hive Communities and Hive Learning Networks  -- we welcome your contributions.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <!-- Main ================================ -->
        <div class="col-md-8" id="main">
          <!-- Get Invovled ========== -->
          <div>
            <div class="row with-margin">
              <div class="col-md-12">
                <h3>Get Involved</h3>
                <p>
                  Sign up for the Hive mailing list -- it's the best way to learn about global Hive activity and find opportunities to become involved.
                </p>
                <div>
                  <a class="btn hive-btn" href="https://sendto.mozilla.org/page/s/hive-learning-networks-updates">Get Updates</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Hive Global Contact ========== -->
          <div>
            <div class="row">
              <div class="col-md-12">
                <h3>Hive Global Contact</h3>
              </div>
            </div>
            <div class="row contact-card">
              <div class="col-md-2">
                <div class="placeholder-img round"></div>
              </div>
              <div class="col-md-10">
                <h4 class="contact-name">First Last</h4>
                <div class="contact-title">I'm the title</div>
                <ul class="no-bullet">
                  <li><a mailto="">E-mail</a></li>
                  <li><a href="">Twiiter</a></li>
                </ul>
              </div>
            </div>
            <div class="row contact-card">
              <div class="col-md-2">
                <div class="placeholder-img round"></div>
              </div>
              <div class="col-md-10">
                <h4 class="contact-name">First Last</h4>
                <div class="contact-title">I'm the title</div>
                <ul class="no-bullet">
                  <li><a mailto="">E-mail</a></li>
                  <li><a href="">Twiiter</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side bar ================================ -->
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
