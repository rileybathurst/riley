<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>

<div class="background-primary">
	<div class="front-page-titles">
		<div class="fp-box a"></div>
		<div class="fp-box b"></div>
		<div class="fp-box c"></div>
		<div class="fp-box clicks-a">C</div>
		<div class="fp-box clicks-b">L</div>
		<div class="fp-box clicks-c">I</div>
		<div class="fp-box clicks-d">C</div>
		<div class="fp-box clicks-e">K</div>
		<div class="fp-box clicks-f">S</div>
		<div class="fp-box d"></div>
		<div class="fp-box e"></div>
		<div class="fp-box f"></div>

		<div class="fp-box g"></div>
		<div class="fp-box h"></div>
		<div class="fp-box i"></div>
		<div class="fp-box code-a">C</div>
		<div class="fp-box code-b">O</div>
		<div class="fp-box code-c">D</div>
		<div class="fp-box code-d">E</div>
		<div class="fp-box code-e">&nbsp;</div>
		<div class="fp-box code-f glitch" data-text="&amp;">&amp;</div>
		<div class="fp-box j"></div>
		<div class="fp-box k"></div>
		<div class="fp-box l"></div>

		<div class="fp-box m"></div>
		<div class="fp-box n"></div>
		<div class="fp-box o"></div>
		<div class="fp-box camera-a">C</div>
		<div class="fp-box camera-b">A</div>
		<div class="fp-box camera-c">M</div>
		<div class="fp-box camera-d">E</div>
		<div class="fp-box camera-e">R</div>
		<div class="fp-box camera-f">A</div>
		<div class="fp-box p"></div>
		<div class="fp-box q"></div>
		<div class="fp-box r"></div>
	</div>
</div>

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
