<?php
/**
 * Register the menus used on the theme
 *
 * @package WordPress-Theme-Boilerplate
 *
 * @since 1.0
 */

class Wtb_Register_Menus
{
    public function __construct()
    {
        add_action('after_setup_theme', array($this, 'wtb_register_menus'));
    }

    public function wtb_register_menus()
    {
        // Register Menus
        register_nav_menus( array(
            'primary'   => __( 'Top primary menu', THEME_TEXTDOMAIN ),
        ) );
    }
}
$wtb_register_menus = new Wtb_Register_Menus();