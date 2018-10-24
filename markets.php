<?php
/*
Template Name: Markets
*/
get_header(); ?>

<main id="main" class="site-main" role="main">
  <div class="top-baner bg-img support-baner custom-position">
    <img src="<?php echo get_field('m_top_header_image') ?>" alt="<?php echo get_field('markets_page_title'); ?>">
    <div class="container">
      <div class="heading-box">
        <h1 class="h1 ttu"><?php echo get_field('markets_page_title'); ?></h1>
      </div>
    </div>
  </div>
  <div id="defences" class="text-block mod-contact-page big-padding">
    <div class="text-container tac">
      <h2 class="h2 ttu"><?php echo get_field('defense_section_title') ?></h2>
      <?php echo get_field('defense_section_description') ?>
    </div>
  </div>
  <div class="container">
    <div class="market-list row ">

      <?php 

      $posts = get_field('defense_section_related');

      if( $posts ): ?>

          <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
              <?php setup_postdata($post); ?>

                <div class="col-md-4">
                  <div class="services-list-item">
                    <a href="<?php echo get_permalink(); ?>">
                      <span class="img bg-img">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                      </span>
                      <span class="description clearfix">
                        <h3 style="text-transform: uppercase;" class="services-name h4 red-text"><?php echo get_the_title(); ?></h3>
                        <p class="descr"><?php echo get_the_excerpt(); ?></p>
                        <span class="default-btn">Learn more</span>
                      </span>
                    </a>
                  </div>
                </div>

          <?php endforeach; ?>

          <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      <?php endif; ?>

    </div>
  </div>
  <div id="homeland" class="text-block mod-contact-page big-padding">
    <div class="text-container tac">
      <h2 class="h2 ttu"><?php echo get_field('homeland_security_section_title') ?></h2>
      <?php echo get_field('homeland_security_section_description') ?>
    </div>
  </div>
  <div class="container">
    <div class="market-list row ">

      <?php 

      $posts = get_field('homeland_security_related_pages');

      if( $posts ): ?>

          <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
              <?php setup_postdata($post); ?>

                <div class="col-md-4">
                  <div class="services-list-item">
                    <a href="<?php echo get_permalink(); ?>">
                      <span class="img bg-img">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                      </span>
                      <span class="description clearfix">
                        <h3 style="text-transform: uppercase;" class="services-name h4 red-text"><?php echo get_the_title(); ?></h3>
                        <p class="descr"><?php echo get_the_excerpt(); ?></p>
                        <span class="default-btn">Learn more</span>
                      </span>
                    </a>
                  </div>
                </div>

          <?php endforeach; ?>

          <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      <?php endif; ?>

    </div>
  </div>
  <div id="law" class="text-block big-padding">
    <div class="text-container tac">
      <h2 class="h2 ttu"><?php echo get_field('law_enforcement_section_title') ?></h2>
    	<?php echo get_field('law_enforcement_section_description') ?>
    </div>
  </div>
  <div class="container">
    <div class="market-list row ">

<?php 

      $posts = get_field('law_enforcement_section_related_pages');

      if( $posts ): ?>

          <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
              <?php setup_postdata($post); ?>

                <div class="col-md-4">
                  <div class="services-list-item">
                    <a href="<?php echo get_permalink(); ?>">
                      <span class="img bg-img">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                      </span>
                      <span class="description clearfix">
                        <h3 style="text-transform: uppercase;" class="services-name h4 red-text"><?php echo get_the_title(); ?></h3>
                        <p class="descr"><?php echo get_the_excerpt(); ?></p>
                        <span class="default-btn">Learn more</span>
                      </span>
                    </a>
                  </div>
                </div>

          <?php endforeach; ?>

          <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      <?php endif; ?>

    </div>
  </div>
</div>
</main><!-- .site-main.content-area -->

<?php get_footer(); ?>

