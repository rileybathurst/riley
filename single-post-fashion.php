<!--
	picture elements look broken on purpose 
	https://apoorv.pro/lozad.js/#example-with-picture-tag
-->

<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>pp_personal_outfit_nov_26__0036/">
			<picture class="lozad-picture">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/PP_Personal_Outfit_Nov_26__0036-large.jpg" media="(min-width: 64em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/PP_Personal_Outfit_Nov_26__0036-medium.jpg" media="(min-width: 40em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/PP_Personal_Outfit_Nov_26__0036-small.jpg" alt="Pinky Pineapple">
			</picture>
		</a>
		<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>pp_personal_outfit_nov_26__0036/">Pinky Pineapple</a></h4>
			
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>pp_personal_outfit_nov_26__0188-3/">
			<picture class="lozad-picture">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/PP_Personal_Outfit_Nov_26__0188-large.jpg" media="(min-width: 64em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/PP_Personal_Outfit_Nov_26__0188-medium.jpg" media="(min-width: 40em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/PP_Personal_Outfit_Nov_26__0188-small.jpg" alt="Pinky Pineapple">
			</picture>
		</a>
		<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>pp_personal_outfit_nov_26__0188-3/">Pinky Pineapple</a></h4>
		
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>pp_personal_outfit_nov_26__0395/">
			<picture class="lozad-picture">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/PP_Personal_Outfit_Nov_26__0395-large.jpg" media="(min-width: 64em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/PP_Personal_Outfit_Nov_26__0395-medium.jpg" media="(min-width: 40em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/PP_Personal_Outfit_Nov_26__0395-small.jpg" alt="Pinky Pineapple">
			</picture>
		</a>
		<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>pp_personal_outfit_nov_26__0395/">Pinky Pineapple</a></h4>
			
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>sophie_jo__0460/">
			<picture class="lozad-picture">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Sophie_Jo__0460-large.jpg" media="(min-width: 64em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Sophie_Jo__0460-medium.jpg" media="(min-width: 40em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Sophie_Jo__0460-small.jpg" alt="sophie jo makeup fashion photo">
			</picture>
		</a>
		<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>sophie_jo__0460/">Sophie Jo</a></h4>
			
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>sophie_jo__0538/">
			<picture class="lozad-picture">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Sophie_Jo__0538-large.jpg" media="(min-width: 64em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Sophie_Jo__0538-medium.jpg" media="(min-width: 40em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Sophie_Jo__0538-small.jpg" alt="sophie jo">
			</picture>
		</a>
		<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>sophie_jo__0538/">Sophie Jo</a></h4>
		
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>2015/02/katerina/katerina_41-large/">
			<picture class="lozad-picture">
				<source srcset="<?php echo content_url(); ?>/uploads/2015/02/Katerina_41-large.jpg" media="(min-width: 64em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2015/02/Katerina_41-medium.jpg" media="(min-width: 40em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2015/02/Katerina_41-small.jpg" alt="Katerina dress fashion image">
			</picture>
		</a>
		<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>2015/02/katerina/katerina_41-large/">Katerina</a></h4>
			
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>2013/02/madi-2/madi_298-2/">
			<img src="<?php echo content_url(); ?>/uploads/2013/02/Madi_298.jpg" alt="Madi">
		</a>
		<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>2013/02/madi-2/madi_298-2/">Madi</a></h4>
	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
