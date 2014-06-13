<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Toronto Surgery
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	
	<header id="masthead">
			<!--header top-->
			<div class="branding cf">
					<div class="brand">
						<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/images/toronto-surgery-logo.png" title="Toronto Surgery Home" alt="Toronto Surgery Home" /></a>
						<h1 class="site-title">Toronto Cosmetic <span>Surgery Institute</span></h1>
					</div>
					<div class="request-consult cf">
						<span class="req-num">Request a consultation <strong><a href="callto:(416)-834-6640">(416) 834-6640</a></strong></span>
						<aside class="cf">
							<a class="fb-like" href="#"><img src="<?php bloginfo('template_directory'); ?>/images/home-page-like-icon.png" alt="Like Toronto Surgery on Facebook" title="Like Toronto Surgery on Facebook" /></a>
							<div class="fb-recommend"></div>
							<a href="mailto:x@gmail.com" class="header-mailto"><img src="<?php bloginfo('template_directory'); ?>/images/header-mailto.png" alt="Send us an Email" title="Send an Email to Toronto Surgery" /></a>
						</aside>
					</div>
			</div>
			<!--header top end-->
			
			<!--main navigation-->
			<nav id="main-nav" class="cf">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				<a class="tour-clinic-cta" href="#">tour our clinic</a>
			</nav>
			
			<!--main navigation end-->
			<nav id="mobile-navigation">
				<div class="mob-nav-btn"><h1>Menu</h1></div>
				<div class="mob-nav-arrow"></div>
			</nav>
			
		</header>

	<div <?php if(!is_front_page()) echo 'id="content"'; ?> class="site-content cf">
