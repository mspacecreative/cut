<?php 
function insight_cta() {
	$external = get_field('external_link', get_the_ID());
	$internal = get_field('internal_page', get_the_ID());
	$download = get_field('file_upload', get_the_ID());
	$label = get_field('label', get_the_ID());
	$html = '';
	
	if ($external) {
		$html = '<p style="align-self: flex-start;"><a class="button solid" href="' . $external . '" target="_blank">' . $label . '</a></p>';
	} elseif ($internal) {
		$html = '<p style="align-self: flex-start;"><a class="button solid" href="' . $external . '">' . $label . '</a></p>';
	} elseif ($download) {
		$html = '<p style="align-self: flex-start;"><a class="button solid" href="' . $download . '" target="_blank">' . $label . '</a></p>';
	}
	
	echo $html;
}