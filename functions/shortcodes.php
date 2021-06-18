<?php

// SOCIAL MEDIA BUTTONS
function socialMedia() {
	ob_start();
		get_template_part('templates/social-media-buttons');
	return ob_get_clean();
}
add_shortcode( 'social_media', 'socialMedia' );