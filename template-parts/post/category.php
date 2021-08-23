<article <?php post_class(); ?>> <!-- post_class means I cant add my own classes -->

	<!-- <div class="spine-border">stay gold</div> -->

	<!-- this is of course showing up in the blog single posts -->
	<?php if ( has_post_thumbnail() ) { ?>
		<figure class="article-thumbnail category-thumbnail category-overlaying-image">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		</figure>

		<a href="<?php the_permalink(); ?>?c=<?php single_cat_title(''); ?>" class="category-color-blocking">
			<div ><!-- stay gold --></div>
		</a>

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

	<?php } else { ?>
		<!-- the main difference is the additional styling over where an image would be is pretty well removed -->
		<div class="category-post--header">
			<h2>
				<a href="<?php the_permalink(); ?>?c=<?php single_cat_title(''); ?>">
				<!-- the trailing slash is included in the permalink this helps to shorten breadcrumbs on single pages --> 
					<?php the_title(); ?>
					<!-- php echo get_post_meta(  'myguten_meta_block_field', true ); ?> -->
				</a>
			</h2>
		</div>
	<?php } ?>
	
	<div class="article-content">








		meow
		<?php the_content(); ?>
		I presume this is here











		
	</div>
	
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
