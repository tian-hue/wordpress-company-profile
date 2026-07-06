<?php
/**
 * PT Nusantara Digital Theme Functions
 * 
 * @package Nusantara
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Setup Theme Defaults
 */
function nusantara_setup() {
    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Switch default core markup to output valid HTML5.
    add_theme_support( 'html5', array( 
        'search-form', 
        'comment-form', 
        'comment-list', 
        'gallery', 
        'caption',
        'style',
        'script'
    ) );

    // Register Navigation Menus
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Navigation', 'nusantara' ),
        'footer'  => esc_html__( 'Footer Navigation', 'nusantara' ),
        'mobile'  => esc_html__( 'Mobile Navigation', 'nusantara' ),
    ) );
}
add_action( 'after_setup_theme', 'nusantara_setup' );

/**
 * Enqueue Scripts and Styles
 */
function nusantara_scripts() {
    // Core style
    wp_enqueue_style( 'nusantara-style', get_stylesheet_uri(), array(), '1.0.0' );
    
    // Header component
    wp_enqueue_style( 'nusantara-header-style', get_template_directory_uri() . '/assets/css/header.css', array(), '1.0.0' );
    wp_enqueue_script( 'nusantara-header-script', get_template_directory_uri() . '/assets/js/header.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'nusantara_scripts' );

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Post Types.
 */
require get_template_directory() . '/inc/cpt-services.php';

/**
 * Performance Optimizations.
 */
require get_template_directory() . '/inc/performance.php';
