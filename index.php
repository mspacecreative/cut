<?php get_header(); ?>

	<main role="main" aria-label="Content" id="main-content">
		<!-- section -->
		<section class="margin-bottom-4">
			
			<div class="inner">

				<h1 class="page-title"><?php echo get_the_title( get_option('page_for_posts', true) ); ?></h1>
	
				<?php get_template_part( 'loop' ); ?>
	
				<?php get_template_part( 'pagination' ); ?>
				
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
