<?php
get_header(); ?>
<main>
	<div class="internal">
		<div class="text-container">
			<div class="internal-post">
				<div class="headline clearfix">
					<ul class="headline-list">
						<li>FAIRFAX, Va. — <?php echo get_the_date('F j, Y') ?></li>
					</ul>
					<div class="hr-box"><div class="hr"></div></div>
				</div>
				<h1 class="h1"><?php echo get_the_title(); ?></h1>

				<div class="post-content">
					<?php the_content(); ?>

					<!-- <p>International operators of tactical UAS to get glimpse of new, powerful, lightweight system</p>
					<div class="internal-img-box">
						<div class="desc">
							<p>Logos Technologies will be exhibiting its lightweight Redkite-I wide-area motion imagery (WAMI) system at Eurosatory, on June 11-15. This will mark the first time the airborne WAMI sensor will be seen at the international defense and security business meeting hosted in Paris, France.</p>
						</div>
						<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/baner1.png" alt="">
						</div>
					</div>
					<quote class="quote clearfix">
						<div class="quote-text">Operators are used to large WAMI systems mounted on traditional platforms. Redkite-I offers something new: a sensor that can actually be carried inside the payload bay of the Insitu Integrator™ tactical unmanned aircraft.</div>
						<div class="quote-autor"> <strong>Alan Murdoch,</strong> Vice President of International Programs at Logos Technologies.</div>
					</quote>
					<p>Redkite-I weighs less than 25 pounds (12 kg). Despite its small size, it can image 12 square kilometers at once, all in real time—detecting and tracking all significant movers within its field of view. The WAMI system also records and archives up to eight hours of georeferenced data on board the aircraft for real-time forensic analysis.</p>
					<p>Redkite-I images in medium resolution. Should a user need to positively identify a mover, Redkite-I can cue a narrow-field, high-resolution full motion video camera for a closer look.</p>
					<quote class="quote">
						<div class="quote-text">This WAMI sensor offers the local commander a powerful intelligence tool for force protection, border security, disaster response, and other missions. He or she can track events happening across a city-sized area, while also ‘looking back in time’ to see what led up to those moments.</div>
						<div class="quote-autor"> <strong>Alan Murdoch,</strong> Vice President of International Programs at Logos Technologies.</div>
					</quote>
					<p>Users can view up to 10 different real-time and recorded imagery feeds pulled from within the system’s expansive field of view and watch those “chip-outs” on their tablets and other mobile devices.</p>
					<p>In addition to the version in the payload bay of the Insitu Integrator, Redkite can also be housed in a platform-independent pod that can be mounted to planes, helicopters, and other unmanned aircraft systems (UAS).</p>
					<p>Logos Technologies will be exhibiting Redkite-I at Eurosatory 2018. For more information on Logos Technologies and its ISR solutions, please visit Stand C451 in Hall 5A, June 11-15.</p> -->
				</div>
				
				<?php if( get_field('sip_about_logos_technologies_block') ): ?>

					<h2 class="h2 red-text"><?php echo get_field('gs_title', 'option'); ?></h2>
					<p><?php echo get_field('gs_description', 'option'); ?></p>

				<?php endif; ?>

				<div class="contact">
					<?php if( get_field('sip_media_contact_block') ): ?>

						<h4 class="h4"><?php echo get_field('gs_media_contact_title', 'option'); ?></h4>
						<div class="contact-face clearfix">
							<div class="avatar bg-img">
								<img src="<?php echo get_field('gs_person_image', 'option'); ?>" alt="">
							</div>
							<div class="contact-face-info">
								<div class="name-position"><strong><?php echo get_field('gs_person_name', 'option'); ?>,</strong> <?php echo get_field('gs_person_position', 'option'); ?></div>
								<span><?php echo get_field('gs_media_contact_phone', 'option'); ?></span> | <a href="mailto:<?php echo get_field('gs_media_contact_email', 'option') ?>"><i class="fas fa-envelope"></i></a>
							</div>
						</div>

					<?php endif; ?>
					<div class="share-this">
						<h4 class="h4">Share This Story, Choose Your Platform!</h4>
						<?php if(has_post_thumbnail($post->ID)) { 
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
						} else {
							$image = get_field('header_logo', 'option');
						} 
						$author = get_bloginfo('name');
						?>

						<ul class="social">
							<li>
								<a class="facebook sbg-button"
								href="javascript:;"
								data-sbg-network="facebook"  
								data-sbg-url="<?php echo get_permalink(); ?>"  
								data-sbg-title="<?php the_title(); ?>"  
								data-sbg-summary="<?php the_excerpt(); ?>"  
								data-sbg-image="<?php echo $image; ?>"  
								data-sbg-width="600"  
								data-sbg-height="368">
								<i class="fab fa-facebook-f"></i> Facebook
							</a>
						</li>
						<li>
							<a class="twitter sbg-button"
							href="javascript:;"
							data-sbg-network="twitter"  
							data-sbg-text="<?php echo wp_strip_all_tags( get_the_excerpt() ); ?> <?php echo get_permalink(); ?>"  
							data-sbg-via="<?php echo $author; ?>"  
							data-sbg-hashtags="<?php echo $author; ?>"  
							data-sbg-width="600"  
							data-sbg-height="258">
							<i class="fab fa-twitter"></i>Twitter
						</a>
					</li>
					<li>
						<a class="linkedin sbg-button"
						href="javascript:;"
						data-sbg-network="linkedin"  
						data-sbg-url="<?php echo get_permalink(); ?>"  
						data-sbg-title="<?php the_title(); ?>"  
						data-sbg-source="<?php echo $author; ?>"  
						data-sbg-summary="<?php the_excerpt(); ?>"  
						data-sbg-width="585"  
						data-sbg-height="471">
						<i class="fab fa-linkedin-in"></i>LinkedIn
					</a>
				</li>	
			</ul>
		</div>
		</div>
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