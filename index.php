<?php get_header();

	if (have_posts()) {
		while (have_posts()) : the_post(); ?>
			<div class="background-dirty">
				<main class="site-main" role="main">
					<?php get_template_part( 'template-parts/post/content' ); ?>
				</main> <!-- .site-main -->
			</div> <!-- .background-dirty -->

			<?php get_template_part( 'template-parts/post/base' );

		endwhile;

		if ( $wp_query->max_num_pages > 1 ) {
			the_posts_pagination();
		}; // end max page numbers

		} else { ?> <!-- if dont have posts -->
			<div class="background-dirty">
				<div <?php post_class(); ?>> <!-- this doesnt work as post class closes out -->
					<div class="article-header">
						<h2 class="page-title">404</h2>
					</div>

					<div class="article-content">
						<p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>

		<?php } ?>



<?php get_footer(); ?>
