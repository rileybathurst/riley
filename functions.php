<?php

if ( ! function_exists( 'riley_setup' ) ) :
	// Sets up theme defaults and registers support for various WordPress features.
	function riley_setup() {

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		//Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus( array(
			'primary'		=> __( 'Primary Menu', 'text_domain' ),
			'secondary'		=> __( 'Secondary Menu', 'text_domain' ),
			// 'social'		=> __( 'Social Links Menu', 'text_domain' ),
		) );
		
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery', // I presume this can be removed now with gutenberg but 2019 still has them
			'caption', // I presume this can be removed now with gutenberg but 2019 still has them
		) );

		add_theme_support( 'post-thumbnails' );

		// https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#editor-styles
		add_theme_support( 'editor-styles' );
		add_editor_style( '/style-editor.css' );

	}
endif; // riley_setup
add_action( 'after_setup_theme', 'riley_setup', 100 );

function riley_scripts() {
	wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/app.css');
	wp_enqueue_script('uncompressed', get_template_directory_uri() . '/js/uncompressed.js', array(), false, true); // this was named this due to not being webpack
	// wp_enqueue_script('bundle', get_template_directory_uri() . '/dist/bundle.js', array(), false, true); // webpack manually updated
	wp_register_style( 'myguten-style', get_template_directory_uri() . '/css/gutenberg.css' );
}
add_action( 'wp_enqueue_scripts', 'riley_scripts' );

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
require get_parent_theme_file_path( '/inc/category-order.php' );
require get_parent_theme_file_path( '/inc/cats-one-deep.php' );
require get_parent_theme_file_path( '/inc/admin-order.php' );
require get_parent_theme_file_path( '/inc/logo.php' );
require get_parent_theme_file_path( '/inc/remove-emoji.php' );

// Change the email that root level mail is sent from
add_filter( 'wp_mail_from', function( $email ) {
	return 'riley@rileybathurst.com'; // these should be variables - site email
	// echo bloginfo ('admin_email'); need to do some checks with this first
});

add_filter( 'wp_mail_from_name', function( $name ) {
	return 'Riley Bathurst'; // these should be variables - site name
	// bloginfo( 'name' ); need to do some checks with this first
});
