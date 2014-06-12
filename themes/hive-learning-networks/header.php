<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); echo (is_home() ? '' : wp_title('&raquo;',false)); ?></title>
    <link href="http://mozorg.cdn.mozilla.net/media/css/tabzilla-min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font-awesome/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:700italic,400,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.1.min.js"></script>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <div id="wrap">
      <nav class="navbar" role="navigation">
        <div class="container">
          <a href="http://www.mozilla.org/" id="tabzilla">mozilla</a>
          <div class="navbar-header">
            <a class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target="#site-nav">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="site-nav">
            <ul class="nav navbar-nav">
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="/" id="header-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/hive_logo.png" /></a>
              </li>
              <?php
                if (has_nav_menu('header-nav')) {
                  wp_nav_menu(array(
                    'theme_location' => 'header-nav',
                    'container' => false,
                    'items_wrap' => '%3$s',
                    'depth' => 1,
                  ));
                }
              ?>
            </ul>
          </div>
        </div>
      </nav>

  <!--     <div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <a href="<?php echo home_url(); ?>">
                <div class="placeholder-img">logo</div>
              </a>
              <p class="site-desciption"><?php bloginfo('description'); ?></p>
            </div>
          </div>
        </div>
      </div> -->
