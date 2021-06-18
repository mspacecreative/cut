<?php
$boxed = get_field('boxed_column');

if ( $boxed ): ?>

<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 col">
	<?php the_field('two_third_column'); ?>
</div>

<?php if( have_rows('one_third_column') ): ?>
<?php while( have_rows('one_third_column') ): the_row(); ?>

	<?php if ( get_sub_field('content_type') == 'text' ): ?>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col">
		<div class="boxed-content">
			<?php the_sub_field('text_editor'); ?>
		</div>
	</div>
	
	<?php elseif ( get_sub_field('content_type') == 'image' ): ?>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col">
		<?php 
		$image = get_sub_field('image_upload');
		$size = 'large';
			
		if( $image ) {
			echo '<div style="margin-top: 10px;">' . wp_get_attachment_image( $image, $size ) . '</div>';
		}
		?>
	</div>
	
	<?php elseif ( get_sub_field('content_type') == 'video' ): ?>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col">
		<?php the_sub_field('video_upload'); ?>
	</div>
	<?php endif; ?>

<?php endwhile; ?>
<?php endif;

else : ?>

<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 col">
	<?php the_field('two_third_column'); ?>
</div>

<?php if( have_rows('one_third_column') ): ?>
<?php while( have_rows('one_third_column') ): the_row(); ?>

	<?php if ( get_sub_field('content_type') == 'text' ): ?>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col">
		<?php the_sub_field('text_editor'); ?>
	</div>
	
	<?php elseif ( get_sub_field('content_type') == 'image' ): ?>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col">
		<?php 
		$image = get_sub_field('image_upload');
		$size = 'large';
			
		if( $image ) {
			echo '<div style="margin-top: 10px;">' . wp_get_attachment_image( $image, $size ) . '</div>';
		}
		?>
	</div>
	
	<?php elseif ( get_sub_field('content_type') == 'video' ): ?>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col">
		<?php the_sub_field('video_upload'); ?>
	</div>
	<?php endif; ?>

<?php endwhile; ?>
<?php endif;
	
endif;