<?php
$verticalspacing = get_field('section_padding');
$blockanchor = get_field('block_id');
$width = get_field('two_third_one_third_content_width');
$verticalalignment = get_field('vertical_alignment');
$heading = get_field('heading');
$gutterspacing = get_field('gutter_spacing');

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

switch ( $gutterspacing ) {
	case 'wide':
		$gutters = 'gutter_wide';
		break;
	case 'wider':
		$gutters = 'gutter_wider';
		break;
	default:
		$gutters = '';
} ?>

<section class="two-third-one-third row-width-1280<?php if ( $spacing ): echo ' '; echo $spacing; endif; ?>">
		
	<?php if ( $heading ): ?>
	<h2 class="max-width-60"><?php echo $heading ?></h2>
	<?php endif; ?>
		
	<div<?php if ( $blockanchor ): echo ' id="'; echo $blockanchor; echo '"'; endif; ?> class="row<?php if ( $align ): echo ' '; echo $align; endif; if ( $align ): echo ' '; echo $width; endif; if ( $gutters ): echo ' '; echo $gutters; endif; if ( $align ): echo ' '; echo $align; endif; ?>">
		
		<?php include('inc/two-third-one-third-loop.php'); ?>
		
	</div>
		
</section>