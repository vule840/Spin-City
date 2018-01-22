<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();

    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    
    // http://scrollmagic.io/
    wp_enqueue_script( 'tweenmax_script', '/wp-content/themes/understrap-child/js/scrollmagic/TweenMax.min.js', array('jquery'),'1.1', true );
     wp_enqueue_script( 'scrollmagic_script', '/wp-content/themes/understrap-child/js/scrollmagic/ScrollMagic.min.js', array('jquery'),'1.1', true );
       wp_enqueue_script( 'animation_script','/wp-content/themes/understrap-child/js/scrollmagic/animation.gsap.min.js', array('jquery'),'1.1', true );
        wp_enqueue_script( 'animation_debug_indicators','/wp-content/themes/understrap-child/js/scrollmagic/debug.addIndicators.min.js', array('jquery'),'1.1', true );
      // SKRIPTA
      wp_enqueue_script( 'child-understrap-scripts1', get_stylesheet_directory_uri() . '/js/child-theme-custom.js', array(), $the_theme->get( 'Version' ), true ); 

}


