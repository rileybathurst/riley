<?php
// https://www.codexworld.com/wordpress-how-to-display-breadcrumb-without-plugin/
// adapted by Riley
function get_breadcrumb() {
	echo '<a href="'.home_url().'" rel="nofollow">Home</a>&emsp;&#187;&emsp;';
	if (is_category()) {
		echo single_cat_title('');
	} elseif (is_single()) {
		echo the_category( '&emsp;&#187;&emsp;' )."&emsp;&#187;&emsp;";
		echo the_title();
	} elseif (is_page()) {
		echo the_title();
	} elseif (is_search()) {
		echo "Search Results for... ";
		echo '"<em>';
		echo the_search_query();
		echo '</em>"';
	} elseif (is_404()) {
		echo "missing?";
	}
}
