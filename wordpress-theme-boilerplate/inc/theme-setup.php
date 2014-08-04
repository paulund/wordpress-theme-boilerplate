<?php
/**
 * Register the settings for the theme in WordPress
 *
 * @package WordPress-Theme-Boilerplate
 *
 * @since 1.0
 */

function wtb_theme_setup()
{
    global $textdomain;

    // Load languages
    load_theme_textdomain( $textdomain, get_template_directory() . '/lang' );

    // Editor styles
    add_editor_style( array( 'css/editor-style.css' ) );

    // Add theme support http://codex.wordpress.org/Function_Reference/add_theme_support
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );
    /*
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
    ) );
    */

    // Add post thumbnails sizes
    set_post_thumbnail_size( 672, 372, true );

}
add_action('after_setup_theme', 'wtb_theme_setup');