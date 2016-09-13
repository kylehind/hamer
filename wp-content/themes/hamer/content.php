<?php
/**
 * @package hamer
 * @since hamer 1.0
 */
?>
<a href="<?php the_permalink(); ?>">
  <div class='grid_item'>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="content-index">
      <div class='entry-thumbnail'>
        <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail(); ?>
        <?php endif; ?>
      </div><!-- -->

      <div class='entry-summary'><!-- -->
        <p><b><?php the_title(); ?></b></p>
        <p><?php echo get_post_meta( get_the_ID(), 'hamer_post_subtitle', true ); ?></p>
      </div>
      <div class="clear"></div>

    </article><!-- #post-<?php the_ID(); ?> -->
  </div>
</a>