<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package webshowcase
 */

get_header(); ?>

<main id="main" class="site-main" role="main">
  <div class="visual">
    <div class="swiper-container baner-slider">
      <div class="swiper-wrapper">
        <?php
        // check if the repeater field has rows of data
        if( have_rows('home_page_slider') ):
        // loop through the rows of data
        while ( have_rows('home_page_slider') ) : the_row(); ?>
        <div class="swiper-slide bg-img">
          <img src="<?php  the_sub_field('image'); ?>" alt="<?php  the_sub_field('title'); ?>">
          <div class="container h-100">
            <div class="baner-description">
              <strong class="heading"><?php  the_sub_field('title'); ?></strong>
              <p><?php  the_sub_field('sub_title'); ?></p>
              <a href="<?php  the_sub_field('cta_button_link'); ?>" class="default-btn">Learn more</a>
               <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
        <?php endwhile;
        else :
        // no rows found
        endif;
        ?>
      </div>
    </div>
  </div>
<div class="products-holder">
  <div class="container">
    <div class="headline clearfix">
      <ul class="headline-list">
        <li>Sensors</li>
        <li>and</li>
        <li>Systems</li>
      </ul>
      <div class="hr-box"><div class="hr"></div></div>
    </div>
    <div class="product-slider-box">
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="product-slider swiper-container">
        <ul class="product-list swiper-wrapper">
          <?php
          // query argument
          $args = array(
          'post_type' => 'products',
          'posts_per_page' => -1,
          'order' => ASC,
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) {
          while ( $query->have_posts() ) { $query->the_post(); ?>
          <li class="swiper-slide">
            <a href="<?php echo get_permalink(); ?>">
              <span class="flip-box-front">
                <div class="img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>"></div>
                <div class="product-info">
                  <h2 class="product-name"><?php echo get_the_title(); ?></h2>
                  <p><?php echo get_the_excerpt(); ?></p>
                </div>
              </span>
              <div class="hover-img-box bg-img">
                <img src="<?php echo get_field('hover_image');  ?>" alt="<?php echo get_the_title(); ?>">
              </div>
            </a>
          </li>
          <?php  }
          } else {
          // Posts not found
          }
          /* Reser query */
          wp_reset_postdata();
          ?>
        </ul>
      </div>
    </div>
</div>
</div>
<div class="expeertise">
  <div class="expeertise-img bg-img">
    <img src="<?php echo get_field('h_expeertise_background') ?>" alt="EXPERTISE IN ACTION">
  </div>
  <div class="container">
    <div class="container">
      <div class="expeertise-details">
        <h3 class="h3"><?php echo get_field('h_expeertise_title') ?></h3>
        <p><?php echo get_field('h_expeertise_subtitle') ?></p>
        <ul class="action-list">
          <?php 
            $posts = get_field('h_related_posts');
            if( $posts ): ?>            
              <?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
                  <li>
                    <a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?></a>                  
                  </li>
              <?php endforeach; ?>
            <?php endif; ?>
        </ul>
        <a href="<?php echo get_field('h_expeertise_learn_more_link') ?>" class="default-btn">learn more</a>
      </div>
    </div>
  </div>
</div>
<?php $supp_mission = get_field('tabs_content') ?>
<div class="supporting">
  <div class="container">
    <div class="headline clearfix">
      <ul class="headline-list">
        <li>SUPPORTING MISSIONS WORLDWIDE</li>
      </ul>
      <div class="hr-box"><div class="hr"></div></div>
    </div>
    <div class="row support-list">
      <div class="col-md-4">
        <div class="support-item tac">
          <a href="<?php echo $supp_mission['defense_link']?>">
            <div class="img">
              <img src="<?php echo $supp_mission['defense_icon']?>" alt="<?php echo $supp_mission['defense_title']?>">
            </div>
            <div class="product-info">
              <h2 class="product-name"><?php echo $supp_mission['defense_title']?></h2>
              <p><?php echo $supp_mission['defense_description']?></p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="support-item tac">
          <a href="<?php echo $supp_mission['homeland_link']?>">
            <div class="img">
              <img src="<?php echo $supp_mission['homeland_icon']?>" alt="<?php echo $supp_mission['homeland_title']?>">
            </div>
            <div class="product-info">
              <h2 class="product-name"><?php echo $supp_mission['homeland_title']?></h2>
              <p><?php echo $supp_mission['homeland_description']?></p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="support-item tac">
          <a href="<?php echo $supp_mission['law_link']?>">
            <div class="img">
              <img src="<?php echo $supp_mission['law_icon']?>" alt="<?php echo $supp_mission['law_title']?>">
            </div>
            <div class="product-info">
              <h2 class="product-name"><?php echo $supp_mission['law_title']?></h2>
              <p><?php echo $supp_mission['law_description']?></p>
            </div>
          </a>
        </div>
      </div>   
    </div>
    <div class="headline right-line clearfix">
      <ul class="headline-list">
        <li><a href="<?php echo get_field('smw_link'); ?>" class="default-btn dark-btn">LEARN MORE ABOUT THE MARKETS WE SERVE</a></li>
      </ul>
      <div class="hr-box"><div class="hr"></div></div>
    </div>
  </div>
</div>
<div class="comment-holder bg-img">
  <img src="<?php echo get_template_directory_uri(); ?>/images/commet-slider-bg.png" alt="">
  <div class="container">
    <div class="comment-slider swiper-container">
      <ul class="swiper-wrapper">
        <?php
        // check if the repeater field has rows of data
        if( have_rows('h_testimonials_items') ):
        // loop through the rows of data
        while ( have_rows('h_testimonials_items') ) : the_row(); ?>
        <li class="swiper-slide">
          <div class="comment-text">
            <p>
              <?php the_sub_field('testimonial_text'); ?>
            </p>
          </div>
          <div class="autor"><?php the_sub_field('author'); ?></div>
        </li>
        <?php endwhile;
        else :
        // no rows found
        endif;
        ?>
      </ul>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</div>
</main><!-- .site-main --><!-- .content-area -->

<?php get_footer(); ?>


