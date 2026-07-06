<?php
/**
 * Register Custom Post Type for Services
 *
 * @package Nusantara
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register the 'Service' Custom Post Type
 */
function nusantara_register_cpt_services() {
    $labels = array(
        'name'                  => _x( 'Services', 'Post Type General Name', 'nusantara' ),
        'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'nusantara' ),
        'menu_name'             => __( 'Services', 'nusantara' ),
        'name_admin_bar'        => __( 'Service', 'nusantara' ),
        'archives'              => __( 'Service Archives', 'nusantara' ),
        'attributes'            => __( 'Service Attributes', 'nusantara' ),
        'parent_item_colon'     => __( 'Parent Service:', 'nusantara' ),
        'all_items'             => __( 'All Services', 'nusantara' ),
        'add_new_item'          => __( 'Add New Service', 'nusantara' ),
        'add_new'               => __( 'Add New', 'nusantara' ),
        'new_item'              => __( 'New Service', 'nusantara' ),
        'edit_item'             => __( 'Edit Service', 'nusantara' ),
        'update_item'           => __( 'Update Service', 'nusantara' ),
        'view_item'             => __( 'View Service', 'nusantara' ),
        'view_items'            => __( 'View Services', 'nusantara' ),
        'search_items'          => __( 'Search Service', 'nusantara' ),
        'not_found'             => __( 'Not found', 'nusantara' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'nusantara' ),
    );
    
    $args = array(
        'label'                 => __( 'Service', 'nusantara' ),
        'description'           => __( 'Company services and offerings', 'nusantara' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes' ),
        'taxonomies'            => array( 'service_category' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-networking', // Professional network icon
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true, // Enables Gutenberg Editor
        'rewrite'               => array( 'slug' => 'services', 'with_front' => false ),
    );
    
    register_post_type( 'service', $args );
}
add_action( 'init', 'nusantara_register_cpt_services', 0 );

/**
 * Register the 'Service Category' Taxonomy
 */
function nusantara_register_tax_service_category() {
    $labels = array(
        'name'                       => _x( 'Service Categories', 'Taxonomy General Name', 'nusantara' ),
        'singular_name'              => _x( 'Service Category', 'Taxonomy Singular Name', 'nusantara' ),
        'menu_name'                  => __( 'Categories', 'nusantara' ),
        'all_items'                  => __( 'All Categories', 'nusantara' ),
        'parent_item'                => __( 'Parent Category', 'nusantara' ),
        'parent_item_colon'          => __( 'Parent Category:', 'nusantara' ),
        'new_item_name'              => __( 'New Category Name', 'nusantara' ),
        'add_new_item'               => __( 'Add New Category', 'nusantara' ),
        'edit_item'                  => __( 'Edit Category', 'nusantara' ),
        'update_item'                => __( 'Update Category', 'nusantara' ),
        'view_item'                  => __( 'View Category', 'nusantara' ),
        'separate_items_with_commas' => __( 'Separate categories with commas', 'nusantara' ),
        'add_or_remove_items'        => __( 'Add or remove categories', 'nusantara' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'nusantara' ),
        'popular_items'              => __( 'Popular Categories', 'nusantara' ),
        'search_items'               => __( 'Search Categories', 'nusantara' ),
        'not_found'                  => __( 'Not Found', 'nusantara' ),
        'no_terms'                   => __( 'No categories', 'nusantara' ),
        'items_list'                 => __( 'Categories list', 'nusantara' ),
        'items_list_navigation'      => __( 'Categories list navigation', 'nusantara' ),
    );
    
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true, // True makes it behave like categories, false like tags
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => false,
        'show_in_rest'               => true, // Enables Gutenberg Editor sidebar
        'rewrite'                    => array( 'slug' => 'service-category', 'with_front' => false ),
    );
    
    register_taxonomy( 'service_category', array( 'service' ), $args );
}
add_action( 'init', 'nusantara_register_tax_service_category', 0 );
