
    <?php get_header(); ?>


    <div id="home-main">
      <div class="container">
        <div class="row">
          <!-- left half -->
          <div class="col-md-6">
            <div style="border: 3px solid #555; width: 100%; height: 300px; text-align: center">video</div>
          </div>
          <!-- right half -->
          <div class="col-md-3">
            <h4 class="all-caps">Hive Networks</h4>
            <ul class="hive-list">
              <?php if ( dynamic_sidebar('hive-short-intro-networks-widget') ) : else : endif; ?>
            </ul>

            <h4 class="all-caps">Hive Learning Communities</h4>
            <ul class="hive-list">
              <?php if ( dynamic_sidebar('hive-short-intro-communities-widget') ) : else : endif; ?>
            </ul>
          </div>
          <div class="col-md-3" id="hive-intro-box">

          </div>
        </div>
      </div>
    </div>

  </div> <!-- closing #wrap -->

    <?php get_footer(); ?>

