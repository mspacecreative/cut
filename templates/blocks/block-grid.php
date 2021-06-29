<?php
$contenttype = get_field('content_type');
$bgcolor = get_field('background_colour');
$heading = get_field('heading');
$body = get_field('lead-in_copy');
$anchor = get_field('block_anchor');
$iconsvisible = get_field('show_icons');
$colcount = get_field('column_count');
$rowwidth = get_field('row_width');
$spacing = get_field('vertical_spacing');
$boxed = get_field('show_columns_as_cards');
$hide = get_field('hide_block');
$txtalign = get_field('text_alignment');
$titletxtalign = get_field('title_text_alignment');
$hideposition = get_field('hide_title');
$textcolor = get_field('title_and_lead-in_text_colour');
$boxshadow = get_field('add_box_shadow_to_cards');
		
switch ( $bgcolor ) {
	case 'green':
		$shade = ' brandgreen';
		break;
	case 'green-gradient':
		$shade = ' brandgreengradient';
		break;
	case 'grey': 
		$shade = ' brandlightgreybg';
		break;
	default:
		$shade = '';
}
switch ( $colcount ) {
	case 'two':
		$col = 'col-lg-6 col-md-6';
		break;
	case 'three':
		$col = 'col-lg-4 col-md-4';
		break;
	case 'four':
		$col = 'col-lg-3 col-md-3';
		break;
	default:
		$col = 'col-lg-4 col-md-4';
}
switch ( $rowwidth ) {
	case 'default':
		$width = '';
		break;
	case '800':
		$width = ' max-width-800';
		break;
	case '1080':
		$width = ' max-width-1080';
		break;
	default:
		$width = '';
}
switch ( $spacing ) {
	case 'top':
		$padding = ' top-padding';
		break;
	case 'bottom':
		$padding = ' bottom-padding';
		break;
	case 'both':
		$padding = ' top-bottom-padding';
		break;
	default:
		$padding = '';
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
switch ( $titletxtalign ) {
	case 'center':
		$titlealign = ' text-align-center';
		break;
	case 'right':
		$titlealign = ' text-align-right';
		break;
	case 'default':
		$titlealign = '';
		break;
	default:
		$align = '';
} ?>
<section<?php if ( $anchor ): echo ' id="'; echo $anchor; echo '"'; endif; ?> class="padding-6em<?php if ( $anchor ): echo ' '; echo $anchor; endif; if ( $padding ): echo $padding; endif; if ($shade): echo $shade; endif; ?>"<?php if ( $hide ): echo ' style="display:none;"'; endif; ?>>
	
	<div class="inner intro_container<?php if ( $width ): echo $width; endif; ?>">
		
		<?php if ( $textcolor == 'light' ): ?>
		<div class="light">
		<?php endif; ?>
		
		<?php if ( $heading ): ?>
		<h1 data-aos="fade-up"<?php if ( $titlealign ): echo ' class="'; echo $titlealign; echo '"'; endif; ?>><?php echo $heading ?></h1>
		<?php endif; ?>
		
		<?php if ( $body ): ?>
		<p data-aos="fade-up" class="lead-in-copy"><?php echo $body ?></p>
		<?php endif; ?>
		
		<?php if ( $textcolor == 'light' ): ?>
		</div>
		<?php endif; ?>
			
			<div class="row gutters col_borders grid<?php if ( $iconsvisible ): echo ' row_with_icons'; endif; if ( $align ): echo $align; endif; ?>">
				
				<?php if ( $contenttype === 'custom' ):
				
					if ( have_rows('column') ):
					while ( have_rows('column') ): the_row();
					
					// VARIABLES
					$icon = get_sub_field('icon');
					$content = get_sub_field('content');
					$cta = get_sub_field('call_to_action'); ?>
					
					<div data-aos="fade-up" class="col bottom-margin-mobile-2 <?php echo $col ?> col-sm-6 col-xs-6">
						<?php if( !empty( $icon ) ): ?>
						<div class="col_icon">
							<img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
						</div>
						<?php endif; ?>
						
						<div class="col_inner<?php if ( $boxed ): echo ' boxed'; endif; if ($boxshadow): echo ' box-shadow'; endif; ?>"<?php if ($bgcolor == 'grey'): echo ' style="background-color: #fff;"'; endif; ?>>
						<?php if ( $content ) {
							echo $content;
						} 
						if ( $cta ) {
							include 'inc/cta-grid.php';
						} ?>
						</div>
					</div>
					
					<?php endwhile;
					endif; ?>
					
				<?php elseif ( $contenttype === 'post-type' ): 
		
				$post_types = get_field('post_type');
				
				if ( $post_types ) :
				foreach( $post_types as $post ):
				
				setup_postdata($post);
				
				// VARIABLES
				$title = get_the_title($post->ID);
				$featuredimg = get_the_post_thumbnail_url( $post->ID, 'medium-square' );
				$imgalt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );
				$content = apply_filters( 'the_content', get_the_content() );
				//$excerpt = get_the_excerpt($post->ID);
				$icon = get_field('icon', $post->ID);
				$showcta = get_field('show_cta', $post->ID);
				$permalink = get_the_permalink($post->ID);
				$position = get_field('position_title', $post->ID);
				$headshotplaceholder = get_template_directory_uri() . '/assets/img/placeholders/placeholder-headshot.png'; ?>
				
				<div data-aos="fade-up" class="col bottom-margin-mobile-2 <?php echo $col ?> col-sm-6 col-xs-6">
					<?php if( !empty( $icon ) ): ?>
					<div class="col_icon">
						<img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
					</div>
					<?php endif; ?>
						
					<div class="col_inner<?php if ( $boxed ): echo ' boxed'; endif; if ($boxshadow): echo ' box-shadow'; endif; ?>"<?php if ($bgcolor == 'grey'): echo ' style="background-color: #fff;"'; endif; ?>>
				
					<div class="headshot-container">
						<?php if( !empty( $featuredimg ) ): ?>
						<img src="<?php echo $featuredimg ?>" class="object-fit" alt="<?php echo $imgalt ?>">
						<?php else: ?>
						<img src="<?php echo $headshotplaceholder ?>" class="object-fit" alt="<?php echo $title ?>">
						<?php endif; ?>
					</div>
					
					<?php if ( $title ): ?>
					<h3 style="<?php if ( $hideposition ): echo 'margin-bottom: 1em;'; else: echo 'margin-bottom: 5px;'; endif; ?>"><?php echo $title ?></h3>
					<?php endif; ?>
					
					<?php if ( $position && !$hideposition ): ?>
					<p style="margin-bottom: 1em;"><?php echo $position ?></p>
					<?php endif; ?>
					
					<?php if ( $content ): ?>
					<p style="font-size: 18px; margin-left: -30px; margin-top: auto;"><a data-id="<?php echo $post->ID ?>" href="<?php echo $permalink ?>" class="read-bio view-article"><?php echo __('Read bio') ?></a></p>
					<?php endif;
					
					if ( $showcta ) {
						include 'inc/cta.php';
					} ?>
					</div>
				</div>
				
				<?php endforeach; wp_reset_postdata();
				endif;
				
				endif; ?>
				
			</div>
		
	</div>
	
</section>