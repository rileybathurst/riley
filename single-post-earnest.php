<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<div class="grid-x grid-padding-x">

			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/earnest_chris_0224/">
					<picture class="lozad-picture" data-iesrc="http://rileybathurst.com/wp-content/uploads/2018/05/Earnest_Chris_0224-small.jpg">
						<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/Earnest_Chris_0224-large.jpg" alt="working on a motorbike" media="(min-width: 64em)">
						<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/Earnest_Chris_0224-medium.jpg" alt="working on a motorbike" media="(min-width: 40em)">
						<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/Earnest_Chris_0224-small.jpg" alt="working on a motorbike">
						<noscript><img src="http://rileybathurst.com/wp-content/uploads/2018/05/Earnest_Chris_0224-small.jpg" alt="working on a motorbike"></noscript>
					</picture>
					</a>
				</p>
				<h4><a href="http://rileybathurst.com/earnest_chris_0224/">Chris Morresy</a></h4>
			</div>

			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/earnest_simon_0091/">
					<picture class="lozad-picture" data-iesrc="http://rileybathurst.com/wp-content/uploads/2018/05/Earnest_Simon_0091-small.jpg">
						<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/Earnest_Simon_0091-large.jpg" alt="working on a Porsche 911" media="(min-width: 64em)">
						<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/Earnest_Simon_0091-medium.jpg" alt="working on a Porsche 911" media="(min-width: 40em)">
						<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/Earnest_Simon_0091-small.jpg" alt="working on a Porsche 911">
						<noscript><img src="http://rileybathurst.com/wp-content/uploads/2018/05/Earnest_Simon_0091-small.jpg" alt="working on a Porsche 911"></noscript>
					</picture>
					</a>
				</p>
				<h4><a href="http://rileybathurst.com/earnest_simon_0091/">Simon Courtney</a></h4>
			</div>

		</div>
	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
