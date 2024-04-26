<?php get_header(); ?>
<?php
    //Get Theme Options
    $themeOptions = get_option('_coder_akash_theme_options') ?? NULL;
?>
        <div class="breadcrumb-area breadcarumb-style-1 pb--50 pt--120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-inner text-center">
                            <h1 class="title theme-gradient h2 portfolio-single-title"><?php the_title(); ?></h1>
                            <ul class="page-list">
                                <li class="rainbow-breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                                <li class="rainbow-breadcrumb-item active">Portfolio Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcarumb area  -->
        <!-- Start Theme Style  -->
        <div>
            <div class="rainbow-gradient-circle"></div>
            <div class="rainbow-gradient-circle theme-pink"></div>
        </div>
        <!-- End Theme Style  -->



        <!-- Start Portfolio Details area  -->
        <div class="rainbow-portfolio-details pt-lg-5 pt-ms-3 pt-sm-0 pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="inner">
                            <div class="details-list">
                                <div class="thumbnail alignwide"> <?php the_post_thumbnail(); ?> </div>
                                <div class="row mt--40 row--30">
                                    <div class="col-lg-12 pe-5">
                                        <div class="content-left">
                                            <div class="row">
                                                <div class="col-lg-6"><h4 class="title">Project Details</h4></div>
                                                <div class="col-lg-6 text-lg-end text-md-end text-start"><button class="view-live-project btn-default btn-small round" ><a href="<?php echo get_post_meta(get_the_ID(), 'website_live_link', true );?>" target="_blank">View Live Project</a></button></div>
                                            </div>
                                            <div class="single-list-wrapper">
                                                <div class="single-list"><label>Creation Date:</label><span><?php echo get_post_meta(get_the_ID(), 'site_creation_date', true );?></span></div>
                                                <div class="single-list"><label>Client Name:</label><span><?php echo get_post_meta(get_the_ID(), 'clients_name', true );?></span></div>
                                                <div class="single-list">
                                                    <label>Website Name:</label><span><?php echo get_post_meta(get_the_ID(), 'type_of_website', true );?></span>
                                                </div>
                                                <div class="single-list">
                                                    <label>Categories:</label>
                                                    <span>
                                                    <?php
                                                  
                                                    $porttaxo = get_the_terms(get_the_ID(),'portfolio-type');
                                                    if($porttaxo){
                                                        $totalTaxo = count($porttaxo);
                                                    }else{
                                                        $totalTaxo = 0;
                                                        $porttaxo = array();
                                                    }
                                                    $sl = 1; $separator = ',';
                                                    
                                                    foreach ($porttaxo as $singleTaxo):
                                                        if($sl == $totalTaxo){
                                                            $separator = '';
                                                        }
                                                        ?>
                                                        <a class="theme-gradient" href="<?php echo home_url('/').$singleTaxo->taxonomy.'/'.$singleTaxo->slug; ?>"><?php echo $singleTaxo->name.$separator; ?></a>
                                                       <?php
                                                       $sl++;
                                                    endforeach;
                                                 ?>
                                                 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-gallery mt--40 pb--60">
                                <div class="gallery mt--30">
                                    <div class="thumbnail"><img class="w-100" src="<?php echo get_post_meta(get_the_ID(), 'port_single_top_img', true ); ?>" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Portfolio Details area  -->
        <?php get_footer(); ?>

