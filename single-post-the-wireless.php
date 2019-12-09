<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">

		<article class="responsive-embed widescreen frame">
				<iframe width="560" height="315" data-src="https://www.youtube.com/embed/M0NFQrtZb-U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="lozad" data-index="1"></iframe>
		</article>
		<h4>Dave North</h4>
			
		<article class="responsive-embed widescreen frame">
				<iframe width="560" height="315" data-src="https://www.youtube.com/embed/eyzhuXQpUOE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="lozad" data-index="1"></iframe>
		</article>
		<h4>Life on home detention</h4>

	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
