<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<div class="grid-x grid-padding-x">
			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/josh-o-half-cab-diptych-medium/">
					<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2014/03/Josh-O-half-cab-diptych-small.jpg">
						<source srcset="<?php echo content_url(); ?>/uploads/2014/03/Josh-O-half-cab-diptych-medium.jpg" alt="josh oconell double wakeboard image" media="(min-width: 40em)">
						<source srcset="<?php echo content_url(); ?>/uploads/2014/03/Josh-O-half-cab-diptych-small.jpg" alt="josh oconell double wakeboard image">
						<noscript><img src="<?php echo content_url(); ?>/uploads/2014/03/Josh-O-half-cab-diptych-small.jpg" alt="josh oconell double wakeboard image"></noscript>
					</picture>
					</a>
				</p>
				<h4><a href="http://rileybathurst.com/josh-o-half-cab-diptych-medium/">Josh O - Diptych</a><br />
					The right image was printed in Wake Magazine</h4>
			</div>

			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/andrew-pastura-first-roll/">
						<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2018/05/Andrew-Pastura-First-Roll-small.jpg">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Andrew-Pastura-First-Roll-large.jpg" alt="wakeskater in tahoe" media="(min-width: 64em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Andrew-Pastura-First-Roll-medium.jpg" alt="wakeskater in tahoe" media="(min-width: 40em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Andrew-Pastura-First-Roll-small.jpg" alt="wakeskater in tahoe">
							<noscript><img src="<?php echo content_url(); ?>/uploads/2018/05/Andrew-Pastura-First-Roll-small.jpg" alt="wakeskater in tahoe"></noscript>
						</picture>
					</a>
				</p>
				<h4><a href="http://rileybathurst.com/andrew-pastura-first-roll/">Andrew Pastura - First Roll, Tahoe. CA</a></h4>
			</div>

			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/brad-smeele-nollie/brad-ski-jump-nollie1/">
						<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2013/02/Brad-Ski-Jump-Nollie1-1.jpg">
							<source srcset="<?php echo content_url(); ?>/uploads/2013/02/Brad-Ski-Jump-Nollie1-1.jpg" alt="brad smeele ski jump wakeboard nolie">
							<noscript><img src="<?php echo content_url(); ?>/uploads/2013/02/Brad-Ski-Jump-Nollie1-1.jpg" alt="brad smeele ski jump wakeboard nolie"></noscript>
						</picture>
					</a>
				</p>
				<h4><a href="http://rileybathurst.com/brad-smeele-nollie/brad-ski-jump-nollie1/">Brad Smeele Nollie</a><br />
					Printed in Wake Magazine</h4>
			</div>

			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/brad-smeele-nollie/brad-ski-jump-nollie1/">
						<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2013/02/Brad-Ski-Jump-Nollie1-1.jpg">
							<noscript><img src="<?php echo content_url(); ?>/uploads/2013/02/Brad-Ski-Jump-Nollie1-1.jpg" alt="Brad smeele wakeboard nollie"></noscript>
						</picture>
					</a>
				</p>
				<h4><a href="http://rileybathurst.com/brad-smeele-nollie/brad-ski-jump-nollie1/">Brad Smeele - Nollie, New Zealand</a></h4>
			</div>

		</div>

		<div class="grid-x grid-padding-x">
			<div class="cell">
				<h3 class="box-title">Video</h3>
			</div>
		</div>

		<div class="grid-x grid-padding-x">

			<div class="small-12 medium-6 cell">
				<p>
					<iframe width="560" height="315" data-src="https://www.youtube.com/embed/ZAcAkvgZ3-o" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="lozad" data-index="1"></iframe>
				</p>
				<h4>Jen Gilanfarr - Tahoe Drone Set</h4>
			</div>

			<div class="small-12 medium-6 cell">
				<p>
					<iframe width="560" height="315" data-src="https://www.youtube.com/embed/kdy_JgSNnJY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="lozad" data-index="1"></iframe>
				</p>
				<h4>Jen Gilanfarr - Single Set</h4>
			</div>

		</div>
	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
