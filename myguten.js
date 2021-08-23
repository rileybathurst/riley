// start by documenting what I was doing with this or was it just a test?
(function (wp) {
	var el = wp.element.createElement;
	var registerBlockType = wp.blocks.registerBlockType;
	var TextControl = wp.components.TextControl;

	registerBlockType('myguten/order', {
		title: 'Order',
		icon: 'ol',
		category: 'common',

		attributes: {
			blockValue: {
				type: 'string',
				source: 'meta',
				meta: 'myguten_order_block_field'
			}
		},

		edit: function (props) {
			var className = props.className;
			var setAttributes = props.setAttributes;

			function updateBlockValue(blockValue) {
				setAttributes({ blockValue });
			}

			return el(
				'div',
				{ className: className },
				el(TextControl, {
					label: 'Order Block Field',
					value: props.attributes.blockValue,
					onChange: updateBlockValue
				})
			);
		},

		// No information saved to the block
		// Data is saved to post meta via attributes
		save: function () {
			return null;
		}
	});
})(window.wp);