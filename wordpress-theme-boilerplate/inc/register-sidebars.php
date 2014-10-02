<?php
/**
 * Register the sidebars that is used by the theme
 *
 * @package WordPress-Theme-Boilerplate
 *
 * @since 1.0
 */

class Wtb_Register_Sidebars
{
    public function __construct()
    {
        add_action('widgets_init', array($this, 'wtb_register_sidebar'));
    }

    public function wtb_register_sidebar()
    {
        register_sidebar( array(
            'name'          => __( 'Primary Sidebar', THEME_TEXTDOMAIN ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Main sidebar that appears on the left.', THEME_TEXTDOMAIN ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',
        ) );
    }
}
$wtb_register_sidebars = new Wtb_Register_Sidebars();