<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = '_coder_akash_theme_options';

//
// Create options
//
CSF::createOptions( $prefix, array(
  'menu_title' => __('Coder Akash','coderakash'),
  'menu_slug'  => 'coder_akash_options',
) );

//
// Create a section
//
CSF::createSection( $prefix, array(
  'title'  => __('Header & Footer','coderakash'),
  'icon'   => 'fa fa-graduation-cap',
  'fields' => array(

    array(
      'id'       => 'header-logo',
      'type'     => 'media',
      'title'    => __('Header Logo','coderakash'),
      'library'  => 'image',
      'preview'  => false,
    ),

    array(
      'id'       => 'footer-logo',
      'type'     => 'media',
      'title'    => __('Footer Logo','coderakash'),
      'library'  => 'image',
      'preview'  => false,
    ),

    array(
      'id'      => 'header_button_enabled',
      'type'    => 'switcher',
      'title'   => 'Header Button',
      'label'   => 'Do you want to show it ?',
      'default' => true,
    ),

    array(
      'id'       => 'header-btn-label',
      'type'     => 'text',
      'title'    => __('Header Button text','coderakash'),
    ),


    array(
      'id'       => 'header-btn-link',
      'type'     => 'text',
      'title'    => __('Header Button URL','coderakash'),
      'validate' => 'csf_validate_url',
    ),

    array(
      'id'       => 'footer_menu_one',
      'type'     => 'text',
      'title'    => __('Footer Menu One Title','coderakash'),
    ),

    array(
      'id'       => 'footer_menu_two',
      'type'     => 'text',
      'title'    => __('Footer Menu Two Title','coderakash'),
    ),
    
    array(
      'id'       => 'footer_con_number',
      'type'     => 'text',
      'title'    => __('Phone Number','coderakash'),
    ),
    
    array(
      'id'       => 'footer_con_mail',
      'type'     => 'text',
      'title'    => __('Email Address','coderakash'),
    ),

    array(
      'id'       => 'footer_description',
      'type'     => 'textarea',
      'title'    => __('Footer Description','coderakash'),
    ),

    array(
      'id'       => 'copyright_coderakash',
      'type'     => 'wp_editor',
      'title'    => __('Footer Copyright','coderakash'),
    ),


  )
) );


//
// Home Section
//
CSF::createSection( $prefix, array(
  'title'  => __('Home','coderakash'),
  'id'     => 'home_options',
  'icon'   => 'fa fa-home',
) );

//Banner

CSF::createSection( $prefix, array(
  'title'  => __('Banner','coderakash'),
  'parent' => 'home_options',
  'icon'   => 'fa fa-sliders',
  'fields' => array(

    array(
      'id'      => 'banner_bg_image',
      'type'    => 'media',
      'title'   => __('Upload Banner Background','coderakash'),
      'library' => 'image'
    ),

    array(
      'id'      => 'banner_title',
      'type'    => 'text',
      'title'   => __('Banner Title','coderakash'),
    ),

    array(
      'id'      => 'banner_name',
      'type'    => 'text',
      'title'   => __('Your Name','coderakash'),
    ),

    array(
      'id'      => 'banner_btn_label',
      'type'    => 'text',
      'title'   => __('Button Text','coderakash'),
    ),

    array(
      'id'      => 'banner_btn_link',
      'type'    => 'text',
      'title'   => __('Button URL','coderakash'),
      'validate' => 'csf_validate_url',
    ),


  )
) );


CSF::createSection( $prefix, array(
  'title'  => __('About','coderakash'),
  'parent' => 'home_options',
  'icon'   => 'fa fa-address-card-o',
  'fields' => array(

    
    array(
      'id'      => 'about_image',
      'type'    => 'media',
      'title'   => __('Upload Image','coderakash'),
      'desc'    => __('Recomended Size 800*600px','coderakash'),
      'library' => 'image',
      'preview' => false,
    ),

    array(
      'id'      => 'about_title',
      'type'    => 'text',
      'title'   => __('Title','coderakash'),
    ),

    array(
      'id'      => 'about_description',
      'type'    => 'text',
      'title'   => __('Short Description','coderakash'),
    ),

    array(
      'id'      => 'about_designation',
      'type'    => 'text',
      'title'   => __('Designation','coderakash'),
    ),

    array(
      'id'      => 'about_location',
      'type'    => 'text',
      'title'   => __('Location','coderakash'),
    ),
    
    array(
      'id'      => 'about_btn_label',
      'type'    => 'text',
      'title'   => __('Button Text','coderakash'),
    ),

    array(
      'id'      => 'about_btn_link',
      'type'    => 'text',
      'title'   => __('Button URL','coderakash'),
      'validate' => 'csf_validate_url',
    ),


  )
) );

//Portfolio Section

CSF::createSection( $prefix, array(
  'title'  => __('Portfolio','coderakash'),
  'parent' => 'home_options',
  'icon'   => 'fa fa-picture-o',
  'fields' => array(

    array(
      'id'      => 'portfolio_title',
      'type'    => 'text',
      'title'   => __('Title','coderakash'),
    ),

    array(
      'id'      => 'portfolio_description',
      'type'    => 'text',
      'title'   => __('Short Description','coderakash'),
      'desc'    => __('You can use HTML tag Like: < br >','coderakash'),
    ),

    array(
      'id'      => 'portfolio_btn_label',
      'type'    => 'text',
      'title'   => __('Button Text','coderakash'),
    ),


  )
) );

//Testimonial Section

CSF::createSection( $prefix, array(
  'title'  => __('Testimonial','coderakash'),
  'parent' => 'home_options',
  'icon'   => 'fa fa-star',
  'fields' => array(

    array(
      'id'      => 'testimonial_title',
      'type'    => 'text',
      'title'   => __('Title','coderakash'),
    ),

    array(
      'id'      => 'testimonial_description',
      'type'    => 'text',
      'title'   => __('Short Description','coderakash'),
      'desc'    => __('You can use HTML tag Like: < br >','coderakash'),
    ),

    array(
      'id'      => 'testimonial_btn_label',
      'type'    => 'text',
      'title'   => __('Button Text','coderakash'),
    ),

    array(
      'id'      => 'testimonial_btn_link',
      'type'    => 'text',
      'title'   => __('Button URL','coderakash'),
      'validate' => 'csf_validate_url',
    ),

  )
) );

//Blog Section

CSF::createSection( $prefix, array(
  'title'  => __('Blog','coderakash'),
  'parent' => 'home_options',
  'icon'   => 'fa fa-file-text',
  'fields' => array(

    array(
      'id'      => 'blog_section_title',
      'type'    => 'text',
      'title'   => __('Section Title','coderakash'),
    ),

    array(
      'id'      => 'blog_sec_description',
      'type'    => 'text',
      'title'   => __('Short Description','coderakash'),
      'desc'    => __('You can use HTML tag Like: < br >','coderakash'),
    ),

    array(
      'id'      => 'blog_btn_label',
      'type'    => 'text',
      'title'   => __('Button Text','coderakash'),
    ),

    array(
      'id'      => 'blog_btn_link',
      'type'    => 'text',
      'title'   => __('Button URL','coderakash'),
      'validate' => 'csf_validate_url',
    ),

  )
) );




//Blog Section

CSF::createSection( $prefix, array(
  'title'  => __('Contact','coderakash'),
  'parent' => 'home_options',
  'icon'   => 'fa fa-envelope-o',
  'fields' => array(

    array(
      'id'      => 'contact_section_title',
      'type'    => 'text',
      'title'   => __('Contact Title','coderakash'),
    ),

    array(
      'id'      => 'contact_phone_number_one',
      'type'    => 'text',
      'title'   => __('Contact Number One','coderakash'),
    ),

    array(
      'id'      => 'contact_phone_number_two',
      'type'    => 'text',
      'title'   => __('Contact Number Two','coderakash'),
    ),

    array(
      'id'      => 'contact_email_one',
      'type'    => 'text',
      'title'   => __('Contact Email One','coderakash'),
    ),

    array(
      'id'      => 'contact_email_two',
      'type'    => 'text',
      'title'   => __('Contact Email Two','coderakash'),
    ),

  )
) );


//
// Portfolio Section
//
CSF::createSection( $prefix, array(
  'title'  => __('Portfolio Archive','coderakash'),
  'id'     => 'options_portfolio_archive',
  'icon'   => 'fa fa-picture-o',
  'fields' => array(

    array(
      'id'      => 'port_arch_section_title',
      'type'    => 'text',
      'title'   => __('Portfolio Archive Title','coderakash'),
    ),

    array(
      'id'      => 'port_arch_section_desc',
      'type'    => 'text',
      'title'   => __('Portfolio Archive Description','coderakash'),
      'desc'    => __('You can use html Tag Like < br >','coderakash'),
    ),


    )
) );


//
// Blog Section
//
CSF::createSection( $prefix, array(
  'title'  => __('Blog Archive','coderakash'),
  'id'     => 'options_blog_archive',
  'icon'   => 'fa fa-pencil-square',
  'fields' => array(

    array(
      'id'      => 'blog_arch_section_title',
      'type'    => 'text',
      'title'   => __('Blog Archive Title','coderakash'),
    ),

    array(
      'id'      => 'blog_arch_section_desc',
      'type'    => 'text',
      'title'   => __('Blog Archive Description','coderakash'),
      'desc'    => __('You can use html Tag Like < br >','coderakash'),
    ),


    )
) );

//
// Contact Section
//
CSF::createSection( $prefix, array(
  'title'  => __('Contact Page','coderakash'),
  'id'     => 'options_contact_pg',
  'icon'   => 'fa fa-file-text',
  'fields' => array(

    array(
      'id'      => 'contact_pg_section_title',
      'type'    => 'text',
      'title'   => __('Contact Page Title','coderakash'),
    ),

    )
) );

//
// CV Section
//
CSF::createSection( $prefix, array(
  'title'  => __('My CV','coderakash'),
  'id'     => 'options_cv_pg',
  'icon'   => 'fa fa-file-pdf-o',
  'fields' => array(

    array(
      'id'      => 'cv_pg_section_title',
      'type'    => 'text',
      'title'   => __('CV Page Title','coderakash'),
    ),

    array(
      'id'      => 'cv_images',
      'type'    => 'gallery',
      'title'   => __('Cv Images','coderakash'),
    ),

    array(
      'id'      => 'cv_pdf_download',
      'type'    => 'media',
      'title'   => __('Cv PDF','coderakash'),
      'preview' => false,
    ),

    )
) );

//
// Social Icon section
//
CSF::createSection( $prefix, array(
  'title'  => __('Social Button','coderakash'),
  'icon'   => 'fa fa-twitter',
  'fields' => array(

    array(
      'id'      => 'social-facebook',
      'type'    => 'text',
      'title'   => __('Facebook Link','coderakash'),
      'validate' => 'csf_validate_url',
    ),

    array(
      'id'      => 'social-twitter',
      'type'    => 'text',
      'title'   => __('Twitter Link','coderakash'),
      'validate' => 'csf_validate_url',
    ),

    array(
      'id'      => 'social-instagram',
      'type'    => 'text',
      'title'   => __('Instagram Link','coderakash'),
      'validate' => 'csf_validate_url',
    ),

    array(
      'id'      => 'social-linkedin',
      'type'    => 'text',
      'title'   => __('Linkedin Link','coderakash'),
      'validate' => 'csf_validate_url',
    ),


  )
) );


//
// Fav Icon Section
//
CSF::createSection( $prefix, array(
  'title'  => __('Site Icon','coderakash'),
  'icon'   => 'fa fa-chrome',
  'fields' => array(

    array(
      'id'      => 'coderakash-site-icon',
      'type'    => 'media',
      'title'   => __('Upload Icon','coderakash'),
      'desc'    => __('Recomended size 512*512 Px','coderakash'),
      'library' => 'image'
    ),


  )
) );
