<?php 
// I only reorder a couple of categories so only redo the loop if I have to so things dont get slower
// only show 5 sticky posts in each category

	$cat_title = single_cat_title('', false);

	wp_reset_query();
	// if posts dont have a order they should get a 6 or 11 or whatever number I then choose but I don't want to do an additional loop before starting
	// It'd be nice if there was a version of not restarting the query but it's fine for now
	$args = array(
		'category_name'		=> $cat_title, 	// to be able to have these posts as the parent category it helps so I can show children category further on
		'post__in' 			=> get_option('sticky_posts'),
		'orderby'			=> 'meta_value_num',
		'order'				=> ASC,
		'post_parent'		=> 0,
		'posts_per_page'	=> 5,
	);
	$category_posts = new WP_Query($args);

	if($category_posts->have_posts()) {
		while($category_posts->have_posts()) {
			$category_posts->the_post();
	?>

		<div class="background-dirty category-break">
			<div class="site-main" role="main">
				<?php get_template_part( 'template-parts/post/category' ); ?>
				<!-- major difference is the link in the title -->
			</div>
		</div>
	<?php } ?> <!-- endwhile; -->

	<!-- I need a custom version of additional sub categories or other posts
	if ( $wp_query->max_num_pages > 1 ) {
		the_posts_pagination();
	} -->
	<!-- sub categories -->
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
				<hr class="mega-hr-dirty "/>
			</div>

<?php } else {
	include ('/cat-404.php');
	}
	wp_reset_query();
?>
