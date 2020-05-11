					<?php if ( ! is_single()) { ?>
						<div class="article-explore"><a href="<?php the_permalink(); ?>">Explore This Project</a></div>
					<?php } ?>
				</article>

			</main> <!-- .site-main -->
		</div> <!-- .background-dirty -->

		<?php get_template_part( 'template-parts/post/base' ); ?>


	<!-- IntersectionObserver Polyfill this was a default before the webpack build so it shouldnt be needed -->
	 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>

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
