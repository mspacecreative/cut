<?php
$padding = get_field('section_padding');
$margin = get_field('section_margin');
$blockanchor = get_field('block_id');
$width = get_field('two_third_one_third_content_width');
$flex = get_field('two_third_one_third_vertical_alignment');

if ( $flex == 'bottom' ): ?>

	<div class="row-width-1280">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<?php if ( $blockanchor && $padding == 'top' && $margin == 'top' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear bottom-lg bottom-md top-padding top-margin">
		
		<?php elseif ( $width && $padding == 'top' && $margin == 'top' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-padding top-margin bottom-lg bottom-md">
		
		<?php elseif ( $width && $padding == 'bottom' && $margin == 'bottom' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear bottom-padding bottom-margin bottom-lg bottom-md">
		
		<?php elseif ( $width && $padding == 'top' && $margin == 'bottom' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-padding bottom-margin bottom-lg bottom-md">
		
		<?php elseif ( $width && $padding == 'bottom' && $margin == 'top' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear bottom-padding top-margin bottom-lg bottom-md">
		
		<?php elseif ( $width && $padding == 'both' && $margin == 'top' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-bottom-padding top-margin bottom-lg bottom-md">
		
		<?php elseif ( $width && $padding == 'both' && $margin == 'bottom' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-bottom-padding bottom-margin bottom-lg bottom-md">
		
		<?php elseif ( $width && $padding == 'both' && $margin == 'both' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-bottom-padding top-bottom-margin bottom-lg bottom-md">
		
		<?php elseif ( $width && $padding == 'top' && $margin == 'both' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-padding top-bottom-margin bottom-lg bottom-md">
		
		<?php elseif ( $width && $padding == 'bottom' && $margin == 'both' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear bottom-padding top-bottom-margin bottom-lg bottom-md">
		
		<?php elseif ( $width && $padding == 'top'): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-padding bottom-lg bottom-md">
		
		<?php elseif ( $width && $padding == 'bottom'): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear bottom-padding bottom-lg bottom-md">
		
		<?php elseif ( $width && $padding == 'both'): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-bottom-padding bottom-lg bottom-md">
		
		<?php elseif ( $width && $margin == 'top'): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-margin bottom-lg bottom-md">
		
		<?php elseif ( $width && $margin == 'bottom'): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear bottom-margin bottom-lg bottom-md">
		
		<?php elseif ( $width && $margin == 'both'): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-bottom-margin bottom-lg bottom-md">
		
		<?php elseif ( $padding == 'top' && $margin == 'top' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-padding top-margin bottom-lg bottom-md">
		
		<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'bottom' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear bottom-padding bottom-margin bottom-lg bottom-md">
		
		<?php elseif ( $padding == 'bottom' && $margin == 'bottom' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear bottom-padding bottom-margin bottom-lg bottom-md">
		
		<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'both' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-bottom-padding top-bottom-margin bottom-lg bottom-md">
		
		<?php elseif ( $padding == 'both' && $margin == 'both' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-bottom-padding top-bottom-margin bottom-lg bottom-md">
		
		<?php elseif ( $blockanchor && $padding == 'top' && $margin == 'bottom' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-padding bottom-margin bottom-lg bottom-md">
		
		<?php elseif ( $padding == 'top' && $margin == 'bottom' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-padding bottom-margin bottom-lg bottom-md">
		
		<?php elseif ( $blockanchor && $padding == 'top' && $margin == 'both' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-padding top-bottom-margin bottom-lg bottom-md">
		
		<?php elseif ( $padding == 'top' && $margin == 'both' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-padding top-bottom-margin bottom-lg bottom-md">
		
		<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'top' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear bottom-padding top-margin bottom-lg bottom-md">
		
		<?php elseif ( $padding == 'bottom' && $margin == 'top' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear bottom-padding top-margin bottom-lg bottom-md">
		
		<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'both' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear bottom-padding top-bottom-margin bottom-lg bottom-md">
		
		<?php elseif ( $padding == 'bottom' && $margin == 'both' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear bottom-padding top-bottom-margin bottom-lg bottom-md">
		
		<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'top' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-bottom-padding top-margin bottom-lg bottom-md">
		
		<?php elseif ( $padding == 'both' && $margin == 'top' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-bottom-padding top-margin bottom-lg bottom-md">
		
		<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'bottom' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-bottom-padding bottom-margin bottom-lg bottom-md">
		
		<?php elseif ( $padding == 'both' && $margin == 'bottom' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-bottom-padding bottom-margin bottom-lg bottom-md">
		
		<?php elseif ( $blockanchor && $padding == 'bottom' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear bottom-padding bottom-lg bottom-md">
		
		<?php elseif ( $padding == 'bottom' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear bottom-padding bottom-lg bottom-md">
		
		<?php elseif ( $blockanchor && $padding == 'top' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-padding bottom-lg bottom-md">
		
		<?php elseif ( $padding == 'top' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-padding bottom-lg bottom-md">
		
		<?php elseif ( $blockanchor && $padding == 'both' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-bottom-padding bottom-lg bottom-md">
		
		<?php elseif ( $padding == 'both' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-bottom-padding bottom-lg bottom-md">
		
		<?php elseif ( $blockanchor && $margin == 'bottom' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear bottom-margin bottom-lg bottom-md">
		
		<?php elseif ( $margin == 'bottom' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear bottom-margin bottom-lg bottom-md">
		
		<?php elseif ( $blockanchor && $margin == 'top' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-margin bottom-lg bottom-md">
		
		<?php elseif ( $margin == 'top' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-margin bottom-lg bottom-md">
		
		<?php elseif ( $blockanchor && $margin == 'both' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-bottom-margin bottom-lg bottom-md">
		
		<?php elseif ( $margin == 'both' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-bottom-margin bottom-lg bottom-md">
		
		<?php else : ?>
		<div class="row gutter_space_1 between-lg between-md clear bottom-lg bottom-md">
		<?php endif; ?>
		
			<?php include('inc/two-third-one-third-loop.php'); ?>
		
		</div>
		
	</div>
	
<?php elseif ( $flex == 'center' ): ?>
	
	<div class="row-width-1280">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<?php if ( $blockanchor && $padding == 'top' && $margin == 'top' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear middle-lg middle-md top-padding top-margin">
		
		<?php elseif ( $width && $padding == 'top' && $margin == 'top' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-padding top-margin middle-lg middle-md">
		
		<?php elseif ( $width && $padding == 'bottom' && $margin == 'bottom' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear bottom-padding bottom-margin middle-lg middle-md">
		
		<?php elseif ( $width && $padding == 'top' && $margin == 'bottom' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-padding bottom-margin middle-lg middle-md">
		
		<?php elseif ( $width && $padding == 'bottom' && $margin == 'top' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear bottom-padding top-margin middle-lg middle-md">
		
		<?php elseif ( $width && $padding == 'both' && $margin == 'top' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-bottom-padding top-margin middle-lg middle-md">
		
		<?php elseif ( $width && $padding == 'both' && $margin == 'bottom' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-bottom-padding bottom-margin middle-lg middle-md">
		
		<?php elseif ( $width && $padding == 'both' && $margin == 'both' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-bottom-padding top-bottom-margin middle-lg middle-md">
		
		<?php elseif ( $width && $padding == 'top' && $margin == 'both' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-padding top-bottom-margin middle-lg middle-md">
		
		<?php elseif ( $width && $padding == 'bottom' && $margin == 'both' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear bottom-padding top-bottom-margin middle-lg middle-md">
		
		<?php elseif ( $width && $padding == 'top'): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-padding middle-lg middle-md">
		
		<?php elseif ( $width && $padding == 'bottom'): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear bottom-padding middle-lg middle-md">
		
		<?php elseif ( $width && $padding == 'both'): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-bottom-padding middle-lg middle-md">
		
		<?php elseif ( $width && $margin == 'top'): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-margin middle-lg middle-md">
		
		<?php elseif ( $width && $margin == 'bottom'): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear bottom-margin middle-lg middle-md">
		
		<?php elseif ( $width && $margin == 'both'): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-bottom-margin middle-lg middle-md">
		
		<?php elseif ( $padding == 'top' && $margin == 'top' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-padding top-margin middle-lg middle-md">
		
		<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'bottom' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear bottom-padding bottom-margin middle-lg middle-md">
		
		<?php elseif ( $padding == 'bottom' && $margin == 'bottom' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear bottom-padding bottom-margin middle-lg middle-md">
		
		<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'both' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-bottom-padding top-bottom-margin middle-lg middle-md">
		
		<?php elseif ( $padding == 'both' && $margin == 'both' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-bottom-padding top-bottom-margin middle-lg middle-md">
		
		<?php elseif ( $blockanchor && $padding == 'top' && $margin == 'bottom' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-padding bottom-margin middle-lg middle-md">
		
		<?php elseif ( $padding == 'top' && $margin == 'bottom' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-padding bottom-margin middle-lg middle-md">
		
		<?php elseif ( $blockanchor && $padding == 'top' && $margin == 'both' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-padding top-bottom-margin middle-lg middle-md">
		
		<?php elseif ( $padding == 'top' && $margin == 'both' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-padding top-bottom-margin middle-lg middle-md">
		
		<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'top' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear bottom-padding top-margin middle-lg middle-md">
		
		<?php elseif ( $padding == 'bottom' && $margin == 'top' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear bottom-padding top-margin middle-lg middle-md">
		
		<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'both' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear bottom-padding top-bottom-margin middle-lg middle-md">
		
		<?php elseif ( $padding == 'bottom' && $margin == 'both' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear bottom-padding top-bottom-margin middle-lg middle-md">
		
		<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'top' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-bottom-padding top-margin middle-lg middle-md">
		
		<?php elseif ( $padding == 'both' && $margin == 'top' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-bottom-padding top-margin middle-lg middle-md">
		
		<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'bottom' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-bottom-padding bottom-margin middle-lg middle-md">
		
		<?php elseif ( $padding == 'both' && $margin == 'bottom' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-bottom-padding bottom-margin middle-lg middle-md">
		
		<?php elseif ( $blockanchor && $padding == 'bottom' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear bottom-padding middle-lg middle-md">
		
		<?php elseif ( $padding == 'bottom' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear bottom-padding middle-lg middle-md">
		
		<?php elseif ( $blockanchor && $padding == 'top' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-padding middle-lg middle-md">
		
		<?php elseif ( $padding == 'top' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-padding middle-lg middle-md">
		
		<?php elseif ( $blockanchor && $padding == 'both' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-bottom-padding middle-lg middle-md">
		
		<?php elseif ( $padding == 'both' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-bottom-padding middle-lg middle-md">
		
		<?php elseif ( $blockanchor && $margin == 'bottom' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear bottom-margin middle-lg middle-md">
		
		<?php elseif ( $margin == 'bottom' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear bottom-margin middle-lg middle-md">
		
		<?php elseif ( $blockanchor && $margin == 'top' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-margin middle-lg middle-md">
		
		<?php elseif ( $margin == 'top' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-margin middle-lg middle-md">
		
		<?php elseif ( $blockanchor && $margin == 'both' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-bottom-margin middle-lg middle-md">
		
		<?php elseif ( $margin == 'both' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-bottom-margin middle-lg middle-md">
		
		<?php else : ?>
		<div class="row gutter_space_1 between-lg between-md clear middle-lg middle-md">
		<?php endif; ?>
		
			<?php include('inc/two-third-one-third-loop.php'); ?>
		
		</div>
		
	</div>
	
<?php else : ?>
	
	<div class="row-width-1280">
		
		<?php if ( get_field('heading') ): ?>
		<h2 class="max-width-60"><?php the_field('heading'); ?></h2>
		<?php endif; ?>
		
		<?php if ( $blockanchor && $padding == 'top' && $margin == 'top' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-padding top-margin">
		
		<?php elseif ( $width && $padding == 'top' && $margin == 'top' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-padding top-margin">
		
		<?php elseif ( $width && $padding == 'bottom' && $margin == 'bottom' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear bottom-padding bottom-margin">
		
		<?php elseif ( $width && $padding == 'top' && $margin == 'bottom' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-padding bottom-margin">
		
		<?php elseif ( $width && $padding == 'bottom' && $margin == 'top' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear bottom-padding top-margin">
		
		<?php elseif ( $width && $padding == 'both' && $margin == 'top' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-bottom-padding top-margin">
		
		<?php elseif ( $width && $padding == 'both' && $margin == 'bottom' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-bottom-padding bottom-margin">
		
		<?php elseif ( $width && $padding == 'both' && $margin == 'both' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-bottom-padding top-bottom-margin">
		
		<?php elseif ( $width && $padding == 'top' && $margin == 'both' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-padding top-bottom-margin">
		
		<?php elseif ( $width && $padding == 'bottom' && $margin == 'both' ): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear bottom-padding top-bottom-margin">
		
		<?php elseif ( $width && $padding == 'top'): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-padding">
		
		<?php elseif ( $width && $padding == 'bottom'): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear bottom-padding">
		
		<?php elseif ( $width && $padding == 'both'): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-bottom-padding">
		
		<?php elseif ( $width && $margin == 'top'): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-margin">
		
		<?php elseif ( $width && $margin == 'bottom'): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear bottom-margin">
		
		<?php elseif ( $width && $margin == 'both'): ?>
		<div class="row gutter_space_1 between-lg between-md width-800 clear top-bottom-margin">
		
		<?php elseif ( $padding == 'top' && $margin == 'top' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-padding top-margin">
		
		<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'bottom' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear bottom-padding bottom-margin">
		
		<?php elseif ( $padding == 'bottom' && $margin == 'bottom' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear bottom-padding bottom-margin">
		
		<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'both' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-bottom-padding top-bottom-margin">
		
		<?php elseif ( $padding == 'both' && $margin == 'both' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-bottom-padding top-bottom-margin">
		
		<?php elseif ( $blockanchor && $padding == 'top' && $margin == 'bottom' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-padding bottom-margin">
		
		<?php elseif ( $padding == 'top' && $margin == 'bottom' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-padding bottom-margin">
		
		<?php elseif ( $blockanchor && $padding == 'top' && $margin == 'both' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-padding top-bottom-margin">
		
		<?php elseif ( $padding == 'top' && $margin == 'both' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-padding top-bottom-margin">
		
		<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'top' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear bottom-padding top-margin">
		
		<?php elseif ( $padding == 'bottom' && $margin == 'top' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear bottom-padding top-margin bottom-lg bottom-md">
		
		<?php elseif ( $blockanchor && $padding == 'bottom' && $margin == 'both' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear bottom-padding top-bottom-margin">
		
		<?php elseif ( $padding == 'bottom' && $margin == 'both' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear bottom-padding top-bottom-margin">
		
		<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'top' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-bottom-padding top-margin">
		
		<?php elseif ( $padding == 'both' && $margin == 'top' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-bottom-padding top-margin">
		
		<?php elseif ( $blockanchor && $padding == 'both' && $margin == 'bottom' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-bottom-padding bottom-margin">
		
		<?php elseif ( $padding == 'both' && $margin == 'bottom' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-bottom-padding bottom-margin middle-lg middle-md">
		
		<?php elseif ( $blockanchor && $padding == 'bottom' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear bottom-padding">
		
		<?php elseif ( $padding == 'bottom' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear bottom-padding bottom-lg bottom-md">
		
		<?php elseif ( $blockanchor && $padding == 'top' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-padding">
		
		<?php elseif ( $padding == 'top' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-padding">
		
		<?php elseif ( $blockanchor && $padding == 'both' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-bottom-padding">
		
		<?php elseif ( $padding == 'both' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-bottom-padding">
		
		<?php elseif ( $blockanchor && $margin == 'bottom' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear bottom-margin">
		
		<?php elseif ( $margin == 'bottom' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear bottom-margin">
		
		<?php elseif ( $blockanchor && $margin == 'top' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-margin">
		
		<?php elseif ( $margin == 'top' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-margin">
		
		<?php elseif ( $blockanchor && $margin == 'both' ): ?>
		<div id="<?php the_field('block_id'); ?>" class="row gutter_space_1 between-lg between-md clear top-bottom-margin">
		
		<?php elseif ( $margin == 'both' ): ?>
		<div class="row gutter_space_1 between-lg between-md clear top-bottom-margin">
		
		<?php else : ?>
		<div class="row gutter_space_1 between-lg between-md clear">
		<?php endif; ?>
		
			<?php include('inc/two-third-one-third-loop.php'); ?>
		
		</div>
		
	</div>

<?php endif;