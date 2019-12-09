<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<hr class="mega-hr">

		<div class="specific-grid">
			<h3 class="subtitle">Photography</h3>
≈
			<div class="continental">
				<p>I worked with Amanda on these images in conjunction with her new site.</p>
			</div>

			<picture class="lozad-picture continental west-large">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0005-3840x2560.webp" media="(min-width: 1080px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0005-3840x2560.jpg" media="(min-width: 1080px)">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0005-1080x720.webp" media="(min-width: 960px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0005-1080x720.jpg" media="(min-width: 960px)">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0005-960x640.webp" media="(min-width: 720px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0005-960x640.jpg" media="(min-width: 720px)">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0005-720x480.webp" media="(min-width: 640px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0005-720x480.jpg" media="(min-width: 640px)">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0005-640x426.webp" media="(min-width: 360px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0005-640x426.jpg" media="(min-width: 360px)">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0005-360x240.webp" media="(max-width: 360px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0005-360x240.jpg" media="(max-width: 360px)">
				<img src="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0005-360x240.jpg" alt="amanda reaching out to the universe">
			</picture>

			<div class="east-large"></div> <!-- white spacing -->

			<picture class="lozad-picture continental east-large">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0065-3840x2560.webp"media="(min-width: 1080px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0065-3840x2560.jpg" media="(min-width: 1080px)">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0065-1080x720.webp"media="(min-width: 960px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0065-1080x720.jpg" media="(min-width: 960px)">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0065-960x640.webp" media="(min-width: 720px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0065-960x640.jpg" media="(min-width: 720px)">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0065-720x480.webp" media="(min-width: 640px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0065-720x480.jpg" media="(min-width: 640px)">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0065-640x426.webp" media="(min-width: 360px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0065-640x426.jpg" media="(min-width: 360px)">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0065-360x240.webp" media="(max-width: 360px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0065-360x240.jpg" media="(max-width: 360px)">
				<img src="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0065-360x240.jpg" alt="contemplating life">
			</picture>

			<picture class="lozad-picture continental west-large">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0043-3840x2560.webp" alt="looking forward" media="(min-width: 1080px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0043-3840x2560.jpg" alt="looking forward"  media="(min-width: 1080px)">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0043-1080x720.webp" alt="looking forward" media="(min-width: 960px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0043-1080x720.jpg" alt="looking forward"  media="(min-width: 960px)">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0043-960x640.webp" alt="looking forward" media="(min-width: 720px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0043-960x640.jpg" alt="looking forward"  media="(min-width: 720px)">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0043-720x480.webp" alt="looking forward" media="(min-width: 640px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0043-720x480.jpg" alt="looking forward"  media="(min-width: 640px)">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0043-640x426.webp" alt="looking forward" media="(min-width: 360px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0043-640x426.jpg" alt="looking forward"  media="(min-width: 360px)">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0043-360x240.webp" alt="looking forward" media="(max-width: 360px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0043-360x240.jpg" alt="looking forward"  media="(max-width: 360px)">
				<img src="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0043-360x240.jpg" alt="looking forward">
			</picture>

			<div class="east-large"></div> <!-- white spacing -->

			<picture class="lozad-picture continental east-large">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0192-3840x2563.webp" media="(min-width: 1080px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0192-3840x2563.jpg" media="(min-width: 1080px)">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0192-1080x721.webp" media="(min-width: 960px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0192-1080x721.jpg" media="(min-width: 960px)">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0192-960x640.webp" media="(min-width: 720px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0192-960x640.jpg" media="(min-width: 720px)">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0192-720x480.webp" media="(min-width: 640px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0192-720x480.jpg" media="(min-width: 640px)">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0192-640x427.webp" media="(min-width: 360px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0192-640x427.jpg" media="(min-width: 360px)">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0192-360x240.webp" media="(max-width: 360px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0192-360x240.jpg" media="(max-width: 360px)">
				<img src="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0192-360x240.jpg" alt="climbing up">
			</picture>

			<picture class="lozad-picture continental west-large">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0214-3840x2560.webp" media="(min-width: 1080px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0214-3840x2560.jpg"  media="(min-width: 1080px)">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0214-1080x720.webp" media="(min-width: 960px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0214-1080x720.jpg"  media="(min-width: 960px)">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0214-960x640.webp" media="(min-width: 720px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0214-960x640.jpg"  media="(min-width: 720px)">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0214-720x480.webp" media="(min-width: 640px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0214-720x480.jpg"  media="(min-width: 640px)">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0214-640x426.webp" media="(min-width: 360px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0214-640x426.jpg"  media="(min-width: 360px)">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0214-360x240.webp" media="(max-width: 360px)" type="image/webp">
				<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0214-360x240.jpg"  media="(max-width: 360px)">
				<img src="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-Authentic-alignment-wellness-Amanda_Lifestyles_0214-360x240.jpg" alt="reflecting">
			</picture>
		</div>

	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
