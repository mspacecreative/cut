<?php
$layouttype = get_field('layout_type');
$verticalalignment = get_field('vertical_alignment');
$verticalspacing = get_field('vertical_spacing');
$bgcolor = get_field('background_colour');
$hideblock = get_field('hide_block');
$textcolour = get_field('text_colour');
$heading = get_field('heading');
$gutterspacing = get_field('gutter_spacing');
$useposttype = get_field('use_post_type_as_content');

// CUSTOM ID
$id = '' . $block['id'];
if ( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}
// CUSTOM CLASS	
$className = '';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}

switch ( $bgcolor ) {
	case 'green':
		$shade = ' brandgreen';
		break;
	case 'green-gradient':
		$shade = ' brandgreengradient';
		break;
	case 'grey': 
		$shade = ' brandlightgreybg';
		break;
	default:
		$shade = '';
}

switch ( $layouttype ) {
	case 'one':
		$layout = 'col col-lg-12 col-md-12 col-sm-12 col-xs-12';
		break;
	case 'two':
		$layout = 'col col-lg-6 col-md-6 col-sm-6 col-xs-12';
		break;
	case 'three':
		$layout = 'col col-lg-4 col-md-4 col-sm-6 col-xs-12';
		break;
	case 'four':
		$layout = 'col col-lg-3 col-md-3 col-sm-6 col-xs-12';
		break;
	case 'five':
		$layout = 'col col-lg-five col-sm-6 col-xs-12';
		break;
	default:
		$layout = 'col col-lg-6 col-md-6 col-sm-6 col-xs-12';
}
switch ( $verticalalignment ) {
	case 'top':
		$align = '';
		break;
	case 'center':
		$align = 'middle-lg middle-md middle-sm';
		break;
	case 'bottom':
		$align = 'bottom-lg bottom-md bottom-sm';
		break;
	default:
		$align = '';
}
switch ( $verticalspacing ) {
	case 'top':
		$spacing = 'top-padding';
		break;
	case 'bottom':
		$spacing = 'bottom-padding';
		break;
	case 'both':
		$spacing = 'top-bottom-padding';
		break;
	default:
		$spacing = '';
}
switch ( $textcolour ) {
	case 'dark':
		$colour = '';
		break;
	case 'light':
		$colour = ' light';
		break;
	default:
		$colour = '';
}
switch ( $gutterspacing ) {
	case 'wide':
		$gutters = 'gutter_wide';
		break;
	case 'wider':
		$gutters = 'gutter_wider';
		break;
	default:
		$gutters = '';
}

if ( $useposttype ) {
	include 'inc/loop-columns.php';
} else {
	include 'inc/loop-columns-acf.php';
}