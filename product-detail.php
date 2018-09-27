<?php
/*
Template Name: Product detail
*/
get_header(); ?>
<main>
	<div class="product-detail">
		<div class="product-container">
			<div class="row">
				<div class="product-box">
					<div class="headline clearfix">
						<ul class="headline-list">
							<li>Products</li>
						</ul>
						<div class="hr-box"><div class="hr"></div></div>
					</div>
					<div class="col-md-5">
						<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/Kestrel-Block-II.png" alt=""></div>
					</div>
					<div class="col-md-7">
						<div class="product-description">
							<div class="img-head">
								<img src="<?php echo get_template_directory_uri(); ?>/images/kestrel-heading.png" alt="">
							</div>
							<h2 class="h2">Wide-Area Motion Imagery for Aerostats</h2>
							<p>Kestrel is the only wide-area motion imagery (WAMI) system to be mounted on an aerostat and used to protect U.S. troops in Iraq and Afghanistan. This electro-optical/infrared WAMI sensor can both detect and track multiple vehicles and dismounts moving over a city-sized area—and thanks to its aerostat platform, it can do so 24 hours a day, for weeks at a time. In addition, Kestrel can record everything occurring within its 360-degree field of view for later analysis.</p>
							<div class="default-btn dark-btn">REQUEST MORE INFORMATION</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tab">
		<ul class="tabs">
			<li><a href="#">Tab01</a></li>
			<li><a href="#">Tab02</a></li>
			<li><a href="#">Tab03</a></li>
		</ul> <!-- / tabs -->
		<div class="tab_content">
			<div class="tabs_item">
				<img src="https://cdn.dribbble.com/users/545884/screenshots/3695553/news.png">
				<h4>Tab 01 Neque ipsum dolor.</h4>
				<p>Consectetur adipisicing elit. Neque, repellat facilis totam ab eos distinctio sint atque maiores! Dignissimos, molestiae, rem accusantium iure vitae voluptatum voluptas repudiandae deserunt dolore quis! Quisquam mollitia eius sed.</p>
			</div> <!-- / tabs_item -->
			<div class="tabs_item">
				<img src="https://cdn.dribbble.com/users/545884/screenshots/3576036/liberosis_--_10.png">
				<h4>Tab02 Maiores, suscipit</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, suscipit, eaque asperiores neque numquam nam possimus dolorem ipsa aspernatur reiciendis?</p>
			</div> <!-- / tabs_item -->
			<div class="tabs_item">
				<img src="https://cdn.dribbble.com/users/545884/screenshots/3557299/mo-t.png">
				<h4>Tab03</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, excepturi, minima, corporis deserunt quia quae sit officiis labore inventore autem a delectus consequuntur voluptatem modi eligendi similique sed nam vitae.</p>
			</div> <!-- / tabs_item -->
		</div> <!-- / tab_content -->
	</div> <!-- / tab -->
</main>

<?php get_footer(); ?>