<?php 
function insight_cta() {
	$external = get_field('external_link');
	$internal = get_field('internal_page');
	$download = get_field('file_upload');
	$label = get_field('label');
	
	$html = '<a href="' . $external || $internal || $download . '">' . $label . '</a>';
	echo $html;
}