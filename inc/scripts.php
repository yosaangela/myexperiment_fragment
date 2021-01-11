<?php

/**
 * Enqueue scripts and styles.
 */
function YourThemeName_scripts() {
    wp_enqueue_style( 'calmzy-style', get_stylesheet_directory_uri() . '/dist/css/build.min.css', array(), '1.0.0' );
    
    wp_enqueue_script( 'calmzy-script', get_template_directory_uri() . '/dist/js/build.min.js', array('jquery'), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	} 
    
	if(is_page_template('template-pages/impression.php')) {
		wp_enqueue_script( 'spotlight', get_template_directory_uri() . '/assets/spotlight.js', array('jquery'), '1.0.1', true );
	}
}
add_action( 'wp_enqueue_scripts', 'YourThemeName_scripts' );