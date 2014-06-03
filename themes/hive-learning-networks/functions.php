<?php

function add_bootstrap_scripts_with_jquery() {
  wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
  wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'add_bootstrap_scripts_with_jquery' );

// Register custom nav menus: http://codex.wordpress.org/Navigation_Menus
function register_site_menus() {
  register_nav_menus(
    array(
      'header-nav' => __( 'Header Nav' )
    )
  );
}
add_action( 'init', 'register_site_menus' );



?>
