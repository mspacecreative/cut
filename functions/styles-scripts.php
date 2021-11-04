<?php

// Load HTML5 Blank conditional scripts
/*
function shipwright_conditional_scripts() {
    if ( is_page( array(172, 174, 176) ) ) {
        // Conditional script(s)
        wp_register_script( 'header-scripts', get_template_directory_uri() . '/assets/js/header-scripts.js', array( 'jquery' ), '1.0.0' );
        wp_enqueue_script( 'header-scripts' );
    }
}
add_action( 'wp_print_scripts', 'shipwright_conditional_scripts' ); // Add Conditional Page Scripts
*/

// Load HTML5 Blank styles
function torrent_styles() {
    if ( HTML5_DEBUG ) {
        // Register CSS
        wp_enqueue_style( 'torrent' );
    } else {
        // Custom CSS
        wp_register_style( 'cut-styles', get_template_directory_uri() . '/style.css', array(), '1.0' );
        // Register CSS
        wp_enqueue_style( 'cut-styles' );
    }
    // MAIN CSS
    wp_register_style( 'main', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0' );
    // REGISTER MAIN CSS
    wp_enqueue_style( 'main' );
    
    // GOOGLE FONTS
    wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,600;0,900;1,200;1,300;1,600;1,900&display=swap', array(), null );
    // Register CSS
    wp_enqueue_style( 'google-fonts' );
    
    // LIGHTBOX STYLES
    wp_register_style( 'lightbox-styles', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css', array(), null );
    
    // SLICK SCRIPT
    wp_register_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true );
	// Enqueue Scripts
	wp_enqueue_script( 'slick' );
	
	// LIGHTBOX SCRIPT
    wp_register_script('lightbox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array('jquery'), null, true );
	
	// AOS SCRIPT
	wp_register_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array('jquery'), null, true );
	// Enqueue Scripts
	wp_enqueue_script( 'aos' );
	
	// Custom scripts
    wp_register_script('shipwrightscripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true );
	// Enqueue Scripts
	wp_enqueue_script( 'shipwrightscripts' );
    
    // FONT AWESOME CSS
    wp_register_style( 'fontawesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), null );
    wp_enqueue_style( 'fontawesome' );
    
    // JS COOKIES
    wp_register_script('js-cookie', 'https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js', array('jquery'), null, true );
	// Enqueue Scripts
	wp_enqueue_script( 'js-cookie' );
    
    // MODAL SCRIPT
    wp_register_script('modal-script', get_template_directory_uri() . '/assets/js/modal.js', array('jquery'), false, true);
    // Localize the script with new data
    $script_data_array = array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'security' => wp_create_nonce( 'view_bio' ),
    );
    wp_localize_script( 'modal-script', 'torrent', $script_data_array );
    wp_enqueue_script('modal-script');
    
    if ( is_single() ) {
		wp_register_script( 'blogscript', get_template_directory_uri() . '/assets/js/blog.js', array( 'jquery' ), '1.0.0', true );	
		wp_enqueue_script( 'blogscript' );
	}
}
add_action( 'wp_enqueue_scripts', 'torrent_styles' ); // Add Theme Stylesheet