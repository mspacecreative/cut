<?php 
function cta_buttons() {
$flex = get_field('inline_buttons');
$btnalignment = get_field('button_alignment');
switch ($btnalignment) {
	case 'left':
		$btnalignment = '';
		break;
	case 'center':
		$btnalignment = ' display-flex center-lg center-md center-sm center-xs';
		break;
	case 'right':
		$btnalignment = ' display-flex end-lg end-md end-sm end-xs';
		break;
	default:
		$btnalignment = '';
}
// CTA BUTTONS
if ( have_rows('cta_buttons') ): ?>
<ul class="cta-button-container<?php if ( $flex ): echo ' display-flex'; endif; if ($btnalignment): echo $btnalignment; endif; ?>">
						
<?php while ( have_rows('cta_buttons') ): the_row();
						
// VARS
$linktype = get_sub_field('link_type');
$label = get_sub_field('label');
$btncolor = get_sub_field('button_colour');
						
switch ($btncolor) {
	case 'transparent':
		$btncolor = '';
		break;
	case 'light-green':
		$btncolor = ' btn-lightgreen';
		break;
	case 'dark-green':
		$btncolor = ' btn-darkgreen';
		break;
	case 'dark-grey':
		$btncolor = ' btn-darkgrey';
		break;
	case 'light-grey':
		$btncolor = ' btn-lightgrey';
		break;
	case 'grey':
		$btncolor = ' btn-grey';
		break;
	default:
		$btncolor = '';
}
switch ( $linktype ) {
	case 'internal':
		$result = get_sub_field('page_link');
		break;
	case 'external':
		$result = get_sub_field('external_url');
		break;
	case 'anchor':
		$result = get_sub_field('anchor_link');
		break;
	case 'upload':
		$result = get_sub_field('upload_file');
		break;
	default:
		$result = '';
} ?>
						
	<li>
		<a <?php if ( $linktype == 'anchor' ): echo 'href="#'; echo $result; echo '"'; else: echo 'href="'; echo $result; echo '"'; endif; ?> class="button<?php if ($btncolor): echo $btncolor; endif; ?>"<?php if ($linktype == 'external'): echo ' target="_blank"'; endif; ?>><?php if ( $label ): echo $label; else: echo esc_html_e('Learn more'); endif; ?></a>
	</li>
						
<?php endwhile; ?>
						
</ul>
<?php endif;
}