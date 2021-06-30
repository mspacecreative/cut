<?php
$bgimg = get_field('background_image');
$bgcolor = get_field('background_color');
$blockanchor = get_field('block_anchor');
$bgimgoverlay = get_field('background_image_overlay');
$width = get_field('content_width');
$textcolour = get_field('text_colour');
$txtalign = get_field('text_alignment');
$rowwidth = get_field('row_width');
$hide = get_field('hide_block');
	
switch ( $bgimgoverlay ) {
	case 'dark':
		$tint = 'dark-overlay light';
		break;
	case 'light':
		$tint = 'light-overlay';
		break;
	default:
		$tint = '';
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
switch ( $textcolour ) {
	case 'dark':
		$text = '';
		break;
	case 'light':
		$text = 'light';
		break;
	default:
		$text = '';
}
switch ( $bgcolor ) {
	case 'blue':
		$bg = 'brandbluebg light';
		break;
	case 'grey':
		$bg = 'brandlightgreybg';
		break;
	default:
		$bg = '';
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
}
switch ( $bgcolor ) {
	case 'blue':
		$shade = ' brandbluebg light';
		break;
	case 'green':
		$shade = ' brandgreenbg';
		break;
	case 'grey':
		$shade = ' brandlightgreybg';
		break;
	default:
		$shade = '';
} ?>

<section<?php if ( $blockanchor ): echo ' id="'; echo $blockanchor; echo '"'; endif; ?> class="<?php if ( $align ): echo $align; echo ' '; endif; if ( $bg ): echo $bg; echo ' '; endif; if ( $bgimg ): echo 'bg-img-cover'; endif; if ( $tint ): echo ' '; echo $tint; endif; if ( $shade ): echo $shade; endif; ?>content-section"<?php if ( $bgimg ): echo ' style="background-image: url('; echo $bgimg; echo ');'; echo '"'; endif; if ( $hide ): echo 'style="display:none;"'; endif; ?>>
	
	<div class="bullet-points inner<?php if ( $rowwidth ): echo $rowwidth; endif; if ( $text ): echo ' '; echo $text; endif; ?>">
		<?php include('inc/section-content-loop.php'); ?>
	</div>
	
</section>