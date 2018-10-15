<?php get_header(); ?>
<main>
	<div class="top-baner bg-img support-baner">
		<img src="<?php echo get_field('ssp_top_page_background'); ?>" alt="<?php echo get_field('ssp_top_page_title'); ?>">
		<div class="container">
			<div class="heading-box">
				<h1 class="h1"><?php echo get_field('ssp_top_page_title'); ?></h1>
			</div>
		</div>
	</div>
	<div class="text-block">
		<div class="text-container tac">
			<h2 class="h2"><?php echo get_field('ssp_first_section_title'); ?></h2>
			<?php echo get_field('ssp_first_section_description'); ?>
		</div>
	</div>
	<div class="img-box parallax-window" data-parallax="scroll" data-image-src="<?php echo get_field('ssp_parallax_image') ?>">
	</div>
	<div class="operations pt-0">

		<?php if( get_field('info_tabs_show') ) { ?>

			<?php if( have_rows('info_tabs') ): ?>

				<div class="tab">
					<div class="tab-header ">
						<div class="container">
							<ul class="tabs mod-sm">
								<?php while ( have_rows('info_tabs') ) : the_row(); ?>
									<li><a href="#"><?php the_sub_field('caption'); ?></a></li>
								<? endwhile; ?>
							</ul>
						</div>
					</div>

					<div class="tab_content container">
						<?php while ( have_rows('info_tabs') ) : the_row(); ?>
							<div class="tabs_item">
								<?php the_sub_field('content'); ?>
							</div>
						<? endwhile; ?>
					</div> 
				</div>
			<?php endif; ?>

		<?php }; ?>

		<div class="container">
			<?php if( get_field('sd_enable_disable_block') ): ?>
				<div class="headline clearfix">
					<ul class="headline-list">
						<li>Operational Expertise</li>
					</ul>
					<div class="hr-box"><div class="hr"></div></div>
				</div>
				<div class="operations-list">
					<div class="row">

						<?php

					// check if the repeater field has rows of data
						if( have_rows('ssp_blocks_with_list') ):

					 	// loop through the rows of data
							while ( have_rows('ssp_blocks_with_list') ) : the_row(); ?>

								<div class="col-md-4">
									<h3 class="h2 red-text"><?php the_sub_field('list_title'); ?></h3>
									<ul class="ul list-chek">
										<?php
								// check if the repeater field has rows of data
										if( have_rows('list_items') ):
								 	// loop through the rows of data
											while ( have_rows('list_items') ) : the_row(); ?>

												<li><?php the_sub_field('item'); ?></li>

											<?php endwhile;
										else :
								    // no rows found
										endif;
										?>
									</ul>
								</div>

							<? endwhile;
						else :
					    // no rows found
						endif;

						?>

					</div>
				</div>
			<?php endif; ?>

			<div class="more-info tac">
				<p>For more information on Operational Support for Sensor Systems, please <a href="mailto:<?php echo get_field('ssp_email_for_more_information'); ?>" class="red-text">email us.</a></p>
			</div>
			<div class="documents">
				<h3 class="h2 red-text"><?php echo get_field('ssp_support_docs_title') ?></h3>
				<p><?php echo get_field('ssp_support_docs_subtitle') ?></p>

				<?php

				// check if the repeater field has rows of data
				if( have_rows('ssp_support_documents_upload') ):
				 	// loop through the rows of data
					while ( have_rows('ssp_support_documents_upload') ) : the_row(); ?>
						<a class="download-file clearfix" href="<?php the_sub_field('support_document_pdf'); ?>"><span class="ico"><img src="<?php echo get_template_directory_uri(); ?>/images/pdf.png" alt=""></span><?php the_sub_field('support_documents_title'); ?></a>
					<?php endwhile;
				else :
				    // no rows found
				endif;

				?>

			</div>
		</div>
	</div>
	<div class="request expeertise">
		<div class="request-img bg-img">
			<img src="<?php echo get_template_directory_uri(); ?>/images/request-bg.png" alt="">
		</div>
		<div class="container">
			<div class="request-form expeertise-details">
				<form action="">
					<input type="text" class="form-control" placeholder="Company name">
					<input type="text" class="form-control" placeholder="First Name">
					<input type="text" class="form-control" placeholder="Last Name">
					<input type="text" class="form-control" placeholder="Country">
					<input type="text" class="form-control" placeholder="Email">
					<input type="text" class="form-control" placeholder="PHONE">
					<button  class="default-btn">REQUEST INFORMATION</button>
				</form>
			</div>
		</div>
	</div>
	<div class="our-services">
		<div class="container">
			<div class="headline clearfix">
				<ul class="headline-list">
					<li>Our services</li>
				</ul>
				<div class="hr-box"><div class="hr"></div></div>
			</div>
			<div class="services-list row">


				<?php
							// query argument
				$args = array(
					'post_type' => 'services',
					'posts_per_page' => 4,
					'order' => ASC,
					'orderby' => 'date',
				);

				$query = new WP_Query( $args );
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) { $query->the_post(); ?>
						<div class="col-md-3">
							<div class="services-list-item">
								<a href="<?php echo get_permalink(); ?>">
									<span class="img bg-img">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
									</span>
									<span class="description clearfix">
										<h3 class="services-name h4 red-text ttu"><?php echo get_the_title(); ?></h3>
										<span class="default-btn"><?php echo get_field('s_link_label'); ?></span>
									</span>
								</a>
							</div>
						</div>
					<?php  }
				} else {
							// Posts not found
				}
				/* Reser query */
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>