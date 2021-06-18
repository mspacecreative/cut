<?php

add_filter( 'allowed_block_types', 'misha_allowed_block_types' );
 
function misha_allowed_block_types( $allowed_blocks ) {
 
	return array(
		'core/image',
		'core/paragraph',
		'core/heading',
		'core/list',
		'core/shortcode',
		'core/spacer',
		'core/html',
		'core/freeform',
		'acf/hero',
		'acf/content',
		'acf/read-more',
		'acf/half-and-half-img-text',
		'acf/variable-columns',
		'acf/carousel',
		'acf/grid',
		'acf/testimonial',
		'acf/cta',
		'acf/before-after',
		'acf/image-text',
		'acf/cta-button',
		'acf/slider',
		'acf/columns',
		'acf/splash',
	);
 
}