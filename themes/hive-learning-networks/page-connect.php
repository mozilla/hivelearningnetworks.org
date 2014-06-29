  <?php
  /*
  Template Name: "Connect" page
  */

  get_header(); ?>

    <div class="general-banner" id="connect-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="page-title">Connect</h1>
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
                  Sign up for the Hive mailing list - Sign up for the Hive mailing list to learn about Hive activity around the globe and find opportunities to become involved.
                </p>
                <div>
                  <a class="btn hive-btn" href="https://sendto.mozilla.org/page/s/hive-learning-networks-updates">Get Updates</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Hive Global Contacts ========== -->
          <div>
            <div class="row">
              <div class="col-md-12">
                <h3>Hive Global Contacts</h3>
              </div>
            </div>
            <div class="row contact-card">
              <div class="col-md-2">
                <div class="contact-photo"><img src="<?php echo get_template_directory_uri(); ?>/img/contacts/ChrisLawrence.jpg" /></div>
              </div>
              <div class="col-md-10">
                <h4 class="contact-name">Chris Lawrence</h4>
                <div class="contact-title">Senior Director, Hive Learning Networks</div>
                <ul class="no-bullet">
                  <li><a class="mailbox" href="mailto:clawrence@mozillafoundation.org">clawrence@mozillafoundation.org</a></li>
                  <li><a class="twitter" href="http://twitter.com/@chrislarry33">@chrislarry33</a></li>
                </ul>
              </div>
            </div>
            <div class="row contact-card">
              <div class="col-md-2">
                <div class="contact-photo"><img src="<?php echo get_template_directory_uri(); ?>/img/contacts/LainieDeCoursy.jpg" /></div>
              </div>
              <div class="col-md-10">
                <h4 class="contact-name">Lainie DeCoursy</h4>
                <div class="contact-title">Communications Manager, Hive Learning Networks</div>
                <ul class="no-bullet">
                  <li><a class="mailbox" href="mailto:lainie@mozillafoundation.org">lainie@mozillafoundation.org</a></li>
                  <li><a class="twitter" href="http://twitter.com/@ldecoursy">@ldecoursy</a></li>
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
              <a href="mailto:info@hivelearningnetworks.org">info@hivelearningnetworks.org</a>
            </div>
          </div>
        </div>
      </div>
    </div>

</div> <!-- closing #wrap -->


<?php get_footer(); ?>
