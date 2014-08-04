<?php
/**
 * Functions for the WordPress-Theme-Boilerplate
 *
 * @package WordPress-Theme-Boilerplate
 *
 * @since 1.0
 */

// Set the content width
if ( ! isset( $content_width ) ) {
    $content_width = 1024;
}

define('THEME_TEXTDOMAIN', 'wordpress-theme-boilerplate');
define('THEME_VERSION', 1.0);

require_once dirname( __FILE__) . '/inc/theme-setup.php';
require_once dirname( __FILE__) . '/inc/register-menus.php';
require_once dirname( __FILE__) . '/inc/register-sidebars.php';
require_once dirname( __FILE__) . '/inc/register-scripts.php';
