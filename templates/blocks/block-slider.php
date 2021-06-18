<?php 
$args = array(
    'post_type' => 'partners',
    'posts_per_page'=> -1,
    'orderby' => 'title',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'partner_category',
            'field' => 'slug',
            'terms' => 'home-page-slider',
        )
    )
);
$loop = get_posts($args); ?>
<!-- Partners -->
<section id="partners" class="extra-top-bottom-padding">
	<h3 class="align-center">THANK YOU TO OUR PARTNERS &amp; SPONSORS</h3>
	
	<?php
	$format = get_field('display_format', $post->ID);
	if ( $format == 'carousel' ) : ?>
	
	<div class="max-width-980">
		<div class="partner-slider">
			
			<?php
			if ( $loop ) :
			
			foreach ( $loop as $post ) : setup_postdata( $post ); ?>
			<div>
				<?php
				$imagelogo = get_field('logo_image', $post->ID);
				$size = 'medium';
				$logolink = get_field('logo_link', $post->ID);
				$shrinklogo = get_field('square_logo', $post->ID);
				if ( $imagelogo && $logolink && $shrinklogo ) : ?>
				<a href="<?php the_field('logo_link', $post->ID); ?>" target="_blank">
					<span class="shrink-logo">
						<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
					</span>
				</a>
				<?php elseif ( $imagelogo && $logolink ) : ?>
				<a href="<?php the_field('logo_link', $post->ID); ?>" target="_blank">
					<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
				</a>
				<?php elseif ( $imagelogo ) : ?>
					<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
				<?php endif; ?>
			</div>
			<?php endforeach;
			
			endif; wp_reset_postdata();
			?>
			
		</div>
	</div>
	<?php elseif ( $format == 'grid' ) : ?>
	<div class="logo-grid flex-wrap display-flex vertical-align-center">
		<?php
		if ( $loop ) :
		
		foreach ( $loop as $post ) : setup_postdata( $post ); ?>
		<div class="logo-cell">
			<?php
			$imagelogo = get_field('logo_image', $post->ID);
			$size = 'medium';
			$logolink = get_field('logo_link', $post->ID);
			$shrinklogo = get_field('square_logo', $post->ID);
			if ( $imagelogo && $logolink && $shrinklogo ) : ?>
			<a href="<?php the_field('logo_link', $post->ID); ?>" target="_blank">
				<span class="shrink-logo">
					<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
				</span>
			</a>
			<?php elseif ( $imagelogo && $logolink ) : ?>
			<a href="<?php the_field('logo_link', $post->ID); ?>" target="_blank">
				<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
			</a>
			<?php elseif ( $imagelogo ) : ?>
				<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
			<?php endif; ?>
		</div>
		<?php endforeach;
		
		endif; 
		?>
	</div>
	<?php endif; ?>
	
</section>
<!-- /Partners -->
<?php wp_reset_postdata(); ?>