<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<div class="grid-x grid-padding-x">

			<div class="small-12 medium-6 cell">
				<p>
					<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_Clothing_V2_094-small.jpg">
						<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_Clothing_V2_094-large.jpg" alt="keep squaw true clothing shoot" media="(min-width: 64em)">
						<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_Clothing_V2_094-medium.jpg" alt="keep squaw true clothing shoot" media="(min-width: 40em)">
						<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_Clothing_V2_094-small.jpg" alt="keep squaw true clothing shoot">
						<noscript><img src="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_Clothing_V2_094-small.jpg" alt="keep squaw true clothing shoot"></noscript>
					</picture>
				</p>
			</div>

			<div class="small-12 medium-6 cell">
				<p>
					<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_Clothing_V2_135-small.jpg">
						<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_Clothing_V2_135-large.jpg" alt="keep squaw true clothing shoot" media="(min-width: 64em)">
						<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_Clothing_V2_135-medium.jpg" alt="keep squaw true clothing shoot" media="(min-width: 40em)">
						<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_Clothing_V2_135-small.jpg" alt="keep squaw true clothing shoot">
						<noscript><img src="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_Clothing_V2_135-small.jpg" alt="keep squaw true clothing shoot"></noscript>
					</picture>
				</p>
			</div>

			 <div class="small-12 medium-6 cell">
				<p>
					<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_apparel_0315-small.jpg">
						<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_apparel_0315-large.jpg" alt="keep squaw true clothing shoot" media="(min-width: 64em)">
						<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_apparel_0315-medium.jpg" alt="keep squaw true clothing shoot" media="(min-width: 40em)">
						<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_apparel_0315-small.jpg" alt="keep squaw true clothing shoot">
						<noscript><img src="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_apparel_0315-small.jpg" alt="keep squaw true clothing shoot"></noscript>
					</picture>
				</p>
			</div>

			<div class="small-12 medium-6 cell">
				<p>
					<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_apparel_0051-small.jpg">
						<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_apparel_0051-large-2.jpg" alt="keep squaw true clothing shoot" media="(min-width: 64em)">
						<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_apparel_0051-medium.jpg" alt="keep squaw true clothing shoot" media="(min-width: 40em)">
						<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_apparel_0051-small.jpg" alt="keep squaw true clothing shoot">
						<noscript><img src="<?php echo content_url(); ?>/uploads/2018/05/Keep_Squaw_True_apparel_0051-small.jpg" alt="keep squaw true clothing shoot"></noscript>
					</picture>
				</p>
			</div>


		</div>
	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
