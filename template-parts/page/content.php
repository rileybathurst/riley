<article <?php post_class(); ?>> <!-- post_class means I cant add my own classes -->

	<div class="spine-border"></div>

	<?php if ( ! is_single()) {
		if ( has_post_thumbnail() ) { ?>
			<figure class="article-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></figure>
		<?php }
	} ?>

	<div class="article-header"><h2 class="page-title"><?php the_title(); ?></h2></div>

	<div class="article-content"><?php the_content(); ?></div>

</article>
