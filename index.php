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
global $webshowcase;
get_header(); ?>

<main id="main" class="site-main" role="main">
	<div class="visual">
		 <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide bg-img">
      	<img src="wp-content/themes/logostech/11.png" alt="">
      	<div class="container h-100">
      		<div class="baner-description">
      			<strong class="heading">Redkite-I</strong>
      			<p>Lorem ipsum dolor sit amet.</p>
      			<a href="" class="default-btn">Learn more</a>
      		</div>
      	</div>
      </div>
      <div class="swiper-slide bg-img">
      	<img src="wp-content/themes/logostech/11.png" alt="">
      	<div class="container">
      	Slide 2
      	</div>
      </div>
      <div class="swiper-slide bg-img">
      	<img src="wp-content/themes/logostech/11.png" alt="">
      	<div class="container">
      	Slide 3
      	</div>
      </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
	</div>
</main><!-- .site-main --><!-- .content-area -->

<?php get_footer(); ?>


