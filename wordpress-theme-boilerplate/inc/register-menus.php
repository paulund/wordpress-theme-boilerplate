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
    global $textdomain;

    // Register Menus
    register_nav_menus( array(
        'primary'   => __( 'Top primary menu', $textdomain ),
        'secondary' => __( 'Secondary menu in left sidebar', $textdomain ),
    ) );
}
add_action('after_setup_theme', 'wtb_register_menus');