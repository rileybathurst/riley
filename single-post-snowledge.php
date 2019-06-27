<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post(); ?>

	<?php get_template_part( 'template-parts/post/specific-top' ); ?>

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

		<hr class="mega-hr">

		<div class="specific-grid">
			<h3 class="subtitle">Design</h3>
			<section class="continental west-medium mw-18em">
					<a href="http://rileybathurst.com/snowledge_sweepstakes_poster-1080x1485.jpg/">
						<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2019/05/snowledge_sweepstakes_poster-360x495.jpg">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/05/snowledge_sweepstakes_poster-1080x1485.webp" alt="snowledge sweepstakes poster design" media="(min-width: 960px)" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/05/snowledge_sweepstakes_poster-1080x1485.jpg" alt="snowledge sweepstakes poster design" media="(min-width: 960px)">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/05/snowledge_sweepstakes_poster-960x1320.webp" alt="snowledge sweepstakes poster design" media="(min-width: 720px)" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/05/snowledge_sweepstakes_poster-960x1320.jpg" alt="snowledge sweepstakes poster design" media="(min-width: 720px)">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/05/snowledge_sweepstakes_poster-720x960.webp" alt="snowledge sweepstakes poster design" media="(min-width: 640px)" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/05/snowledge_sweepstakes_poster-720x960.jpg" alt="snowledge sweepstakes poster design" media="(min-width: 640px)">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/05/snowledge_sweepstakes_poster-640x880.webp" alt="snowledge sweepstakes poster design" media="(min-width: 360px)" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/05/snowledge_sweepstakes_poster-640x880.jpg" alt="snowledge sweepstakes poster design" media="(min-width: 360px)">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/05/snowledge_sweepstakes_poster-360x495.webp" alt="snowledge sweepstakes poster design" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/05/snowledge_sweepstakes_poster-360x495.jpg" alt="snowledge sweepstakes poster design">
							<noscript><img src="<?php echo content_url(); ?>/uploads/2019/05/snowledge_sweepstakes_poster-360x495.jpg" alt="snowledge sweepstakes poster design"></noscript>
						</picture>
					</a>
				<h4 class="caption">Sweepstakes Poster</h4>
				<p>Working with Snowledge has been an oppourtunity to work on the design as well as the media for those late nights, down days and long summer months. I have worked on a couple of giveaway designs to be shown off across social media in a number of itterations, including this one sponsored by Revelstoke, 4Frnt and Trew.</p>
			</section>

			<section class="continental east-medium">
					<a href="http://rileybathurst.com/snowledge_download_card_Mockup-1457x971.jpg/">
						<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2019/05/snowledge_download_card_Mockup-360x240.jpg">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/05/snowledge_download_card_Mockup-1457x971.webp" alt="snowledge download card front and back" media="(min-width: 1080px)" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/05/snowledge_download_card_Mockup-1457x971.jpg" alt="snowledge download card front and back" media="(min-width: 1080px)">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/05/snowledge_download_card_Mockup-1080x719.webp" alt="snowledge download card front and back" media="(min-width: 960px)" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/05/snowledge_download_card_Mockup-1080x719.jpg" alt="snowledge download card front and back" media="(min-width: 960px)">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/05/snowledge_download_card_Mockup-960x639.webp" alt="snowledge download card front and back" media="(min-width: 720px)" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/05/snowledge_download_card_Mockup-960x639.jpg" alt="snowledge download card front and back" media="(min-width: 720px)">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/05/snowledge_download_card_Mockup-720x480.webp" alt="snowledge download card front and back" media="(min-width: 640px)" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/05/snowledge_download_card_Mockup-720x480.jpg" alt="snowledge download card front and back" media="(min-width: 640px)">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/05/snowledge_download_card_Mockup-640x426.webp" alt="snowledge download card front and back" media="(min-width: 360px)" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/05/snowledge_download_card_Mockup-640x426.jpg" alt="snowledge download card front and back" media="(min-width: 360px)">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/05/snowledge_download_card_Mockup-360x240.webp" alt="snowledge download card front and back" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/05/snowledge_download_card_Mockup-360x240.jpg" alt="snowledge download card front and back">
							<noscript><img src="<?php echo content_url(); ?>/uploads/2019/05/snowledge_download_card_Mockup-360x240.jpg" alt="snowledge download card front and back"></noscript>
						</picture>
					</a>
				<h4 class="caption">Download Card</h4>
				<p>Even app companies need physical presence so we have been working on pieces like these App Download cards, we have updated them a couple of times over the years including specific to mountains.</p>
			</section>
		</div>

		<hr class="mega-hr">

		<div class="specific-grid">
			<h3 class="subtitle">Development</h3>
			<section class="continental west-medium">
					<a href="http://rileybathurst.com/snowledge_dev_screenshot-1080x607/">
						<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2019/06/snowledge_dev_screenshot-1080x607.jpg">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/06/snowledge_dev_screenshot-1080x607.webp" alt="snowledge development screenshots" media="(min-width: 960px)" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/06/snowledge_dev_screenshot-1080x607.jpg" alt="snowledge development screenshots" media="(min-width: 960px)">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/06/snowledge_dev_screenshot-960x540.webp" alt="snowledge development screenshots" media="(min-width: 720px)" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/06/snowledge_dev_screenshot-960x540.jpg" alt="snowledge development screenshots" media="(min-width: 720px)">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/06/snowledge_dev_screenshot-720x405.webp" alt="snowledge development screenshots" media="(min-width: 640px)" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/06/snowledge_dev_screenshot-720x405.jpg" alt="snowledge development screenshots" media="(min-width: 640px)">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/06/snowledge_dev_screenshot-640x360.webp" alt="snowledge development screenshots" media="(min-width: 360px)" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/06/snowledge_dev_screenshot-640x360.jpg" alt="snowledge development screenshots" media="(min-width: 360px)">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/06/snowledge_dev_screenshot-360x202.webp" alt="snowledge development screenshots" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2019/06/snowledge_dev_screenshot-360x202.jpg" alt="snowledge development screenshots">
							<noscript><img src="<?php echo content_url(); ?>/uploads/2019/06/snowledge_dev_screenshot-360x202.jpg" alt="snowledge development screenshots"></noscript>
						</picture>
					</a>
				<h4 class="caption">Dev Screenshot</h4>
			</section>

			<section class="continental east-medium gr-1-m">
				<h3>Dev Screenshot</h3>
				<p>While working with Snowledge I have been taking the oppourtunity to work on some web development with a start up app, working on the Resort Mountain Profiles, built on <a href="https://pugjs.org/api/getting-started.html">Pug</a> (jade), serverside rendered through sourcetree to bitbucket.</p>
			</section>

		</div>

	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
