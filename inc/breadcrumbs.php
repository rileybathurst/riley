<?php
// https://www.codexworld.com/wordpress-how-to-display-breadcrumb-without-plugin/
// adapted by Riley
function get_breadcrumb() {
	echo '<a href="'.home_url().'" rel="nofollow">Home</a>&emsp;&#187;&emsp;';
	if (is_category()) {
		echo single_cat_title('');

	// single
	// this is picking up attachments
	} elseif (is_single()) {
		if (isset($_GET['c'])) { // if I have come from a category page keep it short
			$incoming = $_GET['c'];
			echo $incoming;
			echo '&emsp;&#187;&emsp;';
		} else {
			if (the_category() != '') {
				echo the_category( '&emsp;&#187;&emsp;' )."&emsp;&#187;&emsp;";
			}
		}
		echo the_title();
	} elseif (is_page()) {
		echo the_title();
	} elseif (is_search()) {
		echo "Search Results for... ";
		echo '"<em>';
		echo the_search_query();
		echo '</em>"';
	} elseif(is_attachment()) {

		echo "hey";

		echo "Attachment";
	} elseif (is_404()) {
		echo "missing?";
	} else {
		echo "test";
	}
}

// categories should only match to an array include the top level