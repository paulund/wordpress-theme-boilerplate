<?php
/**
 * 404 page template
 *
 * @package WordPress-Theme-Boilerplate
 *
 * @since 1.0
 */
get_header(); ?>

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <article>
                <header class="entry-header">
                    <h1 class="page-title"><?php _e( 'Page Not Found', THEME_TEXTDOMAIN ); ?></h1>
                </header>
                <div class="entry-content">
                    <h2><?php _e( 'Page can not be found', THEME_TEXTDOMAIN ); ?></h2>
                    <p><?php _e( 'Please search for what you are looking for.', THEME_TEXTDOMAIN ); ?></p>

                    <?php get_search_form(); ?>
                </div>
            </article>
        </div>
    </div>

<?php get_footer(); ?>