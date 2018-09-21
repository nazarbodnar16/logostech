<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo get_bloginfo( 'name' ); ?> | Web Developer</title>
  <meta name="description" content="<?php get_bloginfo( 'description' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="<?php if ( ! empty( $webshowcase['blog_favicon'] ) ) {
    echo $webshowcase['blog_favicon']['url'];
  } ?>" type="image/x-icon">

  <?php wp_head(); ?>

</head>

<body <?php body_class( $class ); ?>>
  <div id="header">
    <div class="container clearfix">
     <span class="logo">
      <a href="">
        <img src="/wp-content/themes/logostech/logo.png" alt="">
      </a>
    </span>
    <div class="header-right-box clearfix">
      <nav class="main-nav">
        <ul>
          <li><a href="">About</a></li>
          <li><a href="">Products &amp; Services</a></li>
          <li><a href="">Markets</a></li>
          <li><a href="">Success Stories</a></li>
          <li><a href="">Careers</a></li>
          <li class="hidden-desc"><a href="">Contact us</a></li>
        </ul>
        <div class="mobile-search">
          <form action="">
            <input class="input-search" type="text" placeholder="Type something">
            <input class="input-submit" type="submit" value="Seacrh">
          </form>
        </div>
      </nav>
      <div class="search-contact-box">
        <a href="" class="seacrh-btn"><i class="fas fa-search"></i></a>
        <a href="" class="default-btn">contact-us</a>
      </div>
    </div>
  </div>
</div>

