<?php

/*CPT books*/
add_action('init',  'books_post_types');

function books_post_types()
{
	$labels = array(
		'name' => _x('Books', 'books General Name', 'YourThemeName'),
		'singular_name' => _x('Books', 'Post Type Singular Name', 'YourThemeName'),
		'menu_name' => __('Books', 'YourThemeName'),
		'name_admin_bar' => __('Books', 'YourThemeName'),
		'archives' => __('Books Archives', 'YourThemeName'),
		'attributes' => __('books Attributes', 'YourThemeName'),
		'parent_item_colon' => __('Parent books:', 'YourThemeName'),
		'all_items' => __('All books', 'YourThemeName'),
		'add_new_item' => __('Add New books', 'YourThemeName'),
		'add_new' => __('Add New', 'YourThemeName'),
		'new_item' => __('New Books', 'YourThemeName'),
		'edit_item' => __('Edit books', 'YourThemeName'),
		'update_item' => __('Update books', 'YourThemeName'),
		'view_item' => __('View books', 'YourThemeName'),
		'view_items' => __('View books', 'YourThemeName'),
		'search_items' => __('Search books', 'YourThemeName'),
		'not_found' => __('Not found', 'YourThemeName'),
		'not_found_in_trash' => __('Not found in Trash', 'YourThemeName'),
		'featured_image' => __('Featured Image', 'YourThemeName'),
		'set_featured_image' => __('Set featured image', 'YourThemeName'),
		'remove_featured_image' => __('Remove featured image', 'YourThemeName'),
		'use_featured_image' => __('Use as featured image', 'YourThemeName'),
		'insert_into_item' => __('Insert into item', 'YourThemeName'),
		'uploaded_to_this_item' => __('Uploaded to this books', 'YourThemeName'),
		'items_list' => __('books list', 'YourThemeName'),
		'items_list_navigation' => __('books list navigation', 'YourThemeName'),
		'filter_items_list' => __('Filter books list', 'YourThemeName'),
	);
	$args = array(
		'label' => __('books', 'YourThemeName'),
		'description' => __('books Description', 'YourThemeName'),
		'labels' => $labels,
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies'	=>  array('category'), //register category by taxo
		'hierarchical' => false,
		'public' => true,
		'show_in_rest' => true, //to show in  gutenberg
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'menu-icon'		=> 'dashicons-businesswoman',
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => false,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'capability_type' => 'page',
	);
	register_post_type('books_cpt', $args);
}
/*End CPT books*/