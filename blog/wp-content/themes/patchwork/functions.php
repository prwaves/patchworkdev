<?php
/**
 * Patchwork functions and definitions
 */


if ( ! function_exists( 'patchwork_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 */
function patchwork_comment( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' :
    ?>
    <div class="comment">
        <p>Pingback: <?php comment_author_link(); ?><?php edit_comment_link( 'Edit', '<span class="edit-link">', '</span>' ); ?></p>
    <?php
            break;
        default :
    ?>
    <div class="comment">
        <article id="comment-<?php comment_ID(); ?>" class="comment">
            <footer class="comment-meta">
                <div class="comment-author vcard">
                    <?php
                        $avatar_size = 80;?>
                            <div class="userImage">
                                <div class="imageBox">
                                <?=get_avatar( $comment, $avatar_size );?>
                                <span class="cornertop"></span>
                                <span class="cornerbottom"></span>
                                </div>
                            </div>
                        <?

                        /* translators: 1: comment author, 2: date and time */
                       /* printf( __( '%1$s on %2$s <span class="says">said:</span>', 'twentyeleven' ),
                            sprintf( '<span class="fn">%s</span>', get_comment_author_link() ),
                            sprintf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
                                esc_url( get_comment_link( $comment->comment_ID ) ),
                                get_comment_time( 'c' ),
                               translators: 1: date, 2: time
                                sprintf( __( '%1$s at %2$s', 'twentyeleven' ), get_comment_date(), get_comment_time() )
                            )
                        ); */
                    ?>

                    <?php edit_comment_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
                </div><!-- .comment-author .vcard -->

                <?php if ( $comment->comment_approved == '0' ) : ?>
                    <em class="comment-awaiting-moderation">Your comment is awaiting moderation.</em>
                    <br />
                <?php endif; ?>

            </footer>

            <div class="userComment">
                <div class="innerComment">
                    <div class="commentBlock">
                        <div class="commentMessage">
                            <p>
                                <?php comment_text(); ?>
                            </p>
                            <span> Comment by: <?php echo get_comment_author() . ' ' . get_comment_time(); ?></span>
                        </div>  <!-- END COMMENTMESSAGE -->
                    </div>  <!-- END COMMENTBLOCK -->
                </div> <!-- END INNERCOMMENT -->
            </div> <!-- END USERCOMMENT -->                                
            
        </article><!-- #comment-## -->
</div>
    <?php
            break;
    endswitch;
}
endif; // ends check for twentyeleven_comment()                    
                    

/**
 * Adds two classes to the array of body classes.
 * The first is if the site has only had one author with published posts.
 * The second is if a singular post being displayed
 *
 * @since Twenty Eleven 1.0
 */
/*function get_avatar_patchwork( $avatar, $id_or_email, $size, $default, $alt ) {



    if ( function_exists( 'is_multi_author' ) && ! is_multi_author() )
        $classes[] = 'single-author';

    if ( is_singular() && ! is_home() && ! is_page_template( 'showcase.php' ) && ! is_page_template( 'sidebar-page.php' ) )
        $classes[] = 'singular';

    return $classes;
}
add_filter('get_avatar', 'get_avatar_patchwork');*/