<?php 
/*=================
** Template Name: Review Form 
===================*/
get_header();

//Get Theme Options
$themeOptions = get_option('_coder_akash_theme_options') ?? NULL;
$formVerificationKey = get_option( 'verification_key') ?? NULL;
$getKey = isset($_GET['form_key']) ? sanitize_text_field($_GET['form_key']) : NULL;

$msg = 'failed';
$singleKey = explode(',',$formVerificationKey);
foreach($singleKey as $key){
    if(($key == $getKey) && ($getKey != NULL) ){
        $msg = 'Success';
    }
}
if($msg == 'Success'):
?>
       <!-- Start Review Form Area  -->
       <div class="main-content">
            <div class="rainbow-contact-area pt--120 mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mb--20">
                            <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                                <h4 class="subtitle "><span class="theme-gradient">Submit Your Review</span></h4>
                                <h2 class="title w-600 mb--20">Your Review, Our Reward.</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row  row--15">
                        <div class="col-lg-12">
                            <form class="contact-form-1 rainbow-dynamic-form" id="review-form" enctypeenctype="multipart/form-data">
                                <label class="testiImagePhoto" for="testiImage">Recomended Image Size 512*512px </label>
                                <div class="form-group d-flex" id="clientsImage">
                                    <label for="testiImage">Your Photo </label>
                                    <input type="file" name="testiImage" id="testiImage" >
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" name="testiName" id="testiName" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" id="testiEmail" name="testiEmail" placeholder="Your Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="testiWebName" id="testiWebName" placeholder="Your Website Name">
                                </div>

                                <div class="form-group">
                                    <input type="text" id="testiWeburl" name="testiWeburl" placeholder="Your Website URL">
                                </div>
                                <div class="form-group">
                                    <select name="testiDesignation" id="testiDesignation">
                                        <option value="" > Your Designation On That Website </option>
                                        <option value="CEO & Founder"> CEO & Founder </option>
                                        <option value="Owner"> Owner </option>
                                        <option value="Employee"> Employee </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <textarea name="reviewMessage" id="reviewMessage" placeholder="Your Opinion About Us"></textarea>
                                </div>

                                <div class="form-group">
                                    <button name="submit" type="submit" id="testiSubmit" class="btn-default btn-large rainbow-btn">
                                        Submit Review
                                    </button>
                                </div>

                                <div id="from-message"></div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Review Form Area  -->
<?php else: ?>
    <div class="container pt--120">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h4 class="subtitle "><span class="theme-gradient h1"> <i class="fa-solid fa-heart-circle-exclamation"></i></span></h4>
                    <p class="title w-600 mb--20 pt-5">You are currently ineligible to write a review. </br> Please Reach Out to Site Administrator for Assistance.</p>
            </div>
        </div>
    </div>
<?php endif; ?>








<?php get_footer(); ?>