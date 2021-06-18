<?php get_header();
$layoutstyle = get_field('layout_style', 'options');
switch ( $layoutstyle ) {
	case 'default':
		$layout = '';
		break;
	case 'wave':
		$layout = ' wave-layout';
		break;
	default:
		$layout = '';
} ?>

	<main role="main" aria-label="Content" id="main-content">
		<!-- section -->
		<section class="home-page<?php if ( $layout ): echo $layout; endif; ?>">

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
