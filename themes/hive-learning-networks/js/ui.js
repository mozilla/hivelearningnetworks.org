// $("#hive-intro-menu").css("background", "red");

$("#hive-intro-menu .hive-list li").click(function(event) {
  var placeName = $(this).find(".the-place").text();
  var intro = $(this).find(".the-intro").text();
  // show content
  $("#hive-intro-box h2").html(placeName);
  $("#hive-intro-box p").html(intro);
  // hide the "JOIN OUR MAILING LIST" button
  $("#hive-intro-box .hive-btn").hide();
});
