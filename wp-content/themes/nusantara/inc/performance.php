<?php
/**
 * PT Nusantara Digital Performance Optimizations
 *
 * @package Nusantara
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Remove WordPress Emojis
 * Emojis load an extra JS file and CSS on every page load.
 * We remove them for better Core Web Vitals (LCP/FCP).
 */
function nusantara_disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'nusantara_disable_emojis' );

/**
 * Defer JavaScript for better rendering
 * 
 * @param string $tag    The `<script>` tag for the enqueued script.
 * @param string $handle The script's registered handle.
 * @return string
 */
function nusantara_defer_scripts( $tag, $handle ) {
    // We defer our custom scripts to prevent render-blocking.
    // Core scripts (like jQuery) are excluded to prevent breaking plugins.
    if ( 'nusantara-header-script' === $handle ) {
        return str_replace( ' src', ' defer="defer" src', $tag );
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'nusantara_defer_scripts', 10, 2 );
