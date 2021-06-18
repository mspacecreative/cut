<?php $post_objects = get_field('testimonial');

if ( $post_objects ): ?>
<section class="banner testimonial_container light-grey-bg">
	<article class="width-800 default-padding align-center">
			
		<div class="slider-carousel">
				
			<?php foreach ( $post_objects as $post ):
			setup_postdata( $post ); ?>
			<div>
					
			<?php if ( has_post_thumbnail() ):
				echo get_the_post_thumbnail( $post->ID, array(200,200) );
			endif; ?>
					
			<h4><?php echo esc_html( get_the_title( $post->ID ) ); ?></h4>
					
			<p style="margin-bottom: 1em;">
				<span class="testimonial_position"><?php the_field( 'title__position', $post->ID); ?></span>
						
				<?php esc_html_e(' / ');
						
				if ( have_rows('company_details', $post->ID) ): 
				while ( have_rows('company_details', $post->ID) ): the_row();
						
				$companyname = get_sub_field('company', $post->ID);
				$sitelink = get_sub_field('website_link', $post->ID);
						
				if ( $companyname && $sitelink ) {
					echo '<span class="testimonial_company"><a href="' . $sitelink . '" target="_blank">' . $companyname . '</a></span>';
				} elseif ( $companyname ) {
					echo '<span class="testimonial_company">' . $companyname . '</span>';
				}
						
				endwhile;
				endif; ?>
			</p>
					
			<i class="fa fa-quote-left" style="display: block; margin: 0 0 10px;"></i>
				<span style="font-style: italic;" class="testimonial-text"><?php the_content(); ?></span>
			<i class="fa fa-quote-right" style="display: block; margin: 15px 0 0;"></i>
					
			</div>
			<?php endforeach; ?>
				
		</div>
			
	</article>
</section>
<?php wp_reset_postdata();
endif; ?>