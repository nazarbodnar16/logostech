<?php
/*
Template Name: Products
*/
get_header(); ?>
<main>
	<div class="top-baner bg-img support-baner">
		<img src="<?php echo get_field('p_top_image_background'); ?>" alt="<?php echo get_field('p_top_page_title'); ?>">
		<div class="container">
			<div class="heading-box">
				<h1 class="h1"><?php echo get_field('p_top_page_title'); ?></h1>
			</div>
		</div>
	</div>
	<div class="text-block">
		<div class="text-container tac">
			<h2 class="h2"><?php echo get_field('p_products_section_title'); ?></h2>
			<p><?php echo get_field('p_products_section_subtitle') ?></p>
		</div>
	</div>
	<div class="products-holder">
		<div class="container">
			<div class="headline clearfix">
				<ul class="headline-list">
					<li>SENSOR SYSTEMS AND PLATFORMS</li>
				</ul>
				<div class="hr-box"><div class="hr"></div></div>
			</div>
			<ul class="product-list no-slider">

				<?php 
				$posts = get_field('p_products_list');

				if( $posts ): ?>

					<?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
					    <li>
							<div class="box">
								<a href="<?php echo get_permalink( $p->ID ); ?>">
									<span class="flip-box-front">
										<div class="img"><img src="<?php echo get_the_post_thumbnail_url( $p->ID ); ?>" alt=""></div>
										<div class="product-info">
											<h2 class="product-name"><?php echo get_the_title( $p->ID ); ?></h2>
											<p><?php echo get_the_excerpt( $p->ID ); ?></p>
										</div>
									</span>
								</a>
							</div>
						</li>
					<?php endforeach; ?>
				<?php endif; ?>
				
			</ul>
		</div>
	</div>
	<div class="our-services products-page">
		<div class="container">
			<div class="text-container tac">
				<h2 class="h2"><?php echo get_field('p_our_services_title') ?></h2>
				<p><?php echo get_field('p_our_services_subtitle') ?></p>
			</div>
			<div class="services-list row">

				<?php 

				$posts = get_field('p_our_services_list');

				if( $posts ): ?>

					<?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>

								<div class="col-md-3">
									<div class="services-list-item">
										<a href="<?php echo get_permalink( $p->ID ); ?>">
											<span class="img bg-img">
												<img src="<?php echo get_the_post_thumbnail_url( $p->ID ); ?>" alt="">
											</span>
											<span class="description clearfix">
												<h3 style="text-transform: uppercase;" class="services-name h4 red-text"><?php echo get_the_title( $p->ID ); ?></h3>
												<span class="default-btn"><?php the_field('s_link_label', $p->ID); ?></span>
											</span>
										</a>
									</div>
								</div>

					<?php endforeach; ?>

				<?php endif; ?>

			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>