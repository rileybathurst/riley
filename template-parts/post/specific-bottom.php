					<?php if ( ! is_single()) { ?>
						<div class="article-explore"><a href="<?php the_permalink(); ?>">Explore This Project</a></div>
					<?php } ?>
				</article>

			</main> <!-- .site-main -->
		</div> <!-- .background-dirty -->

		<?php get_template_part( 'template-parts/post/base' ); ?>


	<!-- IntersectionObserver Polyfill -->
	<script src="<?php echo get_template_directory_uri(); ?>/node_modules/lozad/intersection-observer.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/node_modules/lozad/lozad.min.js"></script>
	<script type="text/javascript">

	// Initialize library to lazy load images
	var observer = lozad('.lozad', {
		threshold: 0.1,
		load: function(el) {
			el.src = el.getAttribute("data-src");
		}
	})

	// Picture observer
	// with default `load` method
	var pictureObserver = lozad('.lozad-picture', {
		threshold: 0.1
	})

	observer.observe()
	pictureObserver.observe()
	</script>
