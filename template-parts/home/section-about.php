<?php
/**
 * Template part for displaying About
 *
 * @package vw-stock-images-pro
 */

$section_hide = get_theme_mod( 'vw_stock_images_pro_about_enable' );
if ( 'Disable' == $section_hide ) {
  return;
}
if( get_theme_mod('vw_stock_images_pro_about_bgcolor','') ) {
 $about_back = 'background-color:'.esc_attr(get_theme_mod('vw_stock_images_pro_about_bgcolor','')).';';
}elseif( get_theme_mod('vw_stock_images_pro_about_bgimage','') ){
 $about_back = 'background-image:url(\''.esc_url(get_theme_mod('vw_stock_images_pro_about_bgimage')).'\')';
}else{
 $about_back='';
}
$img_bg = get_theme_mod('vw_stock_images_pro_about_bgimage_setting');

?>
<section id="about-us" style="<?php echo esc_attr( $about_back ); ?>"  class="<?php echo esc_attr($img_bg); ?>">
  <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="d-flex flex-column gap-4">
              <?php if(get_theme_mod('vw_stock_images_pro_about_heading')!=''){ ?>
                <h2 class="main-head text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_heading')); ?></h2>
              <?php } ?>
              <?php if(get_theme_mod('vw_stock_images_pro_about_paragraph')!=''){ ?>
                <p class="theme-para mb-lg-0 mb-sm-0 mb-2 text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_paragraph')); ?></p>
              <?php } ?>
              <div class="d-lg-flex d-md-flex d-block align-items-center justify-content-lg-start justify-content-md-center justify-sm-start justify-content-center">
                  <div class="flex-shrink-0 text-lg-start text-xl-start text-md-start test-sm-start text-center">
                    <img class="abt-iner-img" src="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_left_img_one')); ?>" src="" alt="">
                  </div>
                  <div class="flex-grow-0 ms-3 text-lg-start text-xl-start text-md-start text-center">
                  <?php if(get_theme_mod('vw_stock_images_pro_about_left_heading_one')!=''){ ?>
                    <h6 class="inner-heading"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_left_heading_one')); ?></h6>
                  <?php } ?>
                    <?php if(get_theme_mod('vw_stock_images_pro_about_left_paragraph_one')!=''){ ?>
                        <p class="inner-para mb-0 "><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_left_paragraph_one')); ?></p>
                    <?php } ?>
                 </div>
               </div>
              <div class="d-lg-flex d-md-flex d-block align-items-center justify-content-lg-start justify-content-md-center justify-sm-start justify-content-center">
                  <div class="flex-shrink-0 text-lg-start text-xl-start text-md-start test-sm-start text-center">
                    <img class="abt-iner-img" src="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_left_img_two')); ?>" src="" alt="">
                  </div>
                  <div class="flex-grow-0 ms-3 text-lg-start text-xl-start text-md-start text-center">
                   <h6 class="inner-heading"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_left_heading_two')); ?></h6>
                    <p class="mb-0 inner-para"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_left_paragraph_two')); ?></p>
                 </div>
             </div>
               <div class="row align-items-center gap-md-0 gap-0 text-md-start text-center about-footer-content">
                 <div class="col-lg-3 col-md-3 col-12 text-lg-start text-xl-start text-md-start test-sm-start text-center about-page-btn">
                   <a class="theme-btn " href="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_left_btn_url')); ?>">
                   <?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_left_btn_text')); ?>
                   </a>
                 </div>
                 <div class="col-lg-5 col-md-5 col-7">
                   <div class="d-lg-flex d-md-flex d-sm-flex d-block align-items-center justify-content-lg-center justify-content-md-center justify-sm-start justify-content-center">
                       <div class="flex-shrink-0 text-lg-start text-xl-start text-md-start test-sm-start text-center">
                         <img class="manager-img" src="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_manager_img')); ?>" src="" alt="">
                       </div>
                       <div class="flex-grow-0 ms-2 text-lg-start text-xl-start text-md-start text-center">
                        <h6><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_manager_name')); ?></h6>
                         <p class="mb-0 "><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_manager_text')); ?></p>
                      </div>
                    </div>
                 </div>
                 <div class="col-lg-4 col-md-4 col-5">
                    <img src="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_manager_sign_img')); ?>" src="" alt="">
                 </div>
               </div>
            </div>
        </div>
        <div class="col-lg-6 position-relative about-right-col" style="padding-left:8%;">
          <div class="about-right-col-inner">
          <div class="about-year">
             <?php if(get_theme_mod('vw_stock_images_pro_about_year_number')!=''){ ?>
                <h4 class=""><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_year_number')); ?></h4>
              <?php } ?>
              <?php if(get_theme_mod('vw_stock_images_pro_about_year_text')!=''){ ?>
                 <p class="mb-0"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_year_text')); ?></p>
              <?php } ?>
          </div>
          <div class="about-images-main">
            <div class="abot-img-one">
              <?php if ( get_theme_mod('vw_stock_images_pro_about_img_one') != "" ) {?>
                <img  src="<?php echo esc_url(get_theme_mod('vw_stock_images_pro_about_img_one')); ?>">
              <?php } ?>
            </div>
            <div class="abot-img-two">
              <?php if ( get_theme_mod('vw_stock_images_pro_about_img_two') != "" ) {?>
                <img  src="<?php echo esc_url(get_theme_mod('vw_stock_images_pro_about_img_two')); ?>">
              <?php } ?>
            </div>
            <div class="abot-img-three">
              <?php if ( get_theme_mod('vw_stock_images_pro_about_img_three') != "" ) {?>
                <img  src="<?php echo esc_url(get_theme_mod('vw_stock_images_pro_about_img_three')); ?>">
              <?php } ?>
            </div>
          </div>
          <div class="d-lg-flex d-md-flex d-flex align-items-center justify-content-lg-center justify-content-md-center justify-sm-start justify-content-center about-contact-main">
              <div class="flex-shrink-0 text-lg-start text-xl-start text-md-start test-sm-start text-center">
              <i class="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_phone_icon')); ?>"></i>
              </div>
              <div class="flex-grow-0 text-lg-start text-xl-start text-md-start text-center">
                <?php if(get_theme_mod('vw_stock_images_pro_about_number')!=''){ ?>
                  <h5 class=""><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_number')); ?></h5>
                <?php } ?>
                <?php if(get_theme_mod('vw_stock_images_pro_about_emergency_number')!=''){ ?>
                  <a class="" href="tel:<?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_emergency_number')); ?>"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_emergency_number')); ?></a>
                <?php } ?>
            </div>
          </div>
        </div>
                  </div>
      </div>
  </div>
</section>
