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


// Change the email that root level mail is sent from
add_filter( 'wp_mail_from', function( $email ) {
	return 'riley@rileybathurst.com'; // these should be variables - site email
	// echo bloginfo ('admin_email'); need to do some checks with this first
});

add_filter( 'wp_mail_from_name', function( $name ) {
	return 'Riley Bathurst'; // these should be variables - site name
	// bloginfo( 'name' ); need to do some checks with this first
});


// test
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
