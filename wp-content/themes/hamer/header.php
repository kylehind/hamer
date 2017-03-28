<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package hamer
 * @since hamer 1.0
 */
?><!DOCTYPE html>

<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
<?php
/*
* Print the <title> tag based on what is being viewed.
*/
global $page, $paged;

wp_title( '|', true, 'right' );

// Add the blog name.
bloginfo( 'name' );

// Add the blog description for the home/front page.
$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) )
echo " | $site_description";

// Add a page number if necessary:
if ( $paged >= 2 || $page >= 2 )
echo ' | ' . sprintf( __( 'Page %s', 'shape' ), max( $paged, $page ) );

?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">

  <header id="masthead" class="site-header" role="banner">
    <hgroup></hgroup>
    <div class="site-logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        <?php if ( ! empty( get_header_image() ) ) : ?>
          <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
        <?php else : ?>
          <h1><?php  bloginfo( 'name' ); ?></h1>
        <?php endif; ?>
      </a>
    </div>
    <div id="navigation-menu-icon"><img src='<?php echo get_template_directory_uri() ?>/img/menu.png'></div>
    <div class="mobile_clear"></div>
    <nav id="navigation" class="site-navigation main-navigation">
      <ul>
        <?php if ( is_active_sidebar("contact") ) : ?>
          <li><a id="contact_link" href="#">Contact</a></li>
        <?php endif; ?>
        <?php
          $args=array(
            'category_name' => 'blog',
            'post_status' => 'publish'
          );
          $hasposts = get_posts($args);
          if ( $hasposts ) : ?>
          <li><a href="/category/blog/">Blog</a></li>
        <?php endif; ?>
        <?php wp_nav_menu( array( 'items_wrap' => '<span id="%1$s" class="%2$s">%3$s</span>', 'container' => '', 'theme_location' => 'primary' ) ); ?>
      </ul>
    </nav><!-- .site-navigation .main-navigation -->
    <div class="clear"></div>
  </header><!-- #masthead .site-header -->
  <div class="clear"></div>

  <div id="main" class="site-main">
    <div id="primary" class="content-area">
      <?php get_template_part('contact'); ?>
      <div class="clear"></div>