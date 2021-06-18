<?php if( have_rows('flexbox_content') ): ?>
<?php while( have_rows('flexbox_content') ): the_row(); ?>
					
<h3><?php the_sub_field('heading'); ?></h3>
<?php the_sub_field('body'); ?>
					
<?php if( have_rows('button') ): ?>
<?php while( have_rows('button') ): the_row(); ?>
					
<?php if ( get_sub_field('link') ): ?>
<p class="link-button">
	<a class="button dark" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a>
</p>
<?php endif; ?>
					
<?php endwhile; ?>
<?php endif; ?>
					
<?php endwhile; ?>
<?php endif; ?>