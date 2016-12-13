<?php
/****************************************************
* Register wpt_service post type
*****************************************************/
$labels = array(
	'name'                => _x( 'services', 'Post Type General Name', 'wpt' ),
	'singular_name'       => _x( 'service', 'Post Type Singular Name', 'wpt' ),
	'all_items'           => __( 'All services', 'wpt' ),
	'view_item'           => __( 'View service', 'wpt' ),
	'add_new_item'        => __( 'Add New service', 'wpt' ),
	'add_new'             => __( 'Add New service ', 'wpt' ),
	'edit_item'           => __( 'Edit service', 'wpt' ),
	'update_item'         => __( 'Update service', 'wpt' ),
	'search_items'        => __( 'Search services', 'wpt' ),
	'not_found'           => __( 'service Not found', 'wpt' ),
	'not_found_in_trash'  => __( 'service Not found in Trash', 'wpt' ),
);
$args = array(
	'label'               => __( 'service', 'wpt' ),
	'labels'              => $labels,
	'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
	'public'              => true,
	'show_in_menu'        => true,
	'menu_position'       => 21,
	'menu_icon'           => 'dashicons-smiley',
	'can_export'          => true,
	'has_archive'         => false,
	'exclude_from_search' => false,
	'rewrite'             => array( 'slug' => 'service' ),
);
register_post_type( 'wpt_service', $args );

/****************************************************
* Register custom taxonomy for wpt_service post type
*****************************************************/

$labels = array(
	'name'					=> _x( 'Service Cateries', 'Taxonomy General Name', 'wpt' ),
	'singular_name'			=> _x( 'service Category', 'Taxonomy Singular Name', 'wpt' ),
	'add_new_item'			=> __( 'Add New service Category', 'wpt' ),
	'edit_item'				=> __( 'Edit service Category', 'wpt' ),
	'update_item'			=> __( 'Update service Category', 'wpt' ),
	'add_or_remove_items'	=> __( 'Add or remove service Category', 'wpt' ),
);

$args = array(
	'labels'            => $labels,
	'public'            => true,
	'hierarchical'      => true,
	'rewrite'             => array( 'slug' => 'service-category' ),
);

register_taxonomy( 'service_category', array( 'wpt_service' ), $args );

