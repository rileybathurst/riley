<?php 

$cat = single_cat_title('');

// if $cat = something from this array then do a new loop by the order

/* maybe do something wirh sticky otherwisw

$the_query = new WP_Query( array (
          'post_type' => 'page',
          'post_parent' => $services_id,
          'orderby' => 'menu_order',
          'order' => 'ASC'
        ) );
        if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ) {
            $the_query->the_post(); */
?>

<article <?php post_class(); ?>> <!-- post_class means I cant add my own classes -->

	<!-- <div class="spine-border">stay gold</div> -->

	<?php if ( has_post_thumbnail() ) { ?>
		<figure class="article-thumbnail category-thumbnail category-overlaying-image">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		</figure>

		<a href="<?php the_permalink(); ?>?c=<?php single_cat_title(''); ?>" class="category-color-blocking">
			<div ><!-- stay gold --></div>
		</a>
	<?php } ?>

	<div class="fp-header">
		<hr class="mega-hr" />
		<h2 class="page-title">
			<a href="<?php the_permalink(); ?>?c=<?php single_cat_title(''); ?>">
			<!-- the trailing slash is included in the permalink this helps to shorten breadcrumbs on single pages --> 
				<?php the_title(); ?>
				<!-- php echo get_post_meta(  'myguten_meta_block_field', true ); ?> -->
			</a>
		</h2>
	</div>
	
	<div class="article-content"><?php the_content(); ?></div>
	
	<div class="article-category">
		<hr class="mega-hr-primary hide-for-large">
		<div class="category-container">
			<p class="subheading">This Project contains <?php the_category(); ?></p>
		</div>
	</div>
	
	<div class="article-speechbubble">
		<?php $comments_number = get_comments_number();
		if ( '1' === $comments_number ) { ?>
			<hr class="mega-hr-primary hide-for-large">
			<span class="speechbubble"><?php echo get_comments_number(); ?> Comment</span>
		<?php } elseif ( '2' < $comments_number ) { ?>
			<hr class="mega-hr-primary">
			<span class="speechbubble"><?php echo get_comments_number(); ?> Comments</span>
		<?php } ?>
	</div>

	<?php if ( ! is_single()) { ?>
		<div class="article-explore">
			<hr class="mega-hr-primary">
			<a href="<?php the_permalink(); ?>">Explore <?php the_title(); ?></a>
		</div>
	<?php } ?>

</article>
