<?php 
get_header();

/*===================
**Template Name: Testimonials
=====================*/

//Get Theme Options
$themeOptions = get_option('_coder_akash_theme_options') ?? NULL;
?>

        <!-- Start Testimonial  Area  -->
        <div class="rainbow-testimonial-area pt--120">
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
                $CurrentPage = get_query_var('paged');
                $args = array(
                    'post_type'      => 'cliets_testimonial',
                    'post_status'    => 'publish',
                    'posts_per_page' => '9',
                    'paged'          => $CurrentPage,
                );
                $testiCPT = new WP_Query($args);

                if($testiCPT->have_posts()):
                    while($testiCPT->have_posts()): $testiCPT->the_post();
                ?>

                    <div class="col-lg-4 col-md-6 col-12 mt--30 cursor--behaviour" onclick="coder_akash_testimonial_popup(<?php echo get_the_ID(); ?>);" data-sal="slide-up" data-sal-duration="700">
                        <div class="rainbow-box-card card-style-default testimonial-style-one">
                            <div class="inner">
                                <div class="thumbnail"><img src="<?php echo get_post_meta( get_the_ID(), 'testimonial_clients_image', true ); ?>" alt="Corporate React Template"></div>
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
                    ?>
                    <!-- Start Pagination Button -->
                    <div class="col-lg-12">
                        <div class="rainbow-load-more text-center mt--60 port-tax-pagination">
                            <?php
                            echo paginate_links( array('total'=> $testiCPT->max_num_pages ) );
                            ?>
                        </div>
                    </div>
                    <!-- End Pagination Button -->

                    <?php
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

<?php get_footer(); ?>
