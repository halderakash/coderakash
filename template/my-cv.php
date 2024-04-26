<?php
/*====================
Template Name: CV
======================*/

//Get Theme Options
$themeOptions = get_option('_coder_akash_theme_options') ?? NULL;


get_header();
?>

<div class="cv-heading-area pt--120">
   <div class="container">
    <div class="row">
            <div class="col-lg-12 mb--10">
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h4 class="subtitle "><span class="theme-gradient">Curriculum Vitae</span></h4>
                    <h2 class="title w-600 mb--20"><?php echo isset($themeOptions['cv_pg_section_title']) && $themeOptions['cv_pg_section_title'] !== '' ? esc_html($themeOptions['cv_pg_section_title']) : __('Explore my latest cv','coderakash');?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
            <?php 
            $cvImage_OPT = $themeOptions['cv_images'];
            $cvImages_ids = explode(',',$themeOptions['cv_images']);

            if(!empty($cvImages_ids)):
                foreach($cvImages_ids as $cvImages_id):

            ?>


            <div class="cv-images mt-lg-5 mt-5">
                <img  class="w-100" src="<?php echo wp_get_attachment_url($cvImages_id); ?>" alt="">
            </div>
            <?php
                endforeach;
            endif;
            ?>
            </div>
        </div>
   </div>
</div>
<div class="col-lg-12 text-center mt--30 mb--20"><a target="_blank" download="cv" href="<?php echo isset($themeOptions['cv_pdf_download']['url']) && $themeOptions['cv_pdf_download']['url'] !== '' ? esc_attr($themeOptions['cv_pdf_download']['url']) : esc_attr('#');?>"><button class="view-live-project btn-default btn-small round" ><?php echo isset($themeOptions['header-btn-label']) && $themeOptions['header-btn-label'] !== '' ? esc_html($themeOptions['header-btn-label']) : __('Download CV','coderakash');?> </button></a></div>

<?php get_footer(); ?>



