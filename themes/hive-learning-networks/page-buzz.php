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
  var planetHiveRSS = "http://planet.hivelearningnetworks.org/rss";
  $.ajax({
    url: document.location.protocol + "//ajax.googleapis.com/ajax/services/feed/load?v=1.0&q=" + encodeURIComponent(planetHiveRSS),
    type: "GET",
    data: {
      num: 10,
      output: "json"
    },
    dataType: "jsonp",
    error: function(jqXHR, textStatus, errorThrown) {
      console.log("Cannot load Planet Hive feeds.");
    },
    success: function(data) {
      console.log(data);
      $.each(data.responseData.feed.entries, function(idx, post){
        var title = post.title;
        var publishedDate = new Date( post.publishedDate );
        var excerpt = post.content;
        var link = post.link;
        publishedDate =
                  ["January","February","March","April","May","June","July","August","September","October","November","December"][ publishedDate.getMonth() ] +
                  " " +
                  publishedDate.getDate() +
                  ", " +
                  publishedDate.getFullYear();


        var thehtml = "<div class='blog-feed'>" +
                        "<h2><a href='" + link + "'>" + title + "</a></h2>" +
                        "<div class='published-date'>" + publishedDate + "</div>" +
                        "<div><p class='blog-feed-content'>" + post.content + "</p></div>" +
                        // "<div><p>" + post.contentSnippet + "</p></div>" +
                        "<div>" + link + "</div>" +
                        "<div><a class='read-more' href='" + link + "'>Read More</a></div>" +
                      "</div>";

          $("#recent-blog").append(thehtml);
      });
    }
  });

</script>

<?php get_footer(); ?>
