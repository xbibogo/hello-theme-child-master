<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra-child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'ASTRA_CHILD_THEME_VERSION', '1.0.1' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), ASTRA_CHILD_THEME_VERSION, 'all' );

	wp_enqueue_script( 'astra-child-theme-js', get_stylesheet_directory_uri() . '/js/header-shrink.js', array(), ASTRA_CHILD_THEME_VERSION, true );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

  
add_filter( 'gettext', function( $translated, $text, $domain ) {
    if ( 'astra' === $domain && "This page doesn't seem to exist." === $text ) {
        return 'Det ser ud til, at linket til denne side ikke virker korrekt.';
    }
    return $translated;
}, 20, 3 );

add_filter( 'astra_default_strings', function( $strings ) {
    $strings['string-404-sub-title'] = 'Det ser ud til, at linket, der førte dig hertil, ikke virker. Måske kan du prøve at søge i stedet?';
    return $strings;
} );

/* force mobile menu to off-canvas (flyout) from left */
add_filter( 'astra_get_option_mobile-header-type', function( $value ) {
    return 'off-canvas';
} );

add_filter( 'astra_get_option_off-canvas-slide', function( $value ) {
    return 'right';
} );