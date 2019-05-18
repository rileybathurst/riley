<?php get_header(); ?>

<div class="background-dirty">
	<div class="site-main" role="main"> <!-- can I loose this -->
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
<div class="background-clean global-padding-bottom">
	<div class="category-sub">
		<ul>
			<?php $args = array(
					'child_of'				=> $cat, // where have I defined this?
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
				<?php get_template_part( 'template-parts/post/content' ); ?>
			</div>
		</div>
		<div class="article-base"></div>
	<?php endwhile;

			if ( $wp_query->max_num_pages > 1 ) {
				the_posts_pagination();
			} // end max page numbers

		} else { ?> <!-- if dont have posts -->
			<div <?php post_class(); ?>> <!-- this doesnt work as post class closes out -->
				<div class="box article-header">
					<h2 class="page-title">404</h2>
				</div>

				<div class="box article-content">
					<p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>
					<?php get_search_form(); ?>
				</div>
			</div>
		<?php }

get_footer(); ?>
