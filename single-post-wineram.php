<!--
	this page useses responsive iframe I dont fully understand but are documented here
	https://css-tricks.com/responsive-iframes/
-->

<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<hr class="mega-hr">

		<div class="specific-grid">
			<h3>48 Hours in</h3>
			<p class="subtitle show-for-medium" style="grid-row: 2/4; align-self: end;">48 Hours in</p>
			<div class="continental responsive-embed widescreen frame" style="--aspect-ratio: 16/9;">
				<iframe width="560" height="315" data-src="https://www.youtube.com/embed/6pi2jarIerY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="lozad" data-index="1"></iframe>
			</div>
				<p class="continental">48 hours In is a series that follows Susan Kostrzewa around some of the great wine cities of the world and takes a flyby view of some of the hotest wine or not quite wine spots, I filmed the majority of the Miami and Seattle episodes and did post production supervision on the Miami, Seattle, and San Fransico episodes.</p>
			</div>

			<hr class="mega-hr">

			<div class="specific-grid">
				<h3>Lighting the Vines</h3>
				<p class="subtitle show-for-medium" style="grid-row: 2/4; align-self: end;">Lighting the Vines</p>
				<section class="continental responsive-embed widescreen frame" style="--aspect-ratio: 16/9;">
					<iframe data-src="https://player.vimeo.com/video/195047862?title=0&amp;byline=0&amp;portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" class="lozad" data-index="1"></iframe>
				</section>
				<p class="continental">Lighting of the vines is a unique christmas party to Hamel Family Wines, linking a piano to strings of lights along rows of vines to create a beautiful atmosphere as the sun goes down, I filmed the event for two years and edited the videos as well as social media length cuts.</p>
			</div>

			<hr class="mega-hr">

			<div class="specific-grid">
				<h3>Collopack Solutions</h3>
				<p class="subtitle show-for-medium" style="grid-row: 2/4; align-self: end;">Collopack Solutions</p>
				<section class="continental responsive-embed widescreen frame" style="--aspect-ratio: 16/9;">
					<iframe data-src="https://player.vimeo.com/video/223380489?title=0&amp;byline=0&amp;portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" class="lozad" data-index="1"></iframe>
				</section>
				<p class="continental">Collopack solutions is a wine industry manufacturer and the less glamorous side of wine, thousand of bottles spinning around a product facility, using time-lapse and slow motion to create an interesting set of visuals while still creating an informative video.</p>
			</div>

			<hr class="mega-hr">

			<div class="specific-grid">
				<h3>Davies - Brand Video</h3>
				<p class="subtitle show-for-medium" style="grid-row: 2/4; align-self: end;">Davies - Brand Video</p>
				<section class="continental responsive-embed widescreen frame" style="--aspect-ratio: 16/9;">
					<iframe data-src="https://player.vimeo.com/video/252739547?title=0&amp;byline=0&amp;portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" class="lozad" data-index="1"></iframe>
				</section>
				<p class="continental">The bread and butter of Winerams work while I was studio manager was brand videos, I've heard people in the industry say wine marketing hasn't changed since prohibition but we we're working to change that and telling their stories through visual and audio to create a full experience such as this one for Davies which I directed.</p>
			</div>
	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
