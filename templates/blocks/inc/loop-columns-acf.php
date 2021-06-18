<?php

if ( have_rows('column') ): ?>

<section<?php if ( $id ): echo ' id="'; echo $id; echo '"'; endif; ?> class="columns-container<?php if ( $spacing ): echo ' '; echo $spacing; endif; if ( $className ): echo esc_attr($className); endif; if ( $shade ): echo $shade; endif; if ( $colour ): echo $colour; endif; ?>"<?php if ( $hideblock ): echo ' style="display: none;"'; endif; ?>>
	<div class="inner">
		<?php 
		if ( $heading ) {
		echo '<h1 data-aos="fade-up" class="width-100">' . $heading . '</h1>';
		}
		?>
		<div class="row<?php if ( $align ): echo ' '; echo $align; endif; if ( $gutters ): echo ' '; echo $gutters; endif; ?>">
	
			<?php 
			while ( have_rows('column') ): the_row();
			$contenttype = get_sub_field('content_type');
			$boxed = get_field('boxed_columns');
			
			switch ( $contenttype ) {
				case 'text':
					$content = get_sub_field('text_editor');
					break;
				case 'image':
					$image = get_sub_field('image');
					$caption = $image['caption'];
					$content = '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" style="margin-top: 10px;"><p class="photo-caption">' . $caption . '</p>';
					break;
				case 'carousel':
					$content = get_sub_field('image_carousel');
					break;
				case 'video':
					$videourl = get_sub_field('video');
					$content = '<div class="video_iframe_container">' . $videourl . '</div>';
					break;
				default:
					$content = get_sub_field('text_editor');
			} ?>
			
			<div data-aos="fade-up" class="margin-bottom-mobile-md<?php if ( $layout ): echo ' '; echo $layout; endif; ?>">
			
				<?php if ( $boxed ): ?>
				<div class="col-inner boxed">
				<?php endif; ?>
			
				<?php 
				if ( $content ) {
				echo $content;
				}
				?>
				
				<?php if ( $boxed ): ?>
				</div>
				<?php endif; ?>
			
			</div>
			
			<?php endwhile; ?>
			
		</div>
	</div>
</section>

<?php endif; ?>