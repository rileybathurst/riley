<?php
/*
Template Name: Thanks
*
* successful contact forms
*
* define variables from the url bar .php?x=
*/

//
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
/* this one doesnt even give a result on localhost
$cs_check = strpos($actual_link, '?cs=');
if ($cs_check === false) {
	$cs = 'undefined';
} else {
	$cs = $_GET['cs'];
} */

$n_check = strpos($actual_link, '?n=');
if ($n_check === false) {
	$n = 'undefined';
} else {
	$n = $_GET['n'];
}

get_header();

	if (have_posts()) {
		while (have_posts()) : the_post(); ?>
			<div class="background-dirty">
				<main class="site-main">
					<!-- get_template_part( 'template-parts/page/content' ); -->
					<article <?php post_class(); ?>> <!-- post_class means I cant add my own classes -->

						<div class="spine-border"></div>

						<?php if ( ! is_single()) {
							if ( has_post_thumbnail() ) { ?>
								<figure class="article-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></figure>
							<?php }
						} ?>

						<div class="article-header"><h2 class="page-title"><?php the_title(); echo '&nbsp;' . $n; ?></h2></div>

						<div class="article-content"><?php the_content(); ?></div>

					</article>

				</main> <!-- .site-main -->
			</div> <!-- .background-dirty -->

			<?php get_template_part( 'template-parts/post/base' );

		endwhile;

		if ( $wp_query->max_num_pages > 1 ) {
			the_posts_pagination();
		}; // end max page numbers

		} else { ?> <!-- if dont have posts -->
			<div class="background-dirty">
				<div <?php post_class(); ?>> <!-- this doesnt work as post class closes out -->
					<div class="article-header">
						<h2 class="page-title">404</h2>
					</div>

					<div class="article-content">
						<p>It seems we can&rsquo;t find what you&rsquo;re looking for.</p>
					</div>
				</div>
			</div>

		<?php }

get_footer(); ?>
