<?php 
$padding = get_field('section_padding_section_padding');
$margin = get_field('section_margin_section_margin');
$width = get_field('content_width');

if ( $padding == 'top' && $margin == 'top' ):

	if ( get_field('content_editor') ): ?>
	<div class="top-padding top-margin light">
		
		<?php the_field('content_editor'); ?>
		
		<?php if( have_rows('content_cta_button') ): ?>
		<?php while( have_rows('content_cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('content_button_link') ): ?>
		<footer>
			
			<ul class="actions">
				<li><a href="<?php the_sub_field('content_button_link'); ?>" class="light button"><?php the_sub_field('content_button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
	<?php endif;
	
elseif ( $width && $padding == 'both' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="width-800 top-bottom-padding light">
		
		<?php the_field('content_editor'); ?>
		
		<?php if( have_rows('content_cta_button') ): ?>
		<?php while( have_rows('content_cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('content_button_link') ): ?>
		<footer>
			
			<ul class="actions">
				<li><a href="<?php the_sub_field('content_button_link'); ?>" class="light button"><?php the_sub_field('content_button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
	<?php endif;
	
elseif ( $padding == 'bottom' && $margin == 'bottom' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="bottom-padding bottom-margin light">
		
		<?php the_field('content_editor'); ?>
		
		<?php if( have_rows('content_cta_button') ): ?>
		<?php while( have_rows('content_cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('content_button_link') ): ?>
		<footer>
			
			<ul class="actions">
				<li><a href="<?php the_sub_field('content_button_link'); ?>" class="light button"><?php the_sub_field('content_button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
	<?php endif;
	
elseif ( $padding == 'both' && $margin == 'both' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="top-bottom-padding top-bottom-margin light">
		
		<?php the_field('content_editor'); ?>
		
		<?php if( have_rows('content_cta_button') ): ?>
		<?php while( have_rows('content_cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('content_button_link') ): ?>
		<footer>
			
			<ul class="actions">
				<li><a href="<?php the_sub_field('content_button_link'); ?>" class="light button"><?php the_sub_field('content_button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
	<?php endif;
	
elseif ( $padding == 'top' && $margin == 'bottom' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="top-padding bottom-margin light">
		
		<?php the_field('content_editor'); ?>
		
		<?php if( have_rows('content_cta_button') ): ?>
		<?php while( have_rows('content_cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('content_button_link') ): ?>
		<footer>
			
			<ul class="actions">
				<li><a href="<?php the_sub_field('content_button_link'); ?>" class="light button"><?php the_sub_field('content_button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
	<?php endif;
	
elseif ( $padding == 'top' && $margin == 'both' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="top-padding top-bottom-margin light">
		
		<?php the_field('content_editor'); ?>
		
		<?php if( have_rows('content_cta_button') ): ?>
		<?php while( have_rows('content_cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('content_button_link') ): ?>
		<footer>
			
			<ul class="actions">
				<li><a href="<?php the_sub_field('content_button_link'); ?>" class="light button"><?php the_sub_field('content_button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
	<?php endif;
	
elseif ( $padding == 'bottom' && $margin == 'top' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="bottom-padding top-margin light">
		
		<?php the_field('content_editor'); ?>
		
		<?php if( have_rows('content_cta_button') ): ?>
		<?php while( have_rows('content_cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('content_button_link') ): ?>
		<footer>
			
			<ul class="actions">
				<li><a href="<?php the_sub_field('content_button_link'); ?>" class="light button"><?php the_sub_field('content_button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
	<?php endif;
	
elseif ( $padding == 'bottom' && $margin == 'both' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="bottom-padding top-bottom-margin light">
		
		<?php the_field('content_editor'); ?>
		
		<?php if( have_rows('content_cta_button') ): ?>
		<?php while( have_rows('content_cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('content_button_link') ): ?>
		<footer>
			
			<ul class="actions">
				<li><a href="<?php the_sub_field('content_button_link'); ?>" class="light button"><?php the_sub_field('content_button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
	<?php endif;
	
elseif ( $padding == 'full' && $margin == 'top' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="full-padding top-margin light">
		
		<?php the_field('content_editor'); ?>
		
		<?php if( have_rows('content_cta_button') ): ?>
		<?php while( have_rows('content_cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('content_button_link') ): ?>
		<footer>
			
			<ul class="actions">
				<li><a href="<?php the_sub_field('content_button_link'); ?>" class="light button"><?php the_sub_field('content_button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
	<?php endif;
	
elseif ( $padding == 'full' && $margin == 'bottom' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="full-padding bottom-margin light">
		
		<?php the_field('content_editor'); ?>
		
		<?php if( have_rows('content_cta_button') ): ?>
		<?php while( have_rows('content_cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('content_button_link') ): ?>
		<footer>
			
			<ul class="actions">
				<li><a href="<?php the_sub_field('content_button_link'); ?>" class="light button"><?php the_sub_field('content_button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
	<?php endif;
	
elseif ( $padding == 'full' && $margin == 'both' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="full-padding top-bottom-margin light">
		
		<?php the_field('content_editor'); ?>
		
		<?php if( have_rows('content_cta_button') ): ?>
		<?php while( have_rows('content_cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('content_button_link') ): ?>
		<footer>
			
			<ul class="actions">
				<li><a href="<?php the_sub_field('content_button_link'); ?>" class="light button"><?php the_sub_field('content_button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
	<?php endif;
	
elseif ( $padding == 'both' && $margin == 'top' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="full-padding top-margin light">
		
		<?php the_field('content_editor'); ?>
		
		<?php if( have_rows('content_cta_button') ): ?>
		<?php while( have_rows('content_cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('content_button_link') ): ?>
		<footer>
			
			<ul class="actions">
				<li><a href="<?php the_sub_field('content_button_link'); ?>" class="light button"><?php the_sub_field('content_button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
	<?php endif;
	
elseif ( $padding == 'both' && $margin == 'bottom' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="full-padding bottom-margin light">
		
		<?php the_field('content_editor'); ?>
		
		<?php if( have_rows('content_cta_button') ): ?>
		<?php while( have_rows('content_cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('content_button_link') ): ?>
		<footer>
			
			<ul class="actions">
				<li><a href="<?php the_sub_field('content_button_link'); ?>" class="light button"><?php the_sub_field('content_button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
	<?php endif;
	
elseif ( $padding == 'both' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="top-bottom-padding light">
		
		<?php the_field('content_editor'); ?>
		
		<?php if( have_rows('content_cta_button') ): ?>
		<?php while( have_rows('content_cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('content_button_link') ): ?>
		<footer>
			
			<ul class="actions">
				<li><a href="<?php the_sub_field('content_button_link'); ?>" class="light button"><?php the_sub_field('content_button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
	<?php endif;
	
elseif ( $padding == 'top' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="top-padding light">
		
		<?php the_field('content_editor'); ?>
		
		<?php if( have_rows('content_cta_button') ): ?>
		<?php while( have_rows('content_cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('content_button_link') ): ?>
		<footer>
			
			<ul class="actions">
				<li><a href="<?php the_sub_field('content_button_link'); ?>" class="light button"><?php the_sub_field('content_button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
	<?php endif;
	
elseif ( $padding == 'bottom' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="bottom-padding light">
		
		<?php the_field('content_editor'); ?>
		
		<?php if( have_rows('content_cta_button') ): ?>
		<?php while( have_rows('content_cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('content_button_link') ): ?>
		<footer>
			
			<ul class="actions">
				<li><a href="<?php the_sub_field('content_button_link'); ?>" class="light button"><?php the_sub_field('content_button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
	<?php endif;
	
elseif ( $width ):
	
	if ( get_field('content_editor') ): ?>
	<div class="width-800 light">
		
		<?php the_field('content_editor'); ?>
		
		<?php if( have_rows('content_cta_button') ): ?>
		<?php while( have_rows('content_cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('content_button_link') ): ?>
		<footer>
			
			<ul class="actions">
				<li><a href="<?php the_sub_field('content_button_link'); ?>" class="light button"><?php the_sub_field('content_button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
	<?php endif;
	
elseif ( $width && $padding == 'bottom' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="width-800 bottom-padding light">
		
		<?php the_field('content_editor'); ?>
		
		<?php if( have_rows('content_cta_button') ): ?>
		<?php while( have_rows('content_cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('content_button_link') ): ?>
		<footer>
			
			<ul class="actions">
				<li><a href="<?php the_sub_field('content_button_link'); ?>" class="light button"><?php the_sub_field('content_button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
	<?php endif;
	
elseif ( $width && $padding == 'top' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="width-800 top-padding light">
		
		<?php the_field('content_editor'); ?>
		
		<?php if( have_rows('content_cta_button') ): ?>
		<?php while( have_rows('content_cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('content_button_link') ): ?>
		<footer>
			
			<ul class="actions">
				<li><a href="<?php the_sub_field('content_button_link'); ?>" class="light button"><?php the_sub_field('content_button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
	<?php endif;
	
elseif ( $width && $padding == 'full' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="width-800 full-padding light">
		
		<?php the_field('content_editor'); ?>
		
		<?php if( have_rows('content_cta_button') ): ?>
		<?php while( have_rows('content_cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('content_button_link') ): ?>
		<footer>
			
			<ul class="actions">
				<li><a href="<?php the_sub_field('content_button_link'); ?>" class="light button"><?php the_sub_field('content_button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
	<?php endif;
	
elseif ( $width && $margin == 'bottom' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="width-800 bottom-margin light">
		
		<?php the_field('content_editor'); ?>
		
		<?php if( have_rows('content_cta_button') ): ?>
		<?php while( have_rows('content_cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('content_button_link') ): ?>
		<footer>
			
			<ul class="actions">
				<li><a href="<?php the_sub_field('content_button_link'); ?>" class="light button"><?php the_sub_field('content_button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
	<?php endif;
	
elseif ( $width && $margin == 'top' ):
	
	if ( get_field('content_editor') ): ?>
	<div class="width-800 top-margin light">
		
		<?php the_field('content_editor'); ?>
		
		<?php if( have_rows('content_cta_button') ): ?>
		<?php while( have_rows('content_cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('content_button_link') ): ?>
		<footer>
			
			<ul class="actions">
				<li><a href="<?php the_sub_field('content_button_link'); ?>" class="light button"><?php the_sub_field('content_button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
	<?php endif;
	
elseif ( $width && $margin == 'both' ):

	if ( get_field('content_editor') ): ?>
	<div class="width-800 top-bottom-margin light">
		
		<?php the_field('content_editor'); ?>
		
		<?php if( have_rows('content_cta_button') ): ?>
		<?php while( have_rows('content_cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('content_button_link') ): ?>
		<footer>
			
			<ul class="actions">
				<li><a href="<?php the_sub_field('content_button_link'); ?>" class="light button"><?php the_sub_field('content_button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
	<?php endif;
	
else :
	
	if ( get_field('content_editor') ): ?>
	<div class="full-padding light">
		
		<?php the_field('content_editor'); ?>
		
		<?php if( have_rows('content_cta_button') ): ?>
		<?php while( have_rows('content_cta_button') ): the_row(); ?>
		<?php if ( get_sub_field('content_button_link') ): ?>
		<footer>
			
			<ul class="actions">
				<li><a href="<?php the_sub_field('content_button_link'); ?>" class="light button"><?php the_sub_field('content_button_label'); ?></a></li>
			</ul>
			
		</footer>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
	<?php endif;

endif; ?>