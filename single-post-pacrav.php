<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<div class="grid-x">
			<ul class="cell menu expanded aligncenter">
				<li><h3 class="box-title">Design</h3></li>
				<li><h3 class="box-title">Website</h3></li>
			</ul>
		</div>

		<div class="grid-x grid-padding-x">
			<div class="small-12 medium-8 cell">
				<?php the_content(); ?>
			</div>

			<div class="small-12 medium-4 cell">
				<h3 class="box-title hide-for-medium">Website</h3>

				<picture class="lozad-picture" data-iesrc="http://rileybathurst.com/wp-content/uploads/2018/05/pacrav-iphone-x-small.png">
					<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/pacrav-iphone-x-medium.png" alt="pacrav virtual consultation form on a phone" media="(min-width: 40em)">
					<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/pacrav-iphone-x-small.png" alt="pacrav virtual consultation form on a phone">
					<noscript><img src="http://rileybathurst.com/wp-content/uploads/2018/05/pacrav-iphone-x-small.png" alt="pacrav virtual consultation form on a phone"></noscript>
				</picture>

				<h4><a href="http://pacrav.com/consultation/" target="_blank">Pacrav Virtual Consultation</a></h4>
			</div>
		</div>

		<div class="grid-x grid-padding-x">
			<div class="small-12 medium-8 cell">
				<p>
					<picture class="lozad-picture" data-iesrc="http://rileybathurst.com/wp-content/uploads/2018/05/pacrav-branding-small.jpg">
						<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/pacrav-branding-large.jpg" alt="pacrav branding full logo and icon" media="(min-width: 64em)">
						<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/pacrav-branding-medium.jpg" alt="pacrav branding full logo and icon" media="(min-width: 40em)">
						<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/pacrav-branding-small.jpg" alt="pacrav branding full logo and icon">
						<noscript><img src="http://rileybathurst.com/wp-content/uploads/2018/05/pacrav-branding-small.jpg" alt="pacrav branding full logo and icon"></noscript>
					</picture>
				</p>
			</div>
			<div class="small-12 medium-4 cell">
				<h3 class="box-title">Branding</h3>
				<p>Pacrav branding, shown in multiple ways, a full use in the Pacrav orange on white with a use of the icon alone as a negative with white on the Pacrav orange background.</p>
			</div>
		</div>

		<div class="grid-x grid-padding-x">
			<div class="small-12 medium-8 cell">
				<p>
					<a href="http://rileybathurst.com/pacrav-business-card-mockup-medium/">
						<picture class="lozad-picture" data-iesrc="http://rileybathurst.com/wp-content/uploads/2018/05/pacrav-business-card-mockup-small.jpg">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/pacrav-business-card-mockup-medium.jpg" alt="pacrav business cards front and back" media="(min-width: 40em)">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/pacrav-business-card-mockup-small.jpg" alt="pacrav business cards front and back">
							<noscript><img src="http://rileybathurst.com/wp-content/uploads/2018/05/pacrav-business-card-mockup-small.jpg" alt="pacrav business cards front and back"></noscript>
						</picture>
					</a>
				</p>
			</div>
			<div class="small-12 medium-4 cell">
				<h3 class="box-title">Business Cards</h3>
				<p>Pacrav business cards use a layering of the icon and the full logo. As a simple design we have gone with a one sided design, this also helps to scribble notes for potential patients on the back.</p>
			</div>
		</div>
	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
