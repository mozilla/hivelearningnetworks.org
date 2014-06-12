    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/hive_mozillafooterlogo.png" />
            </a>
          </div>
          <div class="col-md-2">
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/hive_mffooterlogo.png" />
            </a>
          </div>
          <div class="col-md-2">
            <!-- Creative Commons mark -->
            <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc/4.0/88x31.png" /></a>.
          </div>
          <div class="col-md-6">
            <p>© 2014 — Hive Learning Network</p>
          </div>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>

    <script src="http://mozorg.cdn.mozilla.net/tabzilla/tabzilla.js"></script>
    <?php wp_enqueue_script("bootstrap"); ?>
  </body>
</html>
