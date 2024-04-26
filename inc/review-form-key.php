<?php
// Verification Key For Review Form
function coder_akash_verification_key_for_review_form(){
    add_settings_field( 'verification_key', 'Review Form Verification Key', 'coder_akash_review_form_key_callback', 'general' );

    register_setting('general' , 'verification_key' );
}
add_action( 'admin_init', 'coder_akash_verification_key_for_review_form' );



function coder_akash_review_form_key_callback(){
    $val = get_option( 'verification_key');
    ?>
    <textarea name="verification_key" id="verification_key" cols="100" rows="10"><?php echo esc_textarea($val); ?></textarea>
    <p class="description">Please separate multiple values using commas, without space.</p>
    <?php
}