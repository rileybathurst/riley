<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">

		<div class="grid-x grid-padding-x">
			<div class="cell">
				<h3 class="box-title">Product Photography &amp; Design</h3>
			</div>
		</div>

		<div class="grid-x grid-padding-x">
			<div class="small-12 medium-3 cell">
				<p>
					<picture class="lozad-picture" data-iesrc="http://rileybathurst.com/wp-content/uploads/2018/05/site-landing-700.jpg">
						<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/site-landing-700.jpg" alt="yeboi designs coming soon">
						<noscript><img src="http://rileybathurst.com/wp-content/uploads/2018/05/site-landing-700.jpg" alt="yeboi designs coming soon"></noscript>
					</picture>
				</p>
				<h4>Coming Soon</h4>
			</div>

			<div class="small-12 medium-6 cell">
				<p>
					<picture class="lozad-picture" data-iesrc="http://rileybathurst.com/wp-content/uploads/2018/05/colours-700.jpg">
						<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/colours-700.jpg" alt="more colors of yeboi">
						<noscript><img src="http://rileybathurst.com/wp-content/uploads/2018/05/colours-700.jpg" alt="more colors of yeboi"></noscript>
					</picture>
				</p>
				<h4>More Colors</h4>
			</div>

			<div class="small-12 medium-3 cell">
				<p>
					<picture class="lozad-picture" data-iesrc="http://rileybathurst.com/wp-content/uploads/2018/05/yeboi-99-sale-7002.jpg">
						<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/yeboi-99-sale-7002.jpg" alt="yeboi sale designs">
						<noscript><img src="http://rileybathurst.com/wp-content/uploads/2018/05/yeboi-99-sale-7002.jpg" alt="yeboi sale designs"></noscript>
					</picture>
				</p>
				<h4>Sale</h4>
			</div>
		</div>

		<div class="grid-x grid-padding-x">
			<div class="small-12 medium-4 cell">
				<p>
					<picture class="lozad-picture" data-iesrc="http://rileybathurst.com/wp-content/uploads/2018/05/more-text.jpg">
						<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/more-text.jpg" alt="yeboi button ups">
						<noscript><img src="http://rileybathurst.com/wp-content/uploads/2018/05/more-text.jpg" alt="yeboi button ups"></noscript>
					</picture>
				</p>
				<h4>Button Ups</h4>
			</div>

			<div class="small-12 medium-4 cell">
				<p>
					<picture class="lozad-picture" data-iesrc="http://rileybathurst.com/wp-content/uploads/2018/05/Yeboi_Season2_327-700.jpg">
						<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/Yeboi_Season2_327-700.jpg" alt="yeboi close ups">
						<noscript><img src="http://rileybathurst.com/wp-content/uploads/2018/05/Yeboi_Season2_327-700.jpg" alt="yeboi close ups"></noscript>
					</picture>
				</p>
				<h4>Close Ups</h4>
			</div>

			<div class="small-12 medium-4 cell">
				<p>
					<picture class="lozad-picture" data-iesrc="http://rileybathurst.com/wp-content/uploads/2018/05/Yeboi_Season2_378-700.jpg">
						<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/Yeboi_Season2_378-700.jpg" alt="yeboi color blocking">
						<noscript><img src="http://rileybathurst.com/wp-content/uploads/2018/05/Yeboi_Season2_378-700.jpg" alt="yeboi color blocking"></noscript>
					</picture>
				</p>
				<h4>Color Blocking</h4>
			</div>
		</div>

		<div class="grid-x grid-padding-x">
			<div class="cell">
				<h4 class="box-title">Video</h4>
			</div>
		</div>

		<div class="grid-x grid-padding-x">
			<div class="cell">
				<article class="responsive-embed widescreen frame">
					<p>
						<iframe data-src="https://player.vimeo.com/video/27683356" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen class="lozad" data-index="1"></iframe>
					</p>
				</article>
				<h4>Yeboi Street Snowboarding Edit</h4>
			</div>
		</div>

	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
