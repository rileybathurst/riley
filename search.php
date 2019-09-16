<?php get_header(); ?>

<div class="background-dirty">
	<div class="site-main" role="main"> <!-- can I loose this -->
		<div class="category-header">
			<div class="spine-border"></div>
			<div class="cat-head">
				<h1 class="cat-title">
					<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 32" class="search-logo">
						<path class="path1" d="M20.571 14.857q0-3.304-2.348-5.652t-5.652-2.348-5.652 2.348-2.348 5.652 2.348 5.652 5.652 2.348 5.652-2.348 2.348-5.652zM29.714 29.714q0 0.929-0.679 1.607t-1.607 0.679q-0.964 0-1.607-0.679l-6.125-6.107q-3.196 2.214-7.125 2.214-2.554 0-4.884-0.991t-4.018-2.679-2.679-4.018-0.991-4.884 0.991-4.884 2.679-4.018 4.018-2.679 4.884-0.991 4.884 0.991 4.018 2.679 2.679 4.018 0.991 4.884q0 3.929-2.214 7.125l6.125 6.125q0.661 0.661 0.661 1.607z"></path>
					</svg>
					Results for "<?php echo get_search_query(); ?>"</h1>
			</div>
		</div>
	</div>
</div>
<div class="article-base"><!-- spacer --></div>

<?php if (have_posts()) {
	while (have_posts()) : the_post(); ?>
		<div class="background-dirty">
			<div class="site-main" role="main">
				<?php get_template_part( 'template-parts/post/category' ); ?>
			</div>
		</div>
		<div class="article-base"></div>
	<?php endwhile;

	if ( $wp_query->max_num_pages > 1 ) {
		the_posts_pagination();
	} // end max page numbers

} else { ?> <!-- if dont have posts -->
	<div class="site-main" role="main">

		<article <?php post_class(); ?>> <!-- this doesnt work as post class closes out -->
			<div class="article-thumbnail"></div> <!-- putting this in even if empty fills grid row 1 which lets eveything else sit in the right order -->
			<div class="article-header">
				<h2 class="page-title">Sorry</h2>
			</div>

			<div class="article-content">
				<p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching a new term can help.</p>
				<?php get_search_form(); ?>
			</div>
		</article>
	</div>
<?php }

get_footer(); ?>
