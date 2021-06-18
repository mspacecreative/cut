<?php 
$padding = get_field('section_padding_section_padding');
$margin = get_field('section_margin_section_margin');
$width = get_field('content_width');
$textcolour = get_field('text_color_text_color');
$innerpadding = get_field('extra_inner_padding');
	
if ( $width && $innerpadding && $margin == 'both' && $textcolour == 'light' ): ?>
<div class="width-800 extra-top-bottom-padding top-bottom-margin light clear">

<?php elseif ( $innerpadding && $margin == 'both' && $textcolour == 'light' ): ?>
<div class="extra-top-bottom-padding top-bottom-margin light clear">
	
<?php elseif ( $width && $innerpadding && $padding == 'both' && $margin == 'bottom' && $textcolour == 'light' ): ?>
<div class="width-800 extra-top-bottom-padding bottom-margin light clear">
	
<?php elseif ( $width && $innerpadding && $margin == 'bottom' && $textcolour == 'light' ): ?>
<div class="width-800 extra-top-bottom-padding bottom-margin light clear">

<?php elseif ( $width && $innerpadding && $padding == 'both' && $margin == 'bottom' ): ?>
<div class="width-800 extra-top-bottom-padding bottom-margin clear">

<?php elseif ( $width && $innerpadding && $margin == 'bottom' ): ?>
<div class="width-800 extra-top-bottom-padding bottom-margin clear">

<?php elseif ( $innerpadding && $margin == 'top' && $textcolour == 'light' ): ?>
<div class="extra-top-bottom-padding top-margin light clear">

<?php elseif ( $width && $innerpadding && $padding == 'both' && $margin == 'bottom' && $textcolour == 'light' ): ?>
<div class="width-800 extra-top-bottom-padding bottom-margin light clear">

<?php elseif ( $width && $padding == 'both' && $margin == 'bottom' && $textcolour == 'light' ): ?>
<div class="width-800 top-bottom-padding bottom-margin light clear">

<?php elseif ( $width && $padding == 'both' && $margin == 'bottom' ): ?>
<div class="width-800 top-bottom-padding bottom-margin clear">

<?php elseif ( $width && $padding == 'both' && $innerpadding && $textcolour == 'light' ): ?>
<div class="width-800 extra-top-bottom-padding light clear">

<?php elseif ( $width && $padding == 'both' && $innerpadding && $textcolour == 'light' ): ?>
<div class="width-800 extra-top-bottom-padding light clear">

<?php elseif ( $width && $padding == 'top' && $margin == 'top' && $textcolour == 'light' ): ?>
<div class="width-800 top-padding top-margin light clear">

<?php elseif ( $width && $padding == 'top' && $margin == 'top' ): ?>
<div class="width-800 top-padding top-margin clear">

<?php elseif ( $width && $padding == 'both' && $innerpadding ): ?>
<div class="width-800 extra-top-bottom-padding clear">

<?php elseif ( $width && $innerpadding && $textcolour == 'light' ): ?>
<div class="width-800 extra-top-bottom-padding light clear">

<?php elseif ( $width && $padding == 'both' && $textcolour == 'light' ): ?>
<div class="width-800 top-bottom-padding light clear">

<?php elseif ( $width && $padding == 'both' ): ?>
<div class="width-800 top-bottom-padding clear">

<?php elseif ( $width && $innerpadding ): ?>
<div class="width-800 extra-top-bottom-padding clear">

<?php elseif ( $width && $innerpadding && $margin == 'both'): ?>
<div class="width-800 extra-top-bottom-padding top-bottom-margin clear">

<?php elseif ( $innerpadding && $margin == 'both'): ?>
<div class="extra-top-bottom-padding top-bottom-margin clear">

<?php elseif ( $width && $padding == 'both' && $margin == 'both' && $textcolour == 'light' ): ?>
<div class="width-800 top-bottom-padding top-bottom-margin light clear">

<?php elseif ( $width && $padding == 'both' && $margin == 'top' && $textcolour == 'light' ): ?>
<div class="width-800 top-bottom-padding top-margin light clear">

<?php elseif ( $width && $padding == 'both' && $margin == 'bottom' && $textcolour == 'light' ): ?>
<div class="width-800 top-bottom-padding top-margin light clear">

<?php elseif ( $width && $padding == 'both' && $margin == 'bottom' && $innerpadding || $width && $margin == 'bottom' && $innerpadding ): ?>
<div class="width-800 extra-top-bottom-padding bottom-margin clear">

<?php elseif ( $width && $padding == 'both' && $margin == 'bottom' ): ?>
<div class="width-800 top-bottom-padding bottom-margin clear">

<?php elseif ( $width && $padding == 'bottom' && $margin == 'top' && $textcolour == 'light' ): ?>
<div class="width-800 bottom-padding top-margin light clear">

<?php elseif ( $width && $padding == 'top' && $margin == 'top' && $textcolour == 'light' ): ?>
<div class="width-800 top-padding top-margin light clear">

<?php elseif ( $width && $padding == 'bottom' && $margin == 'bottom' && $textcolour == 'light' ): ?>
<div class="width-800 top-padding top-margin light clear">

<?php elseif ( $width && $padding == 'bottom' && $margin == 'both' && $textcolour == 'light' ): ?>
<div class="width-800 top-padding top-margin light clear">

<?php elseif ( $width && $padding == 'top' && $margin == 'both' && $textcolour == 'light' ): ?>
<div class="width-800 top-padding top-margin light clear">

<?php elseif ( $width && $padding == 'both' && $textcolour == 'light' ): ?>
<div class="width-800 top-bottom-padding light clear">

<?php elseif ( $width && $padding == 'top' && $textcolour == 'light' ): ?>
<div class="width-800 top-padding light clear">

<?php elseif ( $width && $padding == 'bottom' && $textcolour == 'light' ): ?>
<div class="width-800 bottom-padding light clear">

<?php elseif ( $width && $padding == 'both' && $margin == 'both' ): ?>
<div class="width-800 top-bottom-padding top-bottom-margin clear">

<?php elseif ( $width && $padding == 'both' && $textcolour == 'light' ): ?>
<div class="width-800 top-bottom-padding light clear">

<?php elseif ( $padding == 'both' && $margin == 'top' && $textcolour == 'light' ): ?>
<div class="top-bottom-padding top-margin light clear">

<?php elseif ( $padding == 'top' && $margin == 'top' ): ?>
<div class="top-padding top-margin clear">

<?php elseif ( $width && $padding == 'top' ): ?>
<div class="width-800 top-padding clear">

<?php elseif ( $width && $padding == 'both' && $margin == 'top' ): ?>
<div class="width-800 top-bottom-padding top-margin clear">

<?php elseif ( $width && $padding == 'top' && $textcolour == 'light' ): ?>
<div class="width-800 top-padding light clear">

<?php elseif ( $width && $padding == 'bottom' && $margin == 'top' ): ?>
<div class="width-800 bottom-padding top-margin clear">

<?php elseif ( $width && $padding == 'bottom' ): ?>
<div class="width-800 bottom-padding clear">

<?php elseif ( $width && $padding == 'bottom' && $textcolour == 'light' ): ?>
<div class="width-800 bottom-padding light clear">

<?php elseif ( $width && $margin == 'both' && $textcolour == 'light' ): ?>
<div class="width-800 default-padding top-bottom-margin light clear">

<?php elseif ( $width && $padding == 'both' && $textcolour == 'light' ): ?>
<div class="width-800 top-bottom-padding light clear">

<?php elseif ( $width && $padding == 'top' && $margin == 'top' ): ?>
<div class="width-800 top-padding top-margin clear">

<?php elseif ( $padding == 'both' && $margin == 'top' ): ?>
<div class="top-bottom-padding top-margin clear">

<?php elseif ( $padding == 'both' && $margin == 'top' && $textcolour == 'light' ): ?>
<div class="top-bottom-padding top-margin light clear">

<?php elseif ( $padding == 'top' && $margin == 'top' && $textcolour == 'light' ): ?>
<div class="top-padding top-margin light clear">

<?php elseif ( $padding == 'top' && $margin == 'top' && $textcolour == 'light' ): ?>
<div class="top-padding top-margin light clear">

<?php elseif ( $width && $padding == 'both' ): ?>
<div class="width-800 top-bottom-padding clear">

<?php elseif ( $innerpadding && $padding == 'both' ): ?>
<div class="extra-top-bottom-padding clear">

<?php elseif ( $innerpadding ): ?>
<div class="extra-top-bottom-padding clear">

<?php elseif ( $textcolour == 'light' ): ?>
<div class="top-bottom-padding light clear">

<?php elseif ( $padding == 'bottom' && $margin == 'bottom' ): ?>
<div class="bottom-padding bottom-margin clear">

<?php elseif ( $padding == 'bottom' && $margin == 'bottom' && $textcolour == 'light' ): ?>
<div class="bottom-padding bottom-margin light clear">

<?php elseif ( $padding == 'both' && $margin == 'both' ): ?>
<div class="top-bottom-padding top-bottom-margin clear">

<?php elseif ( $padding == 'both' && $margin == 'both' && $textcolour == 'light' ): ?>
<div class="top-bottom-padding top-bottom-margin light clear">

<?php elseif ( $padding == 'top' && $margin == 'bottom' ): ?>
<div class="top-padding bottom-margin clear">

<?php elseif ( $padding == 'top' && $margin == 'bottom' && $textcolour == 'light' ): ?>
<div class="top-padding bottom-margin light clear">

<?php elseif ( $padding == 'top' && $margin == 'both' ): ?>
<div class="top-padding top-bottom-margin clear">

<?php elseif ( $padding == 'top' && $margin == 'both' && $textcolour == 'light' ): ?>
<div class="top-padding top-bottom-margin light clear">

<?php elseif ( $padding == 'bottom' && $margin == 'top' ): ?>
<div class="bottom-padding top-margin clear">

<?php elseif ( $padding == 'bottom' && $margin == 'top' && $textcolour == 'light' ): ?>
<div class="bottom-padding top-margin light clear">

<?php elseif ( $padding == 'both' && $margin == 'bottom' ): ?>
<div class="top-bottom-padding bottom-margin clear">

<?php elseif ( $padding == 'bottom' && $margin == 'both' ): ?>
<div class="bottom-padding top-bottom-margin clear">

<?php elseif ( $padding == 'bottom' && $margin == 'both' && $textcolour == 'light' ): ?>
<div class="bottom-padding top-bottom-margin light clear">

<?php elseif ( $margin == 'top' ): ?>
<div class="top-margin clear">

<?php elseif ( $margin == 'top' && $textcolour == 'light' ): ?>
<div class="top-margin light clear">

<?php elseif ( $margin == 'bottom' ): ?>
<div class="bottom-margin clear">

<?php elseif ( $margin == 'bottom' && $textcolour == 'light' ): ?>
<div class="bottom-margin light clear">

<?php elseif ( $margin == 'both' ): ?>
<div class="top-bottom-margin clear">

<?php elseif ( $margin == 'both' && $textcolour == 'light' ): ?>
<div class="top-bottom-margin light clear">

<?php elseif ( $padding == 'both' && $margin == 'bottom' && $textcolour == 'light' ): ?>
<div class="top-bottom-padding bottom-margin light clear">

<?php elseif ( $padding == 'both' ): ?>
<div class="top-bottom-padding clear">

<?php elseif ( $padding == 'both' && $textcolour == 'light' ): ?>
<div class="top-bottom-padding light clear">

<?php elseif ( $padding == 'top' ): ?>
<div class="top-padding clear">

<?php elseif ( $padding == 'top' && $textcolour == 'light' ): ?>
<div class="top-padding light clear">

<?php elseif ( $padding == 'bottom' ): ?>
<div class="bottom-padding clear">

<?php elseif ( $margin == 'bottom' ): ?>
<div class="bottom-margin">

<?php elseif ( $margin == 'bottom' && $textcolour == 'light' ): ?>
<div class="bottom-margin light clear">

<?php elseif ( $margin == 'top' ): ?>
<div class="top-margin clear">

<?php elseif ( $margin == 'top' && $textcolour == 'light' ): ?>
<div class="top-margin light clear">

<?php elseif ( $margin == 'bottom' ): ?>
<div class="bottom-margin clear">

<?php elseif ( $margin == 'bottom' && $textcolour == 'light' ): ?>
<div class="bottom-margin light clear">

<?php elseif ( $margin == 'both' ): ?>
<div class="top-bottom-margin clear">

<?php elseif ( $margin == 'both' && $textcolour == 'light' ): ?>
<div class="top-bottom-margin light clear">

<?php elseif ( $width ): ?>
<div class="width-800 clear">

<?php elseif ( $width && $textcolour == 'light' ): ?>
<div class="width-800 light clear">

<?php elseif ( $width && $padding == 'bottom' ): ?>
<div class="width-800 bottom-padding clear">

<?php elseif ( $width && $padding == 'bottom' && $textcolour == 'light' ): ?>
<div class="width-800 bottom-padding light clear">

<?php elseif ( $width && $padding == 'top' ): ?>
<div class="width-800 top-padding clear">

<?php elseif ( $width && $margin == 'both' ): ?>
<div class="width-800 top-bottom-margin clear">

<?php elseif ( $width && $padding == 'top' && $textcolour == 'light' ): ?>
<div class="width-800 top-padding light clear">

<?php elseif ( $width && $textcolour == 'light' ): ?>
<div class="width-800 light clear">

<?php elseif ( $width && $margin == 'bottom' ): ?>
<div class="width-800 bottom-margin clear">

<?php elseif ( $width && $margin == 'bottom' && $textcolour == 'light' ): ?>
<div class="width-800 bottom-margin light clear">

<?php elseif ( $width && $margin == 'top' ): ?>
<div class="width-800 top-margin clear">

<?php elseif ( $width && $margin == 'top' && $textcolour == 'light' ): ?>
<div class="width-800 top-margin light clear">

<?php elseif ( $width && $margin == 'both' && $textcolour == 'light' ): ?>
<div class="width-800 top-bottom-margin light clear">

<?php else : ?>
<div class="default-padding top-bottom-margin">
<?php endif;

	if ( get_field('content_editor') ):
	the_field('content_editor');
	include('content-cta-button-light.php');
	endif; ?>
		
</div>