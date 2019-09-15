wp.domReady( function() {
	wp.blocks.registerBlockStyle( 'core/heading', {
		name: 'default',
		label: 'Default',
		isDefault: true,
	} );

	wp.blocks.registerBlockStyle( 'core/heading', {
		name: 'box-title',
		label: 'Box Title',
	} );

	wp.blocks.registerBlockStyle( 'core/separator', {
		name: 'mega-hr',
		label: 'Mega',
	} );
} );