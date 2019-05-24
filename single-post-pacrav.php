<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<hr class="mega-hr">

		<div class="specific-grid">
			<h3 class="subtitle">Website</h3>

			<div class="continental west-medium gr-1-m mw-18em">
				<picture class="lozad-picture" data-iesrc="<?php echo content_url(); ?>/uploads/2018/05/pacrav-iphone-x-small.png">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/pacrav-iphone-x-medium.png" alt="pacrav virtual consultation form on a phone" media="(min-width: 40em)">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/pacrav-iphone-x-small.png" alt="pacrav virtual consultation form on a phone">
					<noscript><img src="<?php echo content_url(); ?>/uploads/2018/05/pacrav-iphone-x-small.png" alt="pacrav virtual consultation form on a phone"></noscript>
				</picture>

				<h4 class="caption">Pacrav Virtual Consultation</h4>
			</div>
			<p class="continental east-medium">The site with all its branding and ideas can be found at pacrav.com aside from the regular website needs of a business in this day and age but we have taken that further streamlining the consultation forms, since these have been setup Matt has found it has saved time for patients as well as employees. The site was built on a foundation framework with a wordpress Content Management System, with these together we we're able to create a site that was affordable but also preforms strongly in many environments, the site is fast and responsive across devices with modern and documented code for easy updates and additions.</p>
		</div>

		<hr class="mega-hr">

		<div class="specific-grid">
			<h3 class="subtitle">Branding</h3>
			<picture class="lozad-picture continental west-medium gr-1-m" data-iesrc="<?php echo content_url(); ?>/uploads/2018/05/pacrav-branding-small.jpg">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/pacrav-branding-large.jpg" alt="pacrav branding full logo and icon" media="(min-width: 64em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/pacrav-branding-medium.jpg" alt="pacrav branding full logo and icon" media="(min-width: 40em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/pacrav-branding-small.jpg" alt="pacrav branding full logo and icon">
				<noscript><img src="<?php echo content_url(); ?>/uploads/2018/05/pacrav-branding-small.jpg" alt="pacrav branding full logo and icon"></noscript>
			</picture>

			<p class="continental east-medium">Pacrav branding, shown in multiple ways, a full use in the Pacrav orange on white with a use of the icon alone as a negative with white on the Pacrav orange background.</p>
		</div>

		<hr class="mega-hr">

		<div class="specific-grid">
			<h3 class="subtitle">Business Cards</h3>
			<a href="http://rileybathurst.com/pacrav-business-card-mockup-medium/">
				<picture class="lozad-picture continental west-medium gr-1-m" data-iesrc="<?php echo content_url(); ?>/uploads/2018/05/pacrav-business-card-mockup-small.jpg">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/pacrav-business-card-mockup-medium.jpg" alt="pacrav business cards front and back" media="(min-width: 40em)">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/pacrav-business-card-mockup-small.jpg" alt="pacrav business cards front and back">
					<noscript><img src="<?php echo content_url(); ?>/uploads/2018/05/pacrav-business-card-mockup-small.jpg" alt="pacrav business cards front and back"></noscript>
				</picture>
			</a>
			<p class="continental east-medium">Pacrav business cards use a layering of the icon and the full logo. As a simple design we have gone with a one sided design, this also helps to scribble notes for potential patients on the back.</p>
		</div>
	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
