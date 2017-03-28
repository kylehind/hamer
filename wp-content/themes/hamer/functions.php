<?php
/**
 * hamer functions and definitions
 *
 * @package hamer
 * @since hamer 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since hamer 1.0
 */
if ( ! isset( $content_width ) )
    $content_width = 654; /* pixels */

if ( ! function_exists( 'hamer_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since hamer 1.0
 */
function hamer_setup() {

    /**
     * Custom template tags for this theme.
     */
    require( get_template_directory() . '/inc/template-tags.php' );

    /**
     * Custom functions that act independently of the theme templates
     */
    require( get_template_directory() . '/inc/tweaks.php' );

    /**
     * Make theme available for translation
     * Translations can be filed in the /languages/ directory
     */
    load_theme_textdomain( 'hamer', get_template_directory() . '/languages' );

    /**
     * Add default posts and comments RSS feed links to head
     */
    add_theme_support( 'automatic-feed-links' );

    /**
     * Enable support for the Aside Post Format
     */
    add_theme_support( 'post-formats', array( 'aside' ) );

    /**
     * This theme uses wp_nav_menu() in one location.
     */
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'hamer' ),
    ) );
}
endif; // hamer_setup
add_action( 'after_setup_theme', 'hamer_setup' );

/**
 * Enqueue scripts and styles
 */
function hamer_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array( 'jquery' ), '20160620' );
    wp_enqueue_script( 'load-masonry', get_template_directory_uri() . '/js/load-masonry.js', array( 'jquery' ), '20160620' );
    wp_enqueue_script( 'clear-fix', get_template_directory_uri() . '/js/clear-fix.js', array( 'jquery' ), '20160620' );
    wp_enqueue_script( 'mobile-menu', get_template_directory_uri() . '/js/mobile-menu.js', array( 'jquery' ), '20160620' );
    wp_enqueue_script( 'load-contact', get_template_directory_uri() . '/js/load-contact.js', array( 'jquery' ), '20160620' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    if ( is_singular() && wp_attachment_is_image() ) {
        wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20160620' );
    }
}
add_action( 'wp_enqueue_scripts', 'hamer_scripts' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since hamer 1.0
 */
function hamer_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Contact', 'hamer' ),
        'id' => 'contact',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>'
    ) );
}
add_action( 'widgets_init', 'hamer_widgets_init' );

/**
 * Setup the WordPress core custom background feature.
 *
 * Use add_theme_support to register support for WordPress 3.4+
 * as well as provide backward compatibility for previous versions.
 * Use feature detection of wp_get_theme() which was introduced
 * in WordPress 3.4.
 *
 * Hooks into the after_setup_theme action.
 *
 */

function hamer_register_custom_background() {
    $args = array(
        'default-color' => 'e9e0d1',
    );

    $args = apply_filters( 'hamer_custom_background_args', $args );

    if ( function_exists( 'wp_get_theme' ) ) {
        add_theme_support( 'custom-background', $args );
    } else {
        define( 'BACKGROUND_COLOR', $args['default-color'] );
        define( 'BACKGROUND_IMAGE', $args['default-image'] );
        add_custom_background();
    }
}
add_action( 'after_setup_theme', 'hamer_register_custom_background' );

add_theme_support( 'post-thumbnails' );

/**
 * Implement the Custom Header feature
 */
require( get_template_directory() . '/inc/custom-header.php' );
/**
 * Set up categories used for portfolio and blog sections
 */
function insert_category_portfolio() {
  wp_insert_term(
    'Portfolio',
    'category',
    array(
      'description' => 'These are posts that will be found on the "Portfolio" section on the site.',
      'slug'    => 'portfolio'
    )
  );
}
add_action( 'after_setup_theme', 'insert_category_portfolio' );

function insert_category_blog() {
  wp_insert_term(
    'Blog',
    'category',
    array(
      'description' => 'These are posts that will be found on the "blog" section on the site.',
      'slug'    => 'blog'
    )
  );
}
add_action( 'after_setup_theme', 'insert_category_blog' );

/* Meta box setup function. */
function hamer_post_meta_boxes_setup() {

  /* Add meta boxes on the 'add_meta_boxes' hook. */
  add_action( 'add_meta_boxes', 'hamer_add_post_meta_boxes' );
}
/* Create one or more meta boxes to be displayed on the post editor screen. */
function hamer_add_post_meta_boxes() {

  add_meta_box(
    'hamer-post-subtitle',      // Unique ID
    esc_html__( 'Subtitle', 'example' ),    // Title
    'hamer_post_subtitle_meta_box',   // Callback function
    'post',         // Admin page (or post type)
    'side',         // Context
    'default'         // Priority
  );
}
/* Display the post meta box. */
function hamer_post_subtitle_meta_box( $object, $box ) { ?>

  <?php wp_nonce_field( basename( __FILE__ ), 'hamer_post_subtitle_nonce' ); ?>

  <p>
    <label for="hamer-post-subtitle"><?php _e( "Add a subtitle for the Post." ); ?></label>
    <br />
    <input class="widefat" type="text" name="hamer-post-subtitle" id="hamer-post-subtitle" value="<?php echo esc_attr( get_post_meta( $object->ID, 'hamer_post_subtitle', true ) ); ?>" size="30" />
  </p>
<?php }
/* Save post meta on the 'save_post' hook. */
add_action( 'save_post', 'hamer_save_post_subtitle_meta', 10, 2 );
/* Save the meta box's post metadata. */
function hamer_save_post_subtitle_meta( $post_id, $post ) {

  /* Verify the nonce before proceeding. */
  if ( !isset( $_POST['hamer_post_subtitle_nonce'] ) || !wp_verify_nonce( $_POST['hamer_post_subtitle_nonce'], basename( __FILE__ ) ) )
    return $post_id;

  /* Get the post type object. */
  $post_type = get_post_type_object( $post->post_type );

  /* Check if the current user has permission to edit the post. */
  if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
    return $post_id;

  /* Get the posted data and sanitize it for use as an HTML class. */
  $new_meta_value = ( isset( $_POST['hamer-post-subtitle'] ) ? $_POST['hamer-post-subtitle'] : '' );

  /* Get the meta key. */
  $meta_key = 'hamer_post_subtitle';

  /* Get the meta value of the custom field key. */
  $meta_value = get_post_meta( $post_id, $meta_key, true );

  /* If a new meta value was added and there was no previous value, add it. */
  if ( $new_meta_value && '' == $meta_value )
    add_post_meta( $post_id, $meta_key, $new_meta_value, true );

  /* If the new meta value does not match the old value, update it. */
  elseif ( $new_meta_value && $new_meta_value != $meta_value )
    update_post_meta( $post_id, $meta_key, $new_meta_value );

  /* If there is no new meta value but an old value exists, delete it. */
  elseif ( '' == $new_meta_value && $meta_value )
    delete_post_meta( $post_id, $meta_key, $meta_value );
}
/* Fire our meta box setup function on the post editor screen. */
add_action( 'load-post.php', 'hamer_post_meta_boxes_setup' );
add_action( 'load-post-new.php', 'hamer_post_meta_boxes_setup' );
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
?>