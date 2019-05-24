<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<hr class="mega-hr">

		<div class="specific-grid">
			<h3 class="subtitle">Photography</h3>
			<p class="continental">A selection of images shot for Snowledge.</p>

			<section class="continental west-medium">
					<a href="http://rileybathurst.com/img_0049-full/">
						<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2018/04/IMG_0049-small.jpg">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/04/IMG_0049-full.jpg" alt="deep powder snow turn" media="(min-width: 64em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/04/IMG_0049-medium.jpg" alt="deep powder snow turn" media="(min-width: 40em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/04/IMG_0049-small.jpg" alt="deep powder snow turn">
							<noscript><img src="<?php echo content_url(); ?>/uploads/2018/04/IMG_0049-small.jpg" alt="deep powder snow turn"></noscript>
						</picture>
					</a>
				<h4 class="caption">Brandon Craddock - Deep Pow</h4>
			</section>

			<div class="east-medium"></div> <!-- white spacing -->

			<section class="continental east-medium">
				<a href="http://rileybathurst.com/dji_0063-full/">
					<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2018/04/DJI_0063-small.jpg">
						<source srcset="<?php echo content_url(); ?>/uploads/2018/04/DJI_0063-large.jpg" alt="drone photo of a snowboarder on a small patch of snow" media="(min-width: 64em)">
						<source srcset="<?php echo content_url(); ?>/uploads/2018/04/DJI_0063-medium.jpg" alt="drone photo of a snowboarder on a small patch of snow" media="(min-width: 40em)">
						<source srcset="<?php echo content_url(); ?>/uploads/2018/04/DJI_0063-small.jpg" alt="drone photo of a snowboarder on a small patch of snow">
						<noscript><img src="<?php echo content_url(); ?>/uploads/2018/04/DJI_0063-small.jpg" alt="drone photo of a snowboarder on a small patch of snow"></noscript>
					</picture>
				</a>
				<h4 class="caption">Garrett Cygan - Snow Diamond</h4>
			</section>

			<section class="continental west-medium mw-18em">
					<a href="http://rileybathurst.com/img_0126/">
						<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2018/05/IMG_0126.jpg">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/05/IMG_0126.jpg" alt="skier air in the trees in canada" media="(min-width: 64em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/05/IMG_0126.jpg" alt="skier air in the trees in canada" media="(min-width: 40em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/05/IMG_0126.jpg" alt="skier air in the trees in canada">
							<noscript><img src="<?php echo content_url(); ?>/uploads/2018/05/IMG_0126.jpg" alt="skier air in the trees in canada"></noscript>
						</picture>
					</a>
				<h4 class="caption">Canadian Tree Chute</h4>
			</section>

			<div class="east-medium"></div> <!-- white spacing -->

			<section class="continental east-medium mw-18em">
					<a href="http://rileybathurst.com/img_3238-large/">
						<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2018/05/IMG_3238-large.jpg">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/05/IMG_3238-large.jpg" alt="eric lee obrien skiing shot from the chair" media="(min-width: 64em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/05/IMG_3238-large.jpg" alt="eric lee obrien skiing shot from the chair" media="(min-width: 40em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/05/IMG_3238-large.jpg" alt="eric lee obrien skiing shot from the chair">
							<noscript><img src="<?php echo content_url(); ?>/uploads/2018/05/IMG_3238-large.jpg" alt="eric lee obrien skiing shot from the chair"></noscript>
						</picture>
					</a>
				<h4 class="caption">Eric Lee O'Brien - Park Shot</h4>
			</section>
		</div>

		<hr class="mega-hr">

		<div class="specific-grid">
			<h3 class="subtitle">Profiles</h3>

			<section class="continental west-medium">
				<a href="http://rileybathurst.com/dsc01909-2/">
						<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2018/05/DSC01909-small.jpg">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/05/DSC01909-large.jpg" alt="Garrett cygan snowboarder profile" media="(min-width: 64em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/05/DSC01909-medium.jpg" alt="Garrett cygan snowboarder profile" media="(min-width: 40em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/05/DSC01909-small.jpg" alt="Garrett cygan snowboarder profile">
							<noscript><img src="<?php echo content_url(); ?>/uploads/2018/05/DSC01909-small.jpg" alt="Garrett cygan snowboarder profile"></noscript>
						</picture>
					</a>
				<h4 class="caption">Garrett Cygan - Snowboarder Profile</h4>
			</section>

			<div class="east-medium"></div> <!-- white spacing -->

			<section class="continental east-medium">
					<a href="http://rileybathurst.com/dsc07671-3/">
						<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2018/05/DSC07671-small.jpg">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/05/DSC07671-large.jpg" alt="Kenzie Morris skier profile" media="(min-width: 64em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/05/DSC07671-medium.jpg" alt="Kenzie Morris skier profile" media="(min-width: 40em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/05/DSC07671-small.jpg" alt="Kenzie Morris skier profile">
							<noscript><img src="<?php echo content_url(); ?>/uploads/2018/05/DSC07671-small.jpg" alt="Kenzie Morris skier profile"></noscript>
						</picture>
					</a>
				<h4 class="caption">Kenzie Morris - Skier Profile</h4>
			</section>
		</div>

		<hr class="mega-hr">

		<div class="specific-grid">
			<h3 class="subtitle">Video</h3>

			<section class="responsive-embed widescreen frame continental east-medium">
				<iframe width="560" height="315" data-src="https://www.youtube.com/embed/YaRpBbbJ6Ow" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="lozad" data-index="1"></iframe>
			</section>

			<section class="continental west-medium gr-1-m">
					<h3>Hunt For The Powder People</h3>
					<p>Taking a road trip through my original home of New Zealand lets you see things you used to glance past as a tourist. Then having the chance to ride with some of my best friends in mountains I had been away from for a while, we got lucky with the weather in the central South Island and pretty terrible snow down South which was made it even better to showcase what I was hoping for.</p>
			</section>
		</div>

		<hr class="mega-hr">

		<div class="specific-grid">
			<section class="responsive-embed widescreen frame continental west-medium">
				<iframe width="560" height="315" data-src="https://www.youtube.com/embed/zsN5-ZP01l4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="lozad" data-index="1"></iframe>
			</section>
			<section class="continental east-medium">
					<h3>Snowledge Seventeen Twenty Seventeen</h3>
					<p>Each year we take all the footage from the Snowledge ambassadors and mash it all together, I tried to focus on being a team with this edit, lots of high fives and crew riding together to bring to life the team atmosphere of a startup app that also have true mountain roots.</p>
			</section>
		</div>

		<hr class="mega-hr">

		<div class="specific-grid">
			<section class="responsive-embed widescreen frame continental east-medium">
				<iframe width="560" height="315" data-src="https://www.youtube.com/embed/fN1l8Ga2pzg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="lozad" data-index="1"></iframe>
			</section>
			<section class="continental west-medium gr-1-m">
				<h3>Devan Peeters Northstar Line</h3>
				<p>For a number of years I was in awe of <a href="https://www.youtube.com/watch?v=6GZubw9JE_k" target="_blank">Tom Day's follow cam line of Torstien Horgmo</a>, I caught up with Devan Peeters, an old friend and we took a few laps. Devan is a super under rated rider with a crazy bag of tricks this defintley took me a few rewatches to even understand what was going on with some of them and having the consistency to be able to do tricks this close together back to back to back, this line also took less tries than you would think even when we kept going back this was just the one that stuck.</p>
			</section>
		</div>

	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
