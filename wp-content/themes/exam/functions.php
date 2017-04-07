<?php
/**
 * theme-template functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package theme-template
 */

/**
 * Clear wp_head()
 */
show_admin_bar( false );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_head', 'rel_canonical' );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/**
 * Enqueue scripts and styles.
 */
function custom_scripts() {
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
  wp_register_script( 'libs', get_template_directory_uri() . '/assets/js/libs.js', array( ), false, true );
  wp_enqueue_script( 'libs' );
  wp_register_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array( 'libs' ), false, true );
  wp_enqueue_script( 'main' );
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );


/**
 * Enable support for Post Thumbnails on posts and pages.
 */
add_theme_support( 'post-thumbnails' );

/*
 * Register navigation menus.
 */
register_nav_menus( array(
    'primary' => esc_html__( 'Primary', 'exam' ),
    'footer-1' => esc_html__( 'Footer-1', 'exam' ),
) );

/**
 * Register custom post types.
 */
require get_template_directory() . '/inc/func/custom_post_types.php';

/**
 * Customizer fields for this theme.
 */
require get_template_directory() . '/inc/func/customize_theme_options.php';


/**
 * Register widgets.
 */
require get_template_directory() . '/inc/func/widgets.php';
?>

