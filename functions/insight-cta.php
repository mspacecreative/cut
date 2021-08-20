<?php 
function insight_cta() {
	$external = get_field('external');
	$internal = get_field('internal');
	$download = get_field('download');
	$label = get_field('label');
	
	$html = '<a href="' . $external || $internal || $download . '">' . $label . '</a>';
	echo $html;
}