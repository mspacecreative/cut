<?php
$imageoverlay = get_field('cta_background_image_overlay');
$backgroundimage = get_field('background_image');
$backgroundcolour = get_field('background_colour');
$bgimgposition = get_field('background_image_position');
$narrow = get_field('narrow_column');
$txtalign = get_field('text_alignment');
$overlayopacity = get_field('overlay_opacity');
$textcolor = get_field('text_color');

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
switch ( $imageoverlay ) {
	case 'blue':
		$overlay = ' blue-overlay light';
		break;
	case 'green':
		$overlay = ' green-overlay';
		break;
	case 'white':
		$overlay = ' white-overlay';
		break;
	default:
		$overlay = '';
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

<section class="top-bottom-padding banner<?php if ( $backgroundcolour ): echo $backgroundcolour; endif; if ( $color ): echo $color; endif; ?>"<?php if ( $backgroundimage ): echo ' style="background-image: url('; echo $backgroundimage; echo ');'; if ( $position ): echo ' background-position: '; echo $position; echo ';'; endif; echo ' background-repeat: no-repeat; background-size: cover;"'; endif; ?>>

	<div class="<?php if ( $tint ): echo $tint; endif; ?>" style="position: absolute; height: 100%; width: 100%; top: 0; left: 0; opacity: <?php if ( $overlayopacity ): echo $overlayopacity; endif; ?>"></div>

	<div data-aos="fade-up" class="inner<?php if ( $narrow ): echo ' max-width-800'; endif; if ( $align ): echo $align; endif; ?>">
		<?php include('inc/block-cta-text-size.php'); ?>
		<?php include('inc/cta-button-dark.php'); ?>
	</div>
	
</section>