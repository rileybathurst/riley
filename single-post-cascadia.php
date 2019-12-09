<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">

		<article class="responsive-embed widescreen frame">
			<p>
				<iframe width="560" height="315" data-src="https://www.youtube.com/embed/S-_txN58TFU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="lozad" data-index="1"></iframe>
			</p>
		</article>
		<h4>Episode 1</h4>

		<article class="responsive-embed widescreen frame">
			<p>
				<iframe width="560" height="315" data-src="https://www.youtube.com/embed/26QDqLbkmUY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="lozad" data-index="1"></iframe>
			</p>
		</article>
		<h4>Episode 2</h4>

		<article class="responsive-embed widescreen frame">
			<p>
				<iframe width="560" height="315" data-src="https://www.youtube.com/embed/pBCFWCBu24s" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="lozad" data-index="1"></iframe>
			</p>
		</article>
		<h4>Episode 3</h4>
	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
