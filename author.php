<?php get_header( ); ?>
<?php 
get_header();


?>
       <!-- Start Portfolio Area  -->
        <div class="rainbow-demo-area pt--120 archive-pg-30">
            <div class="wrapper plr--150 plr_lg--30 plr_md--30 plr_sm--30">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h4 class="subtitle ">
                                <span class="theme-gradient">Blogs</span>
                            </h4>
                            <h2 class="title w-600 mb--20"><?php echo 'Posts From \''.get_the_author_meta('display_name', get_the_author_meta(get_current_user_id()) ).'\''; ?></h2>
                            <p class="description b1"></p>
                        </div>
                    </div>
                </div>
                <div class="row row--30">

                <?php 

                $CurrentPage = ( get_query_var('page') ) ? get_query_var('page') : 1;

                $args = array(
                    'post_type'      => 'post',
                    'post_status'    => 'publish',
                    'posts_per_page' => 9,
                    'paged'          => $CurrentPage,
                    'author'         => get_current_user_id(),
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
                        <div class="rainbow-load-more text-center mt--60 port-tax-pagination">
                          <?php
                           echo paginate_links( array(
                            'total'              => $portCPT->max_num_pages,
                            'format'             => '?page=%#%',
                            'current'            =>  $CurrentPage,
                            ) );
                           ?>
                        </div>
                    </div>
                <!-- End Load More Button  -->
                <?php
                else:
                ?>
                <p class="theme-gradient text-center"><?php esc_html_e( 'Sorry, no posts found.','coderakash' ); ?></p>
                <?php
                endif;
                ?>
                </div>
            </div>
        </div>
        <!-- End Portfolio Area  -->
<?php get_footer(); ?>

<?php get_footer( ); ?>