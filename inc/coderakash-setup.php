<?php

function coder_akash_setup(){

    //Load Text Domain for ready to translation
    load_textdomain( 'coderakash', get_template_directory().'/langueages');

    //Support Title Tag
    add_theme_support('title-tag');

    //Thumbnail Support
    add_theme_support('post-thumbnails');

}
add_action('after_setup_theme','coder_akash_setup');