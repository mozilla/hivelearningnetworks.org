  <?php
  /*
  Template Name: "Locations" page
  */

  get_header(); ?>

    <div id="hives-map-section">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-8 col-md-offset-2">
            <h1 class="page-title">Hive Around the World</h1>
            <div class="page-description">
              <p> We are a growing constellation of communities championing digital skills and web literacy through connected learning.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3" id="locations-menu">
            <script id="location-nav-template" type="text/x-handlebars-template">
              <div id="hive-networks-menu">
                <h4 class="all-caps">Hive Learning Networks</h4>
                <ul class="hive-list no-bullet">
                  {{#networks}}
                  <li><a data-profile={{profileName}}>{{location}}</a></li>
                  {{/networks}}
                </ul>
              </div>
              <div id="hive-communities-menu">
                <h4 class="all-caps">Hive Learning Communities</h4>
                <ul class="hive-list no-bullet">
                  {{#communities}}
                  <li><a data-profile={{profileName}}>{{location}}</a></li>
                  {{/communities}}
                </ul>
              </div>
              <div id="hive-coming-menu">
                <h4 class="all-caps">Hive Coming Soon</h4>
                <ul class="hive-list no-bullet">
                  {{#comingSoon}}
                  <li><a data-profile={{profileName}}>{{location}}</a></li>
                  {{/comingSoon}}
                </ul>
              </div>
            </script>
          </div>
          <div class="col-md-9">
            <div id="hive-map">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Profile sections starts ============================ -->
    <div id="hive-profile-section">
    </div>

</div> <!-- closing #wrap -->

<?php get_footer("locations"); ?>
