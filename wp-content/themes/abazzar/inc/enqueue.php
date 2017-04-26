<?php
/**
 * ajkerbazzar enqueue scripts
 *
 * @package ajkerbazzar
 */

function ajkerbazzar_scripts() {
    wp_enqueue_style( 'ajkerbazzar-styles', get_stylesheet_directory_uri() . '/css/theme.css', array(), '0.4.7');
    wp_enqueue_script('jquery'); 
    wp_enqueue_script( 'ajkerbazzar-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), '0.4.7', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'ajkerbazzar_scripts' );

/** 
*Loading slider script conditionally
**/

if ( is_active_sidebar( 'hero' ) ):
add_action("wp_enqueue_scripts","ajkerbazzar_slider");
  
function ajkerbazzar_slider(){
    if ( is_front_page() ) {    
    $data = array(
        "timeout"=> intval( get_theme_mod( 'ajkerbazzar_theme_slider_time_setting', 5000 )),
        "items"=> intval( get_theme_mod( 'ajkerbazzar_theme_slider_count_setting', 1 ))
    	);

    wp_enqueue_script("ajkerbazzar-slider-script", get_stylesheet_directory_uri() . '/js/slider_settings.js', array(), '0.4.7');
    wp_localize_script( "ajkerbazzar-slider-script", "ajkerbazzar_slider_variables", $data );
    }
}
endif;

