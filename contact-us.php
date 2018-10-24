<?php
/*
Template Name: Contact Us
*/
get_header(); ?>

<main id="main" class="site-main" role="main">
  <div class="top-baner bg-img support-baner custom-position">
    <img src="<?php echo get_field('cu_top_header_image'); ?>" alt="<?php echo get_field('cu_top_page_title'); ?>">
    <div class="container">
      <div class="heading-box">
        <h1 class="h1 ttu"><?php echo get_field('cu_top_page_title'); ?></h1>
      </div>
    </div>
  </div>
  <div class="contact request expeertise">
    <div class="request-img contact-info">
      <div class="container">
        <div class="headline clearfix">
          <ul class="headline-list">
            <li>CONNECT Logos Technologies</li>
          </ul>
          <div class="hr-box"><div class="hr"></div></div>
        </div>
        <div class="address-box">
          <h2 class="h2 red-text"><?php echo get_field('left_side_title'); ?></h2>
          <span><?php echo get_field('headquarters_address'); ?></span>
          <span><?php echo get_field('headquarters_second_address'); ?></span>
          <span><?php echo get_field('headquarters_phone'); ?></span>
          <span><?php echo get_field('headquarters_fax'); ?></span>
        </div>
        <div class="address-box">
          <h2 class="h2 red-text"><?php echo get_field('fairfax_title'); ?></h2>
          <span><?php echo get_field('fairfax_address'); ?></span>
          <span><?php echo get_field('fairfax_second_address'); ?></span>
          <span><?php echo get_field('fairfax_phone'); ?></span>
          <span><?php echo get_field('fairfax_fax'); ?></span>
        </div>
        <div class="address-box">
          <h2 class="h2 red-text"><?php echo get_field('raleigh_title'); ?></h2>
          <span><?php echo get_field('raleigh_address'); ?></span>
          <span><?php echo get_field('raleigh_second_address'); ?></span>
          <span><?php echo get_field('raleigh_phone'); ?></span>
          <span><?php echo get_field('raleigh_fax'); ?></span>
        </div>
      </div>
      
    </div>
    <div class="container">
      <div class="request-form expeertise-details">
        <h2 class="h2">GET IN TOUCH WITH US</h2>
        <p>Use the form below to get in touch. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <?php echo do_shortcode('[contact-form-7 id="1884" title="Contact form" html_class="contact-us-form use-floating-validation-tip"]') ?>
      </div>
    </div>
  </div>
</main><!-- .site-main --><!-- .content-area -->

<?php get_footer(); ?>


