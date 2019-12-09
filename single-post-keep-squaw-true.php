<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<hr class="mega-hr">

		<div class="specific-grid">
			<h3 class="subtitle">Video</h3>

			<div class="continental east-medium">
				<p>Working on the post product for the Movie to Keep Squaw True was my first experience with a full length documentary. Working under editor and co-dorector Scott Gaffney I worked extensivley on the color, graphics and smaller edits, trailers and extra pieces involved in the movie.</p>
			</div>

			<div class="continental west-medium gr-1-m">
				<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/300523913" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script><!-- what on earth is going on with these inline styles??? -->
			</div>
		</div>

		<hr class="mega-hr">

		<div class="specific-grid">
			<div class="continental west-medium">
				<p>The locals Shreddit Edit was an action piece accompanying The Movie to Keep Squaw True featuring some of the best local atheletes in the region Sierra Watch are trying to protect and was played alongside the movie as a hype piece at film festivals.</p>
			</div>

			<div class="continental east-medium">
				<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/327133013" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
			</div>

		</div>

		<hr class="mega-hr">

		<div class="specific-grid">
			<h3 class="subtitle">Photography</h3>

			<div class="continental">
				<p>I worked with Keep Squaw True to shoot many of the purple products they have on <a href="https://sierra-watch.myshopify.com/collections/all" target="_blank">their store</a>.</p>
			</div>

			<figure class="continental west-medium mw-18em">
				<picture class="lozad-picture">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_Clothing_V2_094-large.jpg" media="(min-width: 64em)">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_Clothing_V2_094-medium.jpg" media="(min-width: 40em)">
					<img src="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_Clothing_V2_094-small.jpg" alt="keep squaw true clothing shoot">
				</picture>
				<figcaption>Tram Face T</figcaption>
			</figure>

			<div class="east-medium"></div> <!-- white space -->

			<figure class="continental east-medium mw-18em">
				<picture class="lozad-picture">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_apparel_0315-1.jpg" media="(min-width: 64em)">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_apparel_0315-medium.jpg" media="(min-width: 40em)">
					<img src="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_apparel_0315-small.jpg" alt="keep squaw true clothing shoot">
				</picture>
				<figcaption>Keep Squaw True T Shirt</figcaption>
			</figure>

		</div>
	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
