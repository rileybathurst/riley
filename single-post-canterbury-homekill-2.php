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
		<blockquote cite="https://canterburyhomekill.co.nz/" class="continental">
			<p>With over 30 years combined experience in the butchering industry, Canterbury Homekill Services prides itself in offering a professional, honest service throughout Canterbury.</p>
			<footer>
				<cite class="hide-for-medium"><a href="https://canterburyhomekill.co.nz/" target="_blank" rel="noopener">canterburyhomekill.co.nz</a></cite> <!-- with a large font running an abreviation where this is shorter on small screens? -->
				<cite class="show-for-medium"><a href="https://canterburyhomekill.co.nz/" target="_blank" rel="noopener">canterburyhomekill.co.nz</a></cite>
			</footer>
		</blockquote>
	</div>

		<hr class="mega-hr">

		<div class="specific-grid">
			<div class="specific-grid__main-width">
			<h3>Key Technologies</h3>
			<ul>
				<li>PHP</li>
				<li>SQL</li>
				<li>Wordpress</li>
			</ul>
		</div>
	</div>

	<hr class="mega-hr">

	<div class="specific-grid">

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>order-form/" class="specific-grid__main-width">
				<picture class="lozad-picture" data-index="1" data-alt="canterburyhomekill order page">
					<source srcset="<?php echo content_url(); ?>/uploads/2020/05/order_page_ipad_size-1080x1440.webp" media="(min-width: 960px)" type="image/webp" />
					<source srcset="<?php echo content_url(); ?>/uploads/2020/05/order_page_ipad_size-1080x1440.jpeg" media="(min-width: 960px)" />
					<source srcset="<?php echo content_url(); ?>/uploads/2020/05/order_page_ipad_size-960x1280.webp" media="(min-width: 720px)" type="image/webp" />
					<source srcset="<?php echo content_url(); ?>/uploads/2020/05/order_page_ipad_size-960x1280.jpeg" media="(min-width: 720px)" />
					<source srcset="<?php echo content_url(); ?>/uploads/2020/05/order_page_ipad_size-720x960.webp" media="(min-width: 640px)" type="image/webp" />
					<source srcset="<?php echo content_url(); ?>/uploads/2020/05/order_page_ipad_size-720x960.jpeg" media="(min-width: 640px)" />
					<source srcset="<?php echo content_url(); ?>/uploads/2020/05/order_page_ipad_size-640x853.webp" media="(min-width: 360px)" type="image/webp" />
					<source srcset="<?php echo content_url(); ?>/uploads/2020/05/order_page_ipad_size-640x853.jpeg" media="(min-width: 360px)" />
					<source srcset="<?php echo content_url(); ?>/uploads/2020/05/order_page_ipad_size-360x480.webp" type="image/webp" />
					<source srcset="<?php echo content_url(); ?>/uploads/2020/05/order_page_ipad_size-360x480.jpeg" />
				</picture>
			</a>
			<section class="specific-grid__main-width ">
				<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>order-form/">Order Page</a></h4>
				<p>The order page for Canterbury Homekill lets customers pick many options around how an animal is to be butchered. A select cut can either be chosen or not with a checkbox then dropdowns let them pick how the cut is handled if there are muliple ways that can be done.</p>
			</section>
		</div>

		<hr class="mega-hr">

		<div class="specific-grid">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>order-check-large/" class="specific-grid__main-width ">
			<picture class="lozad-picture" data-index="3" data-alt="canterburyhomekill view order page">
					<source srcset="<?php echo content_url(); ?>/uploads/2020/05/order_page_ipad_size-1080x1440.webp" media="(min-width: 960px)" type="image/webp" />
					<source srcset="<?php echo content_url(); ?>/uploads/2020/05/order_page_ipad_size-1080x1440.jpeg" media="(min-width: 960px)" />
					<source srcset="<?php echo content_url(); ?>/uploads/2020/05/order_page_ipad_size-960x1280.webp" media="(min-width: 720px)" type="image/webp" />
					<source srcset="<?php echo content_url(); ?>/uploads/2020/05/order_page_ipad_size-960x1280.jpeg" media="(min-width: 720px)" />
					<source srcset="<?php echo content_url(); ?>/uploads/2020/05/order_page_ipad_size-720x960.webp" media="(min-width: 640px)" type="image/webp" />
					<source srcset="<?php echo content_url(); ?>/uploads/2020/05/order_page_ipad_size-720x960.jpeg" media="(min-width: 640px)" />
					<source srcset="<?php echo content_url(); ?>/uploads/2020/05/order_page_ipad_size-640x853.webp" media="(min-width: 360px)" type="image/webp" />
					<source srcset="<?php echo content_url(); ?>/uploads/2020/05/order_page_ipad_size-640x853.jpeg" media="(min-width: 360px)" />
					<source srcset="<?php echo content_url(); ?>/uploads/2020/05/order_page_ipad_size-360x480.webp" type="image/webp" />
					<source srcset="<?php echo content_url(); ?>/uploads/2020/05/order_page_ipad_size-360x480.jpeg" />
					
					<!-- <source srcset=" php echo content_url(); ?>/uploads/2018/05/order-check-large.jpg" media="(min-width: 64em)">
					<source srcset=" php echo content_url(); ?>/uploads/2018/05/order-check-medium.jpg" media="(min-width: 40em)"> -- return this to pizels --
					<source srcset=" php echo content_url(); ?>/uploads/2018/05/order-check-large.jpg" alt="view order page on the canterbury homekill website"> -->
				</picture>
			</a>
			<section class="specific-grid__main-width ">
				<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>order-check-large/">View Order Page</a></h4>
				<p>With a profile system, customers are able to look back on previous orders this often helps with reordering something they have been really happy with in the past.</p>
			</section>
		</div>

		<hr class="mega-hr">

		<div class="specific-grid">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>order-email-large/" class="specific-grid__main-width ">
			<picture class="lozad-picture" data-index="4" data-alt="canterburyhomekill order email">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/order-email-large.jpg" alt="order email from canterbury homekill" media="(min-width: 64em)">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/order-email-medium.jpg" alt="order email from canterbury homekill" media="(min-width: 40em)">
					<source srcset="<?php echo content_url(); ?>/uploads/2018/05/order-email-small.jpg" alt="order email from canterbury homekill">
				</picture>
			</a>
			<section class="specific-grid__main-width  gr-1-m">
				<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>order-email-large/">Order Email</a></h4>
				<p>The confirmation emails sent out after a sucessful order lets customers know we have got the message and this is also another way of looking back on orders for reordering or confirmation of what they have in the freezer while not home.</p>
			</section>
		</div>

		<hr class="mega-hr">

		<div class="specific-grid">
			<h3 class="">Design</h3>
			<section class="specific-grid__main-width ">
			<img data-src="<?php echo content_url(); ?>/uploads/2015/05/CHK-Hunt-Advert-torn-paper-blog.jpg" class="lozad" data-alt="news paper advertisement" loading="lazy">
				<h4 class="caption">Newspaper advertisment.</h4>
			</section>
		</div>
	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
