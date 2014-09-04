  <?php
  /*
  Template Name: "Buzz" page
  */

  get_header(); ?>

    <div class="general-banner" id="buzz-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="page-title">#HIVEBUZZ</h1>
            <div class="page-description">
              <p>Learn about the great work happening in Hive communities around the world.</p>
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
      $.each(data.responseData.feed.entries, function(idx, post){
        $("#recent-blog").append( generatePreview(post) );
      });
    }
  });

  function generatePreview(post) {
    var title = post.title;
    var publishedDate = new Date( post.publishedDate );
    var link = post.link;
    // extract more info from the blog content
    var preview = extractMorePostInfo(post.content);
    var sourceBlogName = preview.sourceBlogName;
    var sourceBlogURL = preview.sourceBlogURL;
    var sourceBlog = sourceBlogName != "" ? "<a class='feed-source' rel='nofollow' href='" + sourceBlogURL + "'>" + sourceBlogName + "</a>" : "";
    var image = (preview.imageURL.length > 0) ? "<img src='"+ preview.imageURL +"' class='preview-img' />" : "";
    var excerpt = "<p>" + preview.excerpt + "</p>";
    // display the published date in a more user friendly way
    publishedDate =
              ["January","February","March","April","May","June","July","August","September","October","November","December"][ publishedDate.getMonth() ] +
              " " +
              publishedDate.getDate() +
              ", " +
              publishedDate.getFullYear();

    // generate the HTML to be appended
    var thehtml = "<div class='blog-feed'>" +
                    "<h2><a href='" + link + "'>" + title + "</a></h2>" +
                    sourceBlog +
                    "<div class='published-date'>" + publishedDate + "</div>" +
                    "<div class='blog-feed-content'>" + image + excerpt + "</div>" +
                    "<div><a class='read-more' href='" + link + "'>Read More</a></div>" +
                  "</div>";
    return thehtml;
  }

  function extractMorePostInfo(blogContent) {
    var $content = $("<div class='content-wrapper'>" + blogContent + "</div>");
    var source;
    var sourceBlogURL = "";
    var sourceBlogName = "";
    var imageURL = "";
    var excerpt = "";
    // the blog source can be found in the last <a rel="nofollow"> element of the blog content
    if ( $content.find("a[rel=nofollow]").length > 0 ) {
      source = $content.find("a[rel=nofollow]")[$content.find("a[rel=nofollow]").length-1];
      sourceBlogURL = source.href;
      sourceBlogName = source.innerHTML;
    }
    // extract image url
    imageURL = ($content.find("img").length > 0) ? $content.find("img")[0].src : imageURL;
    // generate excerpt
    excerpt = ($content.find("p").length > 0) ? ($content.find("p")[0].innerHTML) : excerpt;
    excerpt = excerpt.length > 0 ? (excerpt + "..") : excerpt;

    return  {
              sourceBlogName: sourceBlogName,
              sourceBlogURL: sourceBlogURL,
              imageURL: imageURL,
              excerpt: excerpt
            };
  }
</script>

<?php get_footer(); ?>
