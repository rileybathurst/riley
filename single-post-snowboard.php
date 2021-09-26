<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>2015/08/ben-comber-miller/tc_spring_camp_0051-large/">
			<picture class="lozad-picture">
				<source srcset="<?php echo content_url(); ?>/uploads/2015/08/TC_Spring_Camp_0051-large.jpg" media="(min-width: 64em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2015/08/TC_Spring_Camp_0051-medium.jpg" media="(min-width: 40em)">
				<!-- <img src="<?php echo content_url(); ?>/uploads/2015/08/TC_Spring_Camp_0051-small.jpg" alt="Ben Comber - Miller Flip"> -->
			</picture>
		</a>
		<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>2015/08/ben-comber-miller/tc_spring_camp_0051-large/">Ben Comber - Miller Flip</a><br />
			Printed in <a href="https://manualmagazine.com" target="_blank" rel="noopener" >Manual Magazine</a> issue #58</h4>
			
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>2015/05/new-zealand-snowboarder-2015/clubbies_trip_14_0164/">
			<img src="<?php echo content_url(); ?>/uploads/2015/05/Clubbies_Trip_14_0164.jpg" alt="Will Jackways - Method, Mt. Olympus">
		</a>
		<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>2015/05/new-zealand-snowboarder-2015/clubbies_trip_14_0164/">Will Jackways - Method, Mt. Olympus</a><br />
			Printed in New Zealand Snowboarder Magazine Winter 2015</h4>
			
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>2015/05/new-zealand-snowboarder-2015/annabel_226/">
			<img src="<?php echo content_url(); ?>/uploads/2015/05/Annabel_226.jpg" alt="Alek Oestreng - Backside Rodeo, Remarkables">
		</a>
		<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>2015/05/new-zealand-snowboarder-2015/annabel_226/">Alek Oestreng - Backside Rodeo, Remarkables</a><br />
        Printed in New Zealand Snowboarder Magazine Winter 2015</h4>

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>2013/07/fraser-ben/test_tour_0079/">
			<img src="<?php echo content_url(); ?>/uploads/2013/07/Test_Tour_0079.jpg" alt="ben comber snowboard">
		</a>
		<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>2013/07/fraser-ben/test_tour_0079/">Ben Comber - Frontside Air</a><br />
			<a href="https://www.mountainwatch.com/Snow-news/photos-the-back-face-of-cardrona/" target="_blank" rel="noopener" >Online Mountain Watch article</a></h4>
			
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>pipes_0079-large/">
			<img src="<?php echo content_url(); ?>/uploads/2014/05/Pipes_0079.jpg" alt="snowboard streetish shot">
		</a>
		<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>pipes_0079-large/">Ben Comber - Pipe Slide</a></h4>

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>2014/12/diaries_cardona_14_0231-large/">
			<picture class="lozad-picture">
				<source srcset="<?php echo content_url(); ?>/uploads/2014/12/Diaries_Cardona_14_0231-large.jpg" media="(min-width: 64em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2014/12/Diaries_Cardona_14_0231-medium.jpg" media="(min-width: 40em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2014/12/Diaries_Cardona_14_0231-small.jpg" >
				<!-- <img src=" php echo content_url(); ?>/uploads/2014/12/Diaries_Cardona_14_0231-small.jpg" alt="Nick Hyne - Frontside 360, Cardrona Front Country"> -->
			</picture>
		</a>
		<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>2014/12/diaries_cardona_14_0231-large/">Nick Hyne - Frontside 360, Cardrona Front Country</a></h4>

	</div>

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
