<?php
/*
Template Name: Success stories
*/
get_header(); ?>
<main>
	<div class="top-baner bg-img support-baner">
		<img src="<?php echo get_field('s_top_background_image') ?>" alt="<?php echo get_field('s_page_title') ?>">
		<div class="container">
			<div class="heading-box">
				<h1 class="h1"><?php echo get_field('s_page_title') ?></h1>
			</div>
		</div>
	</div>
	<div class="testimonials">
		<div class="text-container">
			<div class="testimonial-list">
				<?php
					// check if the repeater field has rows of data
					if( have_rows('s_success_stories') ):
						$counter = 1;
					 	// loop through the rows of data
					    while ( have_rows('s_success_stories') ) : the_row(); ?>

									<li>
										<div class="testimonial-quote">
											<p><?php the_sub_field('stories'); ?></p>
										</div>
										<div class="testimonial-autor 
											<?php  
												if( $counter % 2 == 0 ){
													echo  'right-side';
											} ?> clearfix">
											<div class="img bg-img">
												<img src="<?php the_sub_field('stories_image'); ?>" alt="<?php the_sub_field('stories_person'); ?>">
											</div>
											<span><?php the_sub_field('stories_person'); ?></span>
										</div>
									</li>

					    <?php $counter++ ?>
					<?php	endwhile;
					else :
					    // no rows found
					endif;
				?>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>