<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<div class="grid-x grid-padding-x">
			<div class="cell">
				<h3 class="box-title">Design</h3>
			</div>
		</div>

		<div class="grid-x grid-padding-x">
			<div class="small-12 medium-7 cell">
				<p>
					<a href="http://rileybathurst.com/the-vintage-peddler-flyer/">
						<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2013/02/Vintage-Peddler-DLE-season-2.jpg">
							<source srcset="<?php echo content_url(); ?>/uploads/2013/02/Vintage-Peddler-DLE-season-2.jpg" alt="the vinatge peddler dle design">
							<noscript><img src="<?php echo content_url(); ?>/uploads/2013/02/Vintage-Peddler-DLE-season-2.jpg" alt="the vinatge peddler dle design"></noscript>
						</picture>
					</a>
				</p>
				<h4><a href="http://rileybathurst.com/the-vintage-peddler-flyer/">DLE Design</a></h4>
			</div>

			<div class="small-12 medium-5 cell">
				<p>
					<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2018/05/vp-sign.jpg">
						<source srcset="<?php echo content_url(); ?>/uploads/2018/05/vp-sign.jpg" alt="the vinatge peddler exterior sign">
						<noscript><img src="<?php echo content_url(); ?>/uploads/2018/05/vp-sign.jpg" alt="the vinatge peddler exterior sign"></noscript>
					</picture>
				</p>
				<h4>Exterior Sign</h4>
			</div>
		</div>

		<div class="grid-x grid-padding-x">
			<div class="small-12 medium-5 cell">
				<p>
					<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2014/03/vp-imac.png">
						<source srcset="<?php echo content_url(); ?>/uploads/2014/03/vp-imac.png" alt="the vinatge peddler website front page">
						<noscript><img src="<?php echo content_url(); ?>/uploads/2014/03/vp-imac.png" alt="the vinatge peddler website front page"></noscript>
					</picture>
				</p>
				<h4>Original Website Front Page</h4>
			</div>

			<div class="small-12 medium-7 cell">
				<p>
					<a href="http://rileybathurst.com/vp_shoot_2012_0044/">
						<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2018/05/VP_Shoot_2012_0044-small.jpg">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/05/VP_Shoot_2012_0044-large.jpg" alt="miss peddles the vintage peddler bike mobile"  media="(min-width: 64em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/05/VP_Shoot_2012_0044-medium.jpg" alt="miss peddles the vintage peddler bike mobile"  media="(min-width: 40em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/05/VP_Shoot_2012_0044-small.jpg" alt="miss peddles the vintage peddler bike mobile">
							<noscript><img src="<?php echo content_url(); ?>/uploads/2018/05/VP_Shoot_2012_0044-small.jpg" alt="miss peddles the vintage peddler bike mobile"></noscript>
						</picture>
					</a>
				</p>
				<h4><a href="http://rileybathurst.com/vp_shoot_2012_0044/">Miss Peddles</a></h4>
			</div>
		</div>

		<div class="grid-x grid-padding-x">
			<div class="cell">
				<h3 class="box-title">Photography</h3>
			</div>
		</div>

		<div class="grid-x grid-padding-x">
			<div class="small-12 medium-4 cell">
				<p>
					<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2018/05/Gracie_Biker_0017.jpg">
						<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Gracie_Biker_0017.jpg" alt="cruising on the vintage peddler bikes">
						<noscript><img src="<?php echo content_url(); ?>/uploads/2018/05/Gracie_Biker_0017.jpg" alt="cruising on the vintage peddler bikes"></noscript>
					</picture>
				</p>
			</div>

			<div class="small-12 medium-4 cell">
				<p>
					<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2018/05/Gracie_Biker_0118.jpg">
						<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Gracie_Biker_0118.jpg" alt="girl riding a bicycle in a christchurch street">
						<noscript><img src="<?php echo content_url(); ?>/uploads/2018/05/Gracie_Biker_0118.jpg" alt="girl riding a bicycle in a christchurch street"></noscript>
					</picture>
				</p>
			</div>

			<div class="small-12 medium-4 cell">
				<p>
					<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2018/05/VP_Hipsters_003.jpg">
						<source srcset="<?php echo content_url(); ?>/uploads/2018/05/VP_Hipsters_003.jpg" alt="gold bikes and broken cities">
						<noscript><img src="<?php echo content_url(); ?>/uploads/2018/05/VP_Hipsters_003.jpg" alt="gold bikes and broken cities"></noscript>
					</picture>
				</p>
			</div>
		</div>

		<div class="grid-x grid-padding-x">
			<div class="small-12 medium-6 cell">
				<p>
					<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2018/05/VP_Shoot_2012_0079.jpg">
						<source srcset="<?php echo content_url(); ?>/uploads/2018/05/VP_Shoot_2012_0079.jpg" alt="vintage bikes beside a wall">
						<noscript><img src="<?php echo content_url(); ?>/uploads/2018/05/VP_Shoot_2012_0079.jpg" alt="vintage bikes beside a wall"></noscript>
					</picture>
				</p>
			</div>

			<div class="small-12 medium-6 cell">
				<p>
					<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2018/05/VP_2013_0027_1.jpg">
						<source srcset="<?php echo content_url(); ?>/uploads/2018/05/VP_2013_0027_1.jpg" alt="the vintage peddlers bikes are ready for you">
						<noscript><img src="<?php echo content_url(); ?>/uploads/2018/05/VP_2013_0027_1.jpg" alt="the vintage peddlers bikes are ready for you"></noscript>
					</picture>
				</p>
			</div>
		</div>
	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
