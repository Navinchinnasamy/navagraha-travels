<?php

if ( ! function_exists('vromon_services') ) {

// Register Custom Post Type
function vromon_services() {

	$labels = array(
		'name'                  => esc_html_x( 'Service', 'Post Type General Name', 'vromon' ),
		'singular_name'         => esc_html_x( 'Service', 'Post Type Singular Name', 'vromon' ),
		'menu_name'             => esc_html__( 'Services', 'vromon' ),
		'name_admin_bar'        => esc_html__( 'Services', 'vromon' ),
		'archives'              => esc_html__( 'Item Archives', 'vromon' ),
		'attributes'            => esc_html__( 'Item Attributes', 'vromon' ),
		'parent_item_colon'     => esc_html__( 'Parent Item:', 'vromon' ),
		'all_items'             => esc_html__( 'All Items', 'vromon' ),
		'add_new_item'          => esc_html__( 'Add New Item', 'vromon' ),
		'add_new'               => esc_html__( 'Add New', 'vromon' ),
		'new_item'              => esc_html__( 'New Item', 'vromon' ),
		'edit_item'             => esc_html__( 'Edit Item', 'vromon' ),
		'update_item'           => esc_html__( 'Update Item', 'vromon' ),
		'view_item'             => esc_html__( 'View Item', 'vromon' ),
		'view_items'            => esc_html__( 'View Items', 'vromon' ),
		'search_items'          => esc_html__( 'Search Item', 'vromon' ),
		'not_found'             => esc_html__( 'Not found', 'vromon' ),
		'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'vromon' ),
		'featured_image'        => esc_html__( 'Featured Image', 'vromon' ),
		'set_featured_image'    => esc_html__( 'Set featured image', 'vromon' ),
		'remove_featured_image' => esc_html__( 'Remove featured image', 'vromon' ),
		'use_featured_image'    => esc_html__( 'Use as featured image', 'vromon' ),
		'insert_into_item'      => esc_html__( 'Insert into item', 'vromon' ),
		'uploaded_to_this_item' => esc_html__( 'Uploaded to this item', 'vromon' ),
		'items_list'            => esc_html__( 'Items list', 'vromon' ),
		'items_list_navigation' => esc_html__( 'Items list navigation', 'vromon' ),
		'filter_items_list'     => esc_html__( 'Filter items list', 'vromon' ),
	);
	$args = array(
		'label'                 => esc_html__( 'Service', 'vromon' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'   => 'dashicons-megaphone',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'service', $args );

}
add_action( 'init', 'vromon_services', 0 );

}

if ( ! function_exists('vromon_why_choice_us') ) {

// Register Custom Post Type
function vromon_why_choice_us() {

	$labels = array(
		'name'                  => esc_html_x( 'Why Choice Us', 'Post Type General Name', 'vromon' ),
		'singular_name'         => esc_html_x( 'Why Choice Us', 'Post Type Singular Name', 'vromon' ),
		'menu_name'             => esc_html__( 'Wy Choice Us', 'vromon' ),
		'name_admin_bar'        => esc_html__( 'Wy Choice Us', 'vromon' ),
		'archives'              => esc_html__( 'Item Archives', 'vromon' ),
		'attributes'            => esc_html__( 'Item Attributes', 'vromon' ),
		'parent_item_colon'     => esc_html__( 'Parent Item:', 'vromon' ),
		'all_items'             => esc_html__( 'All Items', 'vromon' ),
		'add_new_item'          => esc_html__( 'Add New Item', 'vromon' ),
		'add_new'               => esc_html__( 'Add New', 'vromon' ),
		'new_item'              => esc_html__( 'New Item', 'vromon' ),
		'edit_item'             => esc_html__( 'Edit Item', 'vromon' ),
		'update_item'           => esc_html__( 'Update Item', 'vromon' ),
		'view_item'             => esc_html__( 'View Item', 'vromon' ),
		'view_items'            => esc_html__( 'View Items', 'vromon' ),
		'search_items'          => esc_html__( 'Search Item', 'vromon' ),
		'not_found'             => esc_html__( 'Not found', 'vromon' ),
		'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'vromon' ),
		'featured_image'        => esc_html__( 'Featured Image', 'vromon' ),
		'set_featured_image'    => esc_html__( 'Set featured image', 'vromon' ),
		'remove_featured_image' => esc_html__( 'Remove featured image', 'vromon' ),
		'use_featured_image'    => esc_html__( 'Use as featured image', 'vromon' ),
		'insert_into_item'      => esc_html__( 'Insert into item', 'vromon' ),
		'uploaded_to_this_item' => esc_html__( 'Uploaded to this item', 'vromon' ),
		'items_list'            => esc_html__( 'Items list', 'vromon' ),
		'items_list_navigation' => esc_html__( 'Items list navigation', 'vromon' ),
		'filter_items_list'     => esc_html__( 'Filter items list', 'vromon' ),
	);
	$args = array(
		'label'                 => esc_html__( 'Why Choice Us', 'vromon' ),
		'description'           => esc_html__( 'Post Type Description', 'vromon' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'   => 'dashicons-lightbulb',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'why_choice_us', $args );

}
add_action( 'init', 'vromon_why_choice_us', 0 );

}

if ( ! function_exists('vromon_special_package') ) {

// Register Custom Post Type
function vromon_special_package() {

	$labels = array(
		'name'                  => esc_html_x( 'Special Packages', 'Post Type General Name', 'vromon' ),
		'singular_name'         => esc_html_x( 'Special Package', 'Post Type Singular Name', 'vromon' ),
		'menu_name'             => esc_html__( 'Special Packages', 'vromon' ),
		'name_admin_bar'        => esc_html__( 'Special Packages', 'vromon' ),
		'archives'              => esc_html__( 'Item Archives', 'vromon' ),
		'attributes'            => esc_html__( 'Item Attributes', 'vromon' ),
		'parent_item_colon'     => esc_html__( 'Parent Item:', 'vromon' ),
		'all_items'             => esc_html__( 'All Items', 'vromon' ),
		'add_new_item'          => esc_html__( 'Add New Item', 'vromon' ),
		'add_new'               => esc_html__( 'Add New', 'vromon' ),
		'new_item'              => esc_html__( 'New Item', 'vromon' ),
		'edit_item'             => esc_html__( 'Edit Item', 'vromon' ),
		'update_item'           => esc_html__( 'Update Item', 'vromon' ),
		'view_item'             => esc_html__( 'View Item', 'vromon' ),
		'view_items'            => esc_html__( 'View Items', 'vromon' ),
		'search_items'          => esc_html__( 'Search Item', 'vromon' ),
		'not_found'             => esc_html__( 'Not found', 'vromon' ),
		'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'vromon' ),
		'featured_image'        => esc_html__( 'Featured Image', 'vromon' ),
		'set_featured_image'    => esc_html__( 'Set featured image', 'vromon' ),
		'remove_featured_image' => esc_html__( 'Remove featured image', 'vromon' ),
		'use_featured_image'    => esc_html__( 'Use as featured image', 'vromon' ),
		'insert_into_item'      => esc_html__( 'Insert into item', 'vromon' ),
		'uploaded_to_this_item' => esc_html__( 'Uploaded to this item', 'vromon' ),
		'items_list'            => esc_html__( 'Items list', 'vromon' ),
		'items_list_navigation' => esc_html__( 'Items list navigation', 'vromon' ),
		'filter_items_list'     => esc_html__( 'Filter items list', 'vromon' ),
	);
	$args = array(
		'label'                 => esc_html__( 'Special Package', 'vromon' ),
		'description'           => esc_html__( 'Post Type Description', 'vromon' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'   => 'dashicons-clipboard',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'special_package', $args );

}
add_action( 'init', 'vromon_special_package', 0 );

}

if ( ! function_exists('vromon_tour') ) {

// Register Custom Post Type
function vromon_tour() {

	$labels = array(
		'name'                  => esc_html_x( 'Tours', 'Post Type General Name', 'vromon' ),
		'singular_name'         => esc_html_x( 'Tour', 'Post Type Singular Name', 'vromon' ),
		'menu_name'             => esc_html__( 'Tours', 'vromon' ),
		'name_admin_bar'        => esc_html__( 'Tours', 'vromon' ),
		'archives'              => esc_html__( 'Item Archives', 'vromon' ),
		'attributes'            => esc_html__( 'Item Attributes', 'vromon' ),
		'parent_item_colon'     => esc_html__( 'Parent Item:', 'vromon' ),
		'all_items'             => esc_html__( 'All Items', 'vromon' ),
		'add_new_item'          => esc_html__( 'Add New Item', 'vromon' ),
		'add_new'               => esc_html__( 'Add New', 'vromon' ),
		'new_item'              => esc_html__( 'New Item', 'vromon' ),
		'edit_item'             => esc_html__( 'Edit Item', 'vromon' ),
		'update_item'           => esc_html__( 'Update Item', 'vromon' ),
		'view_item'             => esc_html__( 'View Item', 'vromon' ),
		'view_items'            => esc_html__( 'View Items', 'vromon' ),
		'search_items'          => esc_html__( 'Search Item', 'vromon' ),
		'not_found'             => esc_html__( 'Not found', 'vromon' ),
		'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'vromon' ),
		'featured_image'        => esc_html__( 'Featured Image', 'vromon' ),
		'set_featured_image'    => esc_html__( 'Set featured image', 'vromon' ),
		'remove_featured_image' => esc_html__( 'Remove featured image', 'vromon' ),
		'use_featured_image'    => esc_html__( 'Use as featured image', 'vromon' ),
		'insert_into_item'      => esc_html__( 'Insert into item', 'vromon' ),
		'uploaded_to_this_item' => esc_html__( 'Uploaded to this item', 'vromon' ),
		'items_list'            => esc_html__( 'Items list', 'vromon' ),
		'items_list_navigation' => esc_html__( 'Items list navigation', 'vromon' ),
		'filter_items_list'     => esc_html__( 'Filter items list', 'vromon' ),
	);
	$args = array(
		'label'                 => esc_html__( 'Tour', 'vromon' ),
		'description'           => esc_html__( 'Post Type Description', 'vromon' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'   => 'dashicons-universal-access',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'tour', $args );

}
add_action( 'init', 'vromon_tour', 0 );

}

if ( ! function_exists('vromon_gallery') ) {

// Register Custom Post Type
function vromon_gallery() {

	$labels = array(
		'name'                  => esc_html_x( 'Galleries', 'Post Type General Name', 'vromon' ),
		'singular_name'         => esc_html_x( 'Gallery', 'Post Type Singular Name', 'vromon' ),
		'menu_name'             => esc_html__( 'Gallery', 'vromon' ),
		'name_admin_bar'        => esc_html__( 'Gallery', 'vromon' ),
		'archives'              => esc_html__( 'Item Archives', 'vromon' ),
		'attributes'            => esc_html__( 'Item Attributes', 'vromon' ),
		'parent_item_colon'     => esc_html__( 'Parent Item:', 'vromon' ),
		'all_items'             => esc_html__( 'All Items', 'vromon' ),
		'add_new_item'          => esc_html__( 'Add New Item', 'vromon' ),
		'add_new'               => esc_html__( 'Add New', 'vromon' ),
		'new_item'              => esc_html__( 'New Item', 'vromon' ),
		'edit_item'             => esc_html__( 'Edit Item', 'vromon' ),
		'update_item'           => esc_html__( 'Update Item', 'vromon' ),
		'view_item'             => esc_html__( 'View Item', 'vromon' ),
		'view_items'            => esc_html__( 'View Items', 'vromon' ),
		'search_items'          => esc_html__( 'Search Item', 'vromon' ),
		'not_found'             => esc_html__( 'Not found', 'vromon' ),
		'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'vromon' ),
		'featured_image'        => esc_html__( 'Featured Image', 'vromon' ),
		'set_featured_image'    => esc_html__( 'Set featured image', 'vromon' ),
		'remove_featured_image' => esc_html__( 'Remove featured image', 'vromon' ),
		'use_featured_image'    => esc_html__( 'Use as featured image', 'vromon' ),
		'insert_into_item'      => esc_html__( 'Insert into item', 'vromon' ),
		'uploaded_to_this_item' => esc_html__( 'Uploaded to this item', 'vromon' ),
		'items_list'            => esc_html__( 'Items list', 'vromon' ),
		'items_list_navigation' => esc_html__( 'Items list navigation', 'vromon' ),
		'filter_items_list'     => esc_html__( 'Filter items list', 'vromon' ),
	);
	$args = array(
		'label'                 => esc_html__( 'Gallery', 'vromon' ),
		'description'           => esc_html__( 'Post Type Description', 'vromon' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'   => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'gallery', $args );

}
add_action( 'init', 'vromon_gallery', 0 );

}

if ( ! function_exists('vromon_testimonials') ) {

// Register Custom Post Type
function vromon_testimonials() {

	$labels = array(
		'name'                  => esc_html_x( 'Testimonials', 'Post Type General Name', 'vromon' ),
		'singular_name'         => esc_html_x( 'Testimonial', 'Post Type Singular Name', 'vromon' ),
		'menu_name'             => esc_html__( 'Testimonials', 'vromon' ),
		'name_admin_bar'        => esc_html__( 'Testimonials', 'vromon' ),
		'archives'              => esc_html__( 'Item Archives', 'vromon' ),
		'attributes'            => esc_html__( 'Item Attributes', 'vromon' ),
		'parent_item_colon'     => esc_html__( 'Parent Item:', 'vromon' ),
		'all_items'             => esc_html__( 'All Items', 'vromon' ),
		'add_new_item'          => esc_html__( 'Add New Item', 'vromon' ),
		'add_new'               => esc_html__( 'Add New', 'vromon' ),
		'new_item'              => esc_html__( 'New Item', 'vromon' ),
		'edit_item'             => esc_html__( 'Edit Item', 'vromon' ),
		'update_item'           => esc_html__( 'Update Item', 'vromon' ),
		'view_item'             => esc_html__( 'View Item', 'vromon' ),
		'view_items'            => esc_html__( 'View Items', 'vromon' ),
		'search_items'          => esc_html__( 'Search Item', 'vromon' ),
		'not_found'             => esc_html__( 'Not found', 'vromon' ),
		'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'vromon' ),
		'featured_image'        => esc_html__( 'Featured Image', 'vromon' ),
		'set_featured_image'    => esc_html__( 'Set featured image', 'vromon' ),
		'remove_featured_image' => esc_html__( 'Remove featured image', 'vromon' ),
		'use_featured_image'    => esc_html__( 'Use as featured image', 'vromon' ),
		'insert_into_item'      => esc_html__( 'Insert into item', 'vromon' ),
		'uploaded_to_this_item' => esc_html__( 'Uploaded to this item', 'vromon' ),
		'items_list'            => esc_html__( 'Items list', 'vromon' ),
		'items_list_navigation' => esc_html__( 'Items list navigation', 'vromon' ),
		'filter_items_list'     => esc_html__( 'Filter items list', 'vromon' ),
	);
	$args = array(
		'label'                 => esc_html__( 'Testimonial', 'vromon' ),
		'description'           => esc_html__( 'Post Type Description', 'vromon' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'   => 'dashicons-format-chat',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimonials', $args );

}
add_action( 'init', 'vromon_testimonials', 0 );

}

if ( ! function_exists('vromon_clients') ) {

// Register Custom Post Type
function vromon_clients() {

	$labels = array(
		'name'                  => esc_html_x( 'Clients', 'Post Type General Name', 'vromon' ),
		'singular_name'         => esc_html_x( 'Client', 'Post Type Singular Name', 'vromon' ),
		'menu_name'             => esc_html__( 'Clients', 'vromon' ),
		'name_admin_bar'        => esc_html__( 'Clients', 'vromon' ),
		'archives'              => esc_html__( 'Item Archives', 'vromon' ),
		'attributes'            => esc_html__( 'Item Attributes', 'vromon' ),
		'parent_item_colon'     => esc_html__( 'Parent Item:', 'vromon' ),
		'all_items'             => esc_html__( 'All Items', 'vromon' ),
		'add_new_item'          => esc_html__( 'Add New Item', 'vromon' ),
		'add_new'               => esc_html__( 'Add New', 'vromon' ),
		'new_item'              => esc_html__( 'New Item', 'vromon' ),
		'edit_item'             => esc_html__( 'Edit Item', 'vromon' ),
		'update_item'           => esc_html__( 'Update Item', 'vromon' ),
		'view_item'             => esc_html__( 'View Item', 'vromon' ),
		'view_items'            => esc_html__( 'View Items', 'vromon' ),
		'search_items'          => esc_html__( 'Search Item', 'vromon' ),
		'not_found'             => esc_html__( 'Not found', 'vromon' ),
		'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'vromon' ),
		'featured_image'        => esc_html__( 'Featured Image', 'vromon' ),
		'set_featured_image'    => esc_html__( 'Set featured image', 'vromon' ),
		'remove_featured_image' => esc_html__( 'Remove featured image', 'vromon' ),
		'use_featured_image'    => esc_html__( 'Use as featured image', 'vromon' ),
		'insert_into_item'      => esc_html__( 'Insert into item', 'vromon' ),
		'uploaded_to_this_item' => esc_html__( 'Uploaded to this item', 'vromon' ),
		'items_list'            => esc_html__( 'Items list', 'vromon' ),
		'items_list_navigation' => esc_html__( 'Items list navigation', 'vromon' ),
		'filter_items_list'     => esc_html__( 'Filter items list', 'vromon' ),
	);
	$args = array(
		'label'                 => esc_html__( 'Client', 'vromon' ),
		'description'           => esc_html__( 'Post Type Description', 'vromon' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'   => 'dashicons-nametag',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'clients', $args );

}
add_action( 'init', 'vromon_clients', 0 );

}