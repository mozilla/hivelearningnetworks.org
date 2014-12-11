<div id="sidebar-container">
  <?php
      if (has_nav_menu('resources-page-nav')) {
        wp_nav_menu(array(
          'theme_location' => 'resources-page-nav',
          'menu_class'      => 'menu',
          'container' => 'div',
          'container_id' => 'resources-sidebar',
          'items_wrap' => '<h3>Resources</h3><ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth' => 2
        ));
      }
    ?>

  <div class="subsection">
    <h3>The Hive Cookbook</h3>
    <p>
      The Hive Cookbook contains more details about how to start a Hive in your community.
    </p>
    <div>
      <a class="btn hive-btn full-width" href="https://wiki.mozilla.org/Webmaker/HiveCookbook">
        Read the Cookbook
      </a>
    </div>
  </div>
</div>
