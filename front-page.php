<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>

<div class="background-primary">
	<div class="front-page-titles">
		<div class="fp-box ccc-west"></div>

		<div class="clicks">
			<div class="fp-box clicks-a"><div class="ghostly presence">C</div></div>
			<div class="fp-box clicks-b"><div class="ghostly presence">L</div></div>
			<div class="fp-box clicks-c"><div class="ghostly presence">I</div></div>
			<div class="fp-box clicks-d"><div class="ghostly presence">C</div></div>
			<div class="fp-box clicks-e"><div class="ghostly presence">K</div></div>
			<div class="fp-box clicks-f"><div class="ghostly presence">S</div></div>
		</div>

		<div class="code">
			<div class="fp-box code-a"><div class="ghostly presence">C</div></div>
			<div class="fp-box code-b"><div class="ghostly presence">O</div></div>
			<div class="fp-box code-c"><div class="ghostly presence">D</div></div>
			<div class="fp-box code-d"><div class="ghostly presence">E</div></div>
			<div class="fp-box code-e">&nbsp;</div>
			<div class="fp-box code-f" data-text="&amp;"><div class="ghostly presence">&amp;</div></div>
		</div>

		<div class="camera">
			<div class="fp-box camera-a"><div class="ghostly presence">C</div></div>
			<div class="fp-box camera-b"><div class="ghostly presence">A</div></div>
			<div class="fp-box camera-c"><div class="ghostly presence">M</div></div>
			<div class="fp-box camera-d"><div class="ghostly presence">E</div></div>
			<div class="fp-box camera-e"><div class="ghostly presence">R</div></div>
			<div class="fp-box camera-f"><div class="ghostly presence">A</div></div>
		</div>


		<div class="fp-box ccc-east"></div>
	</div>
</div>

<script>
	function code() {
		$( ".ghostly" ).removeClass( "presence" );
	}

	window.onload = function() {
		setTimeout(code, 3000);
	}
</script>

<div class="background-dirty">
	<main class="site-main" role="main">
		<?php if (have_posts()) {

			while (have_posts()) : the_post(); ?>

				<article <?php post_class(); ?>> <!-- this doesnt work as post class closes out -->

					<div class="spine-border"></div>

					<div class="fp-header">
						<h2 class="page-title">I&rsquo;m A <span id="changeText">Designer</span></h2>
					</div>

					<script>
						var text = ["Person", "Photographer", "Videographer"];
						var counter = 0;
						var elem = document.getElementById("changeText");
						var inst = setInterval(change, 1000);

						function change() {
						  elem.innerHTML = text[counter];
						  counter++;
						  if (counter >= text.length) {
							counter = 0;
							// clearInterval(inst); // uncomment this if you want to stop refreshing after one cycle
						  }
						}
					</script>

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

			<?php endwhile; ?>

			<?php if ( $wp_query->max_num_pages > 1 ) {
				the_posts_pagination();
			}

		} else { ?> <!-- if have posts -->
			<div>

				<div class="article-header">
					<h2 class="page-title">404</h2>
				</div>

				<div class="article-content">
					<p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>
					<?php get_search_form(); ?>
				</div>

			</div>
		<?php } ?>

	</main> <!-- .site-main -->
</div> <!-- .background-dirty -->

<?php get_footer(); ?>
