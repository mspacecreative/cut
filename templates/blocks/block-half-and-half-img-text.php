<?php
$bgtype = get_field('background_type');
$bgcolor = get_field('background_colour');
$bgimg = get_field('background_image');
$bgimgalign = get_field('background_position');
$contenttype = get_field('content_type');
$aligncolumns = get_field('align_columns');
$rowheading = get_field('row_heading');
$headingalignment = get_field('heading_alignment');
$textcolor = get_field('text_colour');
$headingcolor = get_field('heading_colour');
$blockanchor = get_field('block_anchor');
$reverse = get_field('reverse_columns');
$narrow = get_field('narrow_row');
$colratio = get_field('column_ratio');
$removeBulletSpacing = get_field('remove_spacing_between_bullet_points');
$gutterspacing = get_field('gutter_spacing');
$spacing = get_field('vertical_spacing');
$offsetlayout = get_field('offset_layout');
$overlayopacity = get_field('overlay_opacity');
$inner = get_field('inner_container');
$hide = get_field('hide_block');
$bgimgoverlay = get_field('background_image_overlay');
$maxwidth = get_field('max_width');
$framedimg = get_field('frame_image');
$framepos = get_field('frame_position');
$rowborder = get_field('row_border');

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

switch ($framepos) {
	case 'top-left':
		$framepos = ' top-left ';
		break;
	case 'top-right':
		$framepos = ' top-right ';
		break;
	case 'bottom-right':
		$framepos = ' bottom-right ';
		break;
	case 'bottom-left':
		$framepos = ' bottom-left ';
		break;
	default:
		$framepos = ' top-left ';
}
switch ($rowborder) {
	case 'top':
		$rowborder = ' row-border-top';
		break;
	case 'bottom':
		$rowborder = ' row-border-bottom';
		break;
	default:
		$rowborder = '';
}
switch ( $bgcolor ) {
	case 'green':
		$shade = ' brandgreen';
		break;
	case 'green-gradient':
		$shade = ' brandgreengradient';
		break;
	case 'dark-grey':
		$shade = ' branddarkgreybg';
		break;
	case 'grey': 
		$shade = ' brandlightgreybg';
		break;
	default:
		$shade = '';
}
switch ( $narrow ) {
	case '1280':
		$rowwidth = ' max-width-1280';
		break;
	case '1080':
		$rowwidth = ' max-width-1080';
		break;
	case '800': 
		$rowwidth = ' max-width-800';
		break;
	case 'default': 
		$rowwidth = '';
		break;
	default:
		$rowwidth = '';
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
switch ( $textcolor ) {
	case 'light':
		$color = ' light';
		break;
	case 'dark':
		$color = '';
		break;
	default:
		$color = '';
}
switch ( $aligncolumns ) {
	case 'top':
		$position = 'top-lg top-md';
		break;
	case 'middle':
		$position = 'middle-lg middle-md';
		break;
	case 'bottom':
		$position = 'bottom-lg bottom-md';
		break;
	default:
		$position = '';
}
switch ( $headingalignment ) {
	case 'center':
		$align = 'class="text-align-center"';
		break;
	case 'right':
		$align = 'class="text-align-right"';
		break;
	default:
		$align = '';
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
switch ( $bgimgalign ) {
	case 'center':
		$bgposition = 'center';
		break;
	case 'top':
		$bgposition = 'top center';
		break;
	case 'bottom':
		$bgposition = 'bottom center';
		break;
	default:
		$bgposition = '';
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

<section<?php if ( $blockanchor ): echo ' id="'; echo $blockanchor; echo '"'; endif; ?> class="section<?php if ($bgimg): echo ' section_has_bg_img'; endif; if ( $color ): echo $color; endif; if ($shade): echo $shade; endif; if ( $className ): echo esc_attr($className); endif; ?>" style="<?php if ($bgimg): echo 'background-image: url('; echo $bgimg; echo ');'; endif; if ($bgposition): echo ' background-position: '; echo $bgposition; echo ';'; else: echo ' background-position: center;'; endif; ?>">
	
	<?php if ( $bgimg ): ?>
	<div class="<?php if ( $tint ): echo $tint; endif; ?>" style="<?php if ($bgimgoverlay): echo $bgimgoverlay; endif; ?>position: absolute; height: 100%; width: 100%; top: 0; left: 0; opacity: <?php if ( $overlayopacity ): echo $overlayopacity; endif; ?>"></div>
	<?php endif; ?>

	<div class="inner<?php if ( $rowwidth ): echo $rowwidth; endif; if ( $padding ): echo $padding; endif; if ( $rowborder ): echo $rowborder; endif; ?>">
				
		<?php 
		if ( $rowheading ) {
		echo '<h2 ' . $align . '>' . $rowheading . '</h2>';
		}
		?>
				
		<div class="row<?php if ( $gutters ): echo ' '; echo $gutters; endif; if ( $reverse ): echo ' reverse'; endif; if ( $position ): echo ' '; echo $position; endif; ?>"<?php if ( $maxwidth ): echo ' style="max-width: '; echo $maxwidth; echo 'px;"'; endif; ?>>
				
			<?php
			if( have_rows('left_column') ):
			while( have_rows('left_column') ): the_row();
			$anchor = get_sub_field('anchor');
			$icon = get_sub_field('icon');
			$iconsize = 'thumbnail';
			$heading = get_sub_field('heading');
			$content = get_sub_field('content');
			$contenttype = get_sub_field('content_type');
			$mobile = get_sub_field('mobile_spacing');
				 		
			switch ( $colratio ) {
				case 'three-fifth-two-fifth':
					$colwidth = 'col-lg-7';
					break;
				case 'two-fifth-three-fifth':
					$colwidth = 'col-lg-5';
					break;
				case 'two-third-one-third':
					$colwidth = 'col-lg-8';
					break;
				case 'one-third-two-third':
					$colwidth = 'col-lg-4';
					break;
				case 'three-quarter-one-quarter':
					$colwidth = 'col-lg-10';
					break;
				case 'one-quarter-three-quarter':
					$colwidth = 'col-lg-2';
					break;
				default:
					$colwidth = 'col-lg-6';
			} ?>
			 		
			<div data-aos="fade-up"<?php if ( $anchor ): echo ' id="'; echo $anchor; echo '"'; endif; ?> class="<?php if ( $colwidth ): echo $colwidth; echo ' '; else: echo 'col-lg-6 '; endif; if ( $mobile ): echo ' keepSpacing '; endif; ?>bottomMarginMobile col-md-6 col-sm-6 col-xs-12 col">
					
				<?php
				if ( $contenttype == 'carousel' ): ?>
							
				<div class="carousel who_we_are">
									
				<?php
				$images = get_sub_field('photo_gallery');
				$size = 'large';
								
				if( $images ):
				foreach( $images as $image ): ?>
								
					<div>
						<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
					</div>
								
				<?php 
				endforeach;
				endif; ?>
							
				</div>
						
				<?php elseif ( $contenttype == 'grid' ): ?>
						
				<ul class="photoGrid">
								
					<?php
					$images = get_sub_field('photo_gallery');
					$size = 'large';
								
					if( $images ):
					foreach( $images as $image ):
					$url = get_field('external_url', $image['id']);
					$shrink = get_field('shrink_image', $image['id']); ?>
								
					<li>
						<?php if ( $url && $shrink ) {
						echo '<div class="shrinkLogo"><a href="' . $url . '" target="_blank">' . wp_get_attachment_image( $image['ID'], $size ) . '</a></div>';
						} elseif ( $url ) {
						echo '<a href="' . $url . '" target="_blank">' . wp_get_attachment_image( $image['ID'], $size ) . '</a>';
						} else {
						echo wp_get_attachment_image( $image['ID'], $size );
						} ?>
					</li>
								
					<?php 
					endforeach;
					endif; ?>
				</ul>
						
				<?php elseif ( $contenttype == 'image' ):
						
				$img = get_sub_field('image');
				if( !empty( $img ) ): ?>
				<img data-aos="fade-right" class="full-width" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
				<?php endif; ?>
						
				<?php else :
						
				if ( $icon ) {
					echo '<div class="iconContainer">' . wp_get_attachment_image( $icon, $iconsize ) . '</div>';
				}
						
				if ( $heading ) {
					echo '<h3>' . $heading . '</h3>';
				}
				if ( $content ) {
					if ( $removeBulletSpacing ) { ?>
						<div class="bullet-points removeSpacing">
							<?php echo $content ?>
							<?php include('inc/cta.php'); ?>
						</div>
					<?php 
					} else { ?>
						<div class="bullet-points">
							<?php echo $content ?>
							<?php include('inc/cta.php'); ?>
						</div>
					<?php 
					}
				}
						
				endif; ?>
			</div>
					
			<?php endwhile;
			endif; ?>
						
			<?php 
			if( have_rows('right_column') ):
			while( have_rows('right_column') ): the_row();
			
			$anchor = get_sub_field('anchor');
			$icon = get_sub_field('icon');
			$iconsize = 'thumbnail';
			$contenttype = get_sub_field('content_type');
			$heading = get_sub_field('heading_right_col');
			$contentrightcol = get_sub_field('content_right_col');
			$mobile = get_sub_field('mobile_spacing');
						
			switch ( $colratio ) {
				case 'three-fifth-two-fifth':
					$colwidth = 'col-lg-5';
					break;
				case 'two-fifth-three-fifth':
					$colwidth = 'col-lg-7';
					break;
				case 'two-third-one-third':
					$colwidth = 'col-lg-4';
					break;
				case 'one-third-two-third':
					$colwidth = 'col-lg-8';
					break;
				case 'three-quarter-one-quarter':
					$colwidth = 'col-lg-2';
					break;
				case 'one-quarter-three-quarter':
					$colwidth = 'col-lg-10';
					break;
				default:
					$colwidth = 'col-lg-6';
			} ?>
						
			<div data-aos="fade-up"<?php if ( $anchor ): echo ' id="'; echo $anchor; echo '"'; endif; ?> class="<?php if ( $colwidth ): echo $colwidth; echo ' '; else: echo 'col-lg-6 '; endif; if ( $mobile ): echo ' keepSpacing '; endif; if ($framedimg): echo ' framed-img '; endif; if ($framepos): echo $framepos; endif; ?>bottomMarginMobile col-md-6 col-sm-6 col-xs-12 col">
						
				<?php
				if ( $contenttype == 'carousel' ): ?>
							
				<div class="carousel who_we_are">
									
					<?php
					$images = get_sub_field('photo_gallery');
					$size = 'large';
									
					if( $images ):
					foreach( $images as $image ): ?>
									
					<div>
						<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
					</div>
									
					<?php 
					endforeach;
					endif; ?>
								
				</div>
							
				<?php elseif ( $contenttype == 'grid' ): ?>
							
				<ul class="photoGrid">
									
					<?php
					$images = get_sub_field('photo_gallery');
					$size = 'large';
										
					if( $images ):
					foreach( $images as $image ):
					$url = get_field('external_url', $image['id']);
					$shrink = get_field('shrink_image', $image['id']); ?>
									
					<li>
						<?php if ( $url && $shrink ) {
							echo '<div class="shrinkLogo"><a href="' . $url . '" target="_blank">' . wp_get_attachment_image( $image['ID'], $size ) . '</a></div>';
						} elseif ( $url ) {
							echo '<a href="' . $url . '" target="_blank">' . wp_get_attachment_image( $image['ID'], $size ) . '</a>';
						} else {
							echo wp_get_attachment_image( $image['ID'], $size );
						} ?>
					</li>
									
					<?php 
					endforeach;
					endif; ?>
						
				</ul>
							
				<?php elseif ( $contenttype == 'image' ):
							
				$img = get_sub_field('image');
				if( !empty( $img ) ): ?>
				<img class="full-width" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
				<?php endif; ?>
							
				<?php elseif ( $contenttype == 'content' ):
							
				if ( $icon ) {
					echo '<div class="iconContainer">' . wp_get_attachment_image( $icon, $iconsize ) . '</div>';
				}
							
				if ( $heading ) {
					echo '<h3>' . $heading . '</h3>';
				}
				if ( $contentrightcol ) {
					if ( $removeBulletSpacing ) { ?>
						<div class="bullet-points removeSpacing">
							<?php echo $contentrightcol ?>
							<?php include('inc/cta.php'); ?>
						</div>
					<?php 
					} else { ?>
						<div class="bullet-points">
							<?php echo $contentrightcol ?>
							<?php include('inc/cta.php'); ?>
						</div>
					<?php 
					}
				} ?>
				
				<?php 
				elseif ( $contenttype == 'video' ):
				
				$video = get_sub_field('video');
				$poster = get_sub_field('poster'); ?>
				
				<video src="<?php echo $video ?>" poster="<?php echo $poster ?>" autoplay="true" loop="true" playsinline muted>
					<source src="<?php echo $video ?>" type="video/mp4" />
					<!--<source src="https://cdn.mspacecreative.com/cut/CUT_home_montage.webm" type="webm" />-->
				</video>
							
				<?php 
				endif; ?>
				
			</div>
						
			<?php 
			endwhile;
			endif; ?>
					
		</div>
		
	</div>
</section>