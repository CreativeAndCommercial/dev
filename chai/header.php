<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Chai
 * @since Chai 1.0
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Map -->
<span id="custom-map-tip"></span>
<!-- Top Menu -->
<section id="top-menu">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs">
          <!-- top menu links -->
          <ul class="list-inline pull-left">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Media</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-lg-7 col-md-7 hidden-sm hidden-xs">
          <!-- Slogan -->
          <p class="slogan text-right">The Jewish Community's Cancer Support Organisation</p>
          <!-- Search -->
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
          <form id="search-form" class="form-inline">
            <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control" id="seach_field" placeholder="">
              </div>
            </div>
            <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Header -->
<header id="header">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <!-- Logo -->
        <!-- #Brand -->
        <a href="#" class="navbar-brand pull-left"><img src="images/logo.jpg" width="180"/></a>
        <!-- #Brand -->
      </div>
      <div class="col-lg-7 col-md-7 col-sm-12">
        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                
        </button>
       <!-- Telephone -->
        <a id="telephone-btn" href="#" class="pull-right"><span>Freephone Number</span>0808 808 4567</a>

        <!-- Menu -->
        <ul id="main-nav" class="nav navbar-nav pull-right clearfix collapse navbar-collapse bs-navbar-collapse">
          <li>
            <a href="#">Services</a>
          </li>
          <li>
            <a href="#">News</a>
          </li>
          <li class="active">
            <a href="#">Events</a>
          </li>
          <li>
            <a href="#">Get Involved</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-12">
        <!-- Donate -->
        <a id="donate-btn" href="#" class="pull-right"><span>Click here to</span>Donate</a>
        <!-- Social -->
        <ul id="social-links" class="list-inline pull-right clearfix">
          <li><a href="#"><i class="twitter"></i></a></li>
          <li><a href="#"><i class="rss"></i></a></li>
          <li><a href="#"><i class="facebook"></i></a></li>
          <li><a href="#"><i class="v"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</header>
