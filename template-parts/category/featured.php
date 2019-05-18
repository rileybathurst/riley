<article <?php post_class(); ?>> <!-- post_class means I cant add my own classes -->

	<div class="spine-border"></div>

	<figure class="featured-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></figure>

	<div class="featured-header"><h2 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>

	<div class="article-speechbubble">
		<?php $comments_number = get_comments_number();
		if ( '1' === $comments_number ) { ?>
			<span class="speechbubble"><?php echo get_comments_number(); ?> Comment</span>
		<?php } elseif ( '2' < $comments_number ) { ?>
			<span class="speechbubble"><?php echo get_comments_number(); ?> Comments</span>
		<?php } ?>
	</div>

	<div class="article-content"><?php the_content(); ?></div>

	<div class="article-explore"><a href="<?php the_permalink(); ?>">Explore This Project</a></div>

	<div class="featured-category"><h3 class="subheading">This Project contains <?php the_category(); ?></h3></div>
</article>
