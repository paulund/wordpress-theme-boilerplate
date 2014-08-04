<?php
/**
 * Register the sidebars that is used by the theme
 *
 * @package WordPress-Theme-Boilerplate
 *
 * @since 1.0
 */

function wtb_register_sidebar()
{
    global $textdomain;

    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', $textdomain ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Main sidebar that appears on the left.', $textdomain ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
}
add_action('widgets_init', 'wtb_register_sidebar');