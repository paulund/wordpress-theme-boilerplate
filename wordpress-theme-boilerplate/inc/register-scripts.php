<?php
/**
 * Register the scripts that is used by the theme
 *
 * @package WordPress-Theme-Boilerplate
 *
 * @since 1.0
 */

function wtb_register_scripts()
{
    // Load main stylesheet
    wp_enqueue_style( THEME_TEXTDOMAIN.'-style', get_stylesheet_uri(), array(), THEME_VERSION );
}
add_action( 'wp_enqueue_scripts', 'wtb_register_scripts');