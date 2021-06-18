<?php
$heading = get_field('heading');
$headingsize = get_field('heading_size');
$bodysize = get_field('paragraph_size');
$content = get_field('content');

if ( $heading ): ?>
<h1<?php if ( $headingsize == 'large' ): echo ' class="large"'; endif; ?>><?php echo $heading ?></h1>
<?php endif;
	
if ( $content ): ?>
<div class="cta-content<?php if ( $bodysize == 'large' ): echo ' large'; endif; ?>"><?php echo $content ?></div>
<?php endif;