			<!-- footer -->
			<footer class="footer branddarkgreybg light" role="contentinfo">
				<?php
				$layoutstyle = get_field('layout_style', 'options');
				
				if ( $layoutstyle == 'default' ) {
				echo '
				<div class="branddarkgreybg light">';
				} elseif ( $layoutstyle == 'wave' ) {
				echo '
				<div>';	
				} else {
				echo '
				<div class="branddarkgreybg light">';
				} ?>
				
					<div class="inner top-bottom-padding">
						<div class="row gutters">
							<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'footer-col-1' ) ) ?>
							</div>
							
							<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'footer-col-2' ) ) ?>
							</div>
							
							<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'footer-col-3' ) ) ?>
							</div>
						</div>
					</div>
				</div>
				
				<div class="inner">

				<!-- copyright -->
			    <?php
			    	$credits = get_field('credits', 'options');
				    if ( $credits ) {
				    	echo '<p class="copyright">' . __( '&copy; ' ); echo date('Y '); . $credits . __('. All rights reserved.' ) . '</p>';
				    } else {
					    printf( '<p class="copyright">' . __( '&copy; %1$s %2$s. All rights reserved.', 'torrent' ) . '</p>',
					    	date( 'Y'),
					    	esc_html( get_bloginfo( 'name' ) )
						);
					}
				?>
				<!-- /copyright -->
				
				</div>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->
		
		<?php get_template_part('templates/modal'); ?>

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
