<div class="article-base">
	<?php if ( is_single()) { ?>

		<h3 class="base-explore">Exlpore More</h3>

		<div class="post-navigation">
			<?php the_post_navigation(); ?>
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
