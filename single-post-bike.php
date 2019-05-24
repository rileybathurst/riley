<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<div class="grid-x grid-padding-x">
			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/st-james-walkway/st_james_gopro_005-edit/">
					<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2013/02/St_James_GoPro_005-edit2.jpg">

						<source srcset="<?php echo content_url(); ?>/uploads/2013/02/St_James_GoPro_005-edit2.jpg" alt="mountain bike photography">
						<noscript><img src="<?php echo content_url(); ?>/uploads/2013/02/St_James_GoPro_005-edit2.jpg" alt="mountain bike photography"></noscript>
					</picture>
					</a>
				</p>
				<h4><a href="http://rileybathurst.com/st-james-walkway/st_james_gopro_005-edit/">Reuben Williams</a><br />
					Printed in CHILL Magazine</h4>
			</div>

			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/deflux-build/deflux_build_043-2/">
						<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2013/02/Deflux_Build_0431.jpg">
							<source srcset="<?php echo content_url(); ?>/uploads/2013/02/Deflux_Build_0431.jpg" alt="Simon Courtney - Deflux Build">
							<noscript><img src="<?php echo content_url(); ?>/uploads/2013/02/Deflux_Build_0431.jpg" alt="Simon Courtney - Deflux Build"></noscript>
						</picture>
					</a>
				</p>
				<h4><a href="http://rileybathurst.com/deflux-build/deflux_build_043-2/">Simon Courtney - Deflux Build</a></h4>
			</div>

		</div>
	 </div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
