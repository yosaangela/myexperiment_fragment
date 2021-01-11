<?php

/*CPT notification*/
add_action('init', 'notification_post_types');

function notification_post_types()
{
	$labels = array(
		'name' => _x('Notifications', 'notification General Name', 'YourThemeName'),
		'singular_name' => _x('Notifications', 'Post Type Singular Name', 'YourThemeName'),
		'menu_name' => __('Notifications', 'YourThemeName'),
		'name_admin_bar' => __('Notification', 'YourThemeName'),
		'archives' => __('Notification Archives', 'YourThemeName'),
		'attributes' => __('Notification Attributes', 'YourThemeName'),
		'parent_item_colon' => __('Parent notification:', 'YourThemeName'),
		'all_items' => __('All notification', 'YourThemeName'),
		'add_new_item' => __('Add New notification', 'YourThemeName'),
		'add_new' => __('Add New', 'YourThemeName'),
		'new_item' => __('New notification', 'YourThemeName'),
		'edit_item' => __('Edit notification', 'YourThemeName'),
		'update_item' => __('Update notification', 'YourThemeName'),
		'view_item' => __('View notification', 'YourThemeName'),
		'view_items' => __('View notification', 'YourThemeName'),
		'search_items' => __('Search notification', 'YourThemeName'),
		'not_found' => __('Not found', 'YourThemeName'),
		'not_found_in_trash' => __('Not found in Trash', 'YourThemeName'),
		'featured_image' => __('Featured Image', 'YourThemeName'),
		'set_featured_image' => __('Set featured image', 'YourThemeName'),
		'remove_featured_image' => __('Remove featured image', 'YourThemeName'),
		'use_featured_image' => __('Use as featured image', 'YourThemeName'),
		'insert_into_item' => __('Insert into item', 'YourThemeName'),
		'uploaded_to_this_item' => __('Uploaded to this notification', 'YourThemeName'),
		'items_list' => __('notification list', 'YourThemeName'),
		'items_list_navigation' => __('notification list navigation', 'YourThemeName'),
		'filter_items_list' => __('Filter notification list', 'YourThemeName'),

	);
	$args = array(
		'label' => __('notification', 'YourThemeName'),
		'description' => __('notification Description', 'YourThemeName'),
		'labels' => $labels,
		'supports' => array('title', 'editor', 'thumbnail'),
		'hierarchical' => false,
		'public' => true,
		'show_in_rest' => true, //to show in  gutenberg
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => false,
		'menu_icon'		=> 'dashicons-pressthis',
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'capability_type' => 'page',
	);
	register_post_type('notification', $args);
}
/*End CPT notification*/