<?php get_header(); ?>

	<main role="main" aria-label="Content" id="main-content">
		<!-- section -->
		<section class="margin-bottom-4">
			
			<div class="inner">

				<h1 class="page-title"><?php get_the_title(647); ?></h1>
	
				<?php get_template_part( 'loop' ); ?>
	
				<?php get_template_part( 'pagination' ); ?>
				
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
