<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<hr class="mega-hr">

		<div class="specific-grid">
			<h3 class="subtitle">Website</h3>

			<div class="continental east-medium">
				<p>I have been working with Priest to develop the website for the past few years, slowly up the site and continuing to do so.</p>
			</div>

			<div class="continental west-medium gr-1-m mw-18em">
				<picture class="lozad-picture base" data-iesrc="<?php echo content_url(); ?>/uploads/2019/05/riley-bathurst-design-priest-website-iPhoneX-clay-360x736.png">
<!--
					<source srcset="php echo content_url(); ?>/uploads/2019/05/riley-bathurst-design-priest-website-iPhoneX-clay-1080x2210.webp" alt="priest sheetmetal website on an iphone x" type="image/webp" media="(min-width: 960px)">
					<source srcset="php echo content_url(); ?>/uploads/2019/05/riley-bathurst-design-priest-website-iPhoneX-clay-1080x2210.png" alt="priest sheetmetal website on an iphone x" media="(min-width: 960px)">
					<source srcset="php echo content_url(); ?>/uploads/2019/05/riley-bathurst-design-priest-website-iPhoneX-clay-960x1964.png" alt="priest sheetmetal website on an iphone x" media="(min-width: 720px)">
					<source srcset="php echo content_url(); ?>/uploads/2019/05/riley-bathurst-design-priest-website-iPhoneX-clay-960x1964.webp" alt="priest sheetmetal website on an iphone x" type="image/webp" media="(min-width: 720px)">
					<source srcset="php echo content_url(); ?>/uploads/2019/05/riley-bathurst-design-priest-website-iPhoneX-clay-720x1473.png" alt="priest sheetmetal website on an iphone x" media="(min-width: 640px)">
					<source srcset="php echo content_url(); ?>/uploads/2019/05/riley-bathurst-design-priest-website-iPhoneX-clay-720x1473.webp" alt="priest sheetmetal website on an iphone x" type="image/webp" media="(min-width: 640px)">
-->
					<source srcset="<?php echo content_url(); ?>/uploads/2019/05/riley-bathurst-design-priest-website-iPhoneX-clay-640x1309.png" alt="priest sheetmetal website on an iphone x" media="(min-width: 360px)">
					<source srcset="<?php echo content_url(); ?>/uploads/2019/05/riley-bathurst-design-priest-website-iPhoneX-clay-640x1309.webp" alt="priest sheetmetal website on an iphone x" type="image/webp" media="(min-width: 360px)">
					<source srcset="<?php echo content_url(); ?>/uploads/2019/05/riley-bathurst-design-priest-website-iPhoneX-clay-360x736.png" alt="priest sheetmetal website on an iphone x" media="(max-width: 360px)">
					<source srcset="<?php echo content_url(); ?>/uploads/2019/05/riley-bathurst-design-priest-website-iPhoneX-clay-360x736.webp" alt="priest sheetmetal website on an iphone x" type="image/webp" media="(max-width: 360px)">
					<noscript><img src="<?php echo content_url(); ?>/uploads/2019/05/riley-bathurst-design-priest-website-iPhoneX-clay-360x736.png"></noscript>
				</picture>

				<h4 class="caption">Priest sheetmetal site on an iphone.</h4>
			</div>
		</div>

		<hr class="mega-hr">

		<div class="specific-grid">
			<h3 class="subtitle">Photography</h3>
			<p class="continental">This set of photos is for a website header banner, the images were a specifically wide ratio and showcase the reality of a sheetmetal factory to show authenticity and convey trust that the workshop has multiple machines and they are ready to handle all your needs.</p>

			<picture class="lozad-picture continental west-large" data-iesrc="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0130-small.jpg">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0130.jpg" alt="sheetmetal worker on the press" media="(min-width: 40em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0130-small.jpg" alt="sheetmetal worker on the press">
				<noscript><img src="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0130-small.jpg" alt="sheetmetal worker on the press"></noscript>
			</picture>

			<div class="east-large"></div> <!-- white spacing -->

			<picture class="lozad-picture continental east-large" data-iesrc="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0125-small.jpg">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0125.jpg" alt="sheetmetal factory with workers" media="(min-width: 40em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0125-small.jpg" alt="sheetmetal factory with workers">
				<noscript><img src="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0125-small.jpg" alt="sheetmetal factory with workers"></noscript>
			</picture>

			<div class="east-large"></div> <!-- white spacing -->

			<picture class="lozad-picture continental west-large" data-iesrc="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0147-small.jpg">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0147.jpg" alt="welder working in a factory" media="(min-width: 40em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0147-small.jpg" alt="welder working in a factory">
				<noscript><img src="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0147-small.jpg" alt="welder working in a factory"></noscript>
			</picture>

			<div class="east-large"></div> <!-- white spacing -->

			<picture class="lozad-picture continental east-large" data-iesrc="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0080-small.jpg">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0080.jpg" alt="sheetmetal workshop" media="(min-width: 40em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0080-small.jpg" alt="sheetmetal workshop">
				<noscript><img src="<?php echo content_url(); ?>/uploads/2018/05/Priest_Sheet_Metal_0080-small.jpg" alt="sheetmetal workshop"></noscript>
			</picture>
		</div>

		<hr class="mega-hr">

		<div class="specific-grid">
			<picture class="lozad-picture continental west-medium gr-1-m" data-iesrc="<?php echo content_url(); ?>/uploads/2018/05/Priest-Business-Card-Mockup-small.jpg">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest-Business-Card-Mockup-large.jpg" alt="priest sheetmetal business cards" media="(min-width: 64em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest-Business-Card-Mockup-medium.jpg" alt="priest sheetmetal business cards" media="(min-width: 40em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/Priest-Business-Card-Mockup-small.jpg" alt="priest sheetmetal business cards">
				<noscript><img src="<?php echo content_url(); ?>/uploads/2018/05/Priest-Business-Card-Mockup-small.jpg" alt="priest sheetmetal business cards"></noscript>
			</picture>

			<h3 class="subtitle">Business Cards</h3>
			<p class="continental east-medium">As we have gone througha few versions of business cards for Priest we have landed on a modernist front with a bold logo and a large amount of the bright blue primary color and then an information dense back to give potential customers a list of services available as Priest have a large number copared to many of their compeitors as well as a number of contact points for the front desk as well as the employee on the card.</p>
		</div>

	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
