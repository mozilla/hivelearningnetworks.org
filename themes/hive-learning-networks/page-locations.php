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
      <script id="location-profile-template" type="text/x-handlebars-template">
        <div class="container">
          {{#profiles}}
          <!-- Profile starts =========================== -->
          <div class="hive-profile" data-profile={{profileName}} data-hive-type={{type}}>
            <div class="row">
              <div class="col-md-12">
                <h3 class="the-hive-name">{{name}}</h3>
              </div>
            </div>
            <div class="row">
              <!-- left half =========================== -->
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-5">
                    <div class="hive-logo">
                      {{logoLink logo }}
                    </div>
                  </div>
                  <div class="col-md-7">
                    <ul class="no-bullet related-sites">
                      {{#if email}}<li><a class="mailbox" href="mailto:{{email}}">{{email}}</a></li>{{/if}}
                      {{#if mainWebsite}}<li>{{link "main-website" mainWebsite mainWebsite }}</li>{{/if}}
                      {{#if otherWebsites}}
                        {{#each otherWebsites}}
                        <li>{{link "other-sites" this this }}</li>
                        {{/each}}
                      {{/if}}
                      {{#if twitterHandle}}<li><a class="twitter" href="http://twitter.com/{{twitterHandle}}">{{twitterHandle}}</a></li>{{/if}}
                      {{#if facebookPage}}<li><a class="facebook" href={{facebookPage}}>{{stripProtocol facebookPage}}</a></li>{{/if}}
                      {{#if instagram}}<li><a class="instagram" href={{instagram}}>{{instagram}}</a></li>{{/if}}
                    </ul>
                  </div>
                </div>
                <div class="row hive-description">
                  <div class="col-md-12">
                    {{{descriptionHTML}}}
                  </div>
                </div>
              </div>
              <!-- right half (contacts) =========================== -->
              <div class="col-md-4 contacts-section">
                {{#each contacts}}
                <div class="row contact-card">
                  <div class="col-md-4">
                    <div class="contact-photo"><img src={{imgSrc}} /></div>
                  </div>
                  <div class="col-md-8">
                    <h4 class="contact-name">{{name}}</h4>
                    <div class="contact-title">{{title}}</div>
                    <ul class="no-bullet">
                      {{#if email}}<li><a class="mailbox" href="mailto:{{email}}">{{email}}</a></li>{{/if}}
                      {{#if twitterHandle}}<li><a class="twitter" href="https://twitter.com/{{twitterHandle}}">{{twitterHandle}}</a></li>{{/if}}
                    </ul>
                  </div>
                </div>
                {{/each}}
              </div>
            </div>
          </div>
          {{/profiles}}
        </div>
        <div class="container no-bg">
          <a class="view-all">VIEW ALL</a>
        </div>
      </script>
    </div>

</div> <!-- closing #wrap -->

<?php get_footer("locations"); ?>
