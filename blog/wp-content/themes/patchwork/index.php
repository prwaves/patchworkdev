<?php
/**
 * The main template file.
 *
 * Template file for main blog page.
 *
 * @package WordPress
 * @subpackage Patchwork
 */

get_header(); ?>
            <div class="twoThirds">

            <?php if ( have_posts() ) : ?>

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>

                <!-- POST -->

                <div class="post">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <span class="meta"><?php the_time('M.d, Y') ?></span>

                    <!-- POST IMAGE 
                    <div class="imageBox">
                        <a href="article.html"><img src="assets/img/postHolder.jpg" width="616" height="229" alt="" /></a>

                        <span class="cornertop"></span>
                        <span class="cornerbottom"></span>
                    </div>
                     END POST IMAGE -->

                    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>') ); ?>

                </div>

                <!-- END POST -->
                <?php endwhile; ?>
            
            <?php else: ?>
                <div class="post">
                    <h3>No Search Results</h3>
                </div>

            <?php endif; ?> 

            </div> <!-- END TWO THIRDS/BLOG POSTs -->

            <?php get_sidebar(); ?>

<!-- END BLOG Section -->
<?php get_footer(); ?>