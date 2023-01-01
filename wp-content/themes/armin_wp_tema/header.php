<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>
<body>


<!-- Top Navigation Menu -->
<div class="topnav">
  <a href="#home" class="active"></a>
  <!-- Navigation links (hidden by default) -->
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

  <style> 


/* Style the navigation menu */
.topnav {
  position: relative;
}

/* Hide the links inside the navigation menu (except for logo/home) */
.topnav #myLinks {
  display: none;
}

/* Style navigation menu links */
 .li-child  {
  color: #1E2022;
  text-decoration: none;
  font-size: 2rem;
  display: block;
}

/* Style the hamburger menu */

.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: 2.5rem;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
}

.topnav .icon {
  display: block;
  position: absolute;
  color: #1E2022;
  right: 0;
  top: 0;
}

.navbar {
    margin-top: 1rem;
}

</style>


  <script>
/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

  </script>