<?php
get_header(); ?>
<main>
	<div class="product-detail">
		<div class="product-container">
			<div class="headline clearfix">
				<ul class="headline-list">
					<li>Products</li>
				</ul>
				<div class="hr-box"><div class="hr"></div></div>
			</div>
			<div class="row">
				<div class="product-box">
					<div class="col-md-5">
						<div class="img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>"></div>
					</div>
					<div class="col-md-7">
						<div class="product-description">
							<h1><?php echo get_the_title(); ?></h1>
							<h2 class="h2"><?php echo get_field('sp_top_description_subtitle'); ?></h2>
							<p><?php echo get_field('sp_top_description') ?></p>
							<a href="<?php echo get_field('sp_top_description_link') ?>" class="default-btn dark-btn">REQUEST MORE INFORMATION</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tab">
		<div class="tab-header ">
			<div class="text-container">
				<ul class="tabs">
					<li><a href="#">FEATURES</a></li>
					<li><a href="#">DETAILS</a></li>
					<li><a href="#">DOCUMENTS</a></li>
				</ul> <!-- / tabs -->
			</div>
			
		</div>

		<div class="tab_content text-container">
			<div class="tabs_item">
				<?php echo get_field('sp_tab_content'); ?>
			</div> <!-- / tabs_item -->
			<div class="tabs_item">
				<h2 class="h2 red-text"><?php echo get_field('sp_tab_content_title'); ?></h2>
				<p><?php echo get_field('sp_tab_content_description'); ?></p>
			</div> <!-- / tabs_item -->
			<div class="tabs_item">
				<h2 class="h2 red-text"><?php echo get_field('sp_d_tab_content_title'); ?></h2>
				<p><?php echo get_field('sp_d_tab_content_subtitle'); ?></p>

				<?php
				// check if the repeater field has rows of data
				if( have_rows('sp_pdf_uploads') ):
				 	// loop through the rows of data
				    while ( have_rows('sp_pdf_uploads') ) : the_row(); ?>
				    	<a class="download-file clearfix" href="<?php the_sub_field('pdf_file_upload'); ?>"><span class="ico"><img src="<?php echo get_template_directory_uri(); ?>/images/pdf.png" alt=""></span><?php the_sub_field('item_title'); ?></a>
					<?php endwhile;
				else :
				    // no rows found
				endif;
				?>

			</div>
		</div> 
	</div> <!-- / tab -->
	<?php if( get_field('sp_enable_or_disable_video_section') ): ?>
	<div class="featured-video">
		<div class="container">
			
		
			<div class="headline clearfix">
				<ul class="headline-list">
					<li>Featured Videos</li>
				</ul>
				<div class="hr-box"><div class="hr"></div></div>
			</div>
			<div class="row">

				<?php

				// check if the repeater field has rows of data
				if( have_rows('sp_videos_adding') ):
				 	// loop through the rows of data
				    while ( have_rows('sp_videos_adding') ) : the_row(); ?>

								<div class="col-md-6">
									<div class="video-box">
										<a data-fancybox="" href="https://www.youtube.com/watch?v=<?php the_sub_field('youtube_video_id'); ?>">
											<img class="card-img-top img-fluid" src="https://img.youtube.com/vi/<?php the_sub_field('youtube_video_id'); ?>/mqdefault.jpg">
											<span class="play-btn">
												<img src="<?php echo get_template_directory_uri(); ?>/images/play.svg" alt="">
											</span>
										</a>
										<div class="video-descr">
											<h4 class="h4 red-text"><?php the_sub_field('title_for_video'); ?></h4>
											<p><?php the_sub_field('video_description'); ?></p>
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
	<?php endif; ?>
	<div class="request expeertise">
		<div class="request-img bg-img">
			<img src="<?php echo get_template_directory_uri(); ?>/images/about-product-bg.png" alt="" style="display: none;">
			<span class="text">Systems Overview Request</span>
		</div>
		<div class="container">
			<div id="request" class="request-form expeertise-details">

				<?php echo do_shortcode('[contact-form-7 id="177" title="REQUEST INFORMATION" html_class="use-floating-validation-tip"]') ?>
			</div>
		</div>
	</div>
	<div class="products-holder">
		<div class="container">
			<div class="headline clearfix">
				<ul class="headline-list">
					<li>Wide-area</li>
					<li>Persistent</li>
					<li>minturaized</li>
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
							<?php if( get_field('sp_if_product_is_new') ): ?>
								<div class="new-label">
									<span>new</span>
								</div>
							<?php endif; ?>
							<a href="<?php echo get_permalink(); ?>">
								<span class="flip-box-front">
									<div class="img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>"></div>
									<div class="product-info">
										<h2 class="product-name"><?php echo get_the_title(); ?></h2>
										<p><?php echo get_the_excerpt(); ?></p>
									</div>
								</span>
								<div class="hover-img-box bg-img">
									<img src="<?php echo get_field('hover_image');  ?>" alt="image description">
								</div>
								<span class="learn-about">learn more about</span>
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
</main>

<?php get_footer(); ?>