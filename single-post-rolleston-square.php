<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<div class="grid-x grid-padding-x">

			<div class="small-12 medium-6 cell">
				<p>
					<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2014/11/tote-2.jpg">
						<source srcset="<?php echo content_url(); ?>/uploads/2014/11/tote-2.jpg" alt="rolleston square event invite">
						<noscript><img src="<?php echo content_url(); ?>/uploads/2014/11/tote-2.jpg" alt="rolleston square event invite"></noscript>
					</picture>
				</p>
			</div>

			<div class="small-12 medium-6 cell">
				<p>
					<picture class="lozad-picture" data-iesrc="https://rileybathurst.com/wp-content/uploads/2013/04/7-days-7001.jpg">
						<source srcset="https://rileybathurst.com/wp-content/uploads/2013/04/7-days-7001.jpg" alt="rolleston square event invite">
						<noscript><img src="https://rileybathurst.com/wp-content/uploads/2013/04/7-days-7001.jpg" alt="rolleston square event invite"></noscript>
					</picture>
				</p>
			</div>
		</div>
	</div><!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
