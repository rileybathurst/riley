<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">

		<a href="https://rileybathurst.com/09/auckland-wakeboard-open-2/">
			<img src="<?php echo content_url(); ?>/uploads/2013/02/Auckland-Wakeboard-Open.jpg" alt="auckland wakeboard open poster design">
		</a>
		<h4><a href="https://rileybathurst.com/09/auckland-wakeboard-open-2/">Auckland Wakeboard Open</a></h4>

		<div class="continental continental-gallery">
			<section>
				<a href="https://rileybathurst.com/09/skate-nationals-2012-poster-2/">
					<img src="<?php echo content_url(); ?>/uploads/2013/02/Skate-Nationals-2012-poster.jpg" alt="new zealand wakeskate nationals poster design">
				</a>
				<h4><a href="https://rileybathurst.com/09/skate-nationals-2012-poster-2/">Wakeskate Nationals</a></h4>
			</section>

			<section>
				<a href="https://rileybathurst.com/09/north-islands-2012-2/" rel="attachment wp-att-3209">
					<img src="<?php echo content_url(); ?>/uploads/2013/02/North-Islands-2012.jpg" alt="north island wakeboard champs poster design">
				</a>
				<h4><a href="https://rileybathurst.com/09/north-islands-2012-2/">North Island Champs</a></h4>
			</section>

			<section>
				<a href="https://rileybathurst.com/09/print-6/">
					<img src="<?php echo content_url(); ?>/uploads/2013/02/09-southerns-poster.jpg" alt="Wakeboard Southern Regionals poster design">
				</a>
				<h4><a href="https://rileybathurst.com/09/print-6/">Wakeboard Southern Regionals</a></h4>
			</section>
		</div>
	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>


