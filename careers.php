<?php
/*
Template Name: Careers
*/
get_header(); ?>

<main id="main" class="site-main" role="main">
  <div class="top-baner bg-img support-baner custom-position">
    <img src="<?php echo get_field('ca_top_background'); ?>" alt="<?php echo get_field('ca_page_top_title'); ?>">
    <div class="container">
      <div class="heading-box">
        <h1 class="h1 ttu"><?php echo get_field('ca_page_top_title'); ?></h1>
      </div>
    </div>
  </div>
  <div class="text-block big-padding">
    <div class="text-container tac">
      <h2 class="h2 ttu"><?php echo get_field('ca_first_section_title') ?></h2>
      <p><?php echo get_field('ca_first_section_subtitle'); ?></p>
      <a href="<?php echo get_field('ca_first_section_link'); ?>"  class="default-btn dark-btn" target="_blank">VIEW ALL POSITIONS</a>
    </div>
  </div>
  <div class="expeertise career-img-bg">
    <div class="expeertise-img bg-img">
     <img src="<?php echo get_field('ca_second_section_first_row_left_image'); ?>" alt="<?php echo get_field('ca_second_section_first_row_right_title'); ?>">
    </div>
    <div class="container">
      <div class="container">
        <div class="expeertise-details career-detail">
          <h3 class="h3 ttu"><?php echo get_field('ca_second_section_first_row_right_title'); ?></h3>
          <p><?php echo get_field('ca_second_section_first_row_right_subtitle') ?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="expeertise white-bg right-img career-img-bg">
    <div class="expeertise-img bg-img">
     <img src="<?php echo get_field('ca_second_section_second_row_right_image'); ?>" alt="<?php echo get_field('ca_second_section_second_row_left_title') ?>">
    </div>
    <div class="container">
      <div class="container">
        <div class="expeertise-details">
          <h3 class="h3 ttu"><?php echo get_field('ca_second_section_second_row_left_title'); ?></h3>
          <p><?php echo get_field('ca_second_section_second_row_left_subtitle'); ?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="expeertise white-bg career-img-bg">
    <div class="expeertise-img bg-img">
     <img src="<?php echo get_field('ca_second_section_third_row_left_image'); ?>" alt="alt">
    </div>
    <div class="container">
      <div class="container">
        <div class="expeertise-details">
          <h3 class="h3 ttu"><?php echo get_field('ca_second_section_third_row_right_title'); ?></h3>
          <p><?php echo get_field('ca_second_section_third_row_right_subtitle'); ?></p>
        </div>
      </div>
    </div>
  </div>
</main><!-- .site-main --><!-- .content-area -->

<?php get_footer(); ?>


