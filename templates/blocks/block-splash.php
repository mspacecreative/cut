<?php 
$content = get_field('content');
?>

<section class="splash">

	<div class="row no-gutters">
		<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="col-inner">
				
				<div class="splash-content">	
					<?php 
					echo $content;
					echo cta_buttons(); ?>
					
				</div>
				
				<div class="ticker">
					<p>Ticker - BITTREX: CUT</p>
				</div>
				
			</div>
		</div>
		
		<?php if ( have_rows('right_column') ): ?>
		<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 video-container">
			
			<?php while ( have_rows('right_column') ): the_row();
			
			// VARS
			$contentrc = get_sub_field('content_right');
			$image = get_sub_field('image');
			$video = get_sub_field('video_url');
			$carousel = get_sub_field('gallery');
			$size = 'large';
			
			if ( $contentrc ): ?>
			<div class="col-inner no-shadow">
				<?php echo $contentrc ?>
			</div>
			
			<?php elseif ( !empty( $image ) ): ?>
			<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			
			<?php elseif ( $carousel ): ?>
			<div class="carousel">
				<?php foreach( $carousel as $image_id ): ?>
				<div>
					<?php echo wp_get_attachment_image( $image_id, $size ); ?>
				</div>
				<?php endforeach; ?>
			</div>
			
			<?php elseif ( $video ): ?>
			<video src="<?php echo $video ?>" poster="" autoplay="true" loop="true" playsinline muted>
				<source src="<?php echo $video ?>" type="mp4" />
				<!--<source src="https://cdn.mspacecreative.com/cut/CUT_home_montage.webm" type="webm" />-->
			</video>
			<?php endif; ?>
			
			<?php endwhile; ?>
			
		</div>
		<?php endif; ?>
		
	</div>

</section>