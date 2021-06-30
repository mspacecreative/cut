<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>
		
		<?php include 'templates/js/share-this.php'; ?>

	</head>
	<body <?php body_class(); ?>>
		
		<div class="mobile-nav" style="padding-top: 3em;">
		<?php 
		wp_nav_menu( array( 
			'theme_location' => 'header-menu',
			'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
		)); ?>
		</div>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
				
				<div class="inner">
					
					<div class="mobile-nav-container">
					 	<button class="hamburger mobile hamburger--squeeze" type="button">
					 		 <span class="hamburger-box">
					 		    <span class="hamburger-inner"></span>
					 		 </span>
					 	</button>
					 </div>
					
					<div class="row between-lg between-md middle-lg middle-md middle-sm middle-xs">

						<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<!-- logo -->
							<div class="logo">
								<a href="<?php echo esc_url( home_url() ); ?>">
									<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/branding/cut-title-logo.svg" alt="Carbon Utility Token" class="logo-img">
								</a>
							</div>
							<!-- /logo -->
							<!-- mobile logo -->
							<div class="mobile-logo">
								<a href="<?php echo esc_url( home_url() ); ?>">
									<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/branding/cut-logo.svg" alt="Carbon Utility Token" class="logo-img-mobile">
								</a>
							</div>
							<!-- / mobile logo -->
						</div>
						
						<div class="col col-lg-9 col-md-9 col-sm-6 col-xs-6 row end-lg end-md end-sm end-xs social-buttons-header">
							<!-- social media -->
							<?php get_template_part('templates/social-media-buttons'); ?>
							
							<button class="hamburger-close mobile hamburger--squeeze is-active" type="button" style="border: none; padding: 0; position: absolute; top: 10px; right: 10px;background: none; height: 30px; width: 30px; display: flex; align-items: center; justify-content: center;">
								<span class="hamburger-box">
									<span class="hamburger-inner"></span>
							 	</span>
							</button>
							
							<!-- nav
							<nav class="nav" role="navigation">
								<?php html5blank_nav(); ?>
							</nav>
							-->
						</div>
						
					</div>
					
				</div>

			</header>
			<!-- /header -->
