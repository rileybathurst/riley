<!-- php

// query for events
$args = [
	'post_type'			=> 'rileylogo',
	'posts_per_page'	=> 5,
];

// run the events in a loop this doesnt print anything just builds an array
$the_query = new WP_Query($args);

if ( $the_query->have_posts() ) {
    echo '<section class="logos">';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo the_post_thumbnail();
    }
    echo '</section>';
}

?> -->


<h3 class="h3__clamped page-width">Companies I have worked with</h3>
<ul class="logos">
    <!-- wine enthusiast skinny logo is kinda terrible maybe I should skip it small -->
    <li class="show-for-large">
    <picture>
    <img src="<?php echo content_url(); ?>/uploads/2021/08/wine-enthusiast-logo-1.png" alt="wine enthusiast" />
    </picture>
    </li>

    <li>
    <picture>
        <source srcset="<?php echo content_url(); ?>/uploads/2021/08/Monster_Energy_logo-1.png" media="(min-width: 64rem)" />
        <img src="<?php echo content_url(); ?>/uploads/2021/09/Monster_Energy_logo-square.png" alt="" />    
    </picture>
    </li>

    <li>
        <picture>
            <source srcset="<?php echo content_url(); ?>/uploads/2021/08/macpac-1.png" media="(min-width: 64rem)" />
            <img src="<?php echo content_url(); ?>/uploads/2021/09/macpac-square.png" alt="" />
        </picture>
    </li>

    <li>
        <picture>
            <source srcset="<?php echo content_url(); ?>/uploads/2021/08/msp_logo-1.png" media="(min-width: 64rem)" />
            <img src="<?php echo content_url(); ?>/uploads/2021/09/msp_logo-square.png" alt="" />    
        </picture>
    </li>

    <li>
        <picture>
            <source srcset="<?php echo content_url(); ?>/uploads/2021/09/Eagle.png"
                media="(min-width: 64rem)">
            <img src="<?php echo content_url(); ?>/uploads/2021/09/Eagle-squre.png" alt="" />
    </picture>
    </li>

</ul>