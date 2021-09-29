<!--
	picture elements look broken on purpose 
	https://apoorv.pro/lozad.js/#example-with-picture-tag
-->

<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<div class="specific-grid">

		<section class="continental continental-2">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>_dsc1145-2/">
				<img src="<?php echo content_url(); ?>/uploads/2021/09/DSC1145-scaled.jpg" alt="first look wedding photo">
			</a>
			<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>_dsc1145-2/">First Look</a></h4>
		</section>

		<section class="continental continental-3">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>_DSC2284/">
				<img src="<?php echo content_url(); ?>/uploads/2021/09/DSC2284-scaled.jpg" alt="together wedding photo">
			</a>
			<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>_DSC2284/">Together</a></h4>
	</section>
		<section class="continental continental-4">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>_DSC2271/">
				<img src="<?php echo content_url(); ?>/uploads/2021/09/DSC2271-scaled.jpg" alt="outlook wedding photo">
			</a>
			<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>_DSC2271/">Outlook</a></h4>
		</section>
</div>

<div class="specific-grid">
		<section class="continental continental-2">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>dsc0142-3840/">
				<img src="<?php echo content_url(); ?>/uploads/2021/09/DSC0209-3840-scaled.jpg" alt="shoulder wedding photo">
			</a>
			<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>dsc0142-3840/">Over the shoulder</a></h4>
</section>
<section class="continental continental-3">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>dsc0142-3840/">
				<img src="<?php echo content_url(); ?>/uploads/2021/09/DSC0142-3840-scaled.jpg" alt="step wedding photo">
			</a>
			<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>dsc0142-3840/">Step</a></h4>
		</section>
<section class="continental continental-4">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>dsc0111-3840/">
				<img src="<?php echo content_url(); ?>/uploads/2021/09/DSC0111-3840-scaled.jpg" alt="away wedding photo">
			</a>
			<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>dsc0111-3840/">Away</a></h4>
		</section>
</div>





<div class="specific-grid">
		<section class="continental ">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>2013/02/wedding/weddingbeach9401/">
				<img src="<?php echo content_url(); ?>/uploads/2013/02/weddingbeach9401-1.jpg" alt="flower girl wedding photo">
			</a>
			<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>2013/02/wedding/weddingbeach9401/">Beach Wedding</a></h4>
		</section>
		
		<section class="continental ">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>jess_josho_wedding_2/">
				<img src="<?php echo content_url(); ?>/uploads/2019/06/jess_josho_wedding_2.jpg" alt="flower girl wedding photo">
			</a>
			<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>jess_josho_wedding_2/">Flower Girl</a></h4>
		</section>

		<section class="continental ">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>sophie_jo__0345/">
				<img src="<?php echo content_url(); ?>/uploads/2019/06/Sophie_Jo__0345.jpg" alt="Wedding party">
			</a>
			<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>sophie_jo__0345/">Wedding Party</a></h4>
		</section>

		<section class="continental  ">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>Sophie_Jo__0362/">
				<img src="<?php echo content_url(); ?>/uploads/2019/06/Sophie_Jo__0362.jpg" alt="Bridesmaid wedding photo">
			</a>
			<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>Sophie_Jo__0362/">Brides maid</a></h4>
		</section>

		<section class="continental  ">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>processed-with-vsco-with-a6-preset-3/">
				<img src="<?php echo content_url(); ?>/uploads/2019/06/moonshine-band-photo-2.jpg" alt="flower girl wedding photo">
			</a>
			<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>processed-with-vsco-with-a6-preset-3/">Wedding Band</a></h4>
		</section>

		<section class="continental ">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>Joanna_John_Engagement_Chimney20190605_0019-1080x721/">
				<picture class="lozad-picture">
					<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Joanna_John_Engagement_Chimney20190605_0019-1080x721.webp" media="(min-width: 960px)" type="image/webp">
					<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Joanna_John_Engagement_Chimney20190605_0019-1080x721.jpg" media="(min-width: 960px)">
					<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Joanna_John_Engagement_Chimney20190605_0019-960x640.webp" media="(min-width: 720px)" type="image/webp">
					<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Joanna_John_Engagement_Chimney20190605_0019-960x640.jpg" media="(min-width: 720px)">
					<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Joanna_John_Engagement_Chimney20190605_0019-720x480.webp" media="(min-width: 640px)" type="image/webp">
					<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Joanna_John_Engagement_Chimney20190605_0019-720x480.jpg" media="(min-width: 640px)">
					<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Joanna_John_Engagement_Chimney20190605_0019-640x427.webp" media="(min-width: 360px)" type="image/webp">
					<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Joanna_John_Engagement_Chimney20190605_0019-640x427.jpg" media="(min-width: 360px)">
					<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Joanna_John_Engagement_Chimney20190605_0019-360x240.webp" type="image/webp">
					<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Joanna_John_Engagement_Chimney20190605_0019-360x240.jpg" alt="engagement photo">
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
