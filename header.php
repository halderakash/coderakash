<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1"> <!-- 0 == light, 1 == dark -->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php
    //Get Theme Options
    $themeOptions = get_option('_coder_akash_theme_options') ?? NULL;
    ?>
    <main class="page-wrapper">
        <!-- Start Header Area  -->
        <header class="rainbow-header header-default header-transparent header-sticky">
            <div class="container position-relative">
                <div class="row align-items-center row--0">
                    <div class="col-lg-3 col-md-6 col-4">
                        <div class="logo">
                            <a href="<?php esc_attr_e(home_url()); ?>">
                                <img src="<?php echo isset($themeOptions['header-logo']['url']) && $themeOptions['header-logo']['url'] !== '' ? esc_attr($themeOptions['header-logo']['url']) : get_template_directory_uri().'/assets/images/logo/logo-dark.png'; ?>" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6 col-8 position-static">
                        <div class="header-right">

                            <nav class="mainmenu-nav d-none d-lg-block">
                                <?php wp_nav_menu(array('theme_location' => 'header_menu','menu_class'=>'mainmenu','fallback_cb'=>'coder_akash_header_menu_fallback')); ?>
                            </nav>

                            <?php
                            $btn_status = $themeOptions['header_button_enabled'] ?? NULL;
                             if( ($btn_status == 1) || ( $btn_status==null)): ?>

                            <!-- Start Header Btn  -->
                            <div class="header-btn">
                                <a class="btn-default btn-small round" target="_blank" href="<?php echo isset($themeOptions['header-btn-link']) && $themeOptions['header-btn-link'] !== '' ? esc_attr($themeOptions['header-btn-link']) : esc_attr('https://www.fiverr.com/akashdev321');
                                    ?>">
                                    <?php echo isset($themeOptions['header-btn-label']) && $themeOptions['header-btn-label'] !== '' ? esc_html($themeOptions['header-btn-label']) : __('HIRE ME!','coderakash');
                                    ?>
                                </a>
                            </div>
                            <!-- End Header Btn  -->

                            <?php endif; ?>

                            <!-- Start Mobile-Menu-Bar -->
                            <div class="mobile-menu-bar ml--5 d-block d-lg-none">
                                <div class="hamberger">
                                    <button class="hamberger-button">
                                        <i class="feather-menu"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Start Mobile-Menu-Bar -->

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Area  -->

        <div class="popup-mobile-menu">
            <div class="inner">
                <div class="header-top">
                    <div class="logo">
                        <a href="<?php esc_attr_e(home_url()); ?>">
                                <img src="<?php echo isset($themeOptions['header-logo']['url']) && $themeOptions['header-logo']['url'] !== '' ? esc_attr($themeOptions['header-logo']['url']) : get_template_directory_uri().'/assets/images/logo/logo-dark.png'; ?>" alt="Logo">
                        </a>
                    </div>
                    <div class="close-menu">
                        <button class="close-button">
                            <i class="feather-x"></i>
                        </button>
                    </div>
                </div>
                <?php wp_nav_menu(array('theme_location' => 'header_menu','menu_class'=>'mainmenu','fallback_cb'=>'coder_akash_header_menu_fallback')); ?>
            </div>
        </div>