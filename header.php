<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title><?php wp_title('|',true,'right'); bloginfo('name'); ?></title>
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset-context/cssreset-context-min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
  <?php wp_head(); ?>
</head>
<body>
  <header id="header">
    <div class="container">
        <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
      <div class="menu">
        <?php wp_nav_menu(); ?>
      </div><!-- /menu -->
    </div><!-- /container -->
  </header>