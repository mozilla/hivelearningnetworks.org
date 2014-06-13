  <?php
  /*
  Template Name: "Buzz" page
  */

  get_header(); ?>

    <div class="general-banner" id="buzz-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>
              <?php
                  if ( have_posts() ) : while( have_posts() ) : the_post(); the_title(); endwhile; endif;
              ?>
            </h1>
            <div class="page-description">
              <p>Learn about the great work of our global Hive Communities and Hive Learning Networks.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-8" id="main">
          <h3>Planet Hive Blog</h3>
          <div id="recent-blog">
          </div>
        </div>
        <div class="col-md-4" id="sidebar">
          <div id="sidebar-container">
            <div>
              <?php if ( dynamic_sidebar('hive-spotlight') ) : else : endif; ?>
            </div>
            <!-- Twitter feed #HiveBuzz -->
            <a class="twitter-timeline" href="https://twitter.com/search?q=%23HiveBuzz" data-widget-id="475056322170216448">Tweets about "#HiveBuzz"</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          </div>
        </div>
      </div>
    </div>

</div> <!-- closing #wrap -->

<script>
  // sample code taken from http://designshack.net/articles/javascript/build-an-automated-rss-feed-list-with-jquery/
  var planetHiveRSS = "http://planet.hivelearningnetworks.org/rss";
  $.ajax({
    url: document.location.protocol + '//ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=10&callback=?&q=' + encodeURIComponent(planetHiveRSS),
    dataType: 'json',
    success: function(data) {
      console.log(data);
      console.log(JSON.stringify(data.responseData.feed.entries.slice(0,1)));
      $.each(data.responseData.feed.entries, function(idx, post){
        var thehtml = "<div class='blog-feed'>" +
                        "<h2><a href='" + post.link + "'>" + post.title + "</a></h2>" +
                        "<div class='published-date'>" + post.publishedDate + "</div>" +
                        "<div><p class='blog-feed-content'>" + post.content + "</p></div>" +
                        // "<div><p>" + post.contentSnippet + "</p></div>" +
                        "<div>" + post.link + "</div>" +
                        "<div><a class='read-more' href='" + post.link + "'>Read More</a></div>" +
                      "</div>";
          // var thehtml = "<a href='" + post.link + "' target='_blank'>" + post.title + "</a><br />" +
          //               "<div>" + post.content + "</div>" +
          //               "<div>" + post.contentSnippet + "</div>" +
          //               "<div>" + post.link + "</div>" +
          //               "<div>" + post.publishedDate + "</div><br /><br />";

          $("#recent-blog").append(thehtml);
      });
    }
  });
</script>

<?php get_footer(); ?>
