<!-- Featured Video // keep this here so the nonce can be searched for
<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FKeepSquawTrue%2Fvideos%2F1730244910375093%2F&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true" nonce="zHjrGE0dBGv4"></iframe> -->

<!--
	picture elements look broken on purpose 
	https://apoorv.pro/lozad.js/#example-with-picture-tag
-->
<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<hr class="mega-hr">

		<div class="specific-grid">
			<h3 class="">Video</h3>
			<p class="show-for-medium subtitle">Video</p>

			<div class="continental">
				<p>Working on the post product for the Movie to Keep Squaw True was my first experience with a full length documentary. Working under editor and co-dorector Scott Gaffney I worked extensivley on the color, graphics and smaller edits, trailers and extra pieces involved in the movie.</p>
			</div>

			<div class="continental">
				<iframe
					src="https://player.vimeo.com/video/300523913"
					frameborder="0"
					allow="autoplay; fullscreen"
					allowfullscreen
					class="vimeo">
				</iframe>
			</div>
		</div>

		<hr class="mega-hr">

		<div class="specific-grid">
			<div class="continental">
				<p>The locals Shreddit Edit was an action piece accompanying The Movie to Keep Squaw True featuring some of the best local atheletes in the region Sierra Watch are trying to protect and was played alongside the movie as a hype piece at film festivals.</p>
			</div>

			<div class="continental">
				<iframe src="https://player.vimeo.com/video/327133013" frameborder="0" allow="autoplay; fullscreen" allowfullscreen class="vimeo"></iframe>
					<script src="https://player.vimeo.com/api/player.js"></script>
			</div>

		</div>

		<hr class="mega-hr">

		<div class="specific-grid">
			<h3 class="">Photography</h3>
			<p class="show-for-medium subtitle">Photography</p>

			<div class="continental">
				<p>I worked with Keep Squaw True to shoot many of the purple products they have on <a href="https://sierra-watch.myshopify.com/collections/all" target="_blank" rel="noopener" >their store</a>.</p>
			</div>

			<figure class="continental">
				<picture class="lozad-picture">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_Clothing_V2_094-large.jpg" media="(min-width: 64em)">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_Clothing_V2_094-medium.jpg" media="(min-width: 40em)">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_Clothing_V2_094-small.jpg" alt="keep squaw true clothing shoot">
				</picture>
				<figcaption>Tram Face T</figcaption>
			</figure>

			<figure class="continental">
				<picture class="lozad-picture">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_apparel_0315-1.jpg" media="(min-width: 64em)">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_apparel_0315-medium.jpg" media="(min-width: 40em)">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_apparel_0315-small.jpg" alt="keep squaw true clothing shoot">
				</picture>
				<figcaption>Keep Squaw True T Shirt</figcaption>
			</figure>

		</div>
	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
