<?php
$backgroundtype = get_field('background_type');
$bgimg = get_field('background_image');
$bgcolor = get_field('background_color');
$bgvideo = get_field('background_video');
$bgimgoverlay = get_field('background_image_overlay');
$width = get_field('content_width');
$textcolour = get_field('text_colour');
$overlayopacity = get_field('overlay_opacity');
$txtalign = get_field('text_alignment');
$rowwidth = get_field('row_width');
$hide = get_field('hide_block');
$minheight = get_field('min_height');
$vertalign = get_field('vertical_align');
	
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

switch ($vertalign) {
	case 'top':
		$vertalign = '';
		break;
	case 'center':
		$vertalign = 'center';
		break;
	case 'bottom':
		$vertalign = 'flex-end';
		break;
	default:
		$vertalign = '';
}

switch ( $bgcolor ) {
	case 'green':
		$bgcolor = ' brandgreen';
		break;
	case 'green-gradient':
		$bgcolor = ' brandgreengradient';
		break;
	case 'dark-grey':
		$bgcolor = ' branddarkgreybg';
		break;
	case 'grey': 
		$bgcolor = ' brandlightgreybg';
		break;
	default:
		$bgcolor = '';
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
		$textcolour = '';
		break;
	case 'light':
		$textcolour = ' light';
		break;
	default:
		$textcolour = '';
}
switch ( $txtalign ) {
	case 'center':
		$txtalign = ' text-align-center';
		break;
	case 'right':
		$txtalign = ' text-align-right';
		break;
	case 'default':
		$txtalign = '';
		break;
	default:
		$txtalign = '';
} ?>

<section<?php if ( $id ): echo ' id="'; echo $id; echo '"'; endif; ?> class="content-section<?php if ( $textcolour ): echo $textcolour; endif; if ( $bgimg ): echo ' section_has_bg_img'; endif; if ($bgcolor): echo $bgcolor; endif; ?>"<?php if ( $bgimg ): echo ' style="background-image: url('; echo $bgimg; echo ');'; endif; if ($minheight): echo ' min-height: '; echo $minheight; echo ';'; endif; if ($vertalign): echo ' display: flex; align-items: '; echo $vertalign; echo ';'; endif; echo '"'; if ( $hide ): echo 'style="display:none;"'; endif; ?>>
	
	<?php if ( $bgimg ): ?>
	<div style="<?php if ($bgimgoverlay): echo $bgimgoverlay; endif; ?>position: absolute; height: 100%; width: 100%; top: 0; left: 0; opacity: <?php if ( $overlayopacity ): echo $overlayopacity; else: echo '.75'; endif; echo ';'; ?>"></div>
	<?php endif; ?>
	
	<?php if ( $backgroundtype == 'video' ):
	$video = get_field('video');
	$poster = get_field('poster');
	$disableloop = get_field('disable_loop'); ?>
	<video class="content-section-bg-video" src="<?php echo $video ?>" poster="<?php echo $poster ?>"<?php if (!$disableloop): echo ' loop="true"'; endif; ?> playsinline muted>
		<source src="<?php echo $video ?>" type="video/mp4" />
	</video>
	<?php endif; ?>
	
	<div class="bullet-points inner<?php if ( $rowwidth ): echo $rowwidth; endif; if ( $txtalign ): echo ' '; echo $txtalign; endif; ?>">
		<?php include('inc/section-content-loop.php'); ?>
	</div>
	
</section>