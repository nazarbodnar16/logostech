<?php get_header(); ?>

	<main>
		<div class="internal">
			<div class="text-container">
				<div class="internal-post">
					<div class="post-content searchresult">
						<?php _e("<h2 style='font-weight:bold;color:#000;line-height: 30px;'>Search Results for:<br> ".get_query_var('s')."</h2>"); ?>
					<div class="headline clearfix">
						<div style="padding-left: 0;" class="hr-box"><div class="hr"></div></div>						
					</div>
					
						<?php
						$s=get_search_query();
						$args = array(
						                's' =>$s
						            );
						    // The Query
						$the_query = new WP_Query( $args );
						if ( $the_query->have_posts() ) {
						        
						        while ( $the_query->have_posts() ) { $the_query->the_post(); ?>

						                    <div>
						                    	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						                    </div>			                        

						                 <?php
								        }
								    }else{
								?>
						        <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
						        <div class="alert alert-info">
						          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
						        </div>
						<?php } ?>

					</div>					
				</div>
			</div>
		</div>
	</main>

<?php get_footer(); ?>