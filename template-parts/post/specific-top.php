<div class="background-dirty">
	<main class="site-main" role="main">
		<article <?php post_class(); ?>> <!-- post_class means I cant add my own classes -->

			<!-- normally this is the /template-parts/post/content.php -->
			<div class="spine-border"></div>

			<?php if ( ! is_single()) {
				if ( has_post_thumbnail() ) { ?>
					<figure class="article-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></figure>
				<?php }
			} ?>

			<div class="article-header"><h2 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>

			<?php if ( is_single()) { ?>
				<h6 class="article-date subheader"><?php the_date(); ?></h6>
			<?php } ?>

			<div class="article-speechbubble">
				<?php $comments_number = get_comments_number();
				if ( '1' === $comments_number ) { ?>
					<span class="speechbubble"><?php echo get_comments_number(); ?> Comment</span>
				<?php } elseif ( '2' < $comments_number ) { ?>
					<span class="speechbubble"><?php echo get_comments_number(); ?> Comments</span>
				<?php } ?>
			</div>

			<div class="article-category"><h3 class="subheading">This Project contains <?php the_category(); ?></h3></div>

			<div class="article-content"><?php the_content(); ?></div>
