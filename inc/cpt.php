<?php
// Register Custom Post Type For portfolio
function coder_akash_portfolio_cpt() {

	$labels = array(
		'name'                  => _x( 'Portfolios', 'Post Type General Name', 'coderakash' ),
		'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'coderakash' ),
		'menu_name'             => __( 'Portfolios', 'coderakash' ),
		'name_admin_bar'        => __( 'Portfolio', 'coderakash' ),
		'archives'              => __( 'Portfolio Archives', 'coderakash' ),
		'attributes'            => __( 'Portfolio Attributes', 'coderakash' ),
		'parent_item_colon'     => __( 'Parent Portfolio:', 'coderakash' ),
		'all_items'             => __( 'All Portfolios', 'coderakash' ),
		'add_new_item'          => __( 'Add New Portfolio', 'coderakash' ),
		'add_new'               => __( 'Add New Portfolio', 'coderakash' ),
		'new_item'              => __( 'New Portfolio', 'coderakash' ),
		'edit_item'             => __( 'Edit Portfolio', 'coderakash' ),
		'update_item'           => __( 'Update Portfolio', 'coderakash' ),
		'view_item'             => __( 'View Portfolio', 'coderakash' ),
		'view_items'            => __( 'View Portfolios', 'coderakash' ),
		'search_items'          => __( 'Search Portfolio', 'coderakash' ),
		'not_found'             => __( 'Portfolio Not found', 'coderakash' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'coderakash' ),
		'featured_image'        => __( 'Featured Image', 'coderakash' ),
		'set_featured_image'    => __( 'Set featured image', 'coderakash' ),
		'remove_featured_image' => __( 'Remove featured image', 'coderakash' ),
		'use_featured_image'    => __( 'Use as featured image', 'coderakash' ),
		'insert_into_item'      => __( 'Insert into Portfolio', 'coderakash' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'coderakash' ),
		'items_list'            => __( 'Portfolios list', 'coderakash' ),
		'items_list_navigation' => __( 'Portfolios list navigation', 'coderakash' ),
		'filter_items_list'     => __( 'Filter Portfolios list', 'coderakash' ),
	);
	$rewrite= array(
		'slug'                  => 'portfolio',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	
	);
	$args = array(
		'label'                 => __( 'Portfolio', 'coderakash' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
	);
	register_post_type( 'portfolio_cpt', $args );

}
add_action( 'init', 'coder_akash_portfolio_cpt');


// Register Custom Post Type for testimonials
function coder_akash_testimonial_cpt() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'coderakash' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'coderakash' ),
		'menu_name'             => __( 'Testimonials', 'coderakash' ),
		'name_admin_bar'        => __( 'Testimonial', 'coderakash' ),
		'archives'              => __( 'Testimonial Archives', 'coderakash' ),
		'attributes'            => __( 'Testimonial Attributes', 'coderakash' ),
		'parent_item_colon'     => __( 'Parent Testimonial:', 'coderakash' ),
		'all_items'             => __( 'All Testimonials', 'coderakash' ),
		'add_new_item'          => __( 'Add New Testimonial', 'coderakash' ),
		'add_new'               => __( 'Add New', 'coderakash' ),
		'new_item'              => __( 'New Testimonial', 'coderakash' ),
		'edit_item'             => __( 'Edit Testimonial', 'coderakash' ),
		'update_item'           => __( 'Update Testimonial', 'coderakash' ),
		'view_item'             => __( 'View Testimonial', 'coderakash' ),
		'view_items'            => __( 'View Testimonials', 'coderakash' ),
		'search_items'          => __( 'Search Testimonial', 'coderakash' ),
		'not_found'             => __( 'Testimonial Not found', 'coderakash' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'coderakash' ),
		'featured_image'        => __( 'Featured Image', 'coderakash' ),
		'set_featured_image'    => __( 'Set featured image', 'coderakash' ),
		'remove_featured_image' => __( 'Remove featured image', 'coderakash' ),
		'use_featured_image'    => __( 'Use as featured image', 'coderakash' ),
		'insert_into_item'      => __( 'Insert into Testimonial', 'coderakash' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'coderakash' ),
		'items_list'            => __( 'Testimonials list', 'coderakash' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'coderakash' ),
		'filter_items_list'     => __( 'Filter Testimonials list', 'coderakash' ),
	);
	$args = array(
		'label'                 => __( 'Testimonial', 'coderakash' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 25,
		'menu_icon'             => 'dashicons-star-half',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'cliets_testimonial', $args );

}
add_action( 'init', 'coder_akash_testimonial_cpt', 0 );

// Register Custom Post Type for Forms Submission
function coder_akash_contact_form_post_type() {

	$labels = array(
		'name'                  => _x( 'Form submissions', 'Post Type General Name', 'coderakash' ),
		'singular_name'         => _x( 'Form submission', 'Post Type Singular Name', 'coderakash' ),
		'menu_name'             => __( 'Forms', 'coderakash' ),
		'name_admin_bar'        => __( 'Form submission', 'coderakash' ),
		'archives'              => __( 'Submission Archives', 'coderakash' ),
		'attributes'            => __( 'submission Attributes', 'coderakash' ),
		'parent_item_colon'     => __( 'Parent Submission:', 'coderakash' ),
		'all_items'             => __( 'All Submissions', 'coderakash' ),
		'add_new_item'          => __( 'Add New Submission', 'coderakash' ),
		'add_new'               => __( 'Add New Submission', 'coderakash' ),
		'new_item'              => __( 'New Submission', 'coderakash' ),
		'edit_item'             => __( 'Edit Submission', 'coderakash' ),
		'update_item'           => __( 'Update Submission', 'coderakash' ),
		'view_item'             => __( 'View Submission', 'coderakash' ),
		'view_items'            => __( 'View Submissions', 'coderakash' ),
		'search_items'          => __( 'Search Submission', 'coderakash' ),
		'not_found'             => __( 'Submission Not found', 'coderakash' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'coderakash' ),
		'featured_image'        => __( 'Featured Image', 'coderakash' ),
		'set_featured_image'    => __( 'Set featured image', 'coderakash' ),
		'remove_featured_image' => __( 'Remove featured image', 'coderakash' ),
		'use_featured_image'    => __( 'Use as featured image', 'coderakash' ),
		'insert_into_item'      => __( 'Insert into Submission', 'coderakash' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Submission', 'coderakash' ),
		'items_list'            => __( 'Submissions list', 'coderakash' ),
		'items_list_navigation' => __( 'Submissions list navigation', 'coderakash' ),
		'filter_items_list'     => __( 'Filter Submissions list', 'coderakash' ),
	);
	$args = array(
		'label'                 => __( 'Form', 'coderakash' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-media-document',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => false,
		'rewrite'               => false,
		'capability_type'       => 'post',
		'show_in_rest'          => false,
	);
	register_post_type( 'contact_form_front', $args );

}
add_action( 'init', 'coder_akash_contact_form_post_type', 0 );