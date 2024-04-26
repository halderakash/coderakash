
<?php
/*=================
**Template Name: Contact 
===================*/
get_header();


//Get Theme Options
$themeOptions = get_option('_coder_akash_theme_options') ?? NULL;
?>
       <!-- Start Contact Area  -->
       <div class="main-content pt--120 pt_sm--80">
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
<?php get_footer(); ?>