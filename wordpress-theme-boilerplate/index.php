<?php
/**
 * Index page template
 *
 * @package WordPress-Theme-Boilerplate
 *
 * @since 1.0
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <?php
            if( have_posts() )
            {
                while( have_posts() )
                {
                    the_post();

                    get_template_part( 'content', get_post_format() );
                }

                wtb_paging_nav();
            } else {
                get_template_part( 'content', 'none' );
            }
            ?>
        </div>
    </div>

<?php get_footer(); ?>