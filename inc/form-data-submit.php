<?php

// Contact Form
function coder_akash_form_data_handle(){

    if ( empty( $_POST["conName"] ) ) {
        echo "fail";
        wp_die();
    }

    if ( ! filter_var( $_POST["conEmail"], FILTER_VALIDATE_EMAIL ) ) {
        echo 'fail';
        wp_die();
    }

    if ( empty( $_POST["conPhone"] ) ) {
        echo "fail";
        wp_die();
    }
    
    if ( empty( $_POST["conSubject"] ) ) {
        echo "fail";
        wp_die();
    }
 
    
    if ( empty( $_POST["conMessage"] ) ) {
        echo "fail";
        wp_die();
    }
 
    $firstName = sanitize_text_field( $_POST['conName']);
    $lastName = sanitize_text_field( $_POST['conLName']);
    $conEmail = sanitize_text_field( $_POST['conEmail']);
    $conPhone = sanitize_text_field( $_POST['conPhone']);
    $conSubject = sanitize_text_field( $_POST['conSubject']);
    $conMessage = sanitize_textarea_field( $_POST['conMessage']);

    $metainp = array(
        'form_name'   => $firstName,
        'form_phone_number' => $conPhone,
        'form_email' => $conEmail,
        'form_message'  => $conMessage,
    );

    $insertSubmission = wp_insert_post( array(
        'post_title'    => $conSubject,
        'post_status'   => 'publish',
        'post_type'     => 'contact_form_front',
        'meta_input'    => $metainp,
    ) );

    if( is_wp_error( $insertSubmission ) ) {
        echo 'fail';
    } elseif( $insertSubmission !== 0 ) {
        echo 'success';
    } else {
        echo 'fail';
    }
    wp_die();

}

add_action( 'wp_ajax_nopriv_home_contact_form_submit', 'coder_akash_form_data_handle');
add_action( 'wp_ajax_home_contact_form_submit', 'coder_akash_form_data_handle');


//Review Submit Form 

function coder_akash_review_form_data_handle(){

    if ( empty( $_FILES['file'] ) ) {
        echo "fail";
        wp_die();
    }

    if ( empty( $_POST["testiName"] ) ) {
        echo "fail";
        wp_die();
    }

    if ( ! filter_var( $_POST["testiEmail"], FILTER_VALIDATE_EMAIL ) ) {
        echo 'fail';
        wp_die();
    }

    if ( empty( $_POST["testiWebName"] ) ) {
        echo "fail";
        wp_die();
    }
    

    if ( empty( $_POST["testiWeburl"] ) ) {
        echo "fail";
        wp_die();
    }

    if ( empty( $_POST["testiDesignation"] ) ) {
        echo "fail";
        wp_die();
    }

    if ( empty( $_POST["reviewMessage"] ) ) {
        echo "fail";
        wp_die();
    }

    $testiName = sanitize_text_field( $_POST['testiName']);
    $testiEmail = sanitize_text_field( $_POST['testiEmail']);
    $testiWebName = sanitize_text_field( $_POST['testiWebName']);
    $testiWeburl = sanitize_text_field( $_POST['testiWeburl']);
    $testiDesignation = sanitize_text_field( $_POST['testiDesignation']);
    $reviewMessage = sanitize_textarea_field( $_POST['reviewMessage']);
 

    $upload = wp_upload_bits( $_FILES['file']['name'], null, file_get_contents($_FILES['file']['tmp_name']) );
    $upload['url'];


    $metainp = array(
        'testimonial_clients_image'         => $upload['url'],
        'testimonial_clients_designation'   =>  $testiDesignation,
        'testimonial_clients_website'       => $testiWebName,
        'testimonial_clients_website_link'  => $testiWeburl,
        'testimonial_clients_email_adress'  => $testiEmail,
    );

    $insertSubmission = wp_insert_post( array(
        'post_title'    => $testiName,
        'post_content'  => $reviewMessage,
        'post_status'   => 'pending',
        'post_type'     => 'cliets_testimonial',
        'meta_input'    => $metainp,
    ) );

    if( is_wp_error( $insertSubmission ) ) {
        echo 'fail';
    } elseif( $insertSubmission !== 0 ) {
        echo 'success';
    } else {
        echo 'fail';
    }
    wp_die();
}

add_action( 'wp_ajax_nopriv_review_form_data_collect', 'coder_akash_review_form_data_handle');
add_action( 'wp_ajax_review_form_data_collect', 'coder_akash_review_form_data_handle');


