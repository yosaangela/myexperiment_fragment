<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package YourThemeName
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function cones_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'cones_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function cones_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'cones_pingback_header' );


/**
 * Allow .svg upload
 * 
 * To use this function works, add this code in your wp-config.php: define('ALLOW_UNFILTERED_UPLOADS', true);
 */
function upload_my_images($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'upload_my_images');

/*
 * Custom menu output
 * No <ul>, no <li>, just <a>
 * headlab_menu('location')
 **/
function headlab_menu($location)
{
    // Get our nav locations (set in our theme, usually functions.php)
    $menuLocations = get_nav_menu_locations(); // This returns an array of menu locations;
    $menuID = $menuLocations[$location]; // Get the *MENU* menu ID
    $menu_navs = wp_get_nav_menu_items($menuID);
	$queried_page_id = (get_queried_object_id()) ? get_queried_object_id() : woocommerce_get_page_id('shop');
		
	//var_dump($queried_page_id);
    foreach ($menu_navs as $menu_nav) {
		$object_id = $menu_nav->object_id;
		$hasParent = intval($menu_nav->menu_item_parent);

        if ($queried_page_id == $object_id) {
            $active = " class='active main-item'";
        } else {
            $active =  " class='main-item'";
		}
		if(!$hasParent) {
			echo '<a href="' . esc_url($menu_nav->url) . '" ' . $active . '>' . esc_html($menu_nav->title) . '</a>';
		}
    }
}


/**
 * 
 * Registe ajax script function 
 */
function ajax_search_filter_scripts() {
	wp_register_script( 'ajax_search_filter', get_stylesheet_directory_uri() . '/src/js/ajax-filter.js', array('jquery'), false, true ); 
	$script_data_array = [
		'ajaxurl'	=> admin_url( 'admin-ajax.php' ),
		'security'	=> wp_create_nonce( 'filter_search_posts'),
	];
	wp_localize_script(
		'ajax_search_filter', 'book', admin_url('admin-ajax.php')
	); 

	wp_enqueue_script('ajax_search_filter');
}
add_action('wp_enqueue_scripts', 'ajax_search_filter_scripts');