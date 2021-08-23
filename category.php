<!-- Theres some special stuff going on with ordered sticky loops for specific categories -->
<!-- this breaks on default permalink settings I have no idea why and I dont need to fix it now -->
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
	get_template_part( 'template-parts/category/ordered-cats' );

} else { // the else is just do the regular
	if (have_posts()) {
		while (have_posts()) : the_post(); ?>
			<div class="background-dirty category-break">
				<div class="site-main" role="main">
					<?php get_template_part( 'template-parts/post/category' ); ?>
					<!-- major difference is the link in the title -->
				</div>
			</div>
		<?php endwhile;
		if ( $wp_query->max_num_pages > 1 ) {
			the_posts_pagination();
		}
	} else {
		get_template_part('template-parts/category/cat-404');
	} // dont have posts
}
get_footer(); ?>

