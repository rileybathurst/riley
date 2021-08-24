<?php
// Show an order in the admin menu so I can arrange the sticky posts which I need
add_filter('manage_posts_columns', 'my_columns');
function my_columns($columns) {
	$columns['order'] = 'Order';
	return $columns;
}

add_action('manage_posts_custom_column', 'my_show_columns');
function my_show_columns($order) {
	global $post;

	switch ($order) {
		case 'order':
			echo get_post_meta( $post->ID, 'category_order', true );
		break;
	}
}
?>