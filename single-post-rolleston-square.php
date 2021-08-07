<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		
	<div class="specific-grid">
			<!-- <h3>About Snowledge</h3> -->
			<blockquote cite="https://priestsheetmetal.co.nz/" class="continental">
				<p>Rolleston Square is the shopping plaza at the heart of Rolleston and the Selwyn District, the fastest growing district in New Zealand.</p>
				<footer>
					<cite class="hide-for-medium"><a href="https://rollestonsquare.co.nz/" target="_blank" rel="noopener">rollestonsquare.co.nz/</a></cite> <!-- with a large font running an abreviation where this is shorter on small screens? -->
					<cite class="show-for-medium"><a href="https://rollestonsquare.co.nz/" target="_blank" rel="noopener">rollestonsquare.co.nz/</a></cite>
				</footer>
			</blockquote>
		</div>

		<!-- <img src=" php echo content_url(); ?>/uploads/2014/11/tote-2.jpg" alt="rolleston square event invite"> this is the featured image -->
		<img src="<?php echo content_url(); ?>/uploads/2013/04/7-days-7001.jpg" alt="rolleston square event invite">
		<h4 class="caption">2013 Christmas Party Invite.</h4>
	</div><!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
