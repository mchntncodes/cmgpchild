<?php
/**
 * Chintan Mota Theme (Child) for GeneratePress
 * Notes:
 * - Loads parent GeneratePress stylesheet
 * - Loads child custom.css (where your Lovable/brand styles belong)
 * - Loads Google Fonts (Space Grotesk + DM Sans)
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

add_action( 'wp_enqueue_scripts', function () {
  // Parent theme CSS
  wp_enqueue_style(
    'generatepress-parent',
    get_template_directory_uri() . '/style.css',
    array(),
    wp_get_theme( get_template() )->get( 'Version' )
  );

  // Child theme CSS
  wp_enqueue_style(
    'cm-child-custom',
    get_stylesheet_directory_uri() . '/custom.css',
    array('generatepress-parent'),
    wp_get_theme()->get( 'Version' )
  );

  // Google Fonts
  wp_enqueue_style(
    'cm-google-fonts',
    'https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap',
    array(),
    null
  );
}, 20 );

/**
 * Optional: add a body class for easier targeting.
 */
add_filter( 'body_class', function( $classes ) {
  $classes[] = 'cm-theme';
  return $classes;
});

/**
 * Optional: a simple widget area for blog sidebar CTA.
 */
add_action( 'widgets_init', function () {
  register_sidebar(array(
    'name'          => 'Blog Sidebar CTA',
    'id'            => 'blog-sidebar-cta',
    'before_widget' => '<section class="cm-sidebar-cta">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="cm-sidebar-cta-title">',
    'after_title'   => '</h4>',
  ));
});

/**
 * OPTIONAL (advanced): If you want to embed a Lovable/React build inside WP,
 * you can enqueue its bundled assets here AFTER you copy them into:
 * /wp-content/themes/<this-child-theme>/assets/
 *
 * Example:
 * wp_enqueue_style('cm-lovable', get_stylesheet_directory_uri().'/assets/index.css', array('cm-child-custom'), '1.0');
 * wp_enqueue_script('cm-lovable', get_stylesheet_directory_uri().'/assets/index.js', array(), '1.0', true);
 */
