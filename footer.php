<?php
    //Get Theme Options
    $themeOptions = get_option('_coder_akash_theme_options') ?? NULL;
?>
        <!-- Start Footer Area  -->
        <footer class="rainbow-footer footer-style-default variation-two">
            <div class="rainbow-callto-action clltoaction-style-default style-7">
                <div class="container">
                    <div class="row row--0 align-items-center content-wrapper">
                    </div>
                </div>
            </div>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="rainbow-footer-widget">
                                <div class="widget-menu-top">
                                     <div class="logo">
                                        <a href="<?php esc_attr_e(home_url()); ?>">
                                            <img src="<?php echo isset($themeOptions['footer-logo']['url']) && $themeOptions['footer-logo']['url'] !== '' ? esc_attr($themeOptions['footer-logo']['url']) : get_template_directory_uri().'/assets/images/logo/logo-dark.png'; ?>" alt="Logo">
                                        </a>
                                    </div>
                                    <div class="inner">
                                        <p><?php echo isset($themeOptions['footer_description']) && $themeOptions['footer_description'] !== '' ? esc_html($themeOptions['footer_description']) : __('Explore my newest creations where passion meets innovation, and every detail tells a story of creativity and imagination.','coderakash');
                                        ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="rainbow-footer-widget ms-lg-5 ">
                                <h4 class="title"><?php echo isset($themeOptions['footer_menu_one']) && $themeOptions['footer_menu_one'] !== '' ? esc_html($themeOptions['footer_menu_one']) : __('Portfolios','coderakash');?></h4>
                                <div class="inner">
                                    <?php
                                    wp_nav_menu(array( 'theme_location'=>'footer_top_one','menu_class'=>'footer-link link-hover','fallback_cb'=>'coder_akash_footer_top_portfolios_fallback'));
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="rainbow-footer-widget">
                                <h4 class="title"><?php echo isset($themeOptions['footer_menu_two']) && $themeOptions['footer_menu_two'] !== '' ? esc_html($themeOptions['footer_menu_two']) : __('Blogs','coderakash');?></h4>
                                <div class="inner">
                                    <?php
                                        wp_nav_menu(array( 'theme_location'=>'footer_top_two','menu_class'=>'footer-link link-hover','fallback_cb'=>'coder_akash_footer_top_blogs_fallback'));
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="rainbow-footer-widget">
                                <h4 class="title">Contact Me</h4>
                                <div class="inner">
                                    <div class="subtitle">
                                        <ul>
                                            <li><i class="fas fa-phone-alt"></i><?php echo isset($themeOptions['footer_con_number']) && $themeOptions['footer_con_number'] !== '' ? esc_html($themeOptions['footer_con_number']) : __('+8801780459535','coderakash');
                                                ?>
                                            </li>
                                            <li><i class="fas fa-envelope"></i><?php echo isset($themeOptions['footer_con_mail']) && $themeOptions['footer_con_mail'] !== '' ? esc_html($themeOptions['footer_con_mail']) : __('akashhalder332@gmail.com','coderakash');
                                                ?></li>
                                        </ul>
                                    </div>
                                    <ul class="social-icon social-default justify-content-start">
                                        <li><a target="_blank" href="<?php echo isset($themeOptions['social-facebook']) && $themeOptions['social-facebook'] !== '' ? esc_attr($themeOptions['social-facebook']) : esc_attr('https://facebook.com/M.akashhalder');
                                    ?>">
                                                <i class="feather-facebook"></i>
                                            </a>
                                        </li>
                                        <li><a target="_blank" href="<?php echo isset($themeOptions['social-twitter']) && $themeOptions['social-twitter'] !== '' ? esc_attr($themeOptions['social-twitter']) : esc_attr('https://twitter.com/_akash_halder/');
                                    ?>">
                                                <i class="feather-twitter"></i>
                                            </a>
                                        </li>
                                        <li><a target="_blank" href="<?php echo isset($themeOptions['social-instagram']) && $themeOptions['social-instagram'] !== '' ? esc_attr($themeOptions['social-instagram']) : esc_attr('https://www.instagram.com/_akash_halder/');
                                    ?>">
                                                <i class="feather-instagram"></i>
                                            </a>
                                        </li>
                                        <li><a target="_blank" href="<?php echo isset($themeOptions['social-linkedin']) && $themeOptions['social-linkedin'] !== '' ? esc_attr($themeOptions['social-linkedin']) : esc_attr('https://www.linkedin.com/in/akashdev321/');
                                    ?>">
                                                <i class="feather-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area  -->
        <!-- Start Copy Right Area  -->
        <div class="copyright-area copyright-style-one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="copyright-left">
                            <?php
                                wp_nav_menu(array( 'theme_location'=>'footer_menu_bottom','menu_class'=>'ft-menu link-hover','fallback_cb'=>'coder_akash_menu_fallback'));
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="copyright-right text-center text-lg-end">
                            <p class="copyright-text"><?php echo isset($themeOptions['copyright_coderakash']) && $themeOptions['copyright_coderakash'] !== '' ? $themeOptions['copyright_coderakash'] : __('©2024 Coder Akash. All rights reserved.','coderakash');
                            ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copy Right Area  -->
    </main>

    <!-- All Scripts  -->
    <!-- Start Top To Bottom Area  -->
    <div class="rainbow-back-top">
        <i class="feather-arrow-up"></i>
    </div>
    <!-- End Top To Bottom Area  -->
  

    <?php wp_footer(); ?>
</body>

</html>