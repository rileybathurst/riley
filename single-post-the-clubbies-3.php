<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">

		<div style="--aspect-ratio: 16/9;">
			<iframe width="560" height="315" data-src="https://www.youtube.com/embed/u7RDN41pKa4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="lozad" data-index="1"></iframe>
		</div>
		<h4>Episode 2</h4>

		<div style="--aspect-ratio: 16/9;">
			<iframe width="560" height="315" data-src="https://www.youtube.com/embed/OOFLBmfzchM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="lozad" data-index="1"></iframe>
		</div>
		<h4>Episode 3</h4>
		
	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
