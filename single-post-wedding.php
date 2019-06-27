<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<div class="specific-grid">

		<section class="continental west-medium">
			<a href="http://rileybathurst.com/jess_josho_wedding_2/">
				<img src="<?php echo content_url(); ?>/uploads/2019/06/jess_josho_wedding_2.jpg" alt="flower girl wedding photo">
			</a>
			<h4><a href="http://rileybathurst.com/jess_josho_wedding_2/">Flower Girl</a></h4>
		</section>

		<div class="east-medium"></div> <!-- white spacing -->

		<section class="continental east-medium">
			<a href="http://rileybathurst.com/jess_josho_wedding_2/">
				<img src="<?php echo content_url(); ?>/uploads/2019/06/Sophie_Jo__0345.jpg" alt="Wedding party">
			</a>
			<h4><a href="http://rileybathurst.com/jess_josho_wedding_2/">Wedding Party</a></h4>
		</section>

		<section class="continental west-medium mw-18em">
			<a href="http://rileybathurst.com/Sophie_Jo__0362/">
				<img src="<?php echo content_url(); ?>/uploads/2019/06/Sophie_Jo__0362.jpg" alt="Bridesmaid wedding photo">
			</a>
			<h4><a href="http://rileybathurst.com/Sophie_Jo__0362/">Brides maid</a></h4>
		</section>

		<div class="east-medium"></div> <!-- white spacing -->

		<section class="continental east-medium mw-18em">
			<a href="http://rileybathurst.com/moonshine-band-photo-2/">
				<img src="<?php echo content_url(); ?>/uploads/2019/06/moonshine-band-photo-2.jpg" alt="flower girl wedding photo">
			</a>
			<h4><a href="http://rileybathurst.com/moonshine-band-photo-2/">Wedding Band</a></h4>
		</section>

		<section class="continental west-medium">
			<a href="http://rileybathurst.com/Joanna_John_Engagement_Chimney20190605_0019-1080x721/">
				<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2019/06/Joanna_John_Engagement_Chimney20190605_0019-1080x721.jpg">
					<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Joanna_John_Engagement_Chimney20190605_0019-1080x721.webp" alt="engagement photo" media="(min-width: 960px)" type="image/webp">
					<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Joanna_John_Engagement_Chimney20190605_0019-1080x721.jpg" alt="engagement photo" media="(min-width: 960px)">
					<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Joanna_John_Engagement_Chimney20190605_0019-960x640.webp" alt="engagement photo" media="(min-width: 720px)" type="image/webp">
					<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Joanna_John_Engagement_Chimney20190605_0019-960x640.jpg" alt="engagement photo" media="(min-width: 720px)">
					<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Joanna_John_Engagement_Chimney20190605_0019-720x480.webp" alt="engagement photo" media="(min-width: 640px)" type="image/webp">
					<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Joanna_John_Engagement_Chimney20190605_0019-720x480.jpg" alt="engagement photo" media="(min-width: 640px)">
					<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Joanna_John_Engagement_Chimney20190605_0019-640x427.webp" alt="engagement photo" media="(min-width: 360px)" type="image/webp">
					<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Joanna_John_Engagement_Chimney20190605_0019-640x427.jpg" alt="engagement photo" media="(min-width: 360px)">
					<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Joanna_John_Engagement_Chimney20190605_0019-360x240.webp" alt="engagement photo" type="image/webp">
					<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Joanna_John_Engagement_Chimney20190605_0019-360x240.jpg" alt="engagement photo">
					<noscript><img src="<?php echo content_url(); ?>/uploads/2019/06/Joanna_John_Engagement_Chimney20190605_0019-360x240.jpg" alt="engagement photo"></noscript>
				</picture>
			</a>
			<h4 class="caption">Engagement</h4>
		</section>

		</div>
	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
