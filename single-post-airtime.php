<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<div class="grid-x grid-padding-x">
			<div class="small-12 medium-6 cell">
				<article class="responsive-embed widescreen frame">
					<p>
						<iframe data-src="https://player.vimeo.com/video/50047378" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen class="lozad" data-index="1"></iframe>
					</p>
				</article>
				<h4>Camperventure</h4>
			</div>

			<div class="small-12 medium-6 cell">
				<article class="responsive-embed widescreen frame">
					<iframe src="https://player.vimeo.com/video/45354116" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe><script src="https://player.vimeo.com/api/player.js"></script>
				</article>
				<h4>Opening Day at Mt. Olympus</h4>
			</div>
		</div>

		<div class="grid-x grid-padding-x">
			<div class="cell">
				<h3 class="box-title">Full list of shows</h3>
				<ul>
					<li><strong>Washington Park Skate Session</strong><br>
						Airtime Season 3 - Episode 19</li>

					<li><strong>Queenstown Skate Session</strong><br />
						Airtime Season 3 - Episode 18</li>

					<li><strong>NZ Wakeboard Nationals 2013</strong><br />
						Airtime Season 2 - Episode 18</li>

					<li><strong>Lyttelton Downhill Biking</strong><br />
						Airtime Episode 18</li>

					<li><strong>Round 1 Motocross Nationals</strong><br />
						Airtime Episode 13</li>

					<li><strong>Lake Matahina with Pro wakeboarder Brad Smeele</strong><br />
						Airtime Episode 10</li>

					<li><strong>Big Boys Toys</strong><br />
						Airtime Ep 7</li>

					<li><strong>Private Wakeboard Park</strong><br />
						Airtime Ep 4</li>

					<li><strong>Tom Dillon</strong></li>

					<li><strong>Backflips team</strong></li>

					<li><a href="https://vimeo.com/44096905" target="_blank"><strong>Mission to Mt. Hutt with Ben Comber</strong></a><br />
						The Snow Show Ep 2 </li>

					<li><a href="https://vimeo.com/45354116" target="_blank"><strong>Opening Day at Mt. Olympus with Michael McCloy</strong></a><br />
						The Snow Show Ep 4</li>

					<li><a href="https://vimeo.com/46999140" target="_blank"><strong>Billabong Bro Down</strong></a><br />
						The Snow Show Ep 8</li>

					<li><a href="https://vimeo.com/48142319" target="_blank"><strong>Burton High Fives Halfpipe</strong></a><br />
						The Snow Show Ep 11</li>

					<li><a href="https://vimeo.com/50047378" target="_blank"><strong>Will Jackways &amp; Abby Lockhart</strong></a><br />
						The Snow Show Ep 14</li>

					<li><a href="https://vimeo.com/75381308" target="_blank"><strong>The Burton High Fives Slopestyle finals</strong></a><br />
						The Snow Show S2 – Ep 13</li>

					<li><a href="https://vimeo.com/75935528" target="_blank"><strong>The Burton High Fives Halfpipe Finals</strong></a><br />
						The Snow Show S2 – EP 14</li>

					<li><a href="https://vimeo.com/48112692" target="_blank"><strong>World Heli Challenge</strong></a><br />
						The Snow Show Ep 9</li>
				</ul>
			</div>
		</div>
	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
