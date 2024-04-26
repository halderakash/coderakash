<?php

//Enqueue Style And JS File

function coder_akash_enqueue_js_and_style(){

    /*================CSS Enqueue=======================*/

    wp_enqueue_style( 'bootstrap-min', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), wp_get_theme()->get('Version'), 'all' );


    wp_enqueue_style( 'amnimation-min', get_template_directory_uri().'/assets/css/animation.css', array(), '3.4.0', 'all' );

    wp_enqueue_style( 'feture-min', get_template_directory_uri().'/assets/css/feature.css', array(), wp_get_theme()->get('Version'), 'all' );

    wp_enqueue_style( 'magnify-min', get_template_directory_uri().'/assets/css/magnify.min.css', array(), wp_get_theme()->get('Version'), 'all' );

    wp_enqueue_style( 'slick', get_template_directory_uri().'/assets/css/slick.css', array(), wp_get_theme()->get('Version'), 'all' );

    wp_enqueue_style( 'slick-theme', get_template_directory_uri().'/assets/css/slick-theme.css', array(), wp_get_theme()->get('Version'), 'all' );

    wp_enqueue_style( 'lightbox', get_template_directory_uri().'/assets/css/lightbox.css', array(), wp_get_theme()->get('Version'), 'all' );

    wp_enqueue_style( 'custom-style', get_template_directory_uri().'/assets/css/style.css', array(), wp_get_theme()->get('Version'), 'all' );

    wp_enqueue_style( 'custom-responsive-style', get_template_directory_uri().'/assets/css/custom-responsive.css', array(), wp_get_theme()->get('Version'), 'all' );

    wp_enqueue_style( 'custom-coderakash', get_template_directory_uri().'/assets/css/custom.css', array(), wp_get_theme()->get('Version'), 'all' );

    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1', 'all' );

    /*================JS Enqueue=======================*/

    wp_enqueue_script( 'modernizr', get_template_directory_uri().'/assets/js/vendor/modernizr.min.js', array(), '3.6.0', true);

    wp_enqueue_script('jquery-min');

    wp_enqueue_script( 'isotop-li', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js', array(), wp_get_theme()->get('Version'), true);

    wp_enqueue_script( 'bootstrap-min', get_template_directory_uri().'/assets/js/vendor/bootstrap.min.js', array(), wp_get_theme()->get('Version'), true);

    wp_enqueue_script( 'popper-min', get_template_directory_uri().'/assets/js/vendor/popper.min.js', array(), wp_get_theme()->get('Version'), true);

    wp_enqueue_script( 'waypoint-min', get_template_directory_uri().'/assets/js/vendor/waypoint.min.js', array(), wp_get_theme()->get('Version'), true);

    wp_enqueue_script( 'wow-min', get_template_directory_uri().'/assets/js/vendor/wow.min.js', array(), wp_get_theme()->get('Version'), true);

    wp_enqueue_script( 'counterup-min', get_template_directory_uri().'/assets/js/vendor/counterup.min.js', array(), wp_get_theme()->get('Version'), true);

    wp_enqueue_script( 'feather-min', get_template_directory_uri().'/assets/js/vendor/feather.min.js', array(), wp_get_theme()->get('Version'), true);

    wp_enqueue_script( 'sal-min', get_template_directory_uri().'/assets/js/vendor/sal.min.js', array(), wp_get_theme()->get('Version'), true);

    wp_enqueue_script( 'masonry', get_template_directory_uri().'/assets/js/vendor/masonry.js', array(), wp_get_theme()->get('Version'), true);

    wp_enqueue_script( 'imageloaded', get_template_directory_uri().'/assets/js/vendor/imageloaded.js', array(), wp_get_theme()->get('Version'), true);

    
    wp_enqueue_script( 'magnify-min', get_template_directory_uri().'/assets/js/vendor/magnify.min.js', array(), wp_get_theme()->get('Version'), true);

    
    wp_enqueue_script( 'lightbox', get_template_directory_uri().'/assets/js/vendor/lightbox.js', array(), wp_get_theme()->get('Version'), true);


    wp_enqueue_script( 'slick-min', get_template_directory_uri().'/assets/js/vendor/slick.min.js', array(), wp_get_theme()->get('Version'), true);

    wp_enqueue_script( 'easypie', get_template_directory_uri().'/assets/js/vendor/easypie.js', array(), wp_get_theme()->get('Version'), true);

    wp_enqueue_script( 'text-type', get_template_directory_uri().'/assets/js/vendor/text-type.js', array(), wp_get_theme()->get('Version'), true);

    wp_enqueue_script( 'swicher', get_template_directory_uri().'/assets/js/vendor/jquery.style.swicher.js', array(), wp_get_theme()->get('Version'), true);

    wp_enqueue_script( 'js-cookie', get_template_directory_uri().'/assets/js/vendor/js.cookie.js', array(), wp_get_theme()->get('Version'), true);

    wp_enqueue_script( 'jquery-one-page-nav', get_template_directory_uri().'/assets/js/vendor/jquery-one-page-nav.js', array(), wp_get_theme()->get('Version'), true);

    wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js', array(), wp_get_theme()->get('Version'), true);

    wp_enqueue_script( 'validate-jquery', get_template_directory_uri().'/assets/js/validate-jq.js', array(), '1.9.5', true);

    wp_enqueue_script( 'custom-script', get_template_directory_uri().'/assets/js/custom-script.js', array('jquery'), wp_get_theme()->get('Version'), true);

    wp_localize_script( 'custom-script', 'frontAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));
    
}
add_action('wp_enqueue_scripts','coder_akash_enqueue_js_and_style');




function coder_akash_admin_dashboard_custom_style_and_script(){

    wp_enqueue_style( 'admin-custom-style', get_template_directory_uri().'/assets/css/admin-dashboard.css', array(), wp_get_theme()->get('Version'), 'all' );
    
}
add_action( 'admin_enqueue_scripts','coder_akash_admin_dashboard_custom_style_and_script');