<?php

if ( ! function_exists( 'riley_setup' ) ) :
/* Sets up theme defaults and registers support for various WordPress features. */
function riley_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/* Let WordPress manage the document title. */
	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'     => __( 'Primary Menu', 'text_domain' ),
		'secondary'     => __( 'Secondary Menu', 'text_domain' ),
		'social'      => __( 'Social Links Menu', 'text_domain' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'post-thumbnails' );

}
endif; // riley_setup
add_action( 'after_setup_theme', 'riley_setup' );

function montogomery_scripts() {
	// Foundation style.
	wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/app.css' );
}
add_action( 'wp_enqueue_scripts', 'montogomery_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );

/**
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path( '/inc/icon-functions.php' ); // these are moving to inline and should be removed when ready
require get_parent_theme_file_path( '/inc/contact-email.php' );
require get_parent_theme_file_path( '/inc/backend-options.php' );
require get_parent_theme_file_path( '/inc/breadcrumbs.php' );


// Change the email that root level mail is sent from
add_filter( 'wp_mail_from', function( $email ) {
	return 'riley@rileybathurst.com';
});

add_filter( 'wp_mail_from_name', function( $name ) {
	return 'Riley Bathurst';
});

/* Fire our meta box setup function on the post editor screen. */
add_action( 'load-post.php', 'featured_video_meta_boxes_setup' );
add_action( 'load-post-new.php', 'featured_video_meta_boxes_setup' );

/* Meta box setup function. */
function featured_video_meta_boxes_setup() {

  /* Add meta boxes on the 'add_meta_boxes' hook. */
  add_action( 'add_meta_boxes', 'video_add_post_meta_boxes' );

  /* Save post meta on the 'save_post' hook. */
  add_action( 'save_post', 'video_save_meta', 10, 2 );
}

/* Create one or more meta boxes to be displayed on the post editor screen. */
function video_add_post_meta_boxes() {

  add_meta_box(
	'video-post',                     // Unique ID
	esc_html__( 'Featuured Video', 'example' ),  // Title
	'featured_video_meta_box',        // Callback function
	'post',                                 // Admin page (or post type)
	'side',                                 // Context
	'default'                               // Priority
  );
}

/* Display the post meta box. */
function featured_video_meta_box( $post ) { ?>

  <?php wp_nonce_field( basename( __FILE__ ), 'featured_video_nonce' ); ?>

  <p>
	<label for="video-post"><?php _e( "Featured Video similar to Featured Image.", 'example' ); ?></label>
	<br />
	<input class="widefat" type="text" name="video-post" id="video-post" value="<?php echo esc_attr( get_post_meta( $post->ID, 'featured_video', true ) ); ?>" size="30" />
  </p>
<?php }

/* Save the meta box's post metadata. */
function video_save_meta( $post_id, $post ) {

  /* Verify the nonce before proceeding. */
  if ( !isset( $_POST['featured_video_nonce'] ) || !wp_verify_nonce( $_POST['featured_video_nonce'], basename( __FILE__ ) ) )
	return $post_id;

  /* Get the post type object. */
  $post_type = get_post_type_object( $post->post_type );

  /* Check if the current user has permission to edit the post. */
  if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
	return $post_id;

  /* Get the posted data and sanitize it for use as an HTML class. */
  $new_meta_value = ( $_POST['video-post'] );

  /* Get the meta key. */
  $meta_key = 'featured_video';

  /* Get the meta value of the custom field key. */
  $meta_value = get_post_meta( $post_id, $meta_key, true );

  /* If a new meta value was added and there was no previous value, add it. */
  if ( $new_meta_value && '' == $meta_value )
	add_post_meta( $post_id, $meta_key, $new_meta_value, true );

  /* If the new meta value does not match the old value, update it. */
  elseif ( $new_meta_value && $new_meta_value != $meta_value )
	update_post_meta( $post_id, $meta_key, $new_meta_value );

  /* If there is no new meta value but an old value exists, delete it. */
  elseif ( '' == $new_meta_value && $meta_value )
	delete_post_meta( $post_id, $meta_key, $meta_value );
}



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
