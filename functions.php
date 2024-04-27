<?php
//include theme setup 
require_once(get_template_directory().'/inc/coderakash-setup.php');
// Disable some built in feature
require_once(get_template_directory().'/inc/def-feature-disable.php');

//add Favicon 
function coder_akash_site_icon() {
    //Get Theme Options
    $themeOptions = get_option('_coder_akash_theme_options');
    //Get Favicon Url
    $favicon_url = isset($themeOptions['coderakash-site-icon']['url']) && $themeOptions['coderakash-site-icon']['url'] !== '' ? esc_attr($themeOptions['coderakash-site-icon']['url']) : get_stylesheet_directory_uri() . '/assets/images/favicon.png';
    echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
}
add_action('login_head','coder_akash_site_icon');
add_action('admin_head','coder_akash_site_icon');
add_action('wp_head','coder_akash_site_icon');

//Menu Register
require_once(get_template_directory().'/inc/menus.php');

//Enqueue JS and CSS FIle
require_once(get_template_directory().'/inc/styles-and-script.php');

//Include Theme Options
require_once(get_template_directory().'/lib/codestar-framework/codestar-framework.php');
require_once(get_template_directory().'/lib/codestar-framework/admin-options.php');

//Custom Post type Creation
require_once(get_template_directory().'/inc/cpt.php');

//Custom Meta Box Add
require_once(get_template_directory().'/lib/cmb-metabox/init.php');
require_once(get_template_directory().'/lib/cmb-metabox/meta-reg.php');


function coder_akash_content_implode($content,$txtNum,$afterTrim){
    $test = $content;
    $ContentArr = explode(' ',$test);
    $sWord = 1;
    $trimCon = '';
    foreach($ContentArr as $sinWord){
        if($sWord<=$txtNum){
            $trimCon = $sinWord .' ';
            echo $trimCon;
            $sWord++;
        }

    }
    if($sWord>$txtNum){
        echo $afterTrim;
    }
}

//Form Data Handle
require_once(get_template_directory().'/inc/form-data-submit.php');

//Testimonial Popup Data
require_once(get_template_directory().'/inc/testimonial-popup-ajax.php');

//Custom Texonomies Register
require_once(get_template_directory().'/inc/taxonomies.php');


// Change Post type Title placheholder
function coder_akash_posttype_form_title_changer(){
    $title = 'Add title';
    $CrScreen = get_current_screen();
    if($CrScreen->post_type == 'contact_form_front'){
        $title = 'Submission Subject';
    }
    if($CrScreen->post_type == 'cliets_testimonial'){
        $title = 'Clients Name';
    }
    return $title;
}
add_filter( 'enter_title_here', 'coder_akash_posttype_form_title_changer' );

//include Form Verification Key
require_once(get_template_directory().'/inc/review-form-key.php');


// Disable Codestar tools Menu
function coder_akash_remove_codestar_from_tools(){
    remove_submenu_page( 'tools.php', 'csf-welcome' );
}
add_action('admin_init','coder_akash_remove_codestar_from_tools');

//Post Thumbnail Msg Adding
function filter_featured_image_admin_text( $content, $post_id, $thumbnail_id ){

    $help_text = '<p>' . __( 'Recomended image size 1270 x 950px.', 'coderakash' ) . '</p>';
    return $help_text . $content;

}
add_filter( 'admin_post_thumbnail_html', 'filter_featured_image_admin_text', 10, 3 );



//Custom Meta box in menu
require_once(get_template_directory().'/inc/nav-menu-metabox.php');

//Update Theme Version From Github
require_once(get_template_directory().'/inc/coderakash-update.php');