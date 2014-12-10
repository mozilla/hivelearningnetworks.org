  <?php
  /*
  Template Name: "Resources - At a glance" page
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
              <h3>Hive Inforgraphic</h3>
              <img src="<?php echo get_template_directory_uri(); ?>/resources/Infographic.jpg" />
            </div>
          </section>

          <section class="row">
            <div class="col-md-12">
              <h3>Hive's Big Audacious Goals</h3>
              <p>
                Mobilize, create, catalyze and grow: Hive’s goals and vision explained in a <a href="<?php echo get_template_directory_uri(); ?>/resources/Goals_and_Visions.pdf">PDF</a>.
              </p>
              <p>
                We imagine a time when connected learning is ubiquitous in Hive cities across the globe‘ empowering educators and unlocking opportunities for all youth.
              </p>
              <h5>Over the next five years, the hive’s ambitious goals in support of its vision are:</h5>
              <div class="text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/Goals.gif" class="half" />
              </div>
              <h5>Mobilize</h5>
              <p>
                Mobilize more educators to adopt connected learning practices and teach web literacy within a growing constellation of Hive Learning Networks.
              </p>
              <h5>Catalyze</h5>
              <p>
                Catalyze schools, youth programs, and city agencies to provide rich connected learning and web literacy programs, especially in under-served communities.
              </p>
              <h5>Create</h5>
              <p>
                Create high-quality connected learning and web literacy tools, content, curriculum and practices for broad use, increasing demand for Hives in new locations and sectors that can serve a range of learners.
              </p>
              <h5>Grow</h5>
              <p>
                Grow demand for Hive Learning Events, Communities and Networks in new locations and sectors.
              </p>

              <p>
                When more youth have access to relevant connected learning experiences and gain new digital skills, and educators and organizations make connected learning central to their practices, Hive will have realized its ambitious vision of educational transformation.
              </p>
            </div>
          </section>

          <section class="row">
            <div class="col-md-12">
              <h3>Hive Learning Networks Flyer</h3>
              <p>Share or distribute this <a href="<?php echo get_template_directory_uri(); ?>/resources/Hive_Global_1pager.pdf">one page flyer</a> to explain the Hive Learning Networks model to potential stakeholders.</p>
            </div>
          </section>
          <!-- Resources pages nav ===== -->
          <div class="row resource-pages-nav">
            <div class="col-md-offset-6 col-md-6  col-offset-sm-6 col-sm-6">
              <a id="to-next" href="/resources/events">
                <div class="text">
                  <div class="nav-type">next section</div>
                  <div class="section-title">Running a Hive event</div>
                </div>
                <div class="icon"><i class="fa fa-chevron-circle-right"></i></div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4" id="sidebar">
          <?php get_template_part( 'resources-sidebar' ); ?>
        </div>
      </div>
    </div>

</div> <!-- closing #wrap -->


<?php get_footer(); ?>
