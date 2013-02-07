<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Patchwork
 */

get_header(); ?>

        <br/>
        <a href="<?php echo home_url( '/' ); ?>">&nbsp;<< BACK TO ALL POSTS</a>
        <div class="clear"></div>
        <br/>
        <div class="twoThirds">
            <div class="post">

                <?php while ( have_posts() ) : the_post(); ?>
                    <h3><a href="index.html#blog"><?php the_title(); ?></a></h3>
                    <span class="meta"><?php the_time('M.d, Y') ?></span>

                    <?php the_content(); ?>

                    <div class="backTo">
                        <a href="<?php echo home_url( '/' ); ?>"><< BACK TO ALL POSTS</a>
                    </div>                    

                    <?php comments_template(); ?>

                <?php endwhile; // end of the loop. ?>

            </div><!-- .post -->
        </div><!-- .twoThirds -->

<?php get_footer(); ?>