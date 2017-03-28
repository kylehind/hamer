<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package hamer
 * @since hamer 1.0
 */
?>
<?php get_header(); ?>

<div id="content" class="site-content" role="main">
  <?php if ( have_posts() ) : ?>
    <?php /* Start the Loop */ ?>
    <div class="grid">
      <?php query_posts('category_name=portfolio'); ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', get_post_format() ); ?>
      <?php endwhile; ?>
    </div>
    <div class="clear"></div>
  <?php else : ?>
    <?php get_template_part( 'no-results', 'index' ); ?>
  <?php endif; ?>
</div><!-- #content .site-content -->

<?php get_footer(); ?>