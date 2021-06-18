<?php
if ( have_rows('call_to_action') ) :
	while ( have_rows('call_to_action') ) :
		the_row();
		$linktype = get_sub_field('resource');
		//$link = get_sub_field('link');
		$label = get_sub_field('label');
		
		switch ($linktype) {
			case 'external':
				$link = get_sub_field('external_link');
				break;
			case 'internal':
				$link = get_sub_field('internal_page');
				break;
			case 'anchor':
				$link = get_sub_field('anchor_link');
				break;
			default:
				$link = '';
		}
		
		if ($linktype): ?>
		
		<p><a href="<?php if ($linktype == 'anchor'): echo '#'; endif; if ($linktype == 'internal' || $linktype == 'external' || $linktype == 'anchor'): echo $link; endif; ?>"<?php if ($linktype == 'external'): echo ' target="_blank"'; endif; ?>class="button<?php if ( $bgcolor === 'blue' ): echo ' light'; endif; ?>"><?php if ( $label ): echo $label; else: echo esc_html_e('Learn more'); endif; ?></a></p>
		
		<?php 
		endif;
	endwhile;
endif;