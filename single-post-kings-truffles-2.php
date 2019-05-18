<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<div class="grid-x grid-padding-x">

			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/kings_truffles_0498/">
						<picture class="lozad-picture" data-iesrc="http://rileybathurst.com/wp-content/uploads/2018/05/Kings_Truffles_0498-small.jpg">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/Kings_Truffles_0498-large.jpg" alt="kings truffle dogs" media="(min-width: 64em)">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/Kings_Truffles_0498-medium.jpg" alt="kings truffle dogs" media="(min-width: 40em)">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/Kings_Truffles_0498-small.jpg" alt="kings truffle dogs">
							<noscript><img src="http://rileybathurst.com/wp-content/uploads/2018/05/Kings_Truffles_0498-small.jpg" alt="kings truffle dogs"></noscript>
						</picture>
					</a>
				</p>
			</div>

			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/kings_truffles_0707/">
						<picture class="lozad-picture" data-iesrc="http://rileybathurst.com/wp-content/uploads/2018/05/Kings_Truffles_0707-small.jpg">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/Kings_Truffles_0707-large.jpg" alt="kings truffle dogs" media="(min-width: 64em)">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/Kings_Truffles_0707-medium.jpg" alt="kings truffle dogs" media="(min-width: 40em)">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/Kings_Truffles_0707-small.jpg" alt="kings truffle dogs">
							<noscript><img src="http://rileybathurst.com/wp-content/uploads/2018/05/Kings_Truffles_0707-small.jpg" alt="kings truffle dogs"></noscript>
						</picture>
					</a>
				</p>
			</div>

			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/kings_truffles_0698/">
						<picture class="lozad-picture" data-iesrc="http://rileybathurst.com/wp-content/uploads/2018/05/Kings_Truffles_0698-small.jpg">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/Kings_Truffles_0698-large.jpg" alt="kings truffle dogs" media="(min-width: 64em)">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/Kings_Truffles_0698-medium.jpg" alt="kings truffle dogs" media="(min-width: 40em)">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/Kings_Truffles_0698-small.jpg" alt="kings truffle dogs">
							<noscript><img src="http://rileybathurst.com/wp-content/uploads/2018/05/Kings_Truffles_0698-small.jpg" alt="kings truffle dogs"></noscript>
						</picture>
					</a>
				</p>
			</div>

			<div class="small-12 medium-6 cell">
				<p>
					<a href="http://rileybathurst.com/kings_truffles_0610/">
						<picture class="lozad-picture" data-iesrc="http://rileybathurst.com/wp-content/uploads/2018/05/Kings_Truffles_0610-small.jpg">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/Kings_Truffles_0610-large.jpg" alt="kings truffle dogs" media="(min-width: 64em)">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/Kings_Truffles_0610-medium.jpg" alt="kings truffle dogs" media="(min-width: 40em)">
							<source srcset="http://rileybathurst.com/wp-content/uploads/2018/05/Kings_Truffles_0610-small.jpg" alt="kings truffle dogs">
							<noscript><img src="http://rileybathurst.com/wp-content/uploads/2018/05/Kings_Truffles_0610-small.jpg" alt="kings truffle dogs"></noscript>
						</picture>
					</a>
				</p>
			</div>

		</div>
	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
