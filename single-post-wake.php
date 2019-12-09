<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<a href="http://rileybathurst.com/josh-o-half-cab-diptych-medium/">
			<picture class="lozad-picture">
				<source srcset="<?php echo content_url(); ?>/uploads/2014/03/Josh-O-half-cab-diptych-medium.jpg" alt="josh oconell double wakeboard image" media="(min-width: 40em)">
				<img src="<?php echo content_url(); ?>/uploads/2014/03/Josh-O-half-cab-diptych-small.jpg" alt="josh oconell double wakeboard image">
			</picture>
		</a>
		<h4><a href="http://rileybathurst.com/josh-o-half-cab-diptych-medium/">Josh O - Diptych</a><br />
			The right image was printed in Wake Magazine</h4>
			
		<a href="http://rileybathurst.com/andrew-pastura-first-roll/">
			<picture class="lozad-picture">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Andrew-Pastura-First-Roll-large.jpg" alt="wakeskater in tahoe" media="(min-width: 64em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Andrew-Pastura-First-Roll-medium.jpg" alt="wakeskater in tahoe" media="(min-width: 40em)">
				<img src="<?php echo content_url(); ?>/uploads/2018/05/Andrew-Pastura-First-Roll-small.jpg" alt="wakeskater in tahoe">
			</picture>
		</a>
		<h4><a href="http://rileybathurst.com/andrew-pastura-first-roll/">Andrew Pastura - First Roll, Tahoe. CA</a></h4>
			
		<a href="http://rileybathurst.com/brad-smeele-nollie/brad-ski-jump-nollie1/">
			<img src="<?php echo content_url(); ?>/uploads/2013/02/Brad-Ski-Jump-Nollie1-1.jpg" alt="brad smeele ski jump wakeboard nolie">
		</a>
		<h4><a href="http://rileybathurst.com/brad-smeele-nollie/brad-ski-jump-nollie1/">Brad Smeele Nollie</a><br />
			Printed in Wake Magazine</h4>
			
		<a href="http://rileybathurst.com/brad-smeele-nollie/brad-ski-jump-nollie1/">
			<img src="<?php echo content_url(); ?>/uploads/2013/02/Brad-Ski-Jump-Nollie1-1.jpg" alt="Brad smeele wakeboard nollie">
		</a>
		<h4><a href="http://rileybathurst.com/brad-smeele-nollie/brad-ski-jump-nollie1/">Brad Smeele - Nollie, New Zealand</a></h4>
			
		<h3 class="box-title">Video</h3>
		
		<iframe width="560" height="315" data-src="https://www.youtube.com/embed/ZAcAkvgZ3-o" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="lozad" data-index="1"></iframe>
		<h4>Jen Gilanfarr - Tahoe Drone Set</h4>

		<iframe width="560" height="315" data-src="https://www.youtube.com/embed/kdy_JgSNnJY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="lozad" data-index="1"></iframe>
		<h4>Jen Gilanfarr - Single Set</h4>

	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
