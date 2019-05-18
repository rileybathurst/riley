<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<div class="background-dirty">
	<div class="site-main" role="main">

		<?php if (have_posts()) :
			while (have_posts()) : the_post(); ?>

				<article <?php post_class(); ?>> <!-- this doesnt work as post class closes out -->

					<div class="spine-border"></div>

					<div class="article-header">
						<h2 class="page-title">
							<?php the_title(); ?>
						</h2>
					</div>

					<div class="article-content">
						<?php the_content(); ?>

						<!-- enctype='multipart/form-data' is key to submitting documents -->
						<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" enctype='multipart/form-data' method="post" class="article-form">

							<input type="hidden" name="action" value="contact">
							<input type="hidden" name="data" value="contactid"><!-- slightly different value to differentiate, not used -->

						<!-- name -->
							<label class="inline text-right">Name*</label>
							<input type="text" name="name" id="name" placeholder="Name" required pattern="[a-zA-Z]+" />

						<!-- email -->
							<label class="inline text-right">email*</label>
							<input type="email" name="email" id="email" placeholder="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" />

						<!-- enquiry -->
							<label class="inline text-right">Enquiry</label>
							<textarea placeholder="Enquiry" name="details" id="details"></textarea>

							<!-- recaptcha -->
							<div class="g-recaptcha" data-sitekey="6LdTMzIUAAAAABLRKiSUN1kv_4DHx9E6V98M_S-2"></div>

						<!-- send -->
						   <input type="submit" value="Submit">

						</form>
					</div>

				</article>

			<?php endwhile;

			if ( $wp_query->max_num_pages > 1 ) : ?>

					<?php the_posts_pagination(); ?>

			<?php endif;

			else : ?>

				<p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>

				<?php get_search_form();

		endif; ?>

	</div><!-- .site-main -->
</div>

<?php get_footer(); ?>
