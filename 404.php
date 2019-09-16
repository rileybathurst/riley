<?php get_header(); ?>

<div class="background-dirty">
	<main class="site-main" role="main">
		<article <?php post_class(); ?>> <!-- this doesnt work as post class closes out -->
			<div class="article-thumbnail"><!-- stay gold --></div> <!-- putting this in even if empty fills grid row 1 which lets eveything else sit in the right order -->
			<div class="article-header">
				<h2 class="page-title">404</h2>
			</div>

			<div class="article-content">
				<p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>
				<?php get_search_form(); ?>
			</div>
		</article>
	</main>
</div>

<?php get_footer(); ?>
