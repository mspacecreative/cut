<?php get_header(); ?>

	<main role="main" aria-label="Content" id="main-content" class="bottom-padding">
	<!-- section -->
	<section>
		
		<?php if ( have_posts() ) : ?>
		
		<div class="inner">
			
			<?php while (have_posts() ) : the_post(); ?>
			
			<div class="row gutter_wider">

				<div class="col col-lg-8 col-md-8 col-sm-12 col-xs-12">
					
					<div class="title-date-container">
			
						<!-- post title -->
						<h1 class="page-title">
							<?php the_title(); ?>
						</h1>
						<!-- /post title -->
						
						<!-- post details -->
						<span class="date">
							<time date="<?php the_time( 'Y-m-d' ); ?>">
								<?php the_date(); ?>
							</time>
						</span>
						<!-- /post details -->
					
					</div>
			
					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						
						<?php the_content(); // Dynamic Content. ?>
			
						<div class="sharethis-inline-share-buttons margin-top-2"></div>
						
						<ul class="post-pagination clearfix">
							<li class="prev small"><?php previous_post_link('%link', 'Previous article'); ?></li>
							<li class="next small"><?php next_post_link('%link', 'Next article'); ?></li>
						</ul>
			
					</article>
					<!-- /article -->
					
				</div>
				
				<div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12 top-margin-mobile-4">
					<?php get_sidebar('single-post'); ?>
				</div>
			
			</div>
			
			<?php endwhile; ?>
			
			<?php else : ?>
			
			<!-- article -->
			<article>
			
				<h1><?php esc_html_e( 'Sorry, nothing to display.', 'torrent' ); ?></h1>
			
			</article>
			<!-- /article -->
		
		</div>
		
		<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
