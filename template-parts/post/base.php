<div class="article-base">
	<?php if ( is_single()) { ?>

		<h3 class="base-explore">Exlpore More</h3>

		<div class="post-navigation img-100">
			<?php

				$next_post = get_adjacent_post( true,'',false );

				if ($next_post !== "" ) {


				if( isset($next_post->ID) ):
					$next_id = $next_post->ID;
				else:
					$next_post = new WP_Query( 'posts_per_page=1&post_type=photo&order=ASC' );
					$next_id = $next_post->post->ID;
				endif;
				?>
				<a href="<?php echo get_permalink( $next_id ); ?>">
					<?php echo get_the_post_thumbnail( $next_id, 'medium' ); ?>
				</a>
				<a href="<?php echo get_permalink( $next_id ); ?>">
					<h4><?php echo get_the_title( $next_id ); ?></h4>
				</a>
				<?php } else {
					the_post_navigation();
				}
			?>
		</div>

		<div class="article-comments">
			<?php // If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				} ?>
		</div>

		<?php if (has_tag()) { ?> <!-- why is this only not single -->
			<div class="article-tags">
				<ul class="menu">
					<?php echo get_the_tag_list( '<li>', '</li><li>' ); ?>
				</ul>
			</div>
			<h3 class="base-tags">Tags</h3>
		<?php }
	} ?> <!-- is single -->
</div>
