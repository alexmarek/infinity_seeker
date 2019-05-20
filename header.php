<?php
/**
 * The header for our theme.
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		
	<meta property="og:type" content="blog" />
	<meta property="og:title" content="GLM - <?php the_title(); ?>" />
	<meta property="og:url" content="<?php the_permalink(); ?>" />
	<meta name="twitter:title" content="GLM -  <?php the_title(); ?>" />
	<meta name="twitter:url" content="<?php the_permalink(); ?>" />

	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-75124049-1"></script> -->
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<nav class="navbar navbar-expand-md container">

				<!-- Your site title as branding in the menu -->

				<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

				<input type="checkbox" id="navbar-toggler-icon"/>
				<label for="navbar-toggler-icon" class="navbar-toggler-icon"></label>
  				

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2
					)
				); ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
