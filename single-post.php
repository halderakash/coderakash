<?php get_header(); ?>
        <!-- Start Advance Pricing Area  -->
        <div class="rainbow-blog-details-area blog-single-pg">
            <div class="post-page-banner rainbow-section-gapTop">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="content text-center">
                                <div class="page-title">
                                    <h1 class="theme-gradient portfolio-single-title"><?php echo get_the_title(); ?></h1>
                                </div>
                                <ul class="rainbow-meta-list">
                                    <li>
                                        <i class="feather-user"></i>
                                        <?php 
                                            $post_details = get_queried_object(); 
                                            $author_id = $post_details->post_author;
                                        ?>
                                        <span><?php echo get_the_author_meta( 'display_name',$author_id); ?></span>
                                    </li>
                                    <li>
                                        <i class="feather-calendar"></i>
                                        <?php echo get_the_date('d M Y'); ?>
                                    </li>
                                </ul>
                                <div class="thumbnail alignwide mt--60">
                                    <?php the_post_thumbnail(); ?>
                                   </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-details-content pt--60 pb--50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="content">

                                <?php the_content(); ?>
                                
                                <div class="category-meta">
                                    <span class="text w-100">Tags:</span>
                                    <div class="tagcloud">
                                        <?php
                                         $tageBase = get_option('tag_base') ?: 'tag';
                                         $postTag = get_the_tags();
                                         if($postTag):
                                            foreach ($postTag as $singleTag):
                                                ?>
                                                <a href="<?php echo (home_url('/').$tageBase.'/'.$singleTag->slug); ?>"><?php echo $singleTag->name; ?></a>
                                                <?php
                                            endforeach;
                                        endif;
                                        ?>
                            
                                    </div>
                                </div>
                                <!-- Start Contact Form Area  -->
                                <div class="rainbow-comment-form pt--60">
                                    <div class="inner">
                                    <?php comments_template(); ?>
                                    </div>
                                </div>
                                <!-- End Contact Form Area  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Advance Pricing Area  -->
<?php get_footer(); ?>