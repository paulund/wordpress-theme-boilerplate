<?php
/**
 * Register the settings for the theme in WordPress
 *
 * @package WordPress-Theme-Boilerplate
 *
 * @since 1.0
 */

class Wtb_Theme_Setup
{
    public function __construct()
    {
        add_action('after_setup_theme', array($this, 'wtb_theme_setup'));
    }

    public function wtb_theme_setup()
    {
        // Load languages
        load_theme_textdomain( THEME_TEXTDOMAIN, get_template_directory() . '/lang' );

        // Editor styles
        add_editor_style( array( 'css/editor-style.css' ) );

        // Add theme support http://codex.wordpress.org/Function_Reference/add_theme_support
        // add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );

        // Add post thumbnails sizes
        set_post_thumbnail_size( 672, 372, true );

    }
}
$wtb_theme_setup = new Wtb_Theme_Setup();