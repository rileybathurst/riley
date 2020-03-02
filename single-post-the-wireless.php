<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">

		<div style="--aspect-ratio: 16/9;">
			<iframe width="560" height="315" data-src="https://www.youtube.com/embed/M0NFQrtZb-U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="lozad" data-index="1"></iframe>
		</div>
		<h4>Dave North</h4>
			
		<div style="--aspect-ratio: 16/9;">
			<iframe width="560" height="315" data-src="https://www.youtube.com/embed/eyzhuXQpUOE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="lozad" data-index="1"></iframe>
		</div>
		<h4>Life on home detention</h4>

	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
