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