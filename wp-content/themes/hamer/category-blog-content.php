<?php
/**
 * @package hamer
 * @since hamer 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class='blog-content'>
    <div class="blog-title">
      <h2><?php the_date('d.m.y'); ?></h2>
      <h2><?php the_title(); ?></h2>
    </div>
    <?php
      $content = get_the_content();
      $content = preg_replace("/<img[^>]+\>/i", " ", $content);
      $content = apply_filters('the_content', $content);
      $content = str_replace(']]>', ']]>', $content);
      echo $content;
    ?>
  </div>

  <div class='blog-images'>
    <?php
      $content = get_the_content();
      preg_match_all("/<img[^>]+\>/i",
      $content,
      $output, PREG_PATTERN_ORDER);
      foreach ($output[0] as $img) {
        echo $img;
      }
    ?>
    <div class="clear"></div>
    <?php the_tags( '<div class="tags">', ', ', '</div>' ); ?>
  </div>

  <div class="clear"></div>
</article><!-- #post-<?php the_ID(); ?> -->
<div class="clear"></div>