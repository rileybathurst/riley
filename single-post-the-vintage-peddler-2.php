<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<h3 class="box-title">Design</h3>

		<a href="http://rileybathurst.com/the-vintage-peddler-flyer/">
			<img src="<?php echo content_url(); ?>/uploads/2013/02/Vintage-Peddler-DLE-season-2.jpg" alt="the vinatge peddler dle design">
			
		</a>
		<h4><a href="http://rileybathurst.com/the-vintage-peddler-flyer/">DLE Design</a></h4>
		
		<img src="<?php echo content_url(); ?>/uploads/2018/05/vp-sign.jpg" alt="the vinatge peddler exterior sign">
		<h4>Exterior Sign</h4>
	
		<img src="<?php echo content_url(); ?>/uploads/2014/03/vp-imac.png" alt="the vinatge peddler website front page">
		<h4>Original Website Front Page</h4>
		
		<a href="http://rileybathurst.com/vp_shoot_2012_0044/">
			<picture class="lozad-picture">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/VP_Shoot_2012_0044-large.jpg" alt="miss peddles the vintage peddler bike mobile"  media="(min-width: 64em)">
				<source srcset="<?php echo content_url(); ?>/uploads/2018/05/VP_Shoot_2012_0044-medium.jpg" alt="miss peddles the vintage peddler bike mobile"  media="(min-width: 40em)">
				<img src="<?php echo content_url(); ?>/uploads/2018/05/VP_Shoot_2012_0044-small.jpg" alt="miss peddles the vintage peddler bike mobile">
			</picture>
		</a>
		<h4><a href="http://rileybathurst.com/vp_shoot_2012_0044/">Miss Peddles</a></h4>
		
		<h3 class="box-title">Photography</h3>
		
		<img src="<?php echo content_url(); ?>/uploads/2018/05/Gracie_Biker_0017.jpg" alt="cruising on the vintage peddler bikes">
		
		<img src="<?php echo content_url(); ?>/uploads/2018/05/Gracie_Biker_0118.jpg" alt="girl riding a bicycle in a christchurch street">
		
		<img src="<?php echo content_url(); ?>/uploads/2018/05/VP_Hipsters_003.jpg" alt="gold bikes and broken cities">
		
		<img src="<?php echo content_url(); ?>/uploads/2018/05/VP_Shoot_2012_0079.jpg" alt="vintage bikes beside a wall">
				
		<img src="<?php echo content_url(); ?>/uploads/2018/05/VP_2013_0027_1.jpg" alt="the vintage peddlers bikes are ready for you">

	</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
