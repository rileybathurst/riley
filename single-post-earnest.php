<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<a href="http://rileybathurst.com/earnest_chris_0224/">
			<picture class="lozad-picture">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Earnest_Chris_0224-large.jpg" media="(min-width: 64em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Earnest_Chris_0224-medium.jpg" media="(min-width: 40em)">
				<img src="<?php echo content_url(); ?>/uploads/2018/05/Earnest_Chris_0224-small.jpg" alt="working on a motorbike">
			</picture>
		</a>
		<h4><a href="http://rileybathurst.com/earnest_chris_0224/">Chris Morresy</a></h4>
			
		<a href="http://rileybathurst.com/earnest_simon_0091/">
			<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2018/05/Earnest_Simon_0091-small.jpg">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Earnest_Simon_0091-large.jpg" alt="working on a Porsche 911" media="(min-width: 64em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Earnest_Simon_0091-medium.jpg" alt="working on a Porsche 911" media="(min-width: 40em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Earnest_Simon_0091-small.jpg" alt="working on a Porsche 911">
				<img src="<?php echo content_url(); ?>/uploads/2018/05/Earnest_Simon_0091-small.jpg" alt="working on a Porsche 911">
			</picture>
		</a>

		<h4><a href="http://rileybathurst.com/earnest_simon_0091/">Simon Courtney</a></h4>

	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
