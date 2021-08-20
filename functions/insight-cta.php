<?php 
function insight_cta() {
	$external = get_field('external_link', get_the_ID());
	$internal = get_field('internal_page', get_the_ID());
	$download = get_field('file_upload', get_the_ID());
	$label = get_field('label', get_the_ID());
	
	$html = '<a href="' . $external || $internal || $download . '">' . $label . '</a>';
	echo $html;
}