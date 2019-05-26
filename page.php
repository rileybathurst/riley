<?php get_header(); ?>

<div class="background-dirty">
	<main class="site-main" role="main">
		<?php if (have_posts()) :

			while (have_posts()) : the_post(); ?>

				<article <?php post_class(); ?>> <!-- this doesnt work as post class closes out -->

					<div class="spine-border"></div>

					<div class="article-header">

						<?php
							$comments_number = get_comments_number();
							if ( '1' === $comments_number ) { ?>
								<span class="speechbubble"><?php echo get_comments_number(); ?> Comment</span>
							<?php } elseif ( '2' < $comments_number ) { ?>
								<span class="speechbubble"><?php echo get_comments_number(); ?> Comments</span>
							<?php }
						?>

						<?php if ( is_single()) { ?>
							<h6 class="subheader"><?php the_date(); ?></h6>
						<?php } ?>

						<h2 class="page-title"><?php the_title(); ?></h2>
					</div>

					<div class="article-category">
						<h3 class="subheading"><?php the_category(); ?></h3>
					</div>

					<div class="article-content">
						<?php the_content(); ?>

						<!-- page links inside single post -->
						<?php wp_link_pages( array(
							'before'      => '<div class="page-links">' . __( 'Pages:' ),
							'after'       => '</div>',
							'link_before' => '<span class="page-number">',
							'link_after'  => '</span>',
						) );
						?>

					</div>

				</article>

				<div class="article-base background-clean"></div>

			<?php endwhile; ?>

	</main>
</div>

	  <?php  if ( $wp_query->max_num_pages > 1 ) :

		the_posts_pagination();

			endif; // end max page numbers
				else : ?> <!-- if dont have posts -->
					<article <?php post_class(); ?>> <!-- this doesnt work as post class closes out -->

							<div class="article-header">
								<h2 class="page-title">404</h2>
							</div>

							<div class="article-content">
								<p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>
								<?php get_search_form(); ?>
							</div>

					</article>

				<!-- this is fine is closed off if dfoes or doesnt have posts -->
				</div>
			</div>

		<?php endif;

get_footer(); ?>
