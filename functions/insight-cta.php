<?php 
function insight_cta() {
	$external = get_field('external_link', get_the_ID());
	$internal = get_field('internal_page', get_the_ID());
	$download = get_field('file_upload', get_the_ID());
	$label = get_field('label', get_the_ID());
	$html = '';
	
	if ($external) {
		$html = '<a class="button" href="' . $external . '" target="_blank">' . $label . '</a>';
	} elseif ($internal) {
		$html = '<a class="button" href="' . $external . '">' . $label . '</a>';
	} elseif ($download) {
		$html = '<a class="button" href="' . $download . '" target="_blank">' . $label . '</a>';
	}
	
	echo $html;
}