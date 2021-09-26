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

			<section class="continental">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>moonshine_ink_tahoe_winter_times_1812-20-1080x1358/">
					<picture class="lozad-picture">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Moonshine_Ink_Tahoe_Winter_Times_1812-20-1080x1358.webp" media="(min-width: 960px)" type="image/webp">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Moonshine_Ink_Tahoe_Winter_Times_1812-20-1080x1358.jpg" media="(min-width: 960px)">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Moonshine_Ink_Tahoe_Winter_Times_1812-20-960x1207.webp" media="(min-width: 720px)" type="image/webp">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Moonshine_Ink_Tahoe_Winter_Times_1812-20-960x1207.jpg" media="(min-width: 720px)">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Moonshine_Ink_Tahoe_Winter_Times_1812-20-720x905.webp" media="(min-width: 640px)" type="image/webp">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Moonshine_Ink_Tahoe_Winter_Times_1812-20-720x905.jpg" media="(min-width: 640px)">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Moonshine_Ink_Tahoe_Winter_Times_1812-20-640x804.webp" media="(min-width: 360px)" type="image/webp">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Moonshine_Ink_Tahoe_Winter_Times_1812-20-640x804.jpg" media="(min-width: 360px)">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Moonshine_Ink_Tahoe_Winter_Times_1812-20-360x452.webp" type="image/webp">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Moonshine_Ink_Tahoe_Winter_Times_1812-20-360x452.jpg" alt="skiing  photo">
					</picture>
				</a>
				<h4 class="caption"><a href="<?php echo esc_url( home_url( '/' ) ); ?>moonshine_ink_tahoe_winter_times_1812-20-1080x1358/">Lifestyle skiing</a></h4>
			</section>

			<section class="continental ">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>moonshine_ink_tahoe_winter_times_1812-39-1080x1358/">
					<picture class="lozad-picture">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Moonshine_Ink_Tahoe_Winter_Times_1812-39-1080x1358.webp" media="(min-width: 960px)" type="image/webp">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Moonshine_Ink_Tahoe_Winter_Times_1812-39-1080x1358.jpg" media="(min-width: 960px)">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Moonshine_Ink_Tahoe_Winter_Times_1812-39-960x1207.webp" media="(min-width: 720px)" type="image/webp">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Moonshine_Ink_Tahoe_Winter_Times_1812-39-960x1207.jpg" media="(min-width: 720px)">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Moonshine_Ink_Tahoe_Winter_Times_1812-39-720x905.webp" amedia="(min-width: 640px)" type="image/webp">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Moonshine_Ink_Tahoe_Winter_Times_1812-39-720x905.jpg" media="(min-width: 640px)">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Moonshine_Ink_Tahoe_Winter_Times_1812-39-640x804.webp" media="(min-width: 360px)" type="image/webp">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Moonshine_Ink_Tahoe_Winter_Times_1812-39-640x804.jpg" media="(min-width: 360px)">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Moonshine_Ink_Tahoe_Winter_Times_1812-39-360x452.webp" type="image/webp">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/06/Moonshine_Ink_Tahoe_Winter_Times_1812-39-360x452.jpg" alt="skiing  photo">
					</picture>
				</a>
				<h4 class="caption"><a href="<?php echo esc_url( home_url( '/' ) ); ?>moonshine_ink_tahoe_winter_times_1812-39-1080x1358/">skiing Action</a></h4>
			</section>

		</div>
			<hr class="mega-hr">
		<div class="specific-grid">
			<h3>Video</h3>
			<p class="subtitle" style="grid-row: 4; align-self: end;">Video</p>
			
			<section class="continental">
				<h3>KBong</h3>
				<p>Tiny Porch Concert.</p>
			</section>

			<section class="continental " style="--aspect-ratio: 16/9;">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/AR5Zh-I9nPI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;" allowfullscreen></iframe>
			</section>
		</div>

			<hr class="mega-hr">
			<div class="specific-grid">
			<section class="continental" style="--aspect-ratio: 16/9;">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/yUBJ-9XrOKo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</section>
			<section class="continental ">
				<h3>Marty O'Reilly</h3>
				<p>Tiny Porch Concert.</p>
			</section>

		</div>
	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
