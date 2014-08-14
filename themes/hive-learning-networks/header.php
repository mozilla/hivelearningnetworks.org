<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- For sharing & search engines -->
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://hivelearningnetworks.org/wp-content/themes/hive-learning-networks/img/logo-og.png" />
    <meta property="og:image:width" content="1400" />
    <meta property="og:image:height" content="1400" />
    <meta property="og:site_name" content="Hive Learning Networks" />
    <meta property="og:title" content="Hive Learning Networks" />
    <meta property="og:description" content="A growing constellation of communities around the globe that are championing digital skills and web literacy through connected learning." />
    <meta property="og:url" content="http://hivelearningnetworks.org/" />

    <link rel="canonical" href="http://hivelearningnetworks.org/" />
    <meta property="description" content="A growing constellation of communities around the globe that are championing digital skills and web literacy through connected learning." />
    <!-- /sharing -->

    <title><?php bloginfo('name'); echo (is_home() ? '' : wp_title('&raquo;',false)); ?></title>
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <link href="http://mozorg.cdn.mozilla.net/media/css/tabzilla-min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font-awesome/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:700italic,400,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.1.min.js"></script>
    <?php wp_head(); ?>
    <!-- GA tracking script for hivelearningnetworks.org -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-49796218-7', 'hivelearningnetworks.org');
      ga('send', 'pageview');
    </script>
  </head>

  <body <?php body_class(); ?>>
    <div id="wrap">
      <nav class="navbar" role="navigation">
        <div class="container">
          <a href="http://www.mozilla.org/" id="tabzilla">mozilla</a>
          <div class="navbar-header">
            <a href="/" class="header-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/hive_logo.png" /></a>
            <a class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target="#site-nav">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="site-nav">
            <ul class="nav navbar-nav">
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="/" class="header-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/hive_logo.png" /></a>
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
