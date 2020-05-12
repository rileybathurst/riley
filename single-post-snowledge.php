<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<hr class="mega-hr">

		<div class="specific-grid">
			<!-- <h3>About Snowledge</h3> -->
			<blockquote cite="https://www.snowledge.co/" class="continental">
				<p>Snowledge is the only app you need on the mountain. Use GPS to get real-time info from resorts, track your day on the slopes, and easily find and locate your friends and family. Snowledge is Powder!</p>
				
				<footer>
					<cite class="hide-for-medium"><a href="https://www.snowledge.co/">snowledge.co</a></cite> <!-- with a large font running an abreviation where this is shorter on small screens? -->
					<cite class="show-for-medium"><a href="https://www.snowledge.co/">https://www.snowledge.co</a></cite>
				</footer>
			</blockquote>
		</div>

		<hr class="mega-hr">

		<div class="specific-grid">
			<h3>Photography</h3>
			<p class="continental">A key area of my role involves shooting photos in the mountain, capturing the lifestyle and action to build the brand image Snowledge is looking for. Shooting for Snowledge involves the use of many types of cameras, GoPro's and phones up to full frame sensors and drones in an effort to capture a range of styles.</p>
		</div>

		<!-- Lets add a tryptych -->
		<div id="gallery">

			<section id="snap-scroll-container-coordinates">
				<div class="child" id="first">
					<!-- <h1>1</h1> -->
					<picture class="lozad-picture">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard_drone-photo-garrett_cygan-tahoe_california-shot_for_snowledge-1080x720.webp" media="(min-width: 960px)" type="image/webp">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard_drone-photo-garrett_cygan-tahoe_california-shot_for_snowledge-1080x720.jpg" media="(min-width: 960px)">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard_drone-photo-garrett_cygan-tahoe_california-shot_for_snowledge-960x640.webp" media="(min-width: 720px)" type="image/webp">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard_drone-photo-garrett_cygan-tahoe_california-shot_for_snowledge-960x640.jpg" media="(min-width: 720px)">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard_drone-photo-garrett_cygan-tahoe_california-shot_for_snowledge-720x480.webp" media="(min-width: 640px)" type="image/webp">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard_drone-photo-garrett_cygan-tahoe_california-shot_for_snowledge-720x480.jpg" media="(min-width: 640px)">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard_drone-photo-garrett_cygan-tahoe_california-shot_for_snowledge-640x426.webp" media="(min-width: 360px)" type="image/webp">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard_drone-photo-garrett_cygan-tahoe_california-shot_for_snowledge-640x426.jpg" media="(min-width: 360px)">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard_drone-photo-garrett_cygan-tahoe_california-shot_for_snowledge-360x240.webp" type="image/webp">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard_drone-photo-garrett_cygan-tahoe_california-shot_for_snowledge-360x240.jpg">
						<!-- <img src=" ?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard_drone-photo-garrett_cygan-tahoe_california-shot_for_snowledge-1080x720.jpg" alt="drone photo of a snowboarder on a small patch of snow"> -->
					</picture>
					<h4 class="tryptych-caption">Garrett Cygan - Tahoe, California</h4>
				</div>
				<div class="child" id="target">
					<!-- <h1>2</h1> -->
					<picture class="lozad-picture">
						<source srcset="<?php echo content_url(); ?>/uploads/2018/04/IMG_0049-full.jpg" media="(min-width: 64em)">
						<source srcset="<?php echo content_url(); ?>/uploads/2018/04/IMG_0049-medium.jpg" media="(min-width: 40em)">
						<source srcset="<?php echo content_url(); ?>/uploads/2018/04/IMG_0049-small.jpg" alt="deep powder snow turn">
						<!-- <img src=" php echo content_url(); ?>/uploads/2018/04/IMG_0049-small.jpg" alt="deep powder snow turn"> -->
					</picture>
					<h4 class="tryptych-caption">Brandon Craddock - Tahoe Backcountry</h4><!-- this should be an actual caption? -->
				</div>
				<div class="child">
					<!-- <h1>3</h1> -->
					<picture class="lozad-picture">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-brian_stenerson-revelstoke_bc_canada-shot_for_snowledge-1080x720.webp" media="(min-width: 960px)" type="image/webp">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-brian_stenerson-revelstoke_bc_canada-shot_for_snowledge-1080x720.jpg" media="(min-width: 960px)">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-brian_stenerson-revelstoke_bc_canada-shot_for_snowledge-960x640.webp" media="(min-width: 720px)" type="image/webp">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-brian_stenerson-revelstoke_bc_canada-shot_for_snowledge-960x640.jpg" media="(min-width: 720px)">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-brian_stenerson-revelstoke_bc_canada-shot_for_snowledge-720x480.webp" media="(min-width: 640px)" type="image/webp">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-brian_stenerson-revelstoke_bc_canada-shot_for_snowledge-720x480.jpg" media="(min-width: 640px)">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-brian_stenerson-revelstoke_bc_canada-shot_for_snowledge-640x426.webp" media="(min-width: 360px)" type="image/webp">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-brian_stenerson-revelstoke_bc_canada-shot_for_snowledge-640x426.jpg" media="(min-width: 360px)">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-brian_stenerson-revelstoke_bc_canada-shot_for_snowledge-360x240.webp" type="image/webp">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-brian_stenerson-revelstoke_bc_canada-shot_for_snowledge-360x240.jpg">
						<!-- <img src=" ?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-brian_stenerson-revelstoke_bc_canada-shot_for_snowledge-1080x720.jpg" alt="drone photo of a snowboarder on a small patch of snow"> -->
					</picture>
					<h4 class="tryptych-caption">Brian Stenerson - Revelstoke, BC</h4>
				</div>
				
			</section>

			<!-- <div id="controls"> -->
				<div id="left" class="show-for-medium"><a href="#">&lsaquo;</a></div>
				<div id="right" class="show-for-medium"><a href="#">&rsaquo;</a></div>
			<!-- </div> -->

		</div> <!-- #gallery -->

		<hr class="mega-hr" />

		<div class="show-for-medium">
			<div id="thumbnails" class="specific-grid"> <!-- show for medium doesnt work here as its overwritten byt .specific-grid display flex -->
				<!-- <section class=""> -->
					<a href="#" class="continental-2">
						<!-- somehow Ive broken the picture tags so im ending up with either a broken tag or an additional img element -->
						<picture id="th1" class="lozad-picture"> <!--  -->
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard_drone-photo-garrett_cygan-tahoe_california-shot_for_snowledge-640x426.webp" media="(min-width: 360px)" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard_drone-photo-garrett_cygan-tahoe_california-shot_for_snowledge-640x426.jpg" media="(min-width: 360px)">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard_drone-photo-garrett_cygan-tahoe_california-shot_for_snowledge-360x240.webp" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard_drone-photo-garrett_cygan-tahoe_california-shot_for_snowledge-360x240.jpg">
							<!-- <img src=" ?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard_drone-photo-garrett_cygan-tahoe_california-shot_for_snowledge-360x240.jpg" /> -->
						</picture>
					</a>
					<a href="#" class="continental-3">
						<picture class="lozad-picture">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/04/IMG_0049-full.jpg" media="(min-width: 64em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/04/IMG_0049-medium.jpg" media="(min-width: 40em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/04/IMG_0049-small.jpg" alt="deep powder snow turn">
							<!-- <img src=" php echo content_url(); ?>/uploads/2018/04/IMG_0049-small.jpg" alt="deep powder snow turn"> -->
						</picture>
					</a>
					<a href="#" class="continental-4">
						<picture class="lozad-picture">
							
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-brian_stenerson-revelstoke_bc_canada-shot_for_snowledge-720x480.webp" media="(min-width: 640px)" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-brian_stenerson-revelstoke_bc_canada-shot_for_snowledge-720x480.jpg" media="(min-width: 640px)">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-brian_stenerson-revelstoke_bc_canada-shot_for_snowledge-640x426.webp" media="(min-width: 360px)" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-brian_stenerson-revelstoke_bc_canada-shot_for_snowledge-640x426.jpg" media="(min-width: 360px)">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-brian_stenerson-revelstoke_bc_canada-shot_for_snowledge-360x240.webp" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-brian_stenerson-revelstoke_bc_canada-shot_for_snowledge-360x240.jpg">
							<!-- <img src=" ?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-brian_stenerson-revelstoke_bc_canada-shot_for_snowledge-1080x720.jpg" alt="drone photo of a snowboarder on a small patch of snow"> -->
						</picture>
					</a>
				<!-- </section> -->
			</div> <!-- #thumbnails -->
			<hr class="mega-hr" />

		</div><!-- .show-for-medium -->


		<div class="specific-grid">
			<p class="subtitle show-for-medium" style="grid-row: 1; align-self: end;">Snowledge &#187; Photography</p>
			<p class="subtitle show-for-medium" style="grid-row: 1; grid-column: 5; justify-self: center;">A selection of images shot for Snowledge.</p>

			<div class="continental continental-gallery">
				<section class="continental-2">
						<a href="https://rileybathurst.com/riley_bathurst-snowboard-photo-chris_cloyd-tahoe_california-shot_for_snowledge-1080x1618/">
							<picture class="lozad-picture">
								<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-chris_cloyd-tahoe_california-shot_for_snowledge-1080x1618.webp" media="(min-width: 960px)" type="image/webp">
								<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-chris_cloyd-tahoe_california-shot_for_snowledge-1080x1618.jpg" media="(min-width: 960px)">
								<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-chris_cloyd-tahoe_california-shot_for_snowledge-960x1438.webp" media="(min-width: 720px)" type="image/webp">
								<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-chris_cloyd-tahoe_california-shot_for_snowledge-960x1438.jpg" media="(min-width: 720px)">
								<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-chris_cloyd-tahoe_california-shot_for_snowledge-720x1079.webp" media="(min-width: 640px)" type="image/webp">
								<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-chris_cloyd-tahoe_california-shot_for_snowledge-720x1079.jpg" media="(min-width: 640px)">
								<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-chris_cloyd-tahoe_california-shot_for_snowledge-640x959.webp" media="(min-width: 360px)" type="image/webp">
								<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-chris_cloyd-tahoe_california-shot_for_snowledge-640x959.jpg" media="(min-width: 360px)">
								<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-chris_cloyd-tahoe_california-shot_for_snowledge-360x539.webp" type="image/webp">
								<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-chris_cloyd-tahoe_california-shot_for_snowledge-360x539.jpg">
								<!-- <img src=" ?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboard-photo-chris_cloyd-tahoe_california-shot_for_snowledge-1080x1618.jpg" alt="drone photo of a snowboarder on a small patch of snow"> -->
							</picture>
						</a>
					<h4>Chris Cloyd - Stoke - Tahoe, CA</h4>
				</section>
				
				<section class="continental-3">
						<a href="https://rileybathurst.com/img_0126/">
							<picture class="lozad-picture">
								<source srcset="<?php echo content_url(); ?>/uploads/2018/05/IMG_0126.jpg" media="(min-width: 64em)">
								<source srcset="<?php echo content_url(); ?>/uploads/2018/05/IMG_0126.jpg" media="(min-width: 40em)">
								<source srcset="<?php echo content_url(); ?>/uploads/2018/05/IMG_0126.jpg" alt="skier air in the trees in canada">
								<!-- <img src=" php echo content_url(); ?>/uploads/2018/05/IMG_0126.jpg" alt="skier air in the trees in canada"> -->
							</picture>
						</a>
					<h4>Eric Lee O'Brien - Tree Chute - Revelstoke, BC</h4>
				</section>

				<!-- <div class="east-medium"></div>  white spacing -->

				<section class="continental-4">
					<a href="https://rileybathurst.com/img_3238-large/">
						<img src="<?php echo content_url(); ?>/uploads/2018/05/IMG_3238-large.jpg" alt="eric lee obrien skiing shot from the chair">
					</a>
					<h4>Eric Lee O'Brien - Birdseye Park - Squaw Valley Alpine Meadows</h4>
				</section>
			</div><!-- .continental -->
		</div><!-- specific-grid -->

		<hr class="mega-hr">

		<div id="profiles" class="specific-grid">
			<h3>Profiles</h3>
			<!-- these might be more interesting to be square -->
			<p class="subtitle show-for-medium" style="grid-row: 3; align-self: end;">Snowledge &#187; Profiles</p>
			<p class="continental">A selection of those involved.</p>
			<p class="subtitle show-for-medium" style="grid-row: 3; grid-column: 5; justify-self: center;">A selection of those involved.</p>

			<div class="continental continental-gallery">
				<section>
					<a href="https://rileybathurst.com/dsc01909-2/">
						<picture class="lozad-picture">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboarder_portrait-photo-garrett_cygan-tahoe_california-shot_for_snowledge-1080x721.webp" media="(min-width: 960px)" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboarder_portrait-photo-garrett_cygan-tahoe_california-shot_for_snowledge-1080x721.jpg" media="(min-width: 960px)">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboarder_portrait-photo-garrett_cygan-tahoe_california-shot_for_snowledge-960x640.webp" media="(min-width: 720px)" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboarder_portrait-photo-garrett_cygan-tahoe_california-shot_for_snowledge-960x640.jpg" media="(min-width: 720px)">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboarder_portrait-photo-garrett_cygan-tahoe_california-shot_for_snowledge-720x480.webp" media="(min-width: 640px)" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboarder_portrait-photo-garrett_cygan-tahoe_california-shot_for_snowledge-720x480.jpg" media="(min-width: 640px)">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboarder_portrait-photo-garrett_cygan-tahoe_california-shot_for_snowledge-640x427.webp" media="(min-width: 360px)" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboarder_portrait-photo-garrett_cygan-tahoe_california-shot_for_snowledge-640x427.jpg" media="(min-width: 360px)">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboarder_portrait-photo-garrett_cygan-tahoe_california-shot_for_snowledge-360x240.webp" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-snowboarder_portrait-photo-garrett_cygan-tahoe_california-shot_for_snowledge-360x240.jpg">
							<!-- <img src=" ?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-skier_portrait-photo-brandon_craddock-tahoe_california-shot_for_snowledge-360x240.jpg"> -->
						</picture>
					</a>
					<h4>Garrett Cygan</h4>
				</section>

				<!-- <div class="east-medium"></div> white spacing -->

				<section>
					<a href="https://rileybathurst.com/dsc07671-3/">
						<picture class="lozad-picture">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-skier_portrait-photo-kenzie_morris-yosemite_california-shot_for_snowledge-1080x721.webp" media="(min-width: 960px)" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-skier_portrait-photo-kenzie_morris-yosemite_california-shot_for_snowledge-1080x721.jpg" media="(min-width: 960px)">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-skier_portrait-photo-kenzie_morris-yosemite_california-shot_for_snowledge-960x640.webp" media="(min-width: 720px)" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-skier_portrait-photo-kenzie_morris-yosemite_california-shot_for_snowledge-960x640.jpg" media="(min-width: 720px)">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-skier_portrait-photo-kenzie_morris-yosemite_california-shot_for_snowledge-720x480.webp" media="(min-width: 640px)" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-skier_portrait-photo-kenzie_morris-yosemite_california-shot_for_snowledge-720x480.jpg" media="(min-width: 640px)">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-skier_portrait-photo-kenzie_morris-yosemite_california-shot_for_snowledge-640x427.webp" media="(min-width: 360px)" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-skier_portrait-photo-kenzie_morris-yosemite_california-shot_for_snowledge-640x427.jpg" media="(min-width: 360px)">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-skier_portrait-photo-kenzie_morris-yosemite_california-shot_for_snowledge-360x240.webp" type="image/webp">
							<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-skier_portrait-photo-kenzie_morris-yosemite_california-shot_for_snowledge-360x240.jpg">
							<!-- <img src=" ?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-skier_portrait-photo-brandon_craddock-tahoe_california-shot_for_snowledge-360x240.jpg"> -->
						</picture>
					</a>
					<h4>Kenzie Morris</h4>
				</section>

				<section class="continental-3">
						<a href="https://rileybathurst.com/img_0126/">
							<picture class="lozad-picture">
								<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-skier_portrait-photo-brandon_craddock-tahoe_california-shot_for_snowledge-1080x720.webp" media="(min-width: 960px)" type="image/webp">
								<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-skier_portrait-photo-brandon_craddock-tahoe_california-shot_for_snowledge-1080x720.jpg" media="(min-width: 960px)">
								<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-skier_portrait-photo-brandon_craddock-tahoe_california-shot_for_snowledge-960x640.webp" media="(min-width: 720px)" type="image/webp">
								<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-skier_portrait-photo-brandon_craddock-tahoe_california-shot_for_snowledge-960x640.jpg" media="(min-width: 720px)">
								<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-skier_portrait-photo-brandon_craddock-tahoe_california-shot_for_snowledge-720x480.webp" media="(min-width: 640px)" type="image/webp">
								<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-skier_portrait-photo-brandon_craddock-tahoe_california-shot_for_snowledge-720x480.jpg" media="(min-width: 640px)">
								<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-skier_portrait-photo-brandon_craddock-tahoe_california-shot_for_snowledge-640x426.webp" media="(min-width: 360px)" type="image/webp">
								<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-skier_portrait-photo-brandon_craddock-tahoe_california-shot_for_snowledge-640x426.jpg" media="(min-width: 360px)">
								<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-skier_portrait-photo-brandon_craddock-tahoe_california-shot_for_snowledge-360x240.webp" type="image/webp">
								<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-skier_portrait-photo-brandon_craddock-tahoe_california-shot_for_snowledge-360x240.jpg">
								<!-- <img src=" ?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-skier_portrait-photo-brandon_craddock-tahoe_california-shot_for_snowledge-1080x720.jpg" alt="drone photo of a snowboarder on a small patch of snow"> -->
							</picture>
						</a>
					<h4>Brandon Craddock</h4>
				</section>
			</div>
		</div>

		<hr class="mega-hr">

		<div id="videos" class="specific-grid">
			<h3>Video</h3>
			<p class="subtitle show-for-medium" style="grid-row: 3; align-self: end;">Snowledge &#187; Video</p>
			<p class="continental">Moving images.</p>
			<p class="subtitle show-for-medium" style="grid-row: 3; grid-column: 5; justify-self: center;">Moving images.</p>


			<div class="continental">
				<section class="responsive-embed widescreen frame continental east-medium" style="--aspect-ratio: 16/9;">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/O-WHcykonMg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</section>
			
				<h3>Passage - An Eaglecrest Experience</h3>
				<p>The Snowledge team set off on a journey to Juneau, Alaska to explore the big mountain terrain and world-class backcountry at Eaglecrest Ski Area. With 54 straight days of snowfall prior to our trip, the skies parted and our crew of skiers and snowboarders spent five days chasing fresh powder, big lines, and unreal ocean views.</p>
			
			</div>

			<!-- <hr class="mega-hr"> -->

			<div class="continental continental-2">
				<section class="responsive-embed widescreen frame continental east-medium" style="--aspect-ratio: 16/9;">
					<iframe width="560" height="315" data-src="https://www.youtube.com/embed/YaRpBbbJ6Ow" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="lozad" data-index="1"></iframe>
				</section>

				<h3>Hunt For The Powder People</h3>
			</div>

			<div class="continental continental-3">
				<section class="responsive-embed widescreen frame continental west-medium" style="--aspect-ratio: 16/9;">
					<iframe width="560" height="315" data-src="https://www.youtube.com/embed/zsN5-ZP01l4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="lozad" data-index="2"></iframe>
				</section>

				<h3>Snowledge Seventeen Twenty Seventeen</h3>
			</div>

			<div class="continental continental-4">
				<section class="responsive-embed widescreen frame continental east-medium"  style="--aspect-ratio: 16/9;">
					<iframe width="560" height="315" data-src="https://www.youtube.com/embed/fN1l8Ga2pzg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="lozad" data-index="3"></iframe>
				</section>
				
				<h3>Devan Peeters Northstar Line</h3>
			</div><!-- .continental -->
		</div><!-- .specific-grid -->

		<hr class="mega-hr">

		<div class="specific-grid">
			<h3>Design</h3>
			<p class="subtitle show-for-medium" style="grid-row: 3; align-self: end;">Snowledge &#187; Design</p>
			<p class="continental">Building on a visual brand.</p>
			<p class="subtitle show-for-medium" style="grid-row: 3; grid-column: 5; justify-self: center;">Building on a visual brand.</p>

			<section class="continental">
					<a href="https://rileybathurst.com/snowledge_sweepstakes_poster-1080x1485/">
						<picture class="lozad-picture" data-index="4">
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
							<!-- <img src=" php echo content_url(); ?>/uploads/2019/05/snowledge_sweepstakes_poster-360x495.jpg" alt="snowledge sweepstakes poster design"> -->
						</picture>
					</a>
				<h4>Sweepstakes Poster</h4>
				<p>Working with Snowledge has been an oppourtunity to work on the design as well as the media for those late nights, down days and long summer months. I have worked on a couple of giveaway designs to be shown off across social media in a number of itterations, including this one sponsored by Revelstoke, 4Frnt and Trew.</p>
			</section>

			<section class="continental continental-2">
					<a href="https://rileybathurst.com/snowledge_download_card_mockup-1457x971/">
						<picture class="lozad-picture" data-index="5">
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
							<!-- <img src=" php echo content_url(); ?>/uploads/2019/05/snowledge_download_card_Mockup-360x240.jpg" alt="snowledge download card front and back"> -->
						</picture>
					</a>
				<h4>Download Card</h4>
				<!-- <p>Even app companies need physical presence so we have been working on pieces like these App Download cards, we have updated them a couple of times over the years including specific to mountains.</p> -->
			</section>

			<section class="continental continental-3">
				<img class="lozad" data-index="6" data-src="<?php echo content_url(); ?>/uploads/2020/05/4frnt_snowledge_app_30_liquify-5-1080x720-1.jpg">
				<h4>4FRNT in app promotion</h4>
			</section>

			<section class="continental continental-4">
				<a href="https://rileybathurst.com/snowledge_download_card_mockup-1457x971/">
					<picture class="lozad-picture" data-index="7">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-design-trew_in_app_snowledge_promotion-1080x720.webp" alt="snowledge development screenshots" media="(min-width: 960px)" type="image/webp">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-design-trew_in_app_snowledge_promotion-1080x720.jpg" alt="snowledge development screenshots" media="(min-width: 960px)">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-design-trew_in_app_snowledge_promotion-960x640.webp" alt="snowledge development screenshots" media="(min-width: 720px)" type="image/webp">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-design-trew_in_app_snowledge_promotion-960x640.jpg" alt="snowledge development screenshots" media="(min-width: 720px)">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-design-trew_in_app_snowledge_promotion-720x480.webp" alt="snowledge development screenshots" media="(min-width: 640px)" type="image/webp">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-design-trew_in_app_snowledge_promotion-720x480.jpg" alt="snowledge development screenshots" media="(min-width: 640px)">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-design-trew_in_app_snowledge_promotion-640x426.webp" alt="snowledge development screenshots" media="(min-width: 360px)" type="image/webp">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-design-trew_in_app_snowledge_promotion-640x426.jpg" alt="snowledge development screenshots" media="(min-width: 360px)">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-design-trew_in_app_snowledge_promotion-360x240.webp" alt="snowledge development screenshots" type="image/webp">
						<source srcset="<?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-design-trew_in_app_snowledge_promotion-360x240.jpg" alt="snowledge development screenshots">
						<!-- <img src=" ?php echo content_url(); ?>/uploads/2020/05/riley_bathurst-design-trew_in_app_snowledge_promotion-360x240.jpg" alt="snowledge download card front and back"> -->
					</picture>
				</a>
				<h4>Trew in app promotion</h4>
			</section>
		</div>

		<hr class="mega-hr">

		<div class="specific-grid">
			<h3>Development</h3>
			<p class="subtitle show-for-medium" style="grid-row: 3; align-self: end;">Snowledge &#187; Development</p>
			<p class="continental">Zeros and Ones.</p>
			<p class="subtitle show-for-medium" style="grid-row: 3; grid-column: 5; justify-self: center;">Zeros and Ones.</p>

			<section class="continental">
				<a href="https://rileybathurst.com/snowledge_dev_screenshot-1080x607/">
					<picture class="lozad-picture" data-index="8">
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
						<!-- <img src=" php echo content_url(); ?>/uploads/2019/06/snowledge_dev_screenshot-360x202.jpg" alt="snowledge development screenshots"> -->
					</picture>
				</a>

				<p>While working with Snowledge I have been taking the oppourtunity to work on some web development with a start up app, working on the Resort Mountain Profiles, built on <a href="https://pugjs.org/api/getting-started.html">Pug</a> (jade), serverside rendered through sourcetree to bitbucket.</p>
			</section>

		</div>

		<hr class="mega-hr">

		<div class="specific-grid ">
			<h3 class="continental">Lead Digital Content Creator</h3>
			<p class="continental">Nov 2016 - Present <?php the_date(); ?></p>
		</div>

	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
