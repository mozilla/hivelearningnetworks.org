    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            footer text 111
          </div>
        </div>
      </div>
    </footer>

    <script src="http://d3js.org/d3.v3.min.js"></script>
    <script src="http://d3js.org/topojson.v1.min.js"></script>
    <script>
      var pathToTheme = "<?php bloginfo('template_directory') ?>" + "/";

      var viewBoxW = 1000;
      var viewBoxH = 500;

      var projection = d3.geo.mercator()
          .translate([viewBoxW / 2, viewBoxH / 2]);

      var path = d3.geo.path()
          .projection(projection);

      var svg = d3.select("body #hive-map").append("svg")
          .attr("viewBox", "0 0 1000 " + (viewBoxH))
          .attr("width", "100%")
          .attr("height", "100%");

      var g = svg.append("g");

      var r = 7;

      d3.json( pathToTheme + "world-110m.json", function(error, world) {
        // load cities.csv to map and highlight cities on map
        d3.csv(pathToTheme + "cities.csv", function(error, data) {
            g.selectAll("circle")
              .data(data)
              .enter()
              .append("polygon")
              .attr("id", function(d) {
                return d.city.replace(/\s+/g, '-').toLowerCase();
              })
              .attr("points", function(d) {
                var cx = projection( [d.lon,d.lat] )[0];
                var cy = projection( [d.lon,d.lat] )[1];
                return hexagonPoints(r,cx,cy);
              })
              .attr("fill-opacity", 0.7)
              .style("fill", "#FAB457");
        });
        console.log(topojson.feature(world, world.objects.countries).features);
        g.selectAll("path")
          .data(topojson.feature(world, world.objects.countries).features)
          // .data(function(){
          //   console.log("hi");
          //   console.log(topojson.feature(world, world.objects.countries).features);
          // })
          .enter()
          .append("path")
          .attr("d", path);
      });

      function hexagonPoints(r, cx, cy) {
        var points =  cx  + "," + (cy-r) + " "  +
                      (cx + ( Math.sqrt(3)/2 ) * r )+ "," + (cy-r/2) + " " +
                      (cx + ( Math.sqrt(3)/2 ) * r )+ "," + (cy+r/2) + " " +
                      cx + "," + (cy+r) + " " +
                      (cx - ( Math.sqrt(3)/2 ) * r )+ "," + (cy+r/2) + " " +
                      (cx - ( Math.sqrt(3)/2 ) * r )+ "," + (cy-r/2) ;
        return points;
      }
    </script>


    <?php wp_footer(); ?>

    <script src="http://mozorg.cdn.mozilla.net/tabzilla/tabzilla.js"></script>
    <?php wp_enqueue_script("bootstrap"); ?>
  </body>
</html>
