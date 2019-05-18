<?php get_header(); ?>

<div class="background-dirty">
	<div class="site-main" role="main">
		<?php if (have_posts()) :
			while (have_posts()) : the_post(); ?>

				<article <?php post_class(); ?>> <!-- this doesnt work as post class closes out -->

					<div class="article-header">
						<h2 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</div>

				</article>

				<div class="article-base background-clean"></div>

			<?php endwhile;
		endif; ?>

	</div>
</div>

<?php get_footer(); ?>
