<!--
	picture elements look broken on purpose 
	https://apoorv.pro/lozad.js/#example-with-picture-tag
-->

<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<hr class="mega-hr">

		<div class="specific-grid">
			<h3 class="">Web</h3>

			<a href="https://rileybathurst.com/order-form/" class="specific-grid__main-width ">
				<picture class="lozad-picture">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/order-form.jpg" media="(min-width: 64em)">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/order-form-medium.jpg" media="(min-width: 40em)">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/order-form-small.jpg" alt="order page on the canterbury homekill website">
				</picture>
			</a>
			<section class="specific-grid__main-width ">
				<h4><a href="https://rileybathurst.com/order-form/">Order Page</a></h4>
				<p>The order page for Canterbury Homekill lets customers pick many options around how an animal is to be butchered. A select cut can either be chosen or not with a checkbox then dropdowns let them pick how the cut is handled if there are muliple ways that can be done.</p>
			</section>
		</div>

		<hr class="mega-hr">

		<div class="specific-grid">
			<a href="https://rileybathurst.com/confirmation-form-large/" class="specific-grid__main-width ">
				<picture class="lozad-picture">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/confirmation-form-large.jpg" media="(min-width: 64em)">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/confirmation-form-medium.jpg" media="(min-width: 40em)">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/confirmation-form-large.jpg" alt="confirmation page on the canterbury homekill website">
				</picture>
			</a>
			<section class="specific-grid__main-width  gr-1-m">
				<h4><a href="https://rileybathurst.com/confirmation-form-large/">Confirmation Page</a></h4>
				<p>Adding a confirmation page to the Canterbury Homekill order process led to less confusion and misorders, as custom butchery doesn't lend itself to returns making sure the orders were correct really helped with custom relations.</p>
			</section>
		</div>

		<hr class="mega-hr">

		<div class="specific-grid">
			<a href="https://rileybathurst.com/order-check-large/" class="specific-grid__main-width ">
				<picture class="lozad-picture">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/order-check-large.jpg" media="(min-width: 64em)">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/order-check-medium.jpg" media="(min-width: 40em)"><!-- return this to pizels -->
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/order-check-large.jpg" alt="view order page on the canterbury homekill website">
				</picture>
			</a>
			<section class="specific-grid__main-width ">
				<h4><a href="https://rileybathurst.com/order-check-large/">View Order Page</a></h4>
				<p>With a profile system, customers are able to look back on previous orders this often helps with reordering something they have been really happy with in the past.</p>
			</section>
		</div>

		<hr class="mega-hr">

		<div class="specific-grid">
			<a href="https://rileybathurst.com/order-email-large/" class="specific-grid__main-width ">
				<picture class="lozad-picture">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/order-email-large.jpg" alt="order email from canterbury homekill" media="(min-width: 64em)">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/order-email-medium.jpg" alt="order email from canterbury homekill" media="(min-width: 40em)">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/order-email-small.jpg" alt="order email from canterbury homekill">
				</picture>
			</a>
			<section class="specific-grid__main-width  gr-1-m">
				<h4><a href="https://rileybathurst.com/order-email-large/">Order Email</a></h4>
				<p>The confirmation emails sent out after a sucessful order lets customers know we have got the message and this is also another way of looking back on orders for reordering or confirmation of what they have in the freezer while not home.</p>
			</section>
		</div>

		<hr class="mega-hr">

		<div class="specific-grid">
			<h3 class="">Design</h3>
			<section class="specific-grid__main-width ">
				<img src="<?php echo content_url(); ?>/uploads/2015/05/CHK-Hunt-Advert-torn-paper-blog.jpg" alt="news paper advertisement">
				<h4 class="caption">Newspaper advertisment.</h4>
			</section>
		</div>
	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
