<?php

$section_hide = get_theme_mod( 'vw_stock_images_pro_why_choose_us_enable' );
if ( 'Disable' == $section_hide ) {
 return;
}
if( get_theme_mod('vw_stock_images_pro_why_choose_us_bgcolor','') ) {
 $choose_back = 'background-color:'.esc_attr(get_theme_mod('vw_stock_images_pro_why_choose_us_bgcolor','')).';';
}elseif( get_theme_mod('vw_stock_images_pro_why_choose_us_image','') ){
 $choose_back = 'background-image:url(\''.esc_url(get_theme_mod('vw_stock_images_pro_why_choose_us_image')).'\')';
}else{
 $choose_back='';
}
  $img_bg = get_theme_mod('vw_stock_images_pro_why_choose_us_setting');

  			set_theme_mod( 'vw_stock_images_pro_why_choose_us_bgcolor','#F1F1F1' );
?>
<section id="choose-sec"  style="<?php echo esc_attr( $choose_back ); ?>"  class="<?php echo esc_attr($img_bg); ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 position-relative">
        <div class="choose-beetle">
          <?php if(get_theme_mod('vw_stock_images_pro_why_choose_beetle_img')!=''){ ?>
          <img  src="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_why_choose_beetle_img')); ?>">
          <?php } ?>
        </div>
        <div class="choose-images-main">
          <div class="choose-main-img position-relative" style="z-index:0">
            <?php if ( get_theme_mod('vw_stock_images_pro_why_choose_img_one') != "" ) {?>
              <img class="about-img-one" src="<?php echo esc_url(get_theme_mod('vw_stock_images_pro_why_choose_img_one')); ?>">
            <?php } ?>
          </div>
          <div class="choose-video-main">

            <div class="choose-video-main-inner position-relative">
              <?php if ( get_theme_mod('vw_stock_images_pro_why_choose_img_video_bg_img') != "" ) {?>
                <img class="about-img-two" src="<?php echo esc_url(get_theme_mod('vw_stock_images_pro_why_choose_img_video_bg_img')); ?>">
              <?php } ?>
              <?php if(get_theme_mod('vw_stock_images_pro_why_choose_video_play_icon')!=''){ ?>
                <a data-toggle="modal" href="#chooseVideo" id="videoBtn"><i class="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_why_choose_video_play_icon')); ?>"></i>
                <span class="screen-reader-text"><?php echo esc_html('video button', 'vw-stock-images-pro' ) ; ?></span></a>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="choose-inner d-flex d-flex flex-column gap-3 mt-lg-2 mt-md-4">
          <?php if(get_theme_mod('vw_stock_images_pro_why_choose_heading')!=''){ ?>
            <h2 class="main-head text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_why_choose_heading')); ?></h2>
          <?php } ?>
          <?php if(get_theme_mod('vw_stock_images_pro_why_choose_paragraph')!=''){ ?>
            <p class="theme-para mb-md-0  mb-2 text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_why_choose_paragraph')); ?></p>
          <?php } ?>
          <div class="choose-points">
            <?php
              $bs_choose_no = get_theme_mod("vw_stock_images_pro_why_choose_number");
              for( $j = 1; $j <= $bs_choose_no; $j++ ) {
              ?>
              <div class="choose-content-main text-lg-start text-md-start text-sm-start text-start">
                <div class="d-md-flex gap-md-2 gap-sm-2 gap-2 d-sm-flex d-flex choose-check-icon  align-items-center">
                  <?php if ( get_theme_mod('vw_stock_images_pro_why_choose_icon_img'.$j) != "" ) {?>
                    <img class="choose-icon-img" src="<?php echo esc_url(get_theme_mod('vw_stock_images_pro_why_choose_icon_img'.$j)); ?>">
                  <?php } ?>
                  <?php if(get_theme_mod('vw_stock_images_pro_why_choose_title'.$j)!=''){ ?>
                    <h6 class=""><?php echo esc_html(get_theme_mod('vw_stock_images_pro_why_choose_title'.$j)); ?></h6>
                  <?php } ?>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="chooseVideo" class="modal-new animated fadeInDownBig delay-1000" data-wow-duration="2s">
    <!-- Modal content -->
    <div class="modal-contents">
      <button class="close-one">&times;<span class="screen-reader-text"><?php echo esc_html('Close button', 'vw-rental-vacation-pro' ) ; ?></span></button>
      <?php if( get_theme_mod('vw_rental_vacation_pro_video_box_video_url') != ''){ ?>
          <embed width="100%" height="345" src=" <?php echo (get_theme_mod('vw_rental_vacation_pro_video_box_video_url')); ?>">
        </embed>
      <?php }else{ ?>
        <h3><?php echo esc_html('Add Video Url In Customizer To Display Video Here','vw-rental-vacation-pro'); ?></h3>
      <?php } ?>
    </div>
  </div>
</section>
