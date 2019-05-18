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
					<p>
						<iframe data-src="https://player.vimeo.com/video/33518191" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen class="lozad" data-index="1"></iframe>
					</p>
				</article>
				<h4>Brad Smeele at Lake Matahina</h4>
			</div>

			<div class="small-12 medium-6 cell">
			   <article class="responsive-embed widescreen frame">
					<p>
						<iframe data-src="https://player.vimeo.com/video/40065638?color=ffffff&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen class="lozad" data-index="1"></iframe>
					</p>
				</article>
				<h4>Motocross Nationals</h4>
			</div>

			<div class="small-12 medium-6 cell">
				<article class="responsive-embed widescreen frame">
					<p>
						<iframe data-src="https://player.vimeo.com/video/33517882?color=ffffff&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen class="lozad" data-index="1"></iframe>
					</p>
				</article>
				<h4>Big Boys Toys</h4>
			</div>
		</div>

		<div class="grid-x grid-padding-x">
			<div class="cell">
				<h3 class="box-title">Full list of shows</h3>
				<ul>
					<li><a href="https://vimeo.com/97991353" target="_blank"><strong>Washington Park Skate Session</strong></a><br>
						Airtime Season 3 - Episode 19</li>

					<li><a href="https://vimeo.com/97390500" target="_blank"><strong>Queenstown Skate Session</strong></a><br />
						Airtime Season 3 - Episode 18</li>

					<li><a href="https://vimeo.com/66195553" target="_blank"><strong>NZ Wakeboard Nationals 2013</strong></a><br />
						Airtime Season 2 - Episode 18</li>

					<li><a href="https://vimeo.com/41168578" target="_blank"><strong>Lyttelton Downhill Biking</strong></a><br />
						Airtime Episode 18</li>

					<li><a href="https://vimeo.com/40065638" target="_blank"><strong>Round 1 Motocross Nationals</strong></a><br />
						Airtime Episode 13</li>

					<li><a href="https://vimeo.com/33518191" target="_blank"><strong>Lake Matahina with Pro wakeboarder Brad Smeele</strong></a><br />
						Airtime Episode 10</li>

					<li><a href="https://vimeo.com/33517882" target="_blank"><strong>Big Boys Toys</strong></a><br />
						Airtime Ep 7</li>

					<li><a href="https://vimeo.com/33517547" target="_blank"><strong>Private Wakeboard Park</strong></a><br />
						Airtime Ep 4</li>

					<li>Tom Dillon</li>

					<li>Backflips team</li>

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
