<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>mt_clarke_0063-large/">
			<picture class="lozad-picture">
				<source srcset="<?php echo content_url(); ?>/uploads/2015/08/Mt_Clarke_0063-large.jpg" media="(min-width: 64em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2015/08/Mt_Clarke_0063-medium.jpg" media="(min-width: 40em)">
				<!-- <img src="<?php echo content_url(); ?>/uploads/2015/08/Mt_Clarke_0063-small.jpg/" alt="Early Morning Back Country Hike"> -->
			</picture>
		</a>
		<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>mt_clarke_0063-large/">Early Morning Back Country Hike</a><br />
			<a href="https://skiandsnow.co.nz/mt-clarke/" target="_blank" rel="noopener" >Online for Ski and Snow</a> as part of a print feature in New Zealand Adventure Magazine winter 2015</h4>

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>2014/03/alex-brook-mt-olympus/team_bd_olympus_0068-large-2/">
			<picture class="lozad-picture">
				<source srcset="<?php echo content_url(); ?>/uploads/2014/03/Team_BD_Olympus_0068-large-1.jpg" media="(min-width: 64em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2014/03/Team_BD_Olympus_0068-medium.jpg" media="(min-width: 40em)">
				<!-- <img src="<?php echo content_url(); ?>/uploads/2014/03/Team_BD_Olympus_0068-small.jpg" alt="Alex Brooke - Mt. Olympus Ridgelines"> -->
			</picture>
		</a>
		<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>2014/03/alex-brook-mt-olympus/team_bd_olympus_0068-large-2/">Alex Brooke - Mt. Olympus Ridgelines</a></h4>

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>2013/07/fraser-ben/test_tour_0158/">
			<img src="<?php echo content_url(); ?>/uploads/2013/07/Test_Tour_0158.jpg" alt="fraser mcdougall ski">
		</a>
		<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>2013/07/fraser-ben/test_tour_0158/">Fraser McDougall - Powder Turn</a><br />
			<a href="https://www.mountainwatch.com/Snow-news/photos-the-back-face-of-cardrona/" target="_blank" rel="noopener" >Online Mountain Watch article</a></h4>
		
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>2014/06/ollie-hunt-cheesman/alex_and_ollie_0108/">
			<img src="<?php echo content_url(); ?>/uploads/2014/06/Alex_and_Ollie_0108.jpg" alt="new zealand powder turns">
		</a>
		<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>2014/06/ollie-hunt-cheesman/alex_and_ollie_0108/">Ollie Hunt - Powder Turn, Mt Cheeseman Backountry</a><br />
			Printed in the <a href="https://chillout.co.nz" target="_blank" rel="noopener" >CHILL Winter magazine</a></h4>

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>dsc03580-large/">
			<img src="<?php echo content_url(); ?>/uploads/2014/12/DSC03580-large.jpg" alt="charlie lyons will jackways mountain outlook">
		<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>dsc03580-large/">Will Jackways and Charlie Lyons - Mountain Outlook</a></h4>

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>2015/08/taos/">
			<picture class="lozad-picture">
				<source srcset="<?php echo content_url(); ?>/uploads/2015/08/Taos-large.jpg" alt="Taos Airtstream" media="(min-width: 64em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2015/08/Taos-medium.jpg" alt="Taos Airtstream" media="(min-width: 40em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2015/08/Taos-small.jpg" alt="Taos Airtstream" >
				<!-- <img src=" php echo content_url(); ?>/uploads/2015/08/Taos-small.jpg" alt="Taos Airtstream"> -->
			</picture>
		</a>
		<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>2015/08/taos/">Airstream - Taos, New Mexico</a></h4>

	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
