<div class="article-base"><!-- can this be footer? -->
	<?php if ( is_single()) { ?> <!-- what happens if its not? -->

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

				<div class="base-next__grid">
					<a href="<?php echo get_permalink( $next_id ); ?>">
						<?php echo get_the_post_thumbnail( $next_id, 'medium' ); ?>
					</a>
					<h4><a href="<?php echo get_permalink( $next_id ); ?>"><?php echo get_the_title( $next_id ); ?></a></h4>
					<a href="<?php echo get_permalink( $next_id ); ?>" class="color-blocking"><!-- stay gold --></a>
				</div>

				<?php echo the_excerpt(); ?><!-- I'm going to need to do some work on this -->
<!-- 				<a href=" ?php echo get_permalink( $next_id ); ?>"> !-- why was this outside the h4? -- 
					<h4>Explore  ?php echo get_the_title( $next_id ); ?></h4>
 -->
					<h4><a href="<?php echo get_permalink( $next_id ); ?>">Explore <?php echo get_the_title( $next_id ); ?></a></h4>
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
