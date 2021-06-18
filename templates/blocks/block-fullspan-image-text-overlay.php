
	
	<?php if( have_rows('section') ): ?>
	<?php while( have_rows('section') ): the_row(); ?>
		
	<?php if( have_rows('content') ): ?>
	<?php while( have_rows('content') ): the_row(); ?>
		
	<?php 
	$alignment = get_sub_field('alignment');
	if ( $alignment == 'left' ): ?>
	<section class="features shadow special white-bg features_overlay_left" style="background-image: url(<?php the_sub_field('background_image'); ?>);">
		
	<?php elseif ( $alignment == 'right' ): ?>
	<section class="features shadow special white-bg features_overlay_right" style="background-image: url(<?php the_sub_field('background_image'); ?>);">
		
	<?php else : ?>
	<section class="features shadow special white-bg features_overlay_left" style="background-image: url(<?php the_sub_field('background_image'); ?>);">
	<?php endif; ?>
		
		<article class="full-img-row row-width-1280 content-bottom">
		
		<?php 
		$image = get_sub_field('sponsor_branding');
		$size = 'large';
		if ( $image ): ?>
		<div class="sponsor_branding">
			<?php echo wp_get_attachment_image( $image, $size ); ?>
		</div>
		<?php endif; ?>
		
		<?php if( have_rows('text') ): ?>
		<?php while( have_rows('text') ): the_row(); ?>
		
			<?php if ( $alignment == 'left' ): ?>
			<div class="left">
			<?php elseif ( $alignment == 'right' ): ?>
			<div class="right">
			<?php else : ?>
			<div class="left">
			<?php endif; ?>	
				<div class="full-span-content light">
					<header>
						<h1><?php the_sub_field('heading'); ?></h1>
					</header>
					<?php the_sub_field('copy'); ?>
				</div>
			</div>
		
		<?php endwhile;
		endif; ?>
		
		</article>
	
	</section>
		
	<?php endwhile;
	endif; ?>
		
	<?php endwhile;
	endif; ?>
	
