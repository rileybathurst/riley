<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">


		<h3 class="box-title">Product Photography &amp; Design</h3>
		<img src="<?php echo content_url(); ?>/uploads/2018/05/site-landing-700.jpg" alt="yeboi designs coming soon">
		<h4>Coming Soon</h4>
		
		<img src="<?php echo content_url(); ?>/uploads/2018/05/colours-700.jpg" alt="more colors of yeboi">
		<h4>More Colors</h4>
		
		<img src="<?php echo content_url(); ?>/uploads/2018/05/yeboi-99-sale-7002.jpg" alt="yeboi sale designs">
		<h4>Sale</h4>
		
		<img src="<?php echo content_url(); ?>/uploads/2018/05/more-text.jpg" alt="yeboi button ups">
		<h4>Button Ups</h4>

		<img src="<?php echo content_url(); ?>/uploads/2018/05/Yeboi_Season2_327-700.jpg" alt="yeboi close ups">
		<h4>Close Ups</h4>
		
		<img src="<?php echo content_url(); ?>/uploads/2018/05/Yeboi_Season2_378-700.jpg" alt="yeboi color blocking">
		<h4>Color Blocking</h4>
		
		<h4 class="box-title">Video</h4>
		
		<div style="--aspect-ratio: 16/9;">
			<iframe data-src="https://player.vimeo.com/video/27683356" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen class="lozad" data-index="1"></iframe>
		</div>
		<h4>Yeboi Street Snowboarding Edit</h4>
	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
