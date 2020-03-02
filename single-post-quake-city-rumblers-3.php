<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<h3 class="box-title">Photography</h3>

		<a href="http://rileybathurst.com/qcrxtankmoto_0080-large/">
			<picture class="lozad-picture">
				<source srcset="<?php echo content_url(); ?>/uploads/2014/12/QCRxTankMoto_0080-large.jpg" media="(min-width: 64em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2014/12/QCRxTankMoto_0080-medium.jpg" media="(min-width: 40em)">
				<img src="<?php echo content_url(); ?>/uploads/2014/12/QCRxTankMoto_0080-small.jpg" alt="qcr quake city rumblers mopeds">
			</picture>
		</a>

		<a href="http://rileybathurst.com/dirt-masters-2015/qcr_dirt_day_0069/">
			<img src="<?php echo content_url(); ?>/uploads/2015/09/QCR_Dirt_Day_0069.jpg" alt="qcr mopeds at dirt day">
		</a>
			
		<a href="http://rileybathurst.com/earnest-workshop-wednesdays/qcr_pigeon_bay-182/">
			<img src="<?php echo content_url(); ?>/uploads/2015/05/QCR_Pigeon_Bay-182.jpg" alt="quake city rumblers moped burn out">		</a>
			
		<a href="http://rileybathurst.com/run-photos/run_to_the_guns_0446-700/">
			<img src="<?php echo content_url(); ?>/uploads/2013/04/Run_to_the_Guns_0446-700.jpg" alt="quake city rumblers photo">
			
		</a>
			
		<h3 class="box-title">Design</h3>
			
		<a href="http://rileybathurst.com/dirt-day/dirtday2-blog/">
			<img src="<?php echo content_url(); ?>/uploads/2015/06/DirtDay2-blog.jpg" alt="moped gang poster">
			
		</a>
			
		<a href="http://rileybathurst.com/run-to-the-guns-2/run-to-the-guns-700-2/">
			<img src="<?php echo content_url(); ?>/uploads/2013/04/run-to-the-guns-7001.jpg" alt="qcr quake city rumblers mopeds poster">
			
		</a>
			
		<h3 class="box-title">Video</h3>
		<div style="--aspect-ratio: 16/9;">
			<iframe data-src="https://player.vimeo.com/video/97635117" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen class="lozad" data-index="1"></iframe>
		</div>

	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
