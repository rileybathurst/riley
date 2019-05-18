<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<div class="grid-x">
			<div class="small-12 medium-6 cell">
				<h3 class="box-title hide-for-medium">Design</h3>
				<p><img src="http://rileybathurst.com/wp-content/uploads/2015/05/CHK-Hunt-Advert-torn-paper-blog.jpg" alt="news paper advertisement"></p>
				<h4>Newspaper advertisment.</h4>
			</div>
		</div>

		<div class="grid-x">
			<div class="cell">
				<h3 class="box-title">Web</h3>
			</div>
		</div>

		<div class="grid-x grid-padding-x">
			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/order-form/">
						<picture class="lozad-picture" data-iesrc="http://rileybathurst.com/wp-content/uploads/2018/05/order-form-small.jpg">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/order-form.jpg" alt="order page on the canterbury homekill website" media="(min-width: 64em)">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/order-form-medium.jpg" alt="order page on the canterbury homekill website" media="(min-width: 40em)">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/order-form-small.jpg" alt="order page on the canterbury homekill website">
							<noscript><img src="http://rileybathurst.com/wp-content/uploads/2018/05/order-form-small.jpg" alt="order page on the canterbury homekill website"></noscript>
						</picture>
					</a>
				</p>
				<h4><a href="http://rileybathurst.com/order-form/">Order Page</a></h4>
				<p>The order page for Canterbury Homekill lets customers pick many options around how an animal is to be butchered. A select cut can either be chosen or not with a checkbox then dropdowns let them pick how the cut is handled if there are muliple ways that can be done.</p>
			</div>

			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/confirmation-form-large/">
						<picture class="lozad-picture" data-iesrc="http://rileybathurst.com/wp-content/uploads/2018/05/confirmation-form-large.jpg">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/confirmation-form-large.jpg" alt="confirmation page on the canterbury homekill website" media="(min-width: 64em)">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/confirmation-form-medium.jpg" alt="confirmation page on the canterbury homekill website" media="(min-width: 40em)">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/confirmation-form-small.jpg" alt="confirmation page on the canterbury homekill website">
							<noscript><img src="http://rileybathurst.com/wp-content/uploads/2018/05/confirmation-form-large.jpg" alt="confirmation page on the canterbury homekill website"></noscript>
						</picture>
					</a>
				</p>
				<h4><a href="http://rileybathurst.com/confirmation-form-large/">Confirmation Page</a></h4>
				<p>Adding a confirmation page to the Canterbury Homekill order process led to less confusion and misorders, as custom butchery doesn't lend itself to returns making sure the orders were correct really helped with custom relations.</p>
			</div>

			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/order-check-large/">
						<picture class="lozad-picture" data-iesrc="http://rileybathurst.com/wp-content/uploads/2018/05/order-check-large.jpg">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/order-check-large.jpg" alt="view order page on the canterbury homekill website">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/order-check-medium.jpg" alt="view order page on the canterbury homekill website" media="(min-width: 64em)">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/order-check-small.jpg" alt="view order page on the canterbury homekill website" media="(min-width: 40em)">
							<noscript><img src="http://rileybathurst.com/wp-content/uploads/2018/05/order-check-large.jpg" alt="view order page on the canterbury homekill website"></noscript>
						</picture>
					</a>
				</p>
				<h4><a href="http://rileybathurst.com/order-check-large/">View Order Page</a></h4>
				<p>With a profile system, customers are able to look back on previous orders this often helps with reordering something they have been really happy with in the past.</p>
			</div>

			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/order-email-large/">
						<picture class="lozad-picture" data-iesrc="http://rileybathurst.com/wp-content/uploads/2018/05/order-email-large.jpg">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/order-email-large.jpg" alt="order email from canterbury homekill" media="(min-width: 64em)">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/order-email-large.jpg" alt="order email from canterbury homekill" media="(min-width: 40em)">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/order-email-large.jpg" alt="order email from canterbury homekill">
							<noscript><img src="http://rileybathurst.com/wp-content/uploads/2018/05/order-email-large.jpg" alt="order email from canterbury homekill"></noscript>
						</picture>
					</a>
				</p>
				<h4><a href="http://rileybathurst.com/order-email-large/">Order Email</a></h4>
				<p>The confirmation emails sent out after a sucessful order lets customers know we have got the message and this is also another way of looking back on orders for reordering or confirmation of what they have in the freezer while not home.</p>
			</div>
		</div>
	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
