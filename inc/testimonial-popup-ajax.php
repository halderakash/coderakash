<?php
function coder_akash_testimonial_popup_data(){

    $testiID = sanitize_text_field( $_POST['testimonialID']);

    $args = array(
        'post_type'      => 'cliets_testimonial',
        'post_status'    => 'publish',
        'p'              => $testiID,
    );
    $testiCPT = new WP_Query($args);

    if($testiCPT->have_posts()){
        while($testiCPT->have_posts()): $testiCPT->the_post();
        $testmonila_title = get_the_title();
        $testmonila_content = get_the_content();
        $testmonial_img = get_post_meta( get_the_ID(), 'testimonial_clients_image', true );
        $testmonial_cDesignation = get_post_meta( get_the_ID(), 'testimonial_clients_designation', true );
        $testmonial_cWebsite = get_post_meta( get_the_ID(), 'testimonial_clients_website', true );
        $testmonial_cWebsite_link = get_post_meta( get_the_ID(), 'testimonial_clients_website_link', true );

        $testimonial_data = array (
            'test_title'=> $testmonila_title,
            'test_content'=> $testmonila_content,
            'test_image'=> $testmonial_img,
            'test_cdesignation'=> $testmonial_cDesignation,
            'test_cwebsite'=> $testmonial_cWebsite,
            'test_cwebsite_link'=> $testmonial_cWebsite_link,
        );

        echo wp_json_encode($testimonial_data);
        endwhile;
    }else{
        echo 'notFound';
    }
    wp_die();
}
add_action( 'wp_ajax_nopriv_testimonial_data_fetch_popup', 'coder_akash_testimonial_popup_data' );
add_action( 'wp_ajax_testimonial_data_fetch_popup', 'coder_akash_testimonial_popup_data' );