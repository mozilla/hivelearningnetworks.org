<?php

require_once(dirname(__FILE__).'/widgets.php');


function add_bootstrap_scripts_with_jquery() {
  wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
  wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'add_bootstrap_scripts_with_jquery' );

// Register custom nav menus: http://codex.wordpress.org/Navigation_Menus
function register_site_menus() {
  register_nav_menus(
    array(
      'header-nav' => __( 'Header Nav' ),
      'resources-page-nav' => __( 'Resources Page Nav' )
    )
  );
}
add_action( 'init', 'register_site_menus' );


/**
 * Enable custom header support: http://codex.wordpress.org/Custom_Headers
 */
add_theme_support( 'custom-header' );


/**
 * Register sidebar: http://codex.wordpress.org/Sidebars
 */
function hive_register_sidebars() {
  register_sidebar(array(
    'id' => 'page-sidebar',
    'name' => __('Page Sidebar'),
    'description' => __('The sidebar used on the pages with sidebar on the right'),
    'before_widget' => "\t<section id=\"%1\$s\" class=\"widget %2\$s\">\n",
    'after_widget' => "\n\t</section>\n",
    'before_title' => "\n\t\t<h2>",
    'after_title' => "</h2>\n",
  ));

  register_sidebar( array(
    'name' => 'Hive Short Intro - Networks (Home Page)',
    'id' => 'hive-short-intro-networks-widget',
    'before_widget' => '<li class="hive-widget short_intro_widget">',
    'after_widget' => '</li>',
  ) );

  register_sidebar( array(
    'name' => 'Hive Short Intro - Communities (Home Page)',
    'id' => 'hive-short-intro-communities-widget',
    'before_widget' => '<li class="hive-widget short_intro_widget">',
    'after_widget' => '</li>',
  ) );

  register_sidebar( array(
    'name' => 'Hive Spotlight (Buzz Page)',
    'id' => 'hive-spotlight',
    'before_widget' => '<div class="hive-widget hive_spotlight_widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ) );
}

add_action( 'widgets_init', 'hive_register_sidebars' );

?>
