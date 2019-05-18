<?php

function custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'custom_header_args', array(
		'default-image'      => get_parent_theme_file_uri( '/assets/header.png' ),
		'flex-height'        => true,
		'video'              => true,
	) ) );

	register_default_headers( array(
		'default-image' => array(
			'url'           => '%s/assets/images/header.jpg',
			'thumbnail_url' => '%s/assets/images/header.jpg',
			'description'   => __( 'Default Header Image' ),
		),
	) );
}
add_action( 'after_setup_theme', 'custom_header_setup' );