<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">

	<div class="specific-grid">
			<blockquote cite="http://wakenz.co.nz/about/" class="continental">
				<p>Wake NZ exists to promote, develop and support the sport of wakeboarding in New Zealand and strive to be at the heart of Wakeboarding in New Zealand.</p>
				<footer>
					<cite class="hide-for-medium"><a href="http://wakenz.co.nz/" target="_blank" rel="noopener">wakenz.co.nz</a></cite> <!-- with a large font running an abreviation where this is shorter on small screens? -->
					<cite class="show-for-medium"><a href="http://wakenz.co.nz/" target="_blank" rel="noopener">wakenz.co.nz</a></cite>
				</footer>
			</blockquote>
		</div>
		<a href="https://rileybathurst.com/09/auckland-wakeboard-open-2/">
			<img src="<?php echo content_url(); ?>/uploads/2013/02/Auckland-Wakeboard-Open.jpg" alt="auckland wakeboard open poster design">
		</a>
		<h4><a href="https://rileybathurst.com/09/auckland-wakeboard-open-2/">Auckland Wakeboard Open</a></h4>

		<div class="continental continental-gallery">
			<section>
				<a href="https://rileybathurst.com/2013/02/09/skate-nationals-2012-poster-2/">
					<img src="<?php echo content_url(); ?>/uploads/2013/02/Skate-Nationals-2012-poster.jpg" alt="new zealand wakeskate nationals poster design">
				</a>
				<h4><a href="https://rileybathurst.com/2013/02/09/skate-nationals-2012-poster-2/">Wakeskate Nationals</a></h4>
			</section>

			<section>
				<a href="https://rileybathurst.com/2013/02/09/north-islands-2012-2/" rel="attachment wp-att-3209">
					<img src="<?php echo content_url(); ?>/uploads/2013/02/North-Islands-2012.jpg" alt="north island wakeboard champs poster design">
				</a>
				<h4><a href="https://rileybathurst.com/2013/02/09/north-islands-2012-2/">North Island Champs</a></h4>
			</section>

			<section>
				<a href="https://rileybathurst.com/2013/02/09/print-6/">
					<img src="<?php echo content_url(); ?>/uploads/2013/02/09-southerns-poster.jpg" alt="Wakeboard Southern Regionals poster design">
				</a>
				<h4><a href="https://rileybathurst.com/2013/02/09/print-6/">Wakeboard Southern Regionals</a></h4>
			</section>
		</div>
	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>


