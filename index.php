<?php get_header(); ?>

	<main role="main" aria-label="Content" id="main-content">
		<!-- section -->
		<section>
			
			<div class="inner max-width-1080">

				<h1 class="text-align-center page-title"><?php esc_html_e( 'Insights', 'torrent' ); ?></h1>
	
				<?php get_template_part( 'loop' ); ?>
	
				<?php get_template_part( 'pagination' ); ?>
				
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
