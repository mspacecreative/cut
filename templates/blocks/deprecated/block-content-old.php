<?php if ( get_field('background_image_background_image') ):
	
	$blockanchor = get_field('block_id');
	$bgimgoverlay = get_field('background_image_overlay');
	
	if ( $blockanchor && $bgimgoverlay == 'dark' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="span-browser bg-img-cover dark-overlay content-section" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
		<div class="row-width-1280">
			<?php include('inc/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $bgimgoverlay == 'light' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="span-browser bg-img-cover light-overlay content-section" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
		<div class="row-width-1280">
			<?php include('inc/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php elseif ( $blockanchor ): ?>
	<div id="<?php the_field('block_id'); ?>" class="span-browser bg-img-cover dark-overlay content-section" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
		<div class="row-width-1280">
			<?php include('inc/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php elseif ( $blockanchor ): ?>
	<div id="<?php the_field('block_id'); ?>" class="span-browser bg-img-cover light-overlay content-section" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
		<div class="row-width-1280">
			<?php include('inc/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $bgimgoverlay == 'dark' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="bg-img-cover dark-overlay content-section" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
		<div class="row-width-1280">
			<?php include('inc/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $bgimgoverlay == 'light' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="bg-img-cover light-overlay content-section" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
		<div class="row-width-1280">
			<?php include('inc/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php elseif ( $bgimgoverlay == 'dark' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="span-browser bg-img-cover dark-overlay content-section" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
		<div class="row-width-1280">
			<?php include('inc/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php elseif ( $bgimgoverlay == 'light' ): ?>
	<div id="<?php the_field('block_id'); ?>" class="span-browser bg-img-cover light-overlay content-section" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
		<div class="row-width-1280">
			<?php include('inc/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php elseif ( $bgimgoverlay == 'dark' ): ?>
	<div class="bg-img-cover dark-overlay content-section" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
		<div class="row-width-1280">
			<?php include('inc/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php elseif ( $bgimgoverlay == 'light' ): ?>
	<div class="bg-img-cover light-overlay content-section" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
		<div class="row-width-1280">
			<?php include('inc/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php else : ?>
	<div class="bg-img-cover content-section" style="background-image: url(<?php the_field('background_image_background_image'); ?>);">
		<div class="row-width-1280">
			<?php include('inc/section-content-loop.php'); ?>
		</div>
	</div>
	<?php endif; ?>

<?php elseif ( get_field('background_color_background_color') ):
	
	$blockanchor = get_field('block_id');
	
	if ( $blockanchor ) : ?>
	<div id="<?php the_field('block_id'); ?>" class="span-browser white-bg content-section" style="background-color: <?php the_field('background_color_background_color'); ?>;">
		<div class="row-width-1280">
			<?php include('inc/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php elseif ( $blockanchor ) : ?>
	<div id="<?php the_field('block_id'); ?>" class="white-bg content-section" style="background-color: <?php the_field('background_color_background_color'); ?>;">
		<div class="row-width-1280">
			<?php include('inc/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php else : ?>
	<div class="white-bg content-section" style="background-color: <?php the_field('background_color_background_color'); ?>;">
		<div class="row-width-1280">
			<?php include('inc/section-content-loop.php'); ?>
		</div>
	</div>
	<?php endif; ?>
	
<?php else :
	if ( get_field('block_id') ): ?>
	<div id="<?php the_field('block_id'); ?>" class="white-bg content-section">
		<div class="row-width-1280">
			<?php include('inc/section-content-loop.php'); ?>
		</div>
	</div>
	<?php else : ?>
	<div class="white-bg content-section">
		<div class="row-width-1280">
			<?php include('inc/section-content-loop.php'); ?>
		</div>
	</div>
	<?php endif; ?>

<?php endif; ?>