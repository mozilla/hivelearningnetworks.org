  <?php
  /*
  Template Name: "Start a Hive" page
  */

  get_header(); ?>

    <div class="general-banner" id="start-a-hive-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="page-title">Start a Hive</h1>
            <div class="page-description">
              <p>Hives empower educators to build connected learning experiences in ways that are open and networked. Learn more about how to get involved with Hive through various tiers of engagement.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <!-- Main content =======================================  -->
        <div class="col-md-8 start-a-hive-steps" id="main">
          <div class="subsection">
            <img class="start-a-hive-logo" src="<?php echo get_template_directory_uri(); ?>/img/Start-A-Hive-HostAnEvent.png" />
            <div class="step-details">
              <h3>Step 1: Host an event</h3>
              <p>
                If you are interested in bringing Hive to your city, you can start by throwing an event. Find other organizations, educators, librarians, and makers that can work together to create connected learning experiences for youth. Organize a meeting to align goals and plan a Hive event as a first step towards exploring longer-term collaboration.
              </p>
            </div>
          </div>

          <div class="subsection">
            <img class="start-a-hive-logo" src="<?php echo get_template_directory_uri(); ?>/img/Start-A-Hive-BuildACommunity.png" />
            <div class="step-details">
              <h3>Step 2: Build a community</h3>
              <p>
                Develop a team and a strategy to adapt Hive tools, practices and frameworks to your local context. Host regular meet-ups and explore other opportunities to drive participation and engagement around Hive’s core principles.
              </p>
            </div>
          </div>

          <div class="subsection">
            <img class="start-a-hive-logo" src="<?php echo get_template_directory_uri(); ?>/img/Start-A-Hive-HiveNetwork.png" />
            <div class="step-details">
              <h3>Step 3: Apply to become a Hive Learning Network</h3>
              <p>
                Demonstrate commitment to providing sustainable, connected learning and web literacy opportunities for youth. Other requirements include having at least one dedicated, full-time staff member, an operational budget and a mechanism for funding innovations and partnerships.
              </p>
            </div>
          </div>

        </div>
        <!-- Sidebar =======================================  -->
        <div class="col-md-4" id="sidebar">
          <?php get_template_part( 'cookbook-and-question-sidebar' ); ?>
        </div>
      </div>
    </div>

</div> <!-- closing #wrap -->


<?php get_footer(); ?>
