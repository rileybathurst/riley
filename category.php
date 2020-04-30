<!-- Theres some special stuff going on with ordered sticky loops for specific categories -->

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

<?php 
// I only reorder a couple of categories so only redo the loop if I have to so things dont get slower
$ordered_cats = [
	"clicks",
	"Clicks",
	"code",
	"Code",
	"camera",
	"Camera"
];
$cat_title = single_cat_title('', false);
if (in_array($cat_title, $ordered_cats)) {

	wp_reset_query();

	// if posts dont have a order they should get a 6 or 11 or whatever number I then choose but I don't want to do an additional loop before starting

	// It'd be nice if there was a version of not restarting the query but it's fine for now
	$args = array(
		'category_name' => $cat_title, 	// to be able to have these posts as the parent category it helps so I can show children category further on
		// do I only display sticky posts?
		'post__in' => get_option('sticky_posts'), // this becomes problematic if it should be sticky in one of the three categories but not another or if we want a different number for each - ie website design in clicks but they are also in code
		
		'meta_key'			=> 'myguten_meta_block_field',
		
		// 'orderby' => 'meta_value=myguten_meta_block_field',
		// 'orderby' => 'myguten_meta_block_field',
		// 'orderby' => 'meta_key',
		'orderby' => 'meta_value_num',
		
		'order' => ASC, // neither is needed for right now it should atleast be going some direction
		// 'order' => DSC,
		'post_parent' => 0,
		'posts_per_page' => 5,
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
		<!-- <div class="article-base">stay gold</div> -->
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

<?php } else { ?> <!-- if dont have posts -->
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

wp_reset_query();

} else { // the else is just do the regular
	if (have_posts()) {
		while (have_posts()) : the_post(); ?>
			<div class="background-dirty category-break">
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

<?php } // dont have posts

} // else doing the regular loop

get_footer(); ?>

