<?php
/*
Template Name:Aabout us
*/
get_header(); ?>
<main>
	<div class="top-baner bg-img support-baner">
		<img src="<?php echo get_field('a_top_background'); ?>" alt="">
		<div class="container">
			<div class="heading-box">
				<h1 class="h1"><?php echo get_field('a_top_page_title'); ?></h1>
			</div>
		</div>
	</div>
	<div class="text-block mod-about-page">
		<div class="text-container tac">
			<?php echo get_field('a_second_section') ?>
		</div>
	</div>
	<div class="img-box parallax-window"  data-parallax="scroll" data-image-src="<?php echo get_field('a_image_under_section') ?>">
	</div>
	<div class="supporting mod-about-page">
		<div class="container">
			<div class="headline clearfix">
				<ul class="headline-list">
					<li>Explore Our Capabilities</li>
				</ul>
				<div class="hr-box"><div class="hr"></div></div>
			</div>
			<div class="row support-list">
				<div class="col-md-4">
					<div class="support-item tac">
						<a href="">
							<div class="img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/about-page-img1.png" alt="">
							</div>
							<div class="product-info">
								<h2 class="product-name">Markets </h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="support-item tac">
						<a href="">
							<div class="img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/about-page-img2.png" alt="">
							</div>
							<div class="product-info">
								<h2 class="product-name">Products</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="support-item tac">
						<a href="">
							<div class="img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/about-page-img3.png" alt="">
							</div>
							<div class="product-info">
								<h2 class="product-name">Services </h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							</div>
						</a>
					</div>
				</div>   
			</div>
		</div>
	</div>
	<div class="our-services leadership">
		<div class="container">
			<div class="headline clearfix">
				<ul class="headline-list">
					<li>leadership</li>
				</ul>
				<div class="hr-box"><div class="hr"></div></div>
			</div>
			<div class="services-list leadership-list row">
				<?php
				// check if the repeater field has rows of data
				if( have_rows('a_leadership_items') ):
				$count = 1;
				 	// loop through the rows of data
				    while ( have_rows('a_leadership_items') ) : the_row(); ?>
				        
				        		<div class="col-md-4">
									<div class="services-list-item leadership-list-item">
										<a href="" data-toggle="modal" data-target="#pop-up-<?php echo $count ?>">
											<span class="description clearfix">
												<span class="holder">
													<h3 class="services-name h4 red-text"><?php the_sub_field('name'); ?></h3>
													<p><?php the_sub_field('position'); ?></p>
												</span>
												<span class="default-btn">Full BIO</span>
											</span>
										</a>
									</div>
								</div>
								<div class="modal fade" id="pop-up-<?php echo $count ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								    <div class="modal-dialog" role="document">
								        <div class="modal-content">
								            <h3 class="services-name h4 red-text"><?php the_sub_field('name'); ?></h3>
											<?php the_sub_field('description'); ?>				        
										</div>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								        <span aria-hidden="true">&times;</span>
								        </button>
								    </div>
								</div>

				<?php $count++ ?>
				<?php    endwhile;
				else :
				    // no rows found
				endif;
				?>
			</div>
		</div>
	</div>
	<div class="codes" style="background: url('<?php echo get_template_directory_uri(); ?>/images/code-bg.png') no-repeat 50%">
		<div class="container">
			<h3 class="h3">NAICS Codes</h3>
			<ul class="codes-list">				
				<?php

					// check if the repeater field has rows of data
					if( have_rows('a_naics_codes_content') ):

					 	// loop through the rows of data
					    while ( have_rows('a_naics_codes_content') ) : the_row(); ?>

							<li class="clearfix">
								<span class="code"><?php the_sub_field('code'); ?></span>
								<span class="code-desc"><?php the_sub_field('description'); ?></span>
							</li>

						<?php endwhile;

					else :
					    // no rows found
					endif;

				?>
			</ul>
			<p><?php echo get_field('a_annotation'); ?></p>
		</div>
	</div>
	<div class="resent-post">
		<div class="container">
			<div class="headline clearfix">
				<ul class="headline-list">
					<li>recent post</li>
				</ul>
				<div class="hr-box"><div class="hr"></div></div>
			</div>
			<div class="recent-post-slider-box">
				<div class="recent-post-slider swiper-container">
					<ul class="recent-post-list swiper-wrapper">
						<?php 

							// query arguments
							$args = array(
								'post_type' => 'post',
								'posts_per_page' => 10,
								'order' => 'DESC',
							);

							$query = new WP_Query( $args );

							if ( $query->have_posts() ) {
								while ( $query->have_posts() ) { $query->the_post(); ?>
													<li class="swiper-slide">
														<a href="<?php echo get_permalink(); ?>">
															<span class="description">
																<span class="holder">
																	<span class="date"><?php echo get_the_date('F j, Y') ?></span>
																	<h3 class="post-name h4 red-text"><?php echo get_the_title(); ?></h3>
																	<p><?php echo get_the_excerpt(); ?></p>
																</span>
																<span class="default-btn">LEARN more</span>
															</span>
														</a>
													</li>

							<?php	}
							} else {
								// Nothing was found
							}
							/* Query reset */
							wp_reset_postdata();
						?>
					</ul>
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>