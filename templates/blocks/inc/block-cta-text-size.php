<?php
$heading = get_field('heading');
$headingsize = get_field('heading_size');
$bodysize = get_field('paragraph_size');
$content = get_field('content');
$maxwidth = get_field('max_width');

if ( $heading ): ?>
<h1<?php if ( $headingsize == 'large' ): echo ' class="large"'; endif; ?>><?php echo $heading ?></h1>
<?php endif;
	
if ( $content ): ?>
<div class="cta-content<?php if ( $bodysize == 'large' ): echo ' large'; endif; ?>"<?php if ($maxwidth): echo ' style="max-width: '; echo $maxwidth; echo ';"'; endif; ?>><?php echo $content ?></div>
<?php endif;