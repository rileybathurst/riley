<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<hr class="mega-hr">

		<div class="specific-grid">
			<!-- <h3>About Snowledge</h3> -->
			<blockquote cite="https://priestsheetmetal.co.nz/" class="continental">
				<p>Priest Sheetmetal & Plate Ltd is a family run business that has operated out of our 10 Barbour St address in Waltham, Christchurch for over 63 years. Let our experience guide you from design, manufacture, to assembly and installation of your fabrication project.</p>
				<footer>
					<cite class="hide-for-medium"><a href="https://priestsheetmetal.co.nz/">priestsheetmetal.co.nz/</a></cite> <!-- with a large font running an abreviation where this is shorter on small screens? -->
					<cite class="show-for-medium"><a href="https://priestsheetmetal.co.nz/">https://priestsheetmetal.co.nz/</a></cite>
				</footer>
			</blockquote>
		</div>

		<hr class="mega-hr">

		<div class="specific-grid">
			<!-- <h3 class="subtitle">Website</h3> -->
			<h3>Website</h3>

			<div class="specific-grid__main-width">
				<p>I have been working with Priest to develop the website for the past few years, slowly up the site and continuing to do so.</p>

				<p>Written in JS with a <a href="https://strapi.io/" target="_blank" rel="noopener">strapi CMS</a> and a <a href="https://www.gatsbyjs.org/" target="_blank" rel="noopener">Gatsby</a> static site build allowing for a responive design adapting from phones to desktop screens.</p>
			</div><!-- .specific-grid__main-width -->

			<div class="specific-grid__main-width specific-overlaying__image-grid">

				<div class="overlaying-image"><!-- stay gold --></div>

				<picture class="specific-full-picture lozad-picture" data-index="1" data-alt="priest site on an iphone">
				<source srcset="https://rileybathurst.com/wp-content/uploads/2020/05/priest-iphone_mockup-1080x1620.jpg" media="(min-width: 1080px)" />
					<source srcset="https://rileybathurst.com/wp-content/uploads/2020/05/priest-iphone_mockup-1080x1620.webp" media="(min-width: 1080px)" type="image/webp" />
					<source srcset="https://rileybathurst.com/wp-content/uploads/2020/05/priest-iphone_mockup-960x1440.jpg" media="(min-width: 960px)" />
					<source srcset="https://rileybathurst.com/wp-content/uploads/2020/05/priest-iphone_mockup-960x1440.webp" media="(min-width: 960px)" type="image/webp" />
					<source srcset="https://rileybathurst.com/wp-content/uploads/2020/05/priest-iphone_mockup-720x1080.jpg" media="(min-width: 720px)" />
					<source srcset="https://rileybathurst.com/wp-content/uploads/2020/05/priest-iphone_mockup-720x1080.webp" media="(min-width: 720px)" type="image/webp" />
					<source srcset="https://rileybathurst.com/wp-content/uploads/2020/05/priest-iphone_mockup-640x960.jpg" media="(min-width: 640px)" />
					<source srcset="https://rileybathurst.com/wp-content/uploads/2020/05/priest-iphone_mockup-640x960.webp" media="(min-width: 640px)" type="image/webp" />
					<source srcset="https://rileybathurst.com/wp-content/uploads/2020/05/priest-iphone_mockup-360x540.jpg" />
					<source srcset="https://rileybathurst.com/wp-content/uploads/2020/05/priest-iphone_mockup-360x540.webp" type="image/webp" /><!-- double img -->
					<!-- <img src="https://rileybathurst.com/wp-content/uploads/2020/05/priest-iphone_mockup-1080x1620-1.jpg" alt="priest site on an iphone" />double img -->
				</picture>
				<h4 class="caption">Priest sheetmetal site on an iphone.</h4>
			</div><!-- .specific-grid__main-width specific-overlaying__image-grid -->

			<p class="subtitle show-for-medium" style="grid-row: 3; align-self: end;">Priest &#187; Website</p>
			<p class="subtitle show-for-medium" style="grid-row: 2; grid-column: 5; justify-self: center;">Development.</p>

		</div><!-- .specific-grid -->

		<hr class="mega-hr specific-grid__main-width" />

		<div class="specific-grid">
			<h3 class="continental">Branding</h3>
			<p class="continental">The logo for Priest Sheetmetal was designed to show the strength and presence of metal with the slab serif typography beside a sheet press icon.</p>
			<img src="<?php echo content_url(); ?>/uploads/2018/04/priest-door-logo-mockup-large.jpg" alt="priest sheetmetal branding" class="continental" />
		</div>

		<hr class="mega-hr specific-grid__main-width" />

		<!-- Photography this needs to have the tryptych -->
		<div class="specific-grid">
			<h3 class="specific-grid__main-width">Photography</h3>
			<p class="specific-grid__main-width">This set of photos is for a website header banner, the images were a specifically wide ratio and showcase the reality of a sheetmetal factory to show authenticity and convey trust that the workshop has multiple machines and they are ready to handle all your needs.</p>
		</div>


			<div id="gallery">

				<section id="snap-scroll-container-coordinates">
					<div class="child" id="first">
						<!-- <h1>1</h1> -->
						<picture class="lozad-picture" data-index="9" data-alt="priest sheetmetal employee loading metal">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0130.jpg" media="(min-width: 40em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0130-small.jpg">
						</picture>
						<h4 class="tryptych-caption">Employee loading sheet metal</h4>
					</div>
					<div class="child" id="target">
						<!-- <h1>2</h1> -->
						<picture class="lozad-picture" data-index="10" data-alt="factory floor">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0125.jpg" media="(min-width: 40em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0125-small.jpg">
						</picture>
						<h4 class="tryptych-caption">Factory floor</h4><!-- this should be an actual caption? -->
					</div>
					<div class="child">
						<!-- <h1>3</h1> -->
						<picture class="lozad-picture" data-index="11" data-alt="welding">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0147.jpg" media="(min-width: 40em)">
							<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0147-small.jpg">
						</picture>
						<h4 class="tryptych-caption">Welding</h4>
					</div>
					
				</section>

				<!-- <div id="controls"> -->
				<button id="left" class="tryptych-button show-for-medium">&lsaquo;</button> <!-- these should probably be buttons -->
				<button id="right" class="tryptych-button show-for-medium">&rsaquo;</button>
				<!-- </div> -->

				</div> <!-- #gallery -->

				<hr class="mega-hr" />

				<div class="show-for-medium">
				<div id="thumbnails" class="specific-grid"> <!-- show for medium doesnt work here as its overwritten byt .specific-grid display flex -->
						<h3 class="continental">Click photos to expland</h3>
					<!-- <section class=""> -->
						<button class="continental-2">
							<!-- somehow Ive broken the picture tags so im ending up with either a broken tag or an additional img element -->
							<picture id="th1" class="lozad-picture" data-index="12"> <!--  -->
								<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0130.jpg" media="(min-width: 40em)">
								<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0130-small.jpg">
							</picture>
						</button>
						<button class="continental-3">
							<picture id="th2" class="lozad-picture" data-index="13">
								<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0125.jpg" media="(min-width: 40em)">
								<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0125-small.jpg">
							</picture>
						</button>
						<button class="continental-4">
							<picture id="th3" class="lozad-picture" data-index="14">
								<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0147.jpg" media="(min-width: 40em)">
								<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0147-small.jpg">	
							</picture>
						</button>
					<!-- </section> -->
				</div> <!-- #thumbnails -->

			<!-- there was a 4th photo and some vertical text I could add back in
				<picture class="lozad-picture specific-grid__col-4" data-index="5">
				<source srcset=" ?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0080.jpg" media="(min-width: 40em)">
				<source srcset=" ?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0080-small.jpg">
				!-- <img src=" php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0080-small.jpg" alt="sheetmetal workshop"> --
			</picture> -->

			<!-- <p class="subtitle show-for-medium" style="grid-row: 1/5; align-self: end;">Priest &#187; Photography</p>
			<p class="subtitle show-for-medium" style="grid-row: 2; grid-column: 5; justify-self: center;">Images.</p>
		</div> -->

		<hr class="mega-hr specific-grid__main-width" />

		<div class="specific-grid">
			<h3 class="specific-grid__main-width">Business Cards</h3>
			<p class="specific-grid__main-width">As we have gone througha few versions of business cards for Priest we have landed on a modernist front with a bold logo and a large amount of the bright blue primary color and then an information dense back to give potential customers a list of services available as Priest have a large number copared to many of their compeitors as well as a number of contact points for the front desk as well as the employee on the card.</p>
			<picture class="lozad-picture specific-grid__main-width" data-index="6">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest-Business-Card-Mockup-large.jpg" media="(min-width: 64em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest-Business-Card-Mockup-medium.jpg" media="(min-width: 40em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest-Business-Card-Mockup-small.jpg">
				<!-- <img src="<?php echo content_url(); ?>/uploads/2018/05/Priest-Business-Card-Mockup-small.jpg" alt="priest sheetmetal business cards"> -->
			</picture>

			<p class="subtitle show-for-medium" style="grid-row: 1/4; align-self: end;">Priest &#187; Design</p>
			<p class="subtitle show-for-medium" style="grid-row: 2; grid-column: 5; justify-self: center;">Graphic Design.</p>
		</div>

		<hr class="mega-hr specific-grid__main-width" />

		<div class="specific-grid">
			<h3 class="specific-grid__main-width">Video</h3>
			<!-- <p class="specific-grid__main-width">As we have gone througha few versions of business cards for Priest we have landed on a modernist front with a bold logo and a large amount of the bright blue primary color and then an information dense back to give potential customers a list of services available as Priest have a large number copared to many of their compeitors as well as a number of contact points for the front desk as well as the employee on the card.</p> -->
			<div class="specific-grid__main-width" style="padding:56.25% 0 0 0;position:relative;"><iframe data-src="https://player.vimeo.com/video/396200984?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen class="lozad" data-index="7"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
			<p class="subtitle show-for-medium" style="grid-row: 1/3; align-self: end;">Priest &#187; Video</p>
			<p class="subtitle show-for-medium" style="grid-row: 2; grid-column: 5; justify-self: center;">Moving images.</p>
		</div>

	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
