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
			'primary'		=> __( 'Primary Menu', 'text_domain' ),
			'secondary'		=> __( 'Secondary Menu', 'text_domain' ),
			'social'		=> __( 'Social Links Menu', 'text_domain' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery', // I presume this can be removed now with gutenberg but 2019 still has them
			'caption', // I presume this can be removed now with gutenberg but 2019 still has them
		) );

		add_theme_support( 'post-thumbnails' );

	}
endif; // riley_setup
add_action( 'after_setup_theme', 'riley_setup' );

function riley_scripts() {
	wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/app.css');
	wp_enqueue_script('uncompressed', get_template_directory_uri() . '/js/uncompressed.js', array(), false, true); // needs the optional tags to get it in the footer this would be good to add to webpack
	// wp_enqueue_script('bundle', get_template_directory_uri() . '/js/bundle.js'); // webpack manually updated
	wp_register_style( 'myguten-style', get_template_directory_uri() . '/css/gutenberg.css' );
}
add_action( 'wp_enqueue_scripts', 'riley_scripts' );

/**
 * Gutenberg scripts and styles
 * @link https://www.billerickson.net/block-styles-in-gutenberg/
 */
function be_gutenberg_scripts() {
	wp_enqueue_script(
		'be-editor',
		get_stylesheet_directory_uri() . '/js/gutenberg.js',
		array( 'wp-blocks', 'wp-dom' ),
		filemtime( get_stylesheet_directory() . '/js/gutenberg.js' ),
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'be_gutenberg_scripts' );

// Bring in all the additional files
require get_parent_theme_file_path( '/inc/custom-header.php' );
require get_parent_theme_file_path( '/inc/icon-functions.php' ); // these are moving to inline and should be removed when ready // they all load all the time its pretty heavy on a resource
require get_parent_theme_file_path( '/inc/contact-email.php' );
require get_parent_theme_file_path( '/inc/captcha-email.php' ); // working file to deal with captcha v3 can be removed once fixed
require get_parent_theme_file_path( '/inc/captcha-checkbox.php' ); // working file to deal with captcha v3 can be removed once fixed
require get_parent_theme_file_path( '/inc/backend-options.php' );
require get_parent_theme_file_path( '/inc/breadcrumbs.php' );
require get_parent_theme_file_path( '/inc/featured-video.php' );
require get_parent_theme_file_path( '/inc/cats-one-deep.php' );
require get_parent_theme_file_path( '/inc/post-order.php' ); // this might get way too complicated with projects across categories


// Change the email that root level mail is sent from
add_filter( 'wp_mail_from', function( $email ) {
	return 'riley@rileybathurst.com'; // these should be variables - site email
	// echo bloginfo ('admin_email'); need to do some checks with this first
});

add_filter( 'wp_mail_from_name', function( $name ) {
	return 'Riley Bathurst'; // these should be variables - site name
	// bloginfo( 'name' ); need to do some checks with this first
});


// test I'm going to use this data to order the posts in categpries
function myguten_register_post_meta() {
    register_post_meta( 'post', 'myguten_meta_block_field', array(
        'show_in_rest' => true,
        'single' => true,
        'type' => 'string',
    ) );
}
add_action( 'init', 'myguten_register_post_meta' );

function myguten_enqueue() {
    wp_enqueue_script(
        'myguten-script',
        get_template_directory_uri() . '/myguten.js',
        array( 'wp-blocks', 'wp-element', 'wp-components' )
    );
}
add_action( 'enqueue_block_editor_assets', 'myguten_enqueue' );

/* // put this meta content to use
function myguten_content_filter( $content ) {
    $value = get_post_meta( get_the_ID(), 'myguten_meta_block_field', true );
    if ( $value ) {
        return sprintf( "%s <h4> %s </h4>", $content, esc_html( $value ) );
    } else {
        return $content;
    }
}
add_filter( 'the_content', 'myguten_content_filter' ); */






/* Adding 'menu order' column to custom post type admin screen
https://wordpress.stackexchange.com/questions/43970/adding-menu-order-column-to-custom-post-type-admin-screen
 */

/*
 add order column to admin listing screen for header text

function add_new_header_text_column($header_text_columns) {
	$header_text_columns['menu_order'] = "Order";
	return $header_text_columns;
}
add_action('manage_header_text_post_columns', 'add_new_header_text_column');


 show custom order column values

function show_order_column($name){
	global $post;

	switch ($name) {
		case 'menu_order':
		echo 'her';
	 }
  }
add_action('manage_header_text_posts_custom_column','show_order_column');


 make column sortable

function order_column_register_sortable($columns){
	$columns['menu_order'] = 'menu_order';
	return $columns;
}
add_filter('manage_edit-header_text_sortable_columns','order_column_register_sortable');
*/



function my_add_new_columns($columns) {
    $post_type = get_post_type();
    if ( $post_type == 'post' ) {
        $new_columns = array(
            'order' => esc_html__( 'Order', 'text_domain' ),
        );
        return array_merge($columns, $new_columns);
    }
}
add_filter( 'manage_posts_columns',  'my_add_new_columns' );

add_action( 'manage_posts_custom_column', 'order_column', 10, 2); // Not a filter
function order_column( $column, $post_id ) {
  if ( 'order' === $column ) {
    echo get_post_meta(  $post_id, 'myguten_meta_block_field', true ); // this is made in a block and should be all together
  }
}





/* // custom post types
// Im not currently using these but for right now they are ok to leave just commented out as if I dont go SSG soon I should do something with these.
function wp_custom_post_type()
{
	register_post_type('riley_portfolio',
		array(
			'labels'		=> array(
				'name'			=> __('Portfolio'),
				'singular_name'	=> __('Portfolio'),
			),
			'public'		=> true,
			'has_archive'	=> true,
			'rewrite'		=> array( 'slug' => 'portfolio' ),
			'show_in_rest'	=> true,
			'supports'		=> array(
								'title',
								'editor',
								'revisions',
								'excerpt',
								'page-attributes', //used for order
								'thumbnail',
								// 'category', // this doesnt work and I would like it
								// 'tag' // nope
							)
		)
	);
}
add_action('init', 'wp_custom_post_type');

// try and add some additional functionality thats outside the regular supports
function portfolio_category() {
	// add_post_type_support ('riley_portfolio', 'title'); // this works if its removed from above so I presume I can make up new ones
	add_post_type_support ('riley_portfolio', 'category', 'something' ); // might need to figure out the args with this?
}
add_action('init', 'portfolio_category'); */