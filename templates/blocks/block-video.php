<?php
$anchor = get_field('block_anchor');
$heading = get_field('heading');
$content = get_field('content');
$videourl = get_field('video');
$narrow = get_field('narrow_content_row');
$spacing = get_field('vertical_spacing');

switch ( $spacing ) {
	case 'top':
		$padding = 'top-padding';
		break;
	case 'bottom':
		$padding = 'bottom-padding';
		break;
	case 'both':
		$padding = 'top-bottom-padding';
		break;
	default:
		$padding = '';
}
?>
<section<?php if ( $anchor ): echo ' id="'; echo $anchor; echo '"'; endif; ?> class="video_container<?php if ( $padding ): echo ' '; echo $padding; endif; ?>">
	<div<?php if ( $narrow ): echo ' class="max-width-800"'; else: echo ' class="row-width-1280"'; endif; ?>>
		
		<?php 
		if ( $heading ) {
		echo '<h2>' . $heading . '</h2>';
		}
		if ( $content ) {
		echo '
		<div style="margin-bottom: 1em;">' . 
			$content . '
		</div>';
		}	
		
		if ( $videourl ) {
		echo '
		<div class="video_iframe_container">';
			echo $videourl;
		echo '
		</div>';
		} 
		?>
		
	</div>
</section>