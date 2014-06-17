// $("#hive-intro-menu").css("background", "red");

$("#hive-intro-menu .hive-list li").click(function(event) {
  var placeName = $(this).find(".the-place").text();
  var twitterHandle = $(this).find(".the-details .twitter-handle").text();
  var websiteURL = $(this).find(".the-details .website-url").text();
  // show content
  $("#hive-intro-box h2").html(placeName);
  $("#hive-intro-box .twitter")
                      .attr("href", "http://twitter.com/" + twitterHandle)
                      .text(twitterHandle)
                      .removeClass("hide");
  $("#hive-intro-box .hive-btn")
                      .attr("href", websiteURL)
                      .text("Visit Website");
  // hide the general info
  $("#hive-intro-box .general-cta").hide();
});
