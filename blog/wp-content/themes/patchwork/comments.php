<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. 
 *
 * @package WordPress
 * @subpackage Patchwork
 */
?>
<div class="padding">
    <div class="commentSection">
    <?php if ( post_password_required() ) : ?>
        <p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'twentyeleven' ); ?></p>
    </div><!-- #comments -->
    <?php
            /* Stop the rest of comments.php from being processed,
             * but don't kill the script entirely -- we still have
             * to fully load the template.
             */
            return;
        endif;
    ?>

    <?php // You can start editing here -- including this comment! ?>

    <?php if ( have_comments() ) : ?>
        <div class="headSection">
            <h2>
            Comments
            </h2>
        </div>

            <?php
                /* Loop through and list the comments. Tell wp_list_comments()
                 * to use patchwork_comment() to format the comments.
                 * If you want to overload this in a child theme then you can
                 * define patchwork_comment() and that will be used instead.
                 */
                wp_list_comments( array( 'callback' => 'patchwork_comment' ) );
            ?>
    
        <?php
        /* If there are no comments and comments are closed, let's leave a little note, shall we?
         * But we only want the note on posts and pages that had comments in the first place.
         */
        if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="nocomments"><?php _e( 'Comments are closed.' ); ?></p>
        <?php endif; ?>

    <?php endif; // have_comments() ?>
    <? //comment_form(); ?>
    <div class="contactSection">
        <? comment_form(array(
            'id_form' => 'commentform',
            'comment_notes_after' => null,
            'comment_notes_before' => null,
            'label_submit' => __( 'Submit' ),
            'id_submit' => 'submit',
            'title_reply' => __('Post A Comment'),
            'fields' => 
                array('url' => null, 
                    'name' => '<label for="name">Name</label><input type="text" id="author" name="author" class="required" />', 
                    'email' => '<label for="email">Email</label><input type="text" id="email" name="email" class="required email" />')
        )); ?>
    </div>
</div><!-- #comments -->
</div>
