<?php
/**
 * Comments partial
 *
 * @package WordPress-Theme-Boilerplate
 *
 * @since 1.0
 */

// Enter password to see comments
if ( post_password_required() ) {
    _e('This post is password protected. Enter the password to view comments.', THEME_TEXTDOMAIN);
    return;
}
?>

<div id="comments" class="comments-area">
    <h3 id="comments"><?php comments_number('No Comments', 'One Comment', '% Comments' );?></h3>

    <?php
    if(have_comments())
    {
        ?>
        <ol class="commentlist">
            <?php wp_list_comments(array(
                'style'      => 'ol',
                'short_ping' => true,
            )); ?>
        </ol>

        <?php
        if( get_comment_pages_count() > 1 && get_option( 'page_comments' ) )
        {
            ?>
            <div class="navigation comment-navigation" role="navigation">
                <div class="next-posts"><?php previous_comments_link() ?></div>
                <div class="prev-posts"><?php next_comments_link() ?></div>
            </div>
        <?php
        }
    }

    // Comments on this page are closed
    if(!comments_open() && get_comments_number() != 0)
    {
        printf('<p>%s.</p>', __('Comments are closed', THEME_TEXTDOMAIN));
    }

    // Display comment form
    comment_form();
    ?>
</div>