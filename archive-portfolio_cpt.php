<?php 
get_header();

//Get Theme Options
$themeOptions = get_option('_coder_akash_theme_options') ?? NULL;

?>
       <!-- Start Portfolio Area  -->
        <div class="rainbow-demo-area pt--120 archive-pg-30">
            <div class="wrapper plr--150 plr_lg--30 plr_md--30 plr_sm--30">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h4 class="subtitle ">
                                <span class="theme-gradient">Projects</span>
                            </h4>
                            <h2 class="title w-600 mb--20"><?php echo isset($themeOptions['port_arch_section_title']) && $themeOptions['port_arch_section_title'] !== '' ? esc_html($themeOptions['port_arch_section_title']) : __('Discover My Latest Creations!','coderakash');?></h2>
                            <p class="description b1"><?php echo isset($themeOptions['port_arch_section_desc']) && $themeOptions['port_arch_section_desc'] !== '' ? $themeOptions['port_arch_section_desc'] : __('Explore my recent projects showcasing creativity and innovation.','coderakash');?></p>
                        </div>
                    </div>
                </div>
                <div class="row row--30">

                <?php 
                $CurrentPage = get_query_var('paged');
                
                $args = array(
                    'post_type'      => 'portfolio_cpt',
                    'post_status'    => 'publish',
                    'posts_per_page' => 9,
                    'paged'          => $CurrentPage,
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
                ?>
                <!-- Start Load More Button  -->
                    <div class="col-lg-12">
                        <div class="rainbow-load-more text-center mt--60">
                          <?php
                           echo paginate_links( array('total'=> $portCPT->max_num_pages) );
                           ?>
                        </div>
                    </div>
                <!-- End Load More Button  -->
                <?php
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
<?php get_footer(); ?>
