<?php
$imageoverlay = get_field('cta_background_image_overlay');
$backgroundimage = get_field('background_image');
$backgroundcolour = get_field('background_colour');
$bgimgposition = get_field('background_image_position');
$narrow = get_field('narrow_column');
$txtalign = get_field('text_alignment');
$bgimgoverlay = get_field('background_image_overlay');
$overlayopacity = get_field('overlay_opacity');
$textcolor = get_field('text_color');
$rowwidth = get_field('row_width');

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

switch ( $bgimgposition ) {
	case 'top':
		$position = ' top center';
		break;
	case 'bottom':
		$position = ' bottom center';
		break;
	case 'center':
		$position = ' center center';
		break;
	default:
		$position = 'center center';
}
switch ( $rowwidth ) {
	case '800':
		$rowwidth = ' max-width-800';
		break;
	case '1080':
		$rowwidth = ' max-width-1080';
		break;
	case '1280':
		$rowwidth = ' max-width-1280';
		break;
	default:
		$rowwidth = '';
}
switch ( $textcolor ) {
	case 'light':
		$color = ' light';
		break;
	case 'dark':
		$color = ' dark';
		break;
	default: ' dark';
}
switch ( $imageoverlay ) {
	case 'blue':
		$tint = 'blue-overlay';
		break;
	case 'green':
		$tint = 'green-overlay';
		break;
	case 'white':
		$tint = 'white-overlay';
		break;
	default:
		$tint = '';
}
switch ( $bgimgoverlay ) {
	case 'dark':
		$bgimgoverlay = 'background-color: #000; ';
		break;
	case 'light':
		$bgimgoverlay = 'background-color: #fff; ';
		break;
	default:
		$bgimgoverlay = '';
}
switch ( $backgroundcolour ) {
	case 'green':
		$backgroundcolour = ' brandgreen';
		break;
	case 'green-gradient':
		$backgroundcolour = ' brandgreengradient';
		break;
	case 'grey': 
		$backgroundcolour = ' brandlightgreybg';
		break;
	default:
		$backgroundcolour = '';
}
switch ( $txtalign ) {
	case 'center':
		$align = ' text-align-center';
		break;
	case 'right':
		$align = ' text-align-right';
		break;
	case 'default':
		$align = '';
		break;
	default:
		$align = '';
} ?>

<section<?php if ( $id ): echo ' id="'; echo $id; echo '"'; endif; ?> class="top-bottom-padding banner<?php if ( $backgroundcolour ): echo $backgroundcolour; endif; if ( $color ): echo $color; endif; if ( $className ): echo esc_attr($className); endif; ?>"<?php if ( $backgroundimage ): echo ' style="background-image: url('; echo $backgroundimage; echo ');'; if ( $position ): echo ' background-position: '; echo $position; echo ';'; endif; echo ' background-repeat: no-repeat; background-size: cover;"'; endif; ?>>

	<div class="<?php if ( $tint ): echo $tint; endif; ?>" style="<?php if ($bgimgoverlay): echo $bgimgoverlay; endif ; ?>position: absolute; height: 100%; width: 100%; top: 0; left: 0; opacity: <?php if ( $overlayopacity ): echo $overlayopacity; else: '.75'; echo ';'; endif; ?>"></div>

	<div data-aos="fade-up" class="inner<?php if ( $rowwidth ): echo $rowwidth; endif; if ( $align ): echo $align; endif; ?>">
		<?php include('inc/block-cta-text-size.php'); ?>
		<?php include('inc/cta-button-dark.php'); ?>
	</div>
	
</section>