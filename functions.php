<?php

add_theme_support('post-thumbnails');


function custom_excerpt_length( $length ) {

	return 20;

}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

include_once('advanced-custom-fields/acf.php');

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');



set_post_thumbnail_size( 280, 200, true ); // 50 pixels wide by 50 pixels tall, crop mode




if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
      array(
        'header_menu' => 'Header Menu',
        'footer_menu' => 'Footer Menu'
      )
    );
}

//ACF OPTIONS PG SET UP
if( function_exists('acf_add_options_page') ){
   acf_add_options_page( 'Theme Options' );
}

// Register Custom Post Type
function Team() {

	$labels = array(
		'name'                => _x( 'Team', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Team', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Team', 'text_domain' ),
		'name_admin_bar'      => __( 'Team', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Items', 'text_domain' ),
		'add_new_item'        => __( 'Add New Item', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Item', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'team', 'text_domain' ),
		'description'         => __( 'For the team page', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'Team', $args );
	flush_rewrite_rules();

}


function Portfolio() {

	$labels = array(
		'name'                => _x( 'Portfolio', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Projects', 'text_domain' ),
		'name_admin_bar'      => __( 'Portfolio', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Items', 'text_domain' ),
		'add_new_item'        => __( 'Add New Item', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Item', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'portfolio', 'text_domain' ),
		'description'         => __( 'Portfolio page items', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'portfolio', $args );
	flush_rewrite_rules();

}

function Reports() {

	$labels = array(
		'name'                => _x( 'Reports', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Reports', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Reports', 'text_domain' ),
		'name_admin_bar'      => __( 'Reports', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Items', 'text_domain' ),
		'add_new_item'        => __( 'Add New Item', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Item', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Reports', 'text_domain' ),
		'description'         => __( 'For the reports page', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'Reports', $args );
	flush_rewrite_rules();

}


add_action( 'init', 'team', 0 );
add_action( 'init', 'Portfolio', 0 );
add_action( 'init', 'Reports', 0 );


?>
