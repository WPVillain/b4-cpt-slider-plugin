<?php
/**
 * Plugin Name: Imagewize Custom Post Type Slider Plugin
 * Plugin URI: https://imagewize.com
 * Description: A simple slider plugin
 * Version: 1.0.0
 * Author: Jasper Frumau
 * Author URI: https://imagewize.com
 * Text Domain: imagine
 * Domain Path: Optional. Plugin's relative directory path to .mo files. Example: /locale/
 * Network: Optional. Whether the plugin can only be activated network wide. Example: true
 * License: GPL2+
 */


if ( ! function_exists('imagine_cpt_slider') ) {

// Register Custom Post Type
function imagine_cpt_slider() {

	$labels = array(
		'name'                => _x( 'Slides', 'Post Type General Name', 'imagine' ),
		'singular_name'       => _x( 'Slide', 'Post Type Singular Name', 'imagine' ),
		'menu_name'           => __( 'Slider', 'imagine' ),
		'name_admin_bar'      => __( 'Slider', 'imagine' ),
		'parent_item_colon'   => __( 'Parent Item:', 'imagine' ),
		'all_items'           => __( 'All Items', 'imagine' ),
		'add_new_item'        => __( 'Add New Item', 'imagine' ),
		'add_new'             => __( 'Add New', 'imagine' ),
		'new_item'            => __( 'New Item', 'imagine' ),
		'edit_item'           => __( 'Edit Item', 'imagine' ),
		'update_item'         => __( 'Update Item', 'imagine' ),
		'view_item'           => __( 'View Item', 'imagine' ),
		'search_items'        => __( 'Search Item', 'imagine' ),
		'not_found'           => __( 'Not found', 'imagine' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'imagine' ),
	);
	
	$args = array(
		'label'               => __( 'slider', 'imagine' ),
		'description'         => __( 'Custom Post Types Slider', 'imagine' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'          => array( ),
		'hierarchical'        => false,
		'public'              => false, // not show frontend as post
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-slides',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'slider', $args );

}

// Hook into the 'init' action
add_action( 'init', 'imagine_cpt_slider', 0 );

}
