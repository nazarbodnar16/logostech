<?php
/*
Template Name: Markets child
*/
get_header(); ?>

<main>
	<div class="top-baner bg-img support-baner">
		<img src="<?php echo get_field('market_child_top_banner_image') ?>" alt="<?php echo get_the_title(); ?>">
		<div class="container">
			<div class="heading-box">
				<h1 class="h1"><?php echo get_the_title(); ?></h1>
			</div>
		</div>
	</div>
	<div class="internal">
		<div class="text-container">
			<div class="internal-post">
				<div class="headline clearfix">
					<div class="hr-box default-page"><div class="hr"></div></div>
				</div>
				<div class="post-content">
					<?php the_content(); ?>
				</div>				
			</div>
		</div>
	</div>
</main>
<style>
	.post-content b{
		display: block;
	}
</style>
<?php get_footer(); ?>