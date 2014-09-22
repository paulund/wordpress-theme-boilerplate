<?php
/**
 * Content for nothing found
 *
 * @package WordPress-Theme-Boilerplate
 *
 * @since 1.0
 */
?>
<article class="no-results not-found">
    <header class="page-header">
        <h1 class="page-title"><?php _e('Page can not be found', THEME_TEXTDOMAIN); ?></h1>
    </header>

    <div class="page-content">
        <?php if ( is_home() && current_user_can( 'publish_posts' ) ) { ?>
            <p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', THEME_TEXTDOMAIN ), admin_url( 'post-new.php' ) ); ?></p>
        <?php } else if ( is_search() ) { ?>
            <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', THEME_TEXTDOMAIN ); ?></p>
            <?php get_search_form(); ?>
        <?php } else { ?>
            <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', THEME_TEXTDOMAIN ); ?></p>
            <?php get_search_form(); ?>
        <?php } ?>
    </div>
</article>