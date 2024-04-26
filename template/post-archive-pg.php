<?php 
get_header();

/*===================
**Template Name: Post Archive
=====================*/

//Get Theme Options
$themeOptions = get_option('_coder_akash_theme_options') ?? NULL;
 ?>
     <!-- Start Blog Area  -->
        <div class="blog-area archive-pg-30 pt--120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle "><span class="theme-gradient">Latests Article</span></h4>
                            <h2 class="title w-600 mb--20"> <?php echo isset($themeOptions['blog_arch_section_title']) && $themeOptions['blog_arch_section_title'] !== '' ? esc_html($themeOptions['blog_arch_section_title']) : __('Explore our latest blogs.','coderakash');?> </h2>
                            <p class="description b1"><?php echo isset($themeOptions['blog_arch_section_desc']) && $themeOptions['blog_arch_section_desc'] !== '' ? esc_html($themeOptions['blog_arch_section_desc']) : __('Discover insights, updates, and more on our blog today.','coderakash');?></p>
                        </div>
                    </div>
                </div>
                <div class="row row--15">

                <?php 
                $CurrentPage = get_query_var('paged');
                $args = array(
                    'post_type'      => 'post',
                    'post_status'    => 'publish',
                    'posts_per_page' => '9',
                    'paged'          => $CurrentPage,
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
                                        <li><a href="#"><?php the_author(); ?></a></li>
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
                    <p class="theme-gradient text-center"><?php esc_html_e( 'Sorry, no blogs found.','coderakash' ); ?></p>
                    <?php
                    endif;
                    ?>
        
                </div>
            </div>
        </div>
        <!-- End Blog Area  -->
<?php get_footer(); ?>
