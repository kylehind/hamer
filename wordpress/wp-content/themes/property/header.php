<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script type="text/javascript" src="wp-content/themes/property/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="wp-content/themes/property/js/hide_sidebar.js"></script>
	<script type="text/javascript" src="wp-content/themes/property/js/header.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page">
	<header id="masthead">
		<div class="branding_naviation_container">
			<div class="branding_container">
				<h1 class="branding">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</h1>
			</div><!-- .branding_container -->
			<div class="navigation_container"> 
				<?php
					if ( has_nav_menu( 'primary' ) ) : ?>
						<nav id="navigation">
							<?php
								// Primary navigation menu.
								wp_nav_menu( array(
									'menu_class'     => 'nav-menu',
									'theme_location' => 'primary',
								) );
							?>
						</nav><!-- .navigation -->
					<?php endif;
				?>
			</div><!-- .navigation_container-->
			<div class="clear">
		</div><!-- .branding_naviation_container -->
	</header>

	<div id="sidebar" class="sidebar">		
		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">
