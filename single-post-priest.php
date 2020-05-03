<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<hr class="mega-hr">

		<div class="specific-grid">
			<!-- <h3 class="subtitle">Website</h3> -->
			<h3>Website</h3>

			<div class="specific-grid__main-width">
				<p>I have been working with Priest to develop the website for the past few years, slowly up the site and continuing to do so.</p>

				<p>Written in PHP with a wordpress CMS and a foundation framework allowing for a responive design adapting from phones to desktop screens.</p>
					<div class="single-code">
						<pre><code>font-size: 2em;

@include breakpoint(medium) {
	font-size: 1.8em;
}

@include breakpoint(large) {
	font-size: 1.5em;
}</code></pre>
				</div><!-- .single-code -->
			</div><!-- .specific-grid__main-width -->

			<div class="specific-grid__main-width specific-overlaying__image-grid">

				<div class="overlaying-image"><!-- stay gold --></div>

				<picture class="specific-full-picture lozad-picture">
					<source srcset="https://rileybathurst.com/wp-content/uploads/2020/05/priest-iphone_mockup-1080x1620.jpg" media="(min-width: 1080px)" alt="priest site on an iphone" />
					<source srcset="https://rileybathurst.com/wp-content/uploads/2020/05/priest-iphone_mockup-1080x1620.webp" media="(min-width: 1080px)" type="image/webp" alt="priest site on an iphone" />
					<source srcset="https://rileybathurst.com/wp-content/uploads/2020/05/priest-iphone_mockup-960x1440.jpg" media="(min-width: 960px)" alt="priest site on an iphone" />
					<source srcset="https://rileybathurst.com/wp-content/uploads/2020/05/priest-iphone_mockup-960x1440.webp" media="(min-width: 960px)" type="image/webp" alt="priest site on an iphone" />
					<source srcset="https://rileybathurst.com/wp-content/uploads/2020/05/priest-iphone_mockup-720x1080.jpg" media="(min-width: 720px)" alt="priest site on an iphone" />
					<source srcset="https://rileybathurst.com/wp-content/uploads/2020/05/priest-iphone_mockup-720x1080.webp" media="(min-width: 720px)" type="image/webp" alt="priest site on an iphone" />
					<source srcset="https://rileybathurst.com/wp-content/uploads/2020/05/priest-iphone_mockup-640x960.jpg" media="(min-width: 640px)" alt="priest site on an iphone" />
					<source srcset="https://rileybathurst.com/wp-content/uploads/2020/05/priest-iphone_mockup-640x960.webp" media="(min-width: 640px)" type="image/webp" alt="priest site on an iphone" />
					<source srcset="https://rileybathurst.com/wp-content/uploads/2020/05/priest-iphone_mockup-360x540.jpg" alt="priest site on an iphone" />
					<source srcset="https://rileybathurst.com/wp-content/uploads/2020/05/priest-iphone_mockup-360x540.webp" type="image/webp" alt="priest site on an iphone" /><!-- double img -->
					<!-- <img src="https://rileybathurst.com/wp-content/uploads/2020/05/priest-iphone_mockup-1080x1620-1.jpg" alt="priest site on an iphone" />double img -->
				</picture>
				<h4 class="caption">Priest sheetmetal site on an iphone.</h4>
			</div><!-- .specific-grid__main-width specific-overlaying__image-grid -->

			<p class="subtitle show-for-medium" style="grid-row: 3; align-self: end;">Priest &#187; Website</p>
			<p class="subtitle show-for-medium" style="grid-row: 2; grid-column: 5; justify-self: center;">Development.</p>

		</div><!-- .specific-grid -->

		<hr class="mega-hr specific-grid__main-width" />

		<div class="specific-grid">
			<h3 class="specific-grid__main-width">Photography</h3>
			<p class="specific-grid__main-width">This set of photos is for a website header banner, the images were a specifically wide ratio and showcase the reality of a sheetmetal factory to show authenticity and convey trust that the workshop has multiple machines and they are ready to handle all your needs.</p>

			<picture class="lozad-picture specific-grid__main-width">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0130.jpg" media="(min-width: 40em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0130-small.jpg">
				<!-- <img src=" php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0130-small.jpg" alt="sheetmetal worker on the press"> -->
			</picture>

			<picture class="lozad-picture specific-grid__col-2">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0125.jpg" media="(min-width: 40em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0125-small.jpg">
				<!-- <img src=" php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0125-small.jpg" alt="sheetmetal factory with workers"> -->
			</picture>

			<picture class="lozad-picture specific-grid__col-3">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0147.jpg" media="(min-width: 40em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0147-small.jpg">
				<!-- <img src=" php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0147-small.jpg" alt="welder working in a factory"> -->
			</picture>

			<picture class="lozad-picture specific-grid__col-4">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0080.jpg" media="(min-width: 40em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0080-small.jpg">
				<!-- <img src=" php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0080-small.jpg" alt="sheetmetal workshop"> -->
			</picture>

			<p class="subtitle show-for-medium" style="grid-row: 1/5; align-self: end;">Priest &#187; Photography</p>
			<p class="subtitle show-for-medium" style="grid-row: 2; grid-column: 5; justify-self: center;">Images.</p>
		</div>

		<hr class="mega-hr specific-grid__main-width" />

		<div class="specific-grid">
			<h3 class="specific-grid__main-width">Business Cards</h3>
			<p class="specific-grid__main-width">As we have gone througha few versions of business cards for Priest we have landed on a modernist front with a bold logo and a large amount of the bright blue primary color and then an information dense back to give potential customers a list of services available as Priest have a large number copared to many of their compeitors as well as a number of contact points for the front desk as well as the employee on the card.</p>
			<picture class="lozad-picture specific-grid__main-width">
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
			<div class="specific-grid__main-width" style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/396200984?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
			<p class="subtitle show-for-medium" style="grid-row: 1/3; align-self: end;">Priest &#187; Video</p>
			<p class="subtitle show-for-medium" style="grid-row: 2; grid-column: 5; justify-self: center;">Moving images.</p>
		</div>

	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
