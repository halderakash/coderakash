<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/CMB2/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}


/**
 * Hook in and add a  metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */

function coder_akash_register_testimonial_metabox() {
	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$portfolioMeta = new_cmb2_box( array(
		'id'            => 'coder_akash_testimonial_metabox',
		'title'         => esc_html__( 'Settings', 'coderakash' ),
		'object_types'  => array( 'cliets_testimonial' ), // Post type
		// 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
		// 'context'    => 'normal',
		// 'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.

		/*
		 * The following parameter is any additional arguments passed as $callback_args
		 * to add_meta_box, if/when applicable.
		 *
		 * CMB2 does not use these arguments in the add_meta_box callback, however, these args
		 * are parsed for certain special properties, like determining Gutenberg/block-editor
		 * compatibility.
		 *
		 * Examples:
		 *
		 * - Make sure default editor is used as metabox is not compatible with block editor
		 *      [ '__block_editor_compatible_meta_box' => false/true ]
		 *
		 * - Or declare this box exists for backwards compatibility
		 *      [ '__back_compat_meta_box' => false ]
		 *
		 * More: https://wordpress.org/gutenberg/handbook/extensibility/meta-box/
		 */
		// 'mb_callback_args' => array( '__block_editor_compatible_meta_box' => false ),
	) );

	$portfolioMeta->add_field( array(
		'name' => esc_html__( 'Clients Image', 'coderakash' ),
		'desc' => esc_html__( 'Upload an image. Recomended Size 1280*1280px', 'coderakash' ),
		'id'   => 'testimonial_clients_image',
		'type' => 'file',
	) );

	$portfolioMeta->add_field( array(
		'name' => esc_html__( 'Clients Designation', 'coderakash' ),
		'id'   => 'testimonial_clients_designation',
		'type' => 'text',
	) );

	$portfolioMeta->add_field( array(
		'name' => esc_html__( 'Clients Website', 'coderakash' ),
		'id'   => 'testimonial_clients_website',
		'type' => 'text',
	) );

	$portfolioMeta->add_field( array(
		'name' => esc_html__( 'Clients Website Link', 'coderakash' ),
		'id'   => 'testimonial_clients_website_link',
		'type' => 'text',
	) );

	$portfolioMeta->add_field( array(
		'name' => esc_html__( 'Clients Email Address', 'coderakash' ),
		'id'   => 'testimonial_clients_email_adress',
		'type' => 'text',
	) );



}
add_action('cmb2_admin_init','coder_akash_register_testimonial_metabox');


function coder_akash_register_form_submission_metabox() {
	
	$portfolioMeta = new_cmb2_box( array(
		'id'            => 'coder_akash_form_submission_metabox',
		'title'         => esc_html__( 'Settings', 'coderakash' ),
		'object_types'  => array( 'contact_form_front' ), // Post type
		
	) );

	$portfolioMeta->add_field( array(
		'name' => esc_html__( 'Name', 'coderakash' ),
		//'desc' => esc_html__( 'Upload an image or enter a URL.', 'coderakash' ),
		'id'   => 'form_name',
		'type' => 'text',
	) );

	$portfolioMeta->add_field( array(
		'name' => esc_html__( 'Phone Number', 'coderakash' ),
		'id'   => 'form_phone_number',
		'type' => 'text',
	) );

	$portfolioMeta->add_field( array(
		'name' => esc_html__( 'Email', 'coderakash' ),
		'id'   => 'form_email',
		'type' => 'text',
	) );

	$portfolioMeta->add_field( array(
		'name' => esc_html__( 'Message', 'coderakash' ),
		'id'   => 'form_message',
		'type' => 'textarea',
	) );



}
add_action('cmb2_admin_init','coder_akash_register_form_submission_metabox');


function coder_akash_portfolio_custom_metabox() {
	
	$portfolioMeta = new_cmb2_box( array(
		'id'            => 'coder_akash_portfolio_metabox',
		'title'         => esc_html__( 'Settings', 'coderakash' ),
		'object_types'  => array( 'portfolio_cpt' ), // Post type
		
	) );

	$portfolioMeta->add_field( array(
		'name' => esc_html__( 'Client\'s Name', 'coderakash' ),
		//'desc' => esc_html__( 'Upload an image or enter a URL.', 'coderakash' ),
		'id'   => 'clients_name',
		'type' => 'text',
	) );

	$portfolioMeta->add_field( array(
		'name' => esc_html__( 'Creation Date', 'coderakash' ),
		'id'   => 'site_creation_date',
		'type' => 'text_date',
		'date_format' => 'd M Y',
	) );

	$portfolioMeta->add_field( array(
		'name' => esc_html__( 'Website Name', 'coderakash' ),
		'id'   => 'type_of_website',
		'type' => 'text',
	) );

	$portfolioMeta->add_field( array(
		'name' => esc_html__( 'Website Live Link', 'coderakash' ),
		'id'   => 'website_live_link',
		'type' => 'text',
	) );

	$portfolioMeta->add_field( array(
		'name' => esc_html__( 'Portfolio Image', 'coderakash' ),
		'id'   => 'port_single_top_img',
		'type' => 'file',
		'text' => array(
			'add_upload_file_text' => __('Add Image','coderakash'),
		),
		'query_args' => array(
			'type' => array(
			    'image/jpeg',
			    'image/png',
			),
		),
	) );

}
add_action('cmb2_admin_init','coder_akash_portfolio_custom_metabox');