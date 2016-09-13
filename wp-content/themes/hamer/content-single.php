<?php
/**
 * @package hamer
 * @since hamer 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-content">
    <h1 class="entry-title">
      <?php the_title(); ?>
    </h1>
    <?php the_content(); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'hamer' ), 'after' => '</div>' ) ); ?>
    <div class="clear">
  </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->