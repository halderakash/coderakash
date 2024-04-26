
<?php 
get_header();

//Get Theme Options
$themeOptions = get_option('_coder_akash_theme_options') ?? NULL;

//Get Query Search
$s=get_search_query();
 ?>
     <!-- Start Blog Area  -->
        <div class="blog-area pt--120 archive-pg-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title " data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle "><span class="theme-gradient">Search</span></h4>
                            <h2 class="title w-600 mb--20"> <?php echo isset($s) && $s !== '' ? esc_html('Results for \''.$s.'\'') : __('Read from the Blog.','coderakash');?> </h2>
                        </div>
                    </div>
                </div>
                <div class="row row--15">

                <?php 
                $CurrentPage = get_query_var('paged');
                $args = array(
                                's' =>$s,
                                'post_type' => array('post','portfolio_cpt'),
                                'post_status'    => 'publish',
                                'posts_per_page' => '9',
                                'paged'          => $CurrentPage,
                            );
                $search_query = new WP_Query( $args );


                if($search_query->have_posts()):
                    $sl = 0; 
                    while($search_query->have_posts()): $search_query->the_post();
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
                                   echo paginate_links( array('total'=> $search_query->max_num_pages) );
                                ?>
                            </div>
                        </div>
                    <!-- End Load More Button  -->

                    <?php
                    else:
                    ?>
                    <p class="theme-gradient text-center"><?php esc_html_e( 'Sorry, no results found.','coderakash' ); ?></p>
                    <?php
                    endif;
                    ?>
        
                </div>
            </div>
        </div>
        <!-- End Blog Area  -->
<?php get_footer(); ?>
