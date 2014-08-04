<?php
/**
 * Header partial
 *
 * @package WordPress-Theme-Boilerplate
 * 
 * @since 1.0
 */
?>
<!DOCTYPE html>
<html lang="en" itemscope="itemscope" itemtype="http://schema.org/WebPage">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>
        <div id="page">
            <header>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

                <nav class="site-navigation">
                    <?php wp_nav_menu( array('theme-location' => 'site-navigation') ); ?>
                </nav>
            </header>

            <div id="main" class="site-main">