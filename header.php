<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo get_bloginfo( 'name' ); ?> | Logostech Web Site</title>
  <meta name="description" content="<?php get_bloginfo( 'description' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>

</head>
<body <?php body_class( $class ); ?>>
  <div id="header">
    <div class="container clearfix">
     <span class="logo">
      <a href="<?php echo get_home_url(); ?>">
        <img src="<?php echo get_field('header_logo', 'option') ?>" alt="logo">
      </a>
    </span>
    <div class="header-right-box clearfix">
      <nav class="main-nav">
        <?php wp_nav_menu(array('container' => false, 'items_wrap' => '<ul id="%1$s">%3$s</ul>', 'theme_location'  => 'main_menu')); ?>
        <div class="mobile-search">
          <form action="">
            <input class="input-search" type="text" placeholder="Type something">
            <input class="input-submit" type="submit" value="Seacrh">
          </form>
        </div>
      </nav>
      <div class="search-contact-box">
        <a href="" class="seacrh-btn"><i class="fas fa-search"></i></a>
        <a href="<?php echo get_field('contact_us_button_link', 'option') ?>" class="default-btn">contact-us</a>
      </div>
    </div>
  </div>
</div>

