<?php
/**
 * Register the menus used on the theme
 *
 * @package WordPress-Theme-Boilerplate
 *
 * @since 1.0
 */

function wtb_register_menus()
{
    // Register Menus
    register_nav_menus( array(
        'primary'   => __( 'Top primary menu', THEME_TEXTDOMAIN ),
        'secondary' => __( 'Secondary menu in left sidebar', THEME_TEXTDOMAIN ),
    ) );
}
add_action('after_setup_theme', 'wtb_register_menus');