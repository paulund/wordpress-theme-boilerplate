<?php
/**
 * Register the scripts that is used by the theme
 *
 * @package WordPress-Theme-Boilerplate
 *
 * @since 1.0
 */

class Wtb_Register_Scripts
{
    public function __construct()
    {
        add_action( 'wp_enqueue_scripts', array($this, 'wtb_register_scripts'));
    }

    public function wtb_register_scripts()
    {
        // Load main stylesheet
        wp_enqueue_style( THEME_TEXTDOMAIN.'-style', get_stylesheet_uri(), array(), THEME_VERSION );
    }
}
$wtb_register_scripts = new Wtb_Register_Scripts();