<?php
/**
 * Excludes child terms from the main query on the category archive.
 * https://gist.github.com/CodeProKid/1d21fb7635141491c7c1facd5e99d1ad
 *
 * @param object $query the WP_Query instance
 * @return void
 * @access public
 */
function rk_fix_tax_queries_on_archives( $query ) {
	// Only run this on the main query for the category archive
	if ( ! is_admin() && $query->is_category() && $query->is_main_query() ) {
		// What category is this
		$cat = $query->query_vars['category_name'];
		// Build the new query args
		$tax_query = array(
			array(
				'taxonomy'         => 'category',
				'field'            => 'slug',
				'terms'            => $cat,
				'include_children' => false,
			),
		);
		// Set the new query args to $query->query_vars['tax_query']
		$query->set( 'tax_query', $tax_query );
		// Setting the query args is not enough, we have to create a new tax query object
		// and force feed it to the query
		$query->tax_query = new WP_Tax_Query( $tax_query );
	}
}
add_action( 'parse_tax_query', 'rk_fix_tax_queries_on_archives' );