<?php

function csk_affiliate_post(){

	ob_start();

	get_template_part( 'template-parts/affiliate-post');
	
	$my_variable  = ob_get_clean();

	return $my_variable;
}

add_shortcode( 'csk_affiliate_post', 'csk_affiliate_post' );


add_action('wp_en','');

function my_theme_enqueue_styles() {
	wp_enqueue_style( 'child-style',
		get_stylesheet_uri(),
		array( 'parenthandle' ),
		wp_get_theme()->get( 'Version' ) // This only works if you have Version defined in the style header.
	);
}

function csk_child_theme_style() {

	if ( shortcode_exists( 'csk_affiliate_post' ) ) {
    // The [csk_affiliate_post] short code exists.
			// slick basic css for slider
		wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css', array() );
}
}

add_action( 'wp_enqueue_scripts', 'csk_child_theme_style' );
