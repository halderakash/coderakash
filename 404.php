 <?php get_header(); ?> 
  <!-- Start Error-Area Area  -->
  <div class="error-area pt--200 pb--100 ptb_sm--60 ptb_md--80">
            <div class="container">
                <div class="row align-item-center">
                    <div class="col-lg-12">
                        <div class="error-inner">
                            <h1>404</h1>
                            <h2 class="title">Something’s not right.</h2>
                            <p class="description"> By injectedeed eedhumour, or randomised words which don't look even
                                .</p>
                            <form action="<?php echo home_url(); ?>" class="blog-search" methos="GET" id="searchform">
                                <input type="text" placeholder="Search Here..." name="s" id="s"><button type="submit" class="search-button">
                                    <i class="feather-search"></i>
                                </button></form>
                            <div class="view-more-button"><a class="btn-default" href="<?php echo home_url(); ?>">Go Back Home</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Error-Area Area  -->
<?php get_footer(); ?> 