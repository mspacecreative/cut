<?php get_header();

$titlealign = get_field('center_page_title');
$bgimg = get_field('background_image'); ?>

	<main role="main" aria-label="Content" id="main-content">
		<!-- section -->
		<section>
			
			<?php 
			if ( $bgimg ) {
				echo '
				<div class="gradient-inner page-bg-img" style="background-image: url(' . $bgimg . ');">
					<div class="vertical-fade left"></div>
					<div class="vertical-fade right"></div>
				</div>';
			}
			?>
			
			<div class="inner">
				<p class="tracked-text small">CASE STUDY</p>
				<h1 class="page-title<?php if ( $titlealign ): echo ' text-align-center'; endif; ?>"><?php the_title(); ?></h1>
			</div>

		<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else : ?>

			<!-- article -->
			<article>

				<h2><?php esc_html_e( 'Sorry, nothing to display.', 'torrent' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
