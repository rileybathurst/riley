<?php

function wporg_custom_post_type()
{
	register_post_type('rileylogo',
		array(
			'labels'		=> array(
				'name'			=> __('Logos'),
				'singular_name'	=> __('Logos'),
			),
			'public'			=> true,
			'has_archive'	=> true,
			'show_in_rest' => true,
			'rewrite'		=> array( 'slug' => 'logos' ),
			'supports'		=> array( 
				'title',
				'editor',
				'author',
				'thumbnail',
				'excerpt',
				// 'comments' 
				)
		)
	);
}
add_action('init', 'wporg_custom_post_type');