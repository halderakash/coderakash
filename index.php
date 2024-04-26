<?php get_header();  ?>

<?php
    //Get Theme Options
    $themeOptions = get_option('_coder_akash_theme_options') ?? NULL;
?>

        <!-- Start Slider Area  -->
        <div class="slider-perosonal-portfolio height-750 slider-bg-image bg-image11" style="background-image: url(<?php echo isset($themeOptions['banner_bg_image']['url']) && $themeOptions['banner_bg_image']['url'] !== '' ? esc_html($themeOptions['banner_bg_image']['url']) : get_template_directory_uri().'/assets/images/bg/bg-image-11.jpg';?>);" data-black-overlay="1">
            <div class="container">
                <div class="row row--30 align-items-center">
                    <div class="col-12">
                        <div class="inner">
                            <h1 class="title"><?php echo isset($themeOptions['banner_title']) && $themeOptions['banner_title'] !== '' ? esc_html($themeOptions['banner_title']) : esc_html('Hey! I\'m');?> <br> <span class="theme-gradient"><?php echo isset($themeOptions['banner_name']) && $themeOptions['banner_name'] !== '' ? esc_html($themeOptions['banner_name']) : esc_html('Akash Halder');?></span></h1>
                            <div class="button-group mt--30"><a class="btn-default round btn-border" href="<?php echo isset($themeOptions['banner_btn_link']) && $themeOptions['banner_btn_link'] !== '' ? esc_attr($themeOptions['banner_btn_link']) : esc_attr('#');?>"><?php echo isset($themeOptions['banner_btn_label']) && $themeOptions['banner_btn_label'] !== '' ? esc_html($themeOptions['banner_btn_label']) : esc_html('Contact Me');?></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area  -->

        <!-- Start About Area  -->
        <div class="about-style-5 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="row row--0 about-wrapper align-items-center theme-shape">
                            <div class="col-lg-6">
                                <div class="thumbnail"><img src="<?php echo isset($themeOptions['about_image']['url']) && $themeOptions['about_image']['url'] !== '' ? esc_attr($themeOptions['about_image']['url']) : get_template_directory_uri().'/assets/images/about/akash_about.png'; ?>" alt="About Images">
                                </div>
                            </div>
                            <div class="col-lg-6 mt_md--30 mt_sm--30">
                                <div class="content">
                                    <div class="inner">
                                        <h4 class="title"><?php echo isset($themeOptions['about_title']) && $themeOptions['about_title'] !== '' ? esc_html($themeOptions['about_title']) : __('I\'m Web Dedeloper','coderakash');
                                        ?></h4>
                                        <p><?php echo isset($themeOptions['about_description']) && $themeOptions['about_description'] !== '' ? esc_html($themeOptions['about_description']) : __('Web designer and developer working with Wordpress from Bangladesh.','coderakash');
                                        ?></p>
                                        <ul class="contact-address">
                                            <li>
                                                <i class="feather-file"></i> <?php echo isset($themeOptions['about_designation']) && $themeOptions['about_designation'] !== '' ? esc_html($themeOptions['about_designation']) : __('Web designer & developer','coderakash');
                                                ?>
                                            </li>
                                            <li><i class="feather-phone"></i> <?php echo isset($themeOptions['footer_con_number']) && $themeOptions['footer_con_number'] !== '' ? esc_html($themeOptions['footer_con_number']) : __('+8801780459535','coderakash');
                                                ?></li>
                                            <li>
                                                <i class="feather-map-pin"></i><?php echo isset($themeOptions['about_location']) && $themeOptions['about_location'] !== '' ? esc_html($themeOptions['about_location']) : __('Barishal, Bangladesh','coderakash');
                                                ?> 
                                            </li>
                                        </ul>
                                        <div class="download-button mt--20"><a class="btn-read-more" href="<?php echo isset($themeOptions['about_btn_link']) && $themeOptions['about_btn_link'] !== '' ? esc_attr($themeOptions['about_btn_link']) : esc_attr('#');
                                    ?>"><span><?php echo isset($themeOptions['about_btn_label']) && $themeOptions['about_btn_label'] !== '' ? esc_html($themeOptions['about_btn_label']) : __('Download My CV','coderakash');?></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area  -->

       
        
        <!-- Start Portfolio Area  -->
        <div class="rainbow-demo-area rainbow-section-gap">
            <div class="wrapper plr--150 plr_lg--30 plr_md--30 plr_sm--30">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h4 class="subtitle ">
                                <span class="theme-gradient">Projects</span>
                            </h4>
                            <h2 class="title w-600 mb--20"><?php echo isset($themeOptions['portfolio_title']) && $themeOptions['portfolio_title'] !== '' ? esc_html($themeOptions['portfolio_title']) : __('Discover My Latest Creations!','coderakash');?></h2>
                            <p class="description b1"><?php echo isset($themeOptions['portfolio_description']) && $themeOptions['portfolio_description'] !== '' ? $themeOptions['portfolio_description'] : __('Explore my recent projects showcasing creativity and innovation.','coderakash');?></p>
                        </div>
                    </div>
                </div>
                <div class="row row--30">

                <?php 

                $args = array(
                    'post_type'      => 'portfolio_cpt',
                    'post_status'    => 'publish',
                    'posts_per_page' => '6',
                );
                $portCPT = new WP_Query($args);

                if($portCPT->have_posts()):
                    $sl = 0; 
                    while($portCPT->have_posts()): $portCPT->the_post();
                    $sl++;
                ?>
                 <!-- Start Single Demo  -->
                 <div class="col-lg-4 col-md-6 col-12 mt--40">
                    <div class="single-demo">
                        <a href="<?php the_permalink(); ?>">
                            <div class="thumbnail portfolio-loop-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </a>
                        <h4 class="title"><a href="<?php the_permalink(); ?>"><?php coder_akash_content_implode(get_the_title(),3,'...'); ?></a> </h4>
                    </div>
                </div>
                    <!-- End Single Demo  -->
                <?php
                    endwhile;
                    if($sl==6):
                ?>
                <!-- Start Load More Button  -->
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <div class="rainbow-load-more text-center mt--60">
                                <a href="<?php echo esc_attr_e(home_url().'/portfolio'); ?>" class="btn btn-default btn-large btn-icon round">
                                    <span><?php echo isset($themeOptions['portfolio_btn_label']) && $themeOptions['portfolio_btn_label'] !== '' ? esc_html($themeOptions['portfolio_btn_label']) : __('View All','coderakash');?><span class="icon feather-loader"></span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                <!-- End Load More Button  -->
                <?php
                     endif;
                else:
                ?>
                <p class="theme-gradient text-center"><?php esc_html_e( 'Sorry, no portfolios found.','coderakash' ); ?></p>
                <?php
                endif;
                ?>
                </div>
            </div>
        </div>
        <!-- End Portfolio Area  -->


        <!-- Start Seperator Area  -->
        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>
        <!-- End Seperator Area  -->


        <!-- Start Testimonial  Area  -->
        <div class="rainbow-testimonial-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb--10">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle "><span class="theme-gradient">Client Feedback</span></h4>
                            <h2 class="title w-600 mb--20"><?php echo isset($themeOptions['testimonial_title']) && $themeOptions['testimonial_title'] !== '' ? esc_html($themeOptions['testimonial_title']) : __('Awesome Clients Testimonials.','coderakash');?></h2>
                            <p class="description b1"><?php echo isset($themeOptions['testimonial_description']) && $themeOptions['testimonial_description'] !== '' ? esc_html($themeOptions['testimonial_description']) : __('Discover satisfaction through client testimonials.','coderakash');?></p>
                        </div>
                    </div>
                </div>
                <div class="row row--15">

                
                <?php 

                $args = array(
                    'post_type'      => 'cliets_testimonial',
                    'post_status'    => 'publish',
                    'posts_per_page' => '3',
                );
                $testiCPT = new WP_Query($args);

                if($testiCPT->have_posts()):
                    $sl = 0; 
                    while($testiCPT->have_posts()): $testiCPT->the_post();
                    $sl++;

                    $client_thumb = get_post_meta( get_the_ID(), 'testimonial_clients_image', true );
                    
                    if(empty($client_thumb)){
                        $client_thumb = get_template_directory_uri() . '/assets/images/clients-dummy.jpg';
                    }

                ?>

                    <div class="col-lg-4 col-md-6 col-12 mt--30 cursor--behaviour" onclick="coder_akash_testimonial_popup(<?php echo get_the_ID(); ?>);" data-sal="slide-up" data-sal-duration="700">
                        <div class="rainbow-box-card card-style-default testimonial-style-one">
                            <div class="inner">
                                <div class="thumbnail"><img src="<?php echo $client_thumb;  ?>" alt="Corporate React Template"></div>
                                <div class="content">
                                    <p class="description">"<?php $clientsMSG = get_the_content(); 
                                        coder_akash_content_implode($clientsMSG,15,'" ...');
                                    ?></p>
                                    <h2 class="title"><?php the_title(); ?></h2>
                                    <h6 class="subtitle theme-gradient"><?php echo get_post_meta( get_the_ID(), 'testimonial_clients_designation', true ) ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php
                    endwhile;
                        if($sl==3):
                    ?>

                    <!-- Start Load More Button  -->
                    <div class="row row--15">
                        <div class="col-lg-12">
                            <div class="rainbow-load-more text-center mt--60">
                                <a href="<?php echo isset($themeOptions['testimonial_btn_link']) && $themeOptions['testimonial_btn_link'] !== '' ? esc_attr($themeOptions['testimonial_btn_link']) : '#';?>" class="btn btn-default btn-large btn-icon round">
                                    <span><?php echo isset($themeOptions['testimonial_btn_label']) && $themeOptions['testimonial_btn_label'] !== '' ? esc_html($themeOptions['testimonial_btn_label']) : __('View More','coderakash');?><span class="icon feather-loader"></span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Load More Button  -->

                    <?php
                        endif;
                    else:
                    ?>
                    <p class="theme-gradient text-center"><?php esc_html_e( 'Sorry, no testimonials found.','coderakash' ); ?></p>
                    <?php
                    endif;
                    ?>
                </div>
            </div>
        </div>

        <!-- Testimonial Popup -->
                
        <div class="hidden-testmonial-area popup-visibility">
            <div class="testimonial-card">
                <div class="test-popup-close-button p-5 p-md-3 p-sm-2 text-end"><i class="fa-solid fa-xmark cursor--behaviour"></i></div>
                <div class="thumbnail testimonial-thumbnail-popup text-center mb-5"><img ></div>
                <h2 class="testimonial-popup-title text-center" >Title</h2>
                <h6 class="testimonial-designation text-center">
                    <span class="designation-title">CEO</span>
                    <span>Of</span>
                    <span class="clients-project-details theme-gradient"><a target="_blank">Blank</a></span
                ></h6>
                <p class="testimonial-content text-center" >Description : Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ad animi dolorem doloribus quasi molestias eum odio perspiciatis laudantium temporibus!</p>
            </div>
        </div>

        <!-- End Testimonial  Area  -->



        <!-- Start Seperator Area  -->
        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>
        <!-- End Seperator Area  -->

        <!-- Start Blog Area  -->
        <div class="blog-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle "><span class="theme-gradient">Latests Article</span></h4>
                            <h2 class="title w-600 mb--20"> <?php echo isset($themeOptions['blog_section_title']) && $themeOptions['blog_section_title'] !== '' ? esc_html($themeOptions['blog_section_title']) : __('Explore our latest blogs.','coderakash');?> </h2>
                            <p class="description b1"><?php echo isset($themeOptions['blog_sec_description']) && $themeOptions['blog_sec_description'] !== '' ? esc_html($themeOptions['blog_sec_description']) : __('Discover insights, updates, and more on our blog today.','coderakash');?></p>
                        </div>
                    </div>
                </div>
                <div class="row row--15">

                <?php 

                $args = array(
                    'post_type'      => 'post',
                    'post_status'    => 'publish',
                    'posts_per_page' => '6',
                );
                $portCPT = new WP_Query($args);

                if($portCPT->have_posts()):
                    $sl = 0; 
                    while($portCPT->have_posts()): $portCPT->the_post();
                    $sl++;
                ?>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt--30" data-sal="slide-up" data-sal-duration="700">
                        <div class="rainbow-card box-card-style-default">
                            <div class="inner">
                                <div class="thumbnail"><a class="image" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
                                <div class="content">
                                    <ul class="rainbow-meta-list">
                                        <li><a href="<?php echo  get_author_posts_url( get_the_author_ID(), get_the_author( )); ?>"><?php the_author(); ?></a></li>
                                        <li class="separator">/</li>
                                        <li><?php echo get_the_date('d M Y') ?></li>
                                    </ul>
                                    <h4 class="title"><a href="<?php the_permalink(); ?>"><?php coder_akash_content_implode(get_the_title(),9,'...') ?></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    endwhile;
                        if($sl==6):
                    ?>


                    <!-- Start Load More Button  -->

                        <div class="col-lg-12 text-center">  
                                <div class="rainbow-load-more text-center mt--60">
                                    <a href="<?php echo isset($themeOptions['blog_btn_link']) && $themeOptions['blog_btn_link'] !== '' ? esc_attr($themeOptions['blog_btn_link']) : '#';?>" class="btn btn-default btn-large btn-icon round">
                                            <span><?php echo isset($themeOptions['blog_btn_label']) && $themeOptions['blog_btn_label'] !== '' ? esc_html($themeOptions['blog_btn_label']) : __('View All','coderakash');?><span class="icon feather-loader"></span></span>
                                    </a>
                                </div>
                        </div>

                    <!-- End Load More Button  -->


                    <?php
                        endif;
                    else:
                    ?>
                    <p class="theme-gradient text-center"><?php esc_html_e( 'Sorry, no blogs found.','coderakash' ); ?></p>
                    <?php
                    endif;
                    ?>
        
                </div>
            </div>
        </div>
        <!-- End Blog Area  -->

        <!-- Start Contact Area  -->
        <div class="main-content" id="personal-contact">
            <div class="rainbow-contact-area mt-5 mb-5 mb-md-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mb--20">
                            <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                                <h4 class="subtitle "><span class="theme-gradient">Contact Me</span></h4>
                                <h2 class="title w-600 mb--20"><?php echo isset($themeOptions['contact_section_title']) && $themeOptions['contact_section_title'] !== '' ? esc_html($themeOptions['contact_section_title']) : __('Find Contact Address Here.','coderakash');
                                        ?></h2>
                            </div>
                        </div>
                    </div>

                    <div class="row  row--15">
                        <div class="col-lg-7">
                            <form class="contact-form-1 rainbow-dynamic-form" id="contact-form">
                                <div class="form-group">
                                    <input type="text" name="conName" id="conName" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="conPhone" id="conPhone" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <input type="email" id="conEmail" name="conEmail" placeholder="Your Email">
                                </div>

                                <div class="form-group">
                                    <input type="text" id="conSubject" name="conSubject" placeholder="Your Subject">
                                </div>

                                <div class="form-group">
                                    <textarea name="conMessage" id="conMessage" placeholder="Your Message"></textarea>
                                </div>

                                <div class="form-group">
                                    <button name="submit" type="submit" id="submit" class="btn-default btn-large rainbow-btn">
                                        Send Message
                                    </button>
                                </div>

                                <div id="from-message"></div>

                            </form>
                        </div>
                        <div class="col-lg-5 mt_md--30 mt_sm--30">
                            <div class=" contact-img-dark">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="rainbow-address mt-0">
                                            <div class="icon">
                                                <i class="feather-headphones"></i>
                                            </div>
                                            <div class="inner">
                                                <h4 class="title">Contact Number</h4>
                                                <p><a href="tel:<?php echo isset($themeOptions['contact_phone_number_one']) && $themeOptions['contact_phone_number_one'] !== '' ? esc_attr($themeOptions['contact_phone_number_one']) : __('+8801881267068','coderakash');
                                        ?>"><?php echo isset($themeOptions['contact_phone_number_one']) && $themeOptions['contact_phone_number_one'] !== '' ? esc_html($themeOptions['contact_phone_number_one']) : __('+8801881267068','coderakash');
                                        ?></a></p>
                                                <p><a href="tel:<?php echo isset($themeOptions['contact_phone_number_two']) && $themeOptions['contact_phone_number_two'] !== '' ? esc_attr($themeOptions['contact_phone_number_two']) : __('+8801780459535','coderakash');
                                        ?>"><?php echo isset($themeOptions['contact_phone_number_two']) && $themeOptions['contact_phone_number_two'] !== '' ? esc_html($themeOptions['contact_phone_number_two']) : __('+8801780459535','coderakash');
                                        ?></a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-12 mt-4 mt-md-0 ">
                                        <div class="rainbow-address">
                                            <div class="icon">
                                                <i class="feather-mail"></i>
                                            </div>
                                            <div class="inner">
                                                <h4 class="title">Email Address</h4>
                                                <p><a href="mailto:<?php echo isset($themeOptions['contact_email_one']) && $themeOptions['contact_email_one'] !== '' ? esc_html($themeOptions['contact_email_one']) : 'contact@coderakash.com';
                                        ?>"><?php echo isset($themeOptions['contact_email_one']) && $themeOptions['contact_email_one'] !== '' ? esc_attr($themeOptions['contact_email_one']) : 'contact@coderakash.com';
                                        ?></a></p>
                                                <p><a href="mailto:<?php echo isset($themeOptions['contact_email_two']) && $themeOptions['contact_email_two'] !== '' ? esc_html($themeOptions['contact_email_two']) : 'akashhalder332@gmail.com';
                                        ?>"><?php echo isset($themeOptions['contact_email_two']) && $themeOptions['contact_email_two'] !== '' ? esc_attr($themeOptions['contact_email_two']) : 'akashhalder332@gmail.com';
                                        ?></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Area  -->

<?php get_footer();  ?>