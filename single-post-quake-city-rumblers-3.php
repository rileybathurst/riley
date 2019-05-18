<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<div class="grid-x">
			<div class="cell">
				<h3 class="box-title">Photography</h3>
			</div>
		</div>

		<div class="grid-x grid-padding-x">
			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/qcrxtankmoto_0080-large/">
						<picture class="lozad-picture" data-iesrc="http://rileybathurst.com/wp-content/uploads/2014/12/QCRxTankMoto_0080-large.jpg">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2014/12/QCRxTankMoto_0080-large.jpg" alt="qcr quake city rumblers mopeds" media="(min-width: 64em)">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2014/12/QCRxTankMoto_0080-medium.jpg" alt="qcr quake city rumblers mopeds" media="(min-width: 40em)">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2014/12/QCRxTankMoto_0080-small.jpg" alt="qcr quake city rumblers mopeds">
							<noscript><img src="http://rileybathurst.com/wp-content/uploads/2014/12/QCRxTankMoto_0080-large.jpg" alt="qcr quake city rumblers mopeds"></noscript>
						</picture>
					</a>
				</p>
			</div>

			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/dirt-masters-2015/qcr_dirt_day_0069/">
						<picture class="lozad-picture" data-iesrc="http://rileybathurst.com/wp-content/uploads/2015/09/QCR_Dirt_Day_0069.jpg">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2015/09/QCR_Dirt_Day_0069.jpg" alt="qcr mopeds at dirt day">
							<noscript><img src="http://rileybathurst.com/wp-content/uploads/2015/09/QCR_Dirt_Day_0069.jpg" alt="qcr mopeds at dirt day"></noscript>
						</picture>
					</a>
				</p>
			</div>

			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/earnest-workshop-wednesdays/qcr_pigeon_bay-182/">
						<picture class="lozad-picture" data-iesrc="http://rileybathurst.com/wp-content/uploads/2015/05/QCR_Pigeon_Bay-182.jpg">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2015/05/QCR_Pigeon_Bay-182.jpg" alt="quake city rumblers moped burn out">
							<noscript><img src="http://rileybathurst.com/wp-content/uploads/2015/05/QCR_Pigeon_Bay-182.jpg" alt="quake city rumblers moped burn out"></noscript>
						</picture>
					</a>
				</p>
			</div>

			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/run-photos/run_to_the_guns_0446-700/">
						<picture class="lozad-picture" data-iesrc="http://rileybathurst.com/wp-content/uploads/2013/04/Run_to_the_Guns_0446-700.jpg">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2013/04/Run_to_the_Guns_0446-700.jpg" alt="quake city rumblers photo">
							<noscript><img src="http://rileybathurst.com/wp-content/uploads/2013/04/Run_to_the_Guns_0446-700.jpg" alt="quake city rumblers photo"></noscript>
						</picture>
					</a>
				</p>
			</div>
		</div>

		<div class="grid-x">
			<div class="cell">
				<h3 class="box-title">Design</h3>
			</div>
		</div>

		<div class="grid-x grid-padding-x">
			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/dirt-day/dirtday2-blog/">
						<picture class="lozad-picture" data-iesrc="http://rileybathurst.com/wp-content/uploads/2015/06/DirtDay2-blog.jpg">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2015/06/DirtDay2-blog.jpg" alt="moped gang poster">
							<noscript><img src="http://rileybathurst.com/wp-content/uploads/2015/06/DirtDay2-blog.jpg" alt="moped gang poster"></noscript>
						</picture>
					</a>
				</p>
			</div>

			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/run-to-the-guns-2/run-to-the-guns-700-2/">
						<picture class="lozad-picture" data-iesrc="http://rileybathurst.com/wp-content/uploads/2013/04/run-to-the-guns-7001.jpg">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2013/04/run-to-the-guns-7001.jpg" alt="qcr quake city rumblers mopeds poster">
							<noscript><img src="http://rileybathurst.com/wp-content/uploads/2013/04/run-to-the-guns-7001.jpg" alt="qcr quake city rumblers mopeds poster"></noscript>
						</picture>
					</a>
				</p>
			</div>
		</div>

		<div class="grid-x grid-padding-x">
			<div class="cell">
				<h3 class="box-title">Video</h3>
				<article class="responsive-embed frame">
					<p>
						<iframe data-src="https://player.vimeo.com/video/97635117" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen class="lozad" data-index="1"></iframe>
					</p>
				</article>
			</div>
		</div>
	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
