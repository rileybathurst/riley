<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		
		<img src="<?php echo content_url(); ?>/uploads/2014/11/tote-2.jpg" alt="rolleston square event invite">
		<img src="https://rileybathurst.com/wp-content/uploads/2013/04/7-days-7001.jpg" alt="rolleston square event invite">
	</div><!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
