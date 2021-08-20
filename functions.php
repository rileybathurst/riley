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
			'social'		=> __( 'Social Links Menu', 'text_domain' ),
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
require get_parent_theme_file_path( '/inc/cats-one-deep.php' );
require get_parent_theme_file_path( '/inc/post-order.php' ); // this might get way too complicated with projects across categories
require get_parent_theme_file_path( '/inc/logo.php' ); // this might get way too complicated with projects across categories

// Change the email that root level mail is sent from
add_filter( 'wp_mail_from', function( $email ) {
	return 'riley@rileybathurst.com'; // these should be variables - site email
	// echo bloginfo ('admin_email'); need to do some checks with this first
});

add_filter( 'wp_mail_from_name', function( $name ) {
	return 'Riley Bathurst'; // these should be variables - site name
	// bloginfo( 'name' ); need to do some checks with this first
});

function myguten_enqueue() {
    wp_enqueue_script(
        'myguten-script',
        get_template_directory_uri() . '/myguten.js',
        array( 'wp-blocks', 'wp-element', 'wp-components' )
    );
}
add_action( 'enqueue_block_editor_assets', 'myguten_enqueue' );

// put this meta content to use
function myguten_content_filter( $content ) {
    $value = get_post_meta( get_the_ID(), 'myguten_meta_block_field', true );
    if ( $value ) {
        return sprintf( "%s <h4> %s </h4>", $content, esc_html( $value ) );
    } else {
        return $content;
    }
}
add_filter( 'the_content', 'myguten_content_filter' );

add_action( 'manage_posts_custom_column', 'order_column', 10, 2); // Not a filter
function order_column( $column, $post_id ) {
  if ( 'order' === $column ) {
    echo get_post_meta(  $post_id, 'myguten_meta_block_field', true ); // this is made in a block and should be all together
  }
}

// try and add some additional functionality thats outside the regular supports
function portfolio_category() {
	// add_post_type_support ('riley_portfolio', 'title'); // this works if its removed from above so I presume I can make up new ones
	add_post_type_support ('riley_portfolio', 'category', 'something' ); // might need to figure out the args with this?
}
add_action('init', 'portfolio_category');

// REMOVE WP EMOJI
// https://www.denisbouquet.com/remove-wordpress-emoji-code/
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// for some reason this breaks adding new columns
/* function my_add_new_columns($columns) {
    $post_type = get_post_type();
    if ( $post_type == 'post' ) {
        $new_columns = array(
            'order' => esc_html__( 'Order', 'text_domain' ),
        );
        return array_merge($columns, $new_columns);
    }
}
add_filter( 'manage_posts_columns',  'my_add_new_columns' ); */