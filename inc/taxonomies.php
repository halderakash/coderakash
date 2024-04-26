<?php
// Register Custom Taxonomy
function coder_akash_custom_taxonomy_for_portfolio() {

	$labels = array(
		'name'                       => _x( 'Portfolio Types', 'Taxonomy General Name', 'coderakash' ),
		'singular_name'              => _x( 'Portfolio Type', 'Taxonomy Singular Name', 'coderakash' ),
		'menu_name'                  => __( 'Portfolio Type', 'coderakash' ),
		'all_items'                  => __( 'All Portfolio Types', 'coderakash' ),
		'parent_item'                => __( 'Parent Portfolio Type', 'coderakash' ),
		'parent_item_colon'          => __( 'Parent Portfolio Type:', 'coderakash' ),
		'new_item_name'              => __( 'New Portfolio Type Name', 'coderakash' ),
		'add_new_item'               => __( 'Add New Portfolio Type', 'coderakash' ),
		'edit_item'                  => __( 'Edit Portfolio Type', 'coderakash' ),
		'update_item'                => __( 'Update Portfolio Type', 'coderakash' ),
		'view_item'                  => __( 'View Portfolio Type', 'coderakash' ),
		'separate_items_with_commas' => __( 'Separate Portfolio Types with commas', 'coderakash' ),
		'add_or_remove_items'        => __( 'Add or remove Portfolio Types', 'coderakash' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'coderakash' ),
		'popular_items'              => __( 'Popular Portfolio Types', 'coderakash' ),
		'search_items'               => __( 'Search Portfolio Types', 'coderakash' ),
		'not_found'                  => __( 'Not Found', 'coderakash' ),
		'no_terms'                   => __( 'No Portfolio Types', 'coderakash' ),
		'items_list'                 => __( 'Portfolio Types list', 'coderakash' ),
		'items_list_navigation'      => __( 'Portfolio Types list navigation', 'coderakash' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'portfolio-type', array( 'portfolio_cpt' ), $args );

}
add_action( 'init', 'coder_akash_custom_taxonomy_for_portfolio', 0 );
