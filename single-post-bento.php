<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">

		<div class="grid-x">
			<div class="cell">
				<h3 class="box-title">Photography</h3>
				<p>The photography was shot for secondary marketing and social media along the way, many of the shots are high resolution RAW images of times when I was also shooting video, either simultaneously with multiple cameras or before or after a video shot. I think that shooting the photos along the way helped me to look at the images in different ways than just shooting video.</p>
			</div>
		</div>

		<div class="grid-x grid-padding-x">
			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/bento/day_3_early_nakayama_0025/">
						<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2015/11/Day_3_Early_Nakayama_0025-small.jpg">
							<source srcset="<?php echo content_url(); ?>/uploads/2015/11/Day_3_Early_Nakayama_0025-large.jpg" alt="snowboard photo on a windy day in japan" media="(min-width: 64em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2015/11/Day_3_Early_Nakayama_0025-medium.jpg" alt="snowboard photo on a windy day in japan" media="(min-width: 40em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2015/11/Day_3_Early_Nakayama_0025-small.jpg" alt="snowboard photo on a windy day in japan">
							<noscript><img src="<?php echo content_url(); ?>/uploads/2015/11/Day_3_Early_Nakayama_0025-small.jpg" alt="snowboard photo on a windy day in japan"></noscript>
						</picture>
					</a>
				</p>
			</div>

			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/day_16_far_nakayama_0087/">
						<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2018/04/Day_16_Far_Nakayama_0087-small.jpg">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/04/Day_16_Far_Nakayama_0087-large.jpg" alt="snowboard photo on a windy day in japan" media="(min-width: 64em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/04/Day_16_Far_Nakayama_0087-medium.jpg" alt="snowboard photo on a windy day in japan" media="(min-width: 40em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/04/Day_16_Far_Nakayama_0087-small.jpg" alt="snowboard photo on a windy day in japan">
							<noscript><img src="<?php echo content_url(); ?>/uploads/2018/04/Day_16_Far_Nakayama_0087-small.jpg" alt="snowboarder riding roadside barriers"></noscript>
						</picture>
					</a>
				</p>
			</div>

			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/day_23_momentum_0153/">
						<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2018/04/Day_23_Momentum_0153-small.jpg">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/04/Day_23_Momentum_0153-large.jpg" alt="snowboard photo on a windy day in japan" media="(min-width: 64em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/04/Day_23_Momentum_0153-medium.jpg" alt="snowboard photo on a windy day in japan" media="(min-width: 40em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/04/Day_23_Momentum_0153-small.jpg" alt="snowboard photo on a windy day in japan">
							<noscript><img src="<?php echo content_url(); ?>/uploads/2018/04/Day_23_Momentum_0153-small.jpg" alt="snowboarder airing off a barrier"></noscript>
						</picture>
					</a>
				</p>
			</div>

			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/day_6_nakayama_pillowy_0051/">
						<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2018/04/Day_6_Nakayama_Pillowy_0051-small.jpg">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/04/Day_6_Nakayama_Pillowy_0051-large.jpg" alt="snowboard photo on a windy day in japan" media="(min-width: 64em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/04/Day_6_Nakayama_Pillowy_0051-medium.jpg" alt="snowboard photo on a windy day in japan" media="(min-width: 40em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/04/Day_6_Nakayama_Pillowy_0051-small.jpg" alt="snowboard photo on a windy day in japan">
							<noscript><img src="<?php echo content_url(); ?>/uploads/2018/04/Day_6_Nakayama_Pillowy_0051-small.jpg" alt="mount yotei in japan"></noscript>
						</picture>
					</a>
				</p>
			</div>
		</div>

		<div class="grid-x grid-padding-x">
			<div class="cell">
				<h3 class="box-title">Trailer</h3>
				<article class="responsive-embed frame">
					<p>
						<iframe width="560" height="315" data-src="https://www.youtube.com/embed/q7-XrjuQ2ug" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="lozad" data-index="1"></iframe>
					</p>
				</article>
			</div>
		</div>
	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
