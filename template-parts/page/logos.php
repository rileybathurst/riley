<?php

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
