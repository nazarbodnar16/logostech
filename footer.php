<footer id="footer" class="main-footer">
    <div class="container">
        <div class="top-footer">
            <div class="row">
                <div class="col-md-7 right-offset">
                    <h4><?php echo get_field('footer_left_title', 'option') ?></h4>
                    <p><?php echo get_field('footer_left_subtitle', 'option') ?></p>
                </div>
                <div class="col-md-5 offset-md-3">
                    <div class="recent-news">
                        <h5>Recent news</h5>

                        <ul class="recent-news-list">
                            <?php 
                                // Query arguments
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 3,
                                    'order' => 'DESC',
                                );

                                $query = new WP_Query( $args );

                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) { $query->the_post(); ?>
                                        <li><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></li>
                                <?php    }
                                } else {
                                    // Nothing was found
                                }
                                /* Reset query */
                                wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer clearfix">
            <span class="copy">
                &copy; copyright logos technologies
            </span>
            <nav class="footer-nav">
                <?php wp_nav_menu(array('container' => false, 'items_wrap' => '<ul id="%1$s">%3$s</ul>', 'theme_location'  => 'foot_menu')); ?>
            </nav>
        </div>
    </div>
</footer>
<div class="search-desctop">
    <form action="">
        <input class="input-search" type="text" placeholder="Type something">
        <input class="input-submit" type="submit" value="Seacrh">
    </form>
</div>
<?php wp_footer(); ?>
</body>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <h3 class="services-name h4 red-text">Greg D. Poe, Ph.D.</h3>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ducimus veniam, iste velit repudiandae consequatur, atque doloribus debitis ut voluptates, numquam eaque provident molestias. Similique nobis aperiam ut, veritatis quos ea in ex amet voluptatum modi, soluta et, voluptate aliquid deserunt. Minima voluptatibus, ut eum. Laboriosam, perferendis minus sint quibusdam quia molestiae ullam. Maiores reprehenderit dolorem, consequatur dignissimos iure expedita. Ipsam repellat facere excepturi nostrum enim ratione, ab id voluptates, incidunt voluptatem dignissimos expedita quos velit, inventore corporis. Itaque, incidunt ipsum facere accusamus porro cumque! Magni, voluptatem, expedita sapiente iste, praesentium neque tenetur minus reprehenderit repellat quidem facilis commodi, velit.
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
</html>
