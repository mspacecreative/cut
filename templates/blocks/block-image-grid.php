<?php 
$imagerowcount = get_field('image_row_count');
$narrowcolumn = get_field('content_width');
$images = get_field('image_grid');
$verticalspacing = get_field('vertical_spacing');
$content = get_field('content');
$logos = get_field('logo_images');

switch ( $verticalspacing ) {
	case 'top':
		$spacing = 'top-padding';
		break;
	case 'bottom':
		$spacing = 'bottom-padding';
		break;
	case 'both':
		$spacing = 'top-bottom-padding';
		break;
	default:
		$spacing = '';
}

switch ( $imagerowcount ) {
	case 'one':
		$imgcol = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
		break;
	case 'two':
		$imgcol = 'col-lg-6 col-md-6 col-sm-6 col-xs-12';
		break;
	case 'three':
		$imgcol = 'col-lg-4 col-md-4 col-sm-6 col-xs-12';
		break;
	case 'four':
		$imgcol = 'col-lg-3 col-md-3 col-sm-6 col-xs-12';
		break;
	case 'five':
		$imgcol = 'col-lg-five col-sm-6 col-xs-12';
		break;
	default:
		$imgcol = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
} ?>

<section class="image-grid-container<?php if ( $spacing ): echo ' '; echo $spacing; endif; ?>">
	<div class="row-width-1280">
		<?php 
		if ( $content ) {
		echo $content;
		}
		if ( $images ):
		
		if ( $logos ): ?>
		<ul class="row middle-lg middle-md middle-sm center-lg center-md center-sm center-xs logo-size">
		<?php else : ?>
		<ul class="row middle-lg middle-md middle-sm center-lg center-md center-sm center-xs">
		<?php endif; ?>
				
			<?php foreach( $images as $image ):
			$externallink = get_field('external_link', $image['ID'] ); ?>
			<li class="col<?php if ( $imgcol ): echo ' '; echo $imgcol; endif; ?>">
				
				<?php if ( $externallink ): ?>
				<a href="<?php echo $externallink ?>" target="_blank">
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				</a>
				
				<?php else : ?>
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
				
				<?php if ( $image['caption'] ): ?>
				<p><?php echo esc_html($image['caption']); ?></p>
				<?php endif; ?>
				
			</li>
			<?php endforeach; ?>
				
		</ul>
		<?php endif; ?>
	</div>
</section>