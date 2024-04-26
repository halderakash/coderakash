<?php

//Register Menu
function coder_akash_register_nav_menu(){
    $locations = array(
        'header_menu' => __('Header Menu','coderakash'),
        'footer_top_one' => __('Footer One','coderakash'),
        'footer_top_two' => __('Footer Two','coderakash'),
        'footer_menu_bottom' => __('Footer Bottom','coderakash'),
    );
    register_nav_menus($locations);
}
add_action('init','coder_akash_register_nav_menu');

function coder_akash_header_menu_fallback(){
    ?>
        <ul class="mainmenu">
            <li>
                <a href="#"><?php esc_html_e('Home', 'coderakash'); ?></a>
            </li>
            <li>
                <a href="#"><?php esc_html_e('Services', 'coderakash'); ?></a>
            </li>
            <li>
                <a href="#"><?php esc_html_e('About', 'coderakash'); ?></a>
            </li>
            <li>
                <a href="#"><?php esc_html_e('Contact', 'coderakash'); ?></a>
            </li>
        </ul>
    <?php
}

function coder_akash_menu_fallback(){
    ?>
        <ul class="ft-menu link-hover">
            <li>
                <a href="#"><?php esc_html_e('Privacy Policy', 'coderakash'); ?></a>
            </li>
            <li>
                <a href="#"><?php esc_html_e('Terms And Condition', 'coderakash'); ?></a>
            </li>
            <li>
                <a href="#"><?php esc_html_e('Contact Us', 'coderakash'); ?></a>
            </li>
        </ul>
    <?php
}

function coder_akash_footer_top_portfolios_fallback(){
    ?>
     <ul class="footer-link link-hover">
        <li><a href="#">Ecommerce</a></li>
        <li><a href="#">Blogs</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Buisness</a></li>
    </ul>
    <?php
}

function coder_akash_footer_top_blogs_fallback(){
    ?>
     <ul class="footer-link link-hover">
        <li><a href="pricing.html">Food</a></li>
        <li><a href="tab.html">Fashion</a></li>
        <li><a href="service.html">Travel</a></li>
        <li><a href="social-share.html">Lifestyle</a></li>
    </ul>
    <?php
}