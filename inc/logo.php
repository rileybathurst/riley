<?php
function rileylogo_setup_post_type() {
	register_post_type( 'riley_logo',
	array(
		'labels'			=> array(
			'name'			=> __('Logos'),
			'singular_name'	=> __('Logos'),
		),
		'public'			=> true,
		'has_archive'		=> true,
		'show_in_rest' 		=> true,
		'rewrite'			=> array( 'slug' => 'logos' ),
		'supports'			=> array( 
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			)
	) ); 
} 
add_action( 'init', 'rileylogo_setup_post_type' );

/**
 * Activate the plugin.
 */
function rileylogo_activate() { 
    // Trigger our function that registers the custom post type plugin.
    rileylogo_setup_post_type(); 
    // Clear the permalinks after the post type has been registered.
    flush_rewrite_rules(); 
}
register_activation_hook( __FILE__, 'rileylogo_activate' );

/**
 * Deactivation hook.
 */
function rileylogo_deactivate() {
    // Unregister the post type, so the rules are no longer in memory.
    unregister_post_type( 'logos' );
    // Clear the permalinks to remove our post type's rules from the database.
    flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'rileylogo_deactivate' );
