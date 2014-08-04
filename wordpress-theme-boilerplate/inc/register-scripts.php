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
    global $textdomain;

    // Load main stylesheet
    wp_enqueue_style( $textdomain.'-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'wtb_register_scripts');