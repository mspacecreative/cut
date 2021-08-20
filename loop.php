<?php if (have_posts()): ?>

	<div class="grid-container">
	
	<?php 
	while (have_posts()) : the_post();
	$defaultimg = get_template_directory_uri() . '/assets/img/placeholders/featuredimg.jpg';
	$postimgratio = get_field('post_image_ratio', get_the_ID());
	
	switch ($postimgratio) {
		case 'anamorphic':
			$postimgratio = '';
			break;
		case 'square':
			$postimgratio = ' square-img-crop';
			break;
		case 'widescreen':
			$postimgratio = ' widescreen-img-crop';
			break;
		default:
			$postimgratio = '';
	} ?>
	
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
	
			<!-- post thumbnail -->
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<div class="featured-img-container<?php if ($postimgratio): echo $postimgratio; endif; ?>">
					<?php if ( has_post_thumbnail() ) : // Check if thumbnail exists. ?>
					<?php the_post_thumbnail( 'large' ); // Declare pixel size you need inside the array. ?>
					<?php else: ?>
					<img src="<?php echo $defaultimg ?>" class="featuredimg-placeholder">
					<?php endif; ?>
				</div>
			</a>
			<!-- /post thumbnail -->
			
			<div class="row gutters margin-top-2">
				<div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<!-- post title -->
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<!-- /post title -->
					
					<!-- post details -->
					<span class="date">
						<?php the_date('F j, Y'); ?>
					</span>
					<!-- /post details -->
				</div>
				
				<div class="col col-lg-8 col-md-8 col-sm-12 col-xs-12 article-excerpt">
					<p><?php echo blogExcerpt(); ?></p>
				</div>
			</div>
	
		</article>
		<!-- /article -->
		
	<?php endwhile; ?>
		
	</div>

<?php else : ?>

	<!-- article -->
	<article>
		<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
