<?php
$section_hide = get_theme_mod( 'vw_stock_images_pro_counter_offer_enable' );
if ( 'Disable' == $section_hide ) {
 return;
}
if( get_theme_mod('vw_stock_images_pro_counter_offer_bgcolor','') ) {
 $counter_back = 'background-color:'.esc_attr(get_theme_mod('vw_stock_images_pro_counter_offer_bgcolor','')).';';
}elseif( get_theme_mod('vw_stock_images_pro_counter_offer_bgimage','') ){
 $counter_back = 'background-image:url(\''.esc_url(get_theme_mod('vw_stock_images_pro_counter_offer_bgimage')).'\')';
}else{
 $counter_back='';
}
  $img_bg = get_theme_mod('vw_stock_images_pro_counter_offer_bgimage_setting');
 ?>
<section id="counter-offer" style="<?php echo esc_attr( $counter_back ); ?>"  class="<?php echo esc_attr($img_bg); ?>">
  <div class="container">
    <div class="row align-items-center">
    <div class="col-lg-4 position-relative offer-img-main order-lg-1 order-md-1 order-sm-2 order-2">
      <img class="offer-man" src="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_counter_offer_img')); ?>" src="" alt="">
    </div>
    <div class="col-lg-8 order-lg-2 order-md-2 order-sm-1 order-1">
      <div class="counter-offer-inner d-flex d-flex flex-column gap-3 text-md-start text-sm-center text-center">
        <?php if(get_theme_mod('vw_stock_images_pro_counter_offer_heading')!=''){ ?>
          <h2 class="main-head"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_counter_offer_heading')); ?></h2>
        <?php } ?>
        <?php if(get_theme_mod('vw_stock_images_pro_counter_offer_paragraph')!=''){ ?>
          <p class="theme-para mb-0"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_counter_offer_paragraph')); ?></p>
        <?php } ?>
        <div class="d-md-flex d-sm-flex justify-content-md-start  justify-content-ms-start justify-content-center d-block gap-3">
          <div class="counter-btn-main">
            <a class="theme-btn theme-btn-yellow" href="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_counter_offer_sec_btn_url')); ?>">
            <?php echo esc_html(get_theme_mod('vw_stock_images_pro_counter_offer_sec_btn_text')); ?>
            </a>
          </div>
          <div class="">
            <p id="timer" class="countdown2 text-center d-flex  gap-3 justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center  mb-0">
              <?php
              $dateday = get_theme_mod('vw_stock_images_pro_counter_offer_clock_timer_end','December 12, 2025 11:00:00'); ?>
              <input type="hidden" class="date2" value="<?php echo esc_html($dateday); ?>">
           </p>
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>
</section>
