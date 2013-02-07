            <!-- SIDEBAR -->

            <div class="oneThird last">


                <!-- SEARCH BAR -->

                <div class="sideBar">
                    <div class="headSection">
                        <h3>Search</h3>
                    </div>
                    <?php get_search_form(); ?>
                </div>

                <!-- SEARCH BAR ENDS -->

                <!-- RECENT COMMENTS -->

                <div class="sideBar">
                    <div class="headSection">
                        <h3>Recent Posts</h3>
                    </div>
                    <ul class="animate">
                        <?php
                            $recent_posts = wp_get_recent_posts( array('post_status' => 'publish' ) );
                            foreach( $recent_posts as $recent ){
                                echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
                            }
                        ?>
                    </ul>
                </div>

                <!-- RECENT COMMENTS ENDS -->

                <!-- TAGS 

                <div class="sideBar">
                    <div class="headSection">
                        <h3>tags</h3>
                    </div>
                    <ul class="tags">
                        <li><a href="#">chevy</a></li>
                        <li><a href="#">forrest</a></li>
                        <li><a href="#">peace</a></li>
                        <li><a href="#">scooby doo</a></li>
                        <li><a href="#">themeforest</a></li>
                    </ul>
                </div>-->

                <!-- TAGS ENDS -->

                <!-- Twitter 

                <div class="sideBar">
                    <div class="headSection">
                        <h3>Twitter</h3>
                    </div>

                    <div class="twitter"></div>

                </div>-->

                <!-- Twitter ENDS -->


            </div>

            <!-- END SIDEBAR -->