<article class="icon-buckets">
	
	<div class="shadow white-bg top-bottom-padding">
		<div class="row-width-1280">
			<div class="row gutter_space_1 clear">
			
				<?php 
				$aligncenter = get_field('align_center');
				$iconposition = get_field('icon_position');
				
				if( have_rows('left_column') ): ?>
				<?php while( have_rows('left_column') ): the_row();
				
				if ( $aligncenter && $iconposition == 'top' ): ?>
				<div class="column-container col-lg-4 col-md-4 col-sm-6 col-xs-12 special align-center">
				
				<?php elseif ( $iconposition == 'top' ): ?>
				<div class="column-container col-lg-4 col-md-4 col-sm-6 col-xs-12 special">
				
				<?php elseif ( $iconposition == 'inline' ): ?>
				<div class="column-container col-lg-4 col-md-4 col-sm-6 col-xs-12 special inline-icons">
				
				<?php else : ?>
				<div class="column-container col-lg-4 col-md-4 col-sm-6 col-xs-12 special inline-icons">
				<?php endif; ?>
				
					<div class="nested-row">
				
						<?php
						$iconleft = get_sub_field('icon_left');
						$iconleftsize = get_sub_field('icon_size_left');
						
						if ( $iconleft ): ?>
							
						<?php if ( $iconleftsize == 'small' ): ?>
						<span class="icon solid col-lg-2 col-md-2 col-sm-2 col-xs-2"><i class="fa-fw <?php echo $iconleft ?>" style="font-size: 30px;"></i></span>
							
						<?php elseif ( $iconleftsize == 'medium' ): ?>
						<span class="icon solid col-lg-2 col-md-2 col-sm-2 col-xs-2"><i class="fa-fw <?php echo $iconleft ?>" style="font-size: 60px;"></i></span>
							
						<?php elseif ( $iconleftsize == 'large' ): ?>
						<span class="icon solid col-lg-2 col-md-2 col-sm-2 col-xs-2"><i class="fa-fw <?php echo $iconleft ?>" style="font-size: 90px;"></i></span>
						
						<?php else : ?>
						<span class="icon solid col-lg-2 col-md-2 col-sm-2 col-xs-2"><i class="fa-fw <?php echo $iconleft ?>" style="font-size: 30px;"></i></span>
						<?php endif; ?>
							
						<?php endif; ?>
							
						<div class="col-lg-10 col-md-10 col-xs-10 col-xs-10">
							<?php the_sub_field('content_left'); ?>
						</div>
						
					</div>
						
				</div>
					
				<?php endwhile; ?>
				<?php endif;
				
				if( have_rows('center_column') ): ?>
				<?php while( have_rows('center_column') ): the_row();
				
				if ( $aligncenter && $iconposition == 'top' ): ?>
				<div class="column-container col-lg-4 col-md-4 col-sm-6 col-xs-12 special align-center">
				
				<?php elseif ( $iconposition == 'top' ): ?>
				<div class="column-container col-lg-4 col-md-4 col-sm-6 col-xs-12 special">
				
				<?php elseif ( $iconposition == 'inline' ): ?>
				<div class="column-container col-lg-4 col-md-4 col-sm-6 col-xs-12 special inline-icons">
				
				<?php else : ?>
				<div class="column-container col-lg-4 col-md-4 col-sm-6 col-xs-12 special inline-icons">
				<?php endif; ?>
				
					<div class="nested-row">
					
						<?php 
						$iconcenter = get_sub_field('icon_center');
						$iconcentersize = get_sub_field('icon_size_center');
						
						if ( $iconcenter ): ?>
							
						<?php if ( $iconcentersize == 'small' ): ?>
						<span class="icon solid col-lg-2 col-md-2 col-sm-2 col-xs-2"><i class="fa-fw <?php echo $iconcenter ?>" style="font-size: 30px;"></i></span>
							
						<?php elseif ( $iconcentersize == 'medium' ): ?>
						<span class="icon solid col-lg-2 col-md-2 col-sm-2 col-xs-2"><i class="fa-fw <?php echo $iconcenter ?>" style="font-size: 60px;"></i></span>
							
						<?php elseif ( $iconcentersize == 'large' ): ?>
						<span class="icon solid col-lg-2 col-md-2 col-sm-2 col-xs-2"><i class="fa-fw <?php echo $iconcenter ?>" style="font-size: 90px;"></i></span>
						
						<?php else : ?>
						<span class="icon solid col-lg-2 col-md-2 col-sm-2 col-xs-2"><i class="fa-fw <?php echo $iconcenter ?>" style="font-size: 30px;"></i></span>
						<?php endif; ?>
							
						<?php endif; ?>
							
						<div class="col-lg-10 col-md-10 col-xs-10 col-xs-10">
							<?php the_sub_field('content_center'); ?>
						</div>
					
					</div>
						
				</div>
					
				<?php endwhile; ?>
				<?php endif;
				
				if( have_rows('right_column') ): ?>
				<?php while( have_rows('right_column') ): the_row();
				
				if ( $aligncenter && $iconposition == 'top' ): ?>
				<div class="column-container col-lg-4 col-md-4 col-sm-6 col-xs-12 special align-center">
				
				<?php elseif ( $iconposition == 'top' ): ?>
				<div class="column-container col-lg-4 col-md-4 col-sm-6 col-xs-12 special">
				
				<?php elseif ( $iconposition == 'inline' ): ?>
				<div class="column-container col-lg-4 col-md-4 col-sm-6 col-xs-12 special inline-icons">
				
				<?php else : ?>
				<div class="column-container col-lg-4 col-md-4 col-sm-6 col-xs-12 special inline-icons">
				<?php endif; ?>
				
					<div class="nested-row">
					
						<?php 
						$iconright = get_sub_field('icon_right');
						$iconrightsize = get_sub_field('icon_size_right');
						
						if ( $iconright ): ?>
							
						<?php if ( $iconrightsize == 'small' ): ?>
						<span class="icon solid col-lg-2 col-md-2 col-sm-2 col-xs-2"><i class="fa-fw <?php echo $iconright ?>" style="font-size: 30px;"></i></span>
							
						<?php elseif ( $iconrightsize == 'medium' ): ?>
						<span class="icon solid col-lg-2 col-md-2 col-sm-2 col-xs-2"><i class="fa-fw <?php echo $iconright ?>" style="font-size: 60px;"></i></span>
							
						<?php elseif ( $iconrightsize == 'large' ): ?>
						<span class="icon solid col-lg-2 col-md-2 col-sm-2 col-xs-2"><i class="fa-fw <?php echo $iconright ?>" style="font-size: 90px;"></i></span>
						
						<?php else : ?>
						<span class="icon solid col-lg-2 col-md-2 col-sm-2 col-xs-2"><i class="fa-fw <?php echo $iconright ?>" style="font-size: 30px;"></i></span>
						<?php endif; ?>
							
						<?php endif; ?>
							
						<div class="col-lg-10 col-md-10 col-xs-10 col-xs-10">
							<?php the_sub_field('content_right'); ?>
						</div>
					
					</div>
						
				</div>
					
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
		</div>
		
		<?php 
		if( have_rows('cta_button') ):
		while( have_rows('cta_button') ): the_row();
		
		if ( get_sub_field('button_link') ): ?>
		<footer class="no-padding-bottom-margin-top align-center">
			<ul class="actions">
				<li>
					<a href="<?php the_sub_field('button_link'); ?>" class="dark button"><?php the_sub_field('button_label'); ?></a>
				</li>
			</ul>
		</footer>
		<?php endif;
		
		endwhile;
		endif; ?>
		
	</div>
	
</article>