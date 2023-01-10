<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>
<body>


<!-- Top Navigation Menu -->
<?php ?>

<div class="topnav">
  <a href="#home" class="active"></a>
  <!-- Navigation links (hidden by default) -->
  <a href="/"> 
    <img class="site-logo" src="https://wordpress.test/wp-content/themes/armin_wp_tema/assets/images/logo.png" />
  </a>
  <div id="myLinks" class="navbar">
    <a class="li-child" href="/latest">Latest</a>
    <a class="li-child"  href="/about">About</a>
    <a class="li-child"  href="/gallery">Gallery</a>
    <a class="li-child"  href="/contact">Contact</a>
  </div>
  <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

