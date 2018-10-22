<?php
/*
Template Name: Contact Us
*/
get_header(); ?>

<main id="main" class="site-main" role="main">
  <div class="top-baner bg-img support-baner custom-position">
    <img src="<?php echo get_template_directory_uri(); ?>/images/contact-us-bg.jpg" alt="">
    <div class="container">
      <div class="heading-box">
        <h1 class="h1 ttu">CONTACT US</h1>
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
          <h2 class="h2 red-text">Headquarters</h2>
          <span>2701 Prosperity Avenue, Suite 400</span>
          <span>Fairfax, Virginia 22031</span>
          <span>P: 703.584.5725</span>
          <span>F: .703.849.0880</span>
        </div>
        <div class="address-box">
          <h2 class="h2 red-text">Fairfax, Virginia</h2>
          <span>2731 Prosperity Avenue, Suite B</span>
          <span>Fairfax, VA 22031</span>
          <span>P: 703.584.5736</span>
          <span>F: 703.849.0880</span>
        </div>
        <div class="address-box">
          <h2 class="h2 red-text">Raleigh, North Carolina</h2>
          <span>8045 Arco Corporate Drive, Suite 230</span>
          <span>Raleigh, NC 27617</span>
          <span>P: 919.827.0540</span>
          <span>F: 919.882.9973</span>
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


