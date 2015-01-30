
$("#hive-intro-menu .hive-list li").click(function(event) {
  var placeName = $(this).find(".the-place").text();
  var twitterHandle = $(this).find(".the-details .twitter-handle").text();
  var twitterUrl = "";
  var websiteURL = $(this).find(".the-details .website-url").text();
  // show content
  $("#hive-intro-box h2").html(placeName);
  if ( twitterHandle ) {
    twitterUrl = "http://twitter.com/" + twitterHandle;
  }
  $("#hive-intro-box .twitter")
                        .attr("href", twitterUrl)
                        .text(twitterHandle);
  $("#hive-intro-box .hive-btn")
                      .attr("href", websiteURL)
                      .text("Visit Website");
  // hide the general info
  $("#hive-intro-box .general-cta").hide();
});



/* ****************************************
*  "Locations" Page
*/

$("#locations-menu div:not(#hive-coming-menu) a").click(function(){
  var locationSelected = $(this).data("profile");
    console.log( locationSelected );
  // highlight selected item
  $("#locations-menu li.active").removeClass("active");
  $(this).parent("li").addClass("active");
  // show corresponding sections, hide the rest
  $(".hive-profile").parent(".container").addClass("hide");
  // profile section of the selected item
  var profile = $(".hive-profile[data-profile="+ locationSelected +"]").parent(".container");
  profile.removeClass("hide");
  $("html, body").animate({ scrollTop: profile.offset().top }, "slow");
});
