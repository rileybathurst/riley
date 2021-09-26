<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>

<div class="background-primary">
	<div class="front-page-titles">
		<div class="fp-box clicks-a"><div class="ghostly presence">C</div></div>
		<div class="fp-box clicks-b"><div class="ghostly presence">L</div></div>
		<div class="fp-box clicks-c"><div class="ghostly presence">I</div></div>
		<div class="fp-box clicks-d"><div class="ghostly presence">C</div></div>
		<div class="fp-box clicks-e"><div class="ghostly presence">K</div></div>
		<div class="fp-box clicks-f"><div class="ghostly presence">S</div></div>

		<div class="fp-box code-a"><div class="ghostly presence">C</div></div>
		<div class="fp-box code-b"><div class="ghostly presence">O</div></div>
		<div class="fp-box code-c"><div class="ghostly presence">D</div></div>
		<div class="fp-box code-d"><div class="ghostly presence">E</div></div>
		<div class="fp-box code-e">&nbsp;</div>
		<div class="fp-box code-f" data-text="&amp;"><div class="ghostly presence">&amp;</div></div>

		<div class="fp-box camera-a"><div class="ghostly presence">C</div></div>
		<div class="fp-box camera-b"><div class="ghostly presence">A</div></div>
		<div class="fp-box camera-c"><div class="ghostly presence">M</div></div>
		<div class="fp-box camera-d"><div class="ghostly presence">E</div></div>
		<div class="fp-box camera-e"><div class="ghostly presence">R</div></div>
		<div class="fp-box camera-f"><div class="ghostly presence">A</div></div>
	</div>
</div>

<div class="background-dirty">
	<main class="site-main">
		<?php if (have_posts()) {

			while (have_posts()) : the_post(); ?>

				<article <?php post_class(); ?>> <!-- this doesnt work as post class closes out -->

					<div class="spine-border"></div>

					<div class="fp-header titleSpinner">
						<h2 class="page-title">I&rsquo;m A&nbsp;</h2>
						<div id="changeText">
							<h2 class="page-title">Designer</h2>
							<h2 class="page-title">Developer</h2>
							<h2 class="page-title">Photographer</h2>
							</div>
					</div>

					<div class="article-content">
						<?php the_content(); ?>

						<!-- page links inside single post -->
						<?php wp_link_pages( array(
							'before'      => '<div class="page-links">' . __( 'Pages:' ),
							'after'       => '</div>',
							'link_before' => '<span class="page-number">',
							'link_after'  => '</span>',
						) );
						?>

					</div>

				</article>

			<?php endwhile; ?>

			<?php if ( $wp_query->max_num_pages > 1 ) {
				the_posts_pagination();
			}

		} else { ?> <!-- if have posts -->
			<div>

				<div class="article-header">
					<h2 class="page-title">404</h2>
				</div>

				<div class="article-content">
					<p>It seems we can&rsquo;t find what you&rsquo;re looking for.</p>
				</div>

			</div>
		<?php } ?>

	</main> <!-- .site-main -->
</div> <!-- .background-dirty -->

<!-- <hr class="mega-hr-primary" /> -->

<!-- I'm doing this all manually for the moment to keep the front page loading as fast as possible and allowing me to use a responsive picture element for the featured image -->
<div class="background-dirty">
	<section class="site-main">
		<h2 class="featured-header">Featured Project</h2>
		<article class="">
			<figure class="article-thumbnail category-thumbnail category-overlaying-image">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>2018/04/snowledge/">
					<picture class=""><!-- lozad-picture this needs to be loaded the proper way -->
					<!-- <source srcset=" php echo content_url(); ?>/uploads/2018/05/IMG_0126.jpg" media="(min-width: 64em)">
					<source srcset=" php echo content_url(); ?>/uploads/2018/05/IMG_0126.jpg" media="(min-width: 40em)"> -->
					<!-- <source srcset=" php echo content_url(); ?>/uploads/2020/05/4frnt_snowledge_app_30_liquify-5-360x240.jpg" alt="skier as part of a design piece"> -->
					<img src="<?php echo content_url(); ?>/uploads/2020/05/4frnt_snowledge_app_30_liquify-5-1080x720-1.jpg" alt="skier as part of a design piece">
					<!-- <img src=" php echo content_url(); ?>/uploads/2020/05/4frnt_snowledge_app_30_liquify-5-360x240.jpg" alt="skier as part of a design piece"> -->
				</picture>
			</a>
		</figure>
		
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>2018/04/snowledge/" class="category-color-blocking">
			<div ><!-- stay gold --></div>
		</a>

		<div class="fp-header">
			<hr class="mega-hr" />
			<h2 class="page-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>2018/04/snowledge/">
				<!-- the trailing slash is included in the permalink this helps to shorten breadcrumbs on single pages --> 
					Snowledge
					<!-- php echo get_post_meta(  'myguten_meta_block_field', true ); ?> -->
				</a>
			</h2>
		</div>

		<div class="article-category">
			<hr class="mega-hr-primary hide-for-large">
			<div class="category-container">

				<div class="subheading"><p>This Project contains</p>
					<ul>
						<li><a href="<?php get_site_url(); ?>/category/clicks/">Clicks</a></li>
						<li><a href="<?php get_site_url(); ?>/category/camera/">Camera</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="article-speechbubble"><!-- old use for the naming scheme is messy -->
			<p><span class="speechbubble">Nov 2016 – May 2021</span></p>
		</div>

		<div class="featured--excerpt">
			<p>I’ve been working with Snowledge.co as the lead digital content creator. This is a relatively open position for creating media for advertising and social media. This ranges from disappearing stories on social media as a throw away up to full video projects that have taken weeks to months to complete.</p>

			<p>Being involved with a project in the startup phases I have also helped across the board with design on marketing and UI, with a social media base the app needs constant updates and a large amount of shots have flown through the app and out into other channels to promote the project.</p>
		</div>

		<div class="article-explore">
			<hr class="mega-hr-primary" />
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>2018/04/snowledge/" class="button" >Explore Snowledge</a>
		</div>
	</article>

	</section>
</div>

<?php get_template_part( 'template-parts/page/logos' ) ?>

<?php get_footer(); ?>
