<?php
$sectionpadding = get_field('section_padding');
$columncount = get_field('column_count');
$heading = get_field('section_heading');
$boxed = get_field('boxed_columns');

switch ( $sectionpadding ) {
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
switch ( $columncount ) {
	case 'one':
		$layout = 'col col-lg-12 col-md-12 col-sm-12 col-xs-12';
		break;
	case 'two':
		$layout = 'col col-lg-6 col-md-6 col-sm-6 col-xs-12';
		break;
	case 'three':
		$layout = 'col col-lg-4 col-md-4 col-sm-6 col-xs-12';
		break;
	case 'four':
		$layout = 'col col-lg-3 col-md-3 col-sm-6 col-xs-12';
		break;
	case 'five':
		$layout = 'col col-lg-five col-sm-6 col-xs-12';
		break;
	default:
		$layout = 'col col-lg-6 col-md-6 col-sm-6 col-xs-12';
} ?>

<section class="section<?php if ( $spacing ): echo ' '; echo $spacing; endif; ?>">	
	<div class="row-width-1280">
		
		<?php if ( $heading ): ?>
		<h2 style="margin-top: 0;<?php if ( $boxed ): echo ' margin-bottom: 1em;'; endif; ?>"><?php echo $heading ?></h2>
		<?php endif; ?>
		
		<?php if( have_rows('flexbox') ): ?>
		<div class="row clear">
			
			<?php while( have_rows('flexbox') ): the_row(); ?>
			
			<div class="<?php if ( $layout ): echo $layout; endif; if ( $boxed ): echo ' boxed'; endif; ?>">
			
				<?php
				if ( $boxed ): ?>
				
				<div>
					<?php include 'inc/flexbox-content-loop.php'; ?>
				</div>
				
				<?php else: 
				include 'inc/flexbox-content-loop.php';
				
				endif; 
				?>
				
			</div>
			
			<?php endwhile; ?>
			
		</div>
		<?php endif; ?>
		
	</div>
</section>