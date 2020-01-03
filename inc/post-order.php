<?php
// https://stackoverflow.com/questions/27602116/how-to-add-order-column-in-page-admin-wordpress
add_filter('manage_posts_columns', 'my_columns');
function my_columns($columns) {
	$columns['order'] = 'Order';
	return $columns;
}

add_action('manage_posts_custom_column',  'my_show_columns');
function my_show_columns($name) {
	global $post;

	switch ($name) {
		case 'order':
			$views = $post->menu_order;
			echo $views;
			break;
	}
}