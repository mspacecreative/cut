<!-- Insights -->
<section id="insights" class="container shadow">
	<article class="tiles">
		<div class="width-800">
			<h1><?php the_field('heading'); ?></h1>
			<?php
			$args = array(
			    'category_name' => 'events',
			    'posts_per_page' => 3,
			    'order' => 'DESC',
			);
			
			$your_query = new WP_Query($args); ?>
			<div class="tiles">
				
				<?php while ($your_query->have_posts()) : $your_query->the_post(); ?>
				
				<div class="event-container tiles">
					<?php
					if ( has_post_thumbnail() ): ?>
					<span class="event-thumb one-third">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-blog-thumb'); ?></a>
					</span>
					<?php else : ?>
					<span class="event-thumb one-third">
						<a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/placeholders/volta-events.jpg" alt="Volta Events" /></a>
					</span>
					<?php endif; ?>
					<div class="bucket-content two-third">
						<header>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p class="event-date"><?php the_time('F j, Y'); ?></p>
						</header>
						<p><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?> <a style="font-weight: 700;" href="<?php the_permalink(); ?>">read more</a></p>
					</div>
				</div>
				
				<?php endwhile; ?>
				
			</div>
			<?php wp_reset_query(); ?>
			
			<footer class="no-padding-bottom-margin-top">
				<ul class="actions">
					<li><a href="#" class="dark button">MORE EVENTS</a></li>
				</ul>
			</footer>
		</div>
		
	</article>
</section>
<!-- /Insights -->