<!--
	picture elements look broken on purpose 
	https://apoorv.pro/lozad.js/#example-with-picture-tag
-->

<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<a href="https://rileybathurst.com/kings_truffles_0498/">
			<picture class="lozad-picture">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Kings_Truffles_0498-large.jpg" media="(min-width: 64em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Kings_Truffles_0498-medium.jpg" media="(min-width: 40em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Kings_Truffles_0498-small.jpg" alt="kings truffle dogs">
			</picture>
		</a>
				
		<a href="https://rileybathurst.com/kings_truffles_0707/">
			<picture class="lozad-picture">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Kings_Truffles_0707-large.jpg" media="(min-width: 64em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Kings_Truffles_0707-medium.jpg" media="(min-width: 40em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Kings_Truffles_0707-small.jpg" alt="kings truffle dogs">
			</picture>
		</a>

		<a href="https://rileybathurst.com/kings_truffles_0698/">
			<picture class="lozad-picture">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Kings_Truffles_0698-large.jpg" alt="kings truffle dogs" media="(min-width: 64em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Kings_Truffles_0698-medium.jpg" alt="kings truffle dogs" media="(min-width: 40em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Kings_Truffles_0698-small.jpg" alt="kings truffle dogs">
			</picture>
		</a>

		<a href="https://rileybathurst.com/kings_truffles_0610/">
			<picture class="lozad-picture">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Kings_Truffles_0610-large.jpg" alt="kings truffle dogs" media="(min-width: 64em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Kings_Truffles_0610-medium.jpg" alt="kings truffle dogs" media="(min-width: 40em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Kings_Truffles_0610-small.jpg" alt="kings truffle dogs">
			</picture>
		</a>
		
	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
