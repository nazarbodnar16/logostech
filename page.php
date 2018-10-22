<?php get_header(); ?>

	<main>
		<div class="internal">
			<div class="text-container">
				<div class="internal-post">
					<div class="headline clearfix">
						<div class="hr-box"><div class="hr"></div></div>
					</div>
					<h1 class="h1"><?php echo get_the_title(); ?></h1>
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