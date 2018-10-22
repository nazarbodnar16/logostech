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
        <input class="input-search" type="text" placeholder="Search Now">
        <input class="input-submit" type="submit" value="Seacrh">
    </form>
</div>
<?php 
if ( is_page_template( 'contact-us.php' ) ) { ?>
<script>
  $(document).ready(function () {
    $('.c-sumoselect').SumoSelect();
  });
</script>
<?php }

 ?>
<script>
    // smooth scroll to anchor
    $(document).ready(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {

            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>

<?php wp_footer(); ?>
</body>
</html>
