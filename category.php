<?php get_header(); ?>

<div class="background-dirty">
	<div class="site-main" role="main">
		<div class="category-header">
			<div class="spine-border"></div>
			<div class="cat-head">
				<h2 class="cat-title"><?php single_cat_title(''); ?></h2>
				<p><?php echo category_description(); ?></p>
			</div>
		</div>
	</div>
</div>

<!-- sub categories -->
<div class="background-clean">
	<div class="category-sub">
		<ul>
			<?php $args = array(
					'child_of'				=> $cat, // defined in inc/cats-one-deep.php
					'title_li'				=> __( '' ),
					'show_option_none'		=> '',
					'depth'					=> '1',
				);
				wp_list_categories( $args ); ?>
		</ul>
	</div>
</div>

<?php if (have_posts()) {
	while (have_posts()) : the_post(); ?>
		<div class="background-dirty">
			<div class="site-main" role="main">
				<?php get_template_part( 'template-parts/post/category' ); ?>
				<!-- major difference is the link in the title -->
			</div>
		</div>
		<!-- <div class="article-base">stay gold</div> -->
	<?php endwhile;

	if ( $wp_query->max_num_pages > 1 ) {
		the_posts_pagination();
	}

} else { ?> <!-- if dont have posts -->
	<div class="cat-404">
		<div class="background-dirty">
			<main class="site-main">
				<article>
					<div class="spine-border"></div>
					<div class="fp-header">
						<h2 class="page-title">404</h2>
					</div>

					<div class="article-content">
						<p>Oh no we don&#39;t have any posts for you. Perhaps searching can help.</p>
						<?php get_search_form(); ?>
					</div>
				</article>
			</main>
		</div>
	</div>

<?php }

get_footer(); ?>
