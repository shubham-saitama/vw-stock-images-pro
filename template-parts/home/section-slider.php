<?php
   /**
    * Template to show the content of Slider
    *
    * @package vw-stock-images-pro
    */

    $section_hide = get_theme_mod( 'vw_stock_images_pro_slider_enabledisable' );
    if ( 'Disable' == $section_hide ) { ?>
    <?php
    return;
    }
    if( get_theme_mod('vw_stock_images_pro_slider_bgcolor','') ) {
      $slider_back = 'background-color:'.esc_attr(get_theme_mod('vw_stock_images_pro_slider_bgcolor','')).';';
    }elseif( get_theme_mod('vw_stock_images_pro_slider_bgimage','') ){
      $slider_back = 'background-image:url(\''.esc_url(get_theme_mod('vw_stock_images_pro_slider_bgimage')).'\')';
    }else{
      $slider_back='';
    }
    $img_bg = get_theme_mod('vw_stock_images_pro_slider_bgimage_setting');

   ?>
  <section id="slider" >
    <div  class="slider-mask-img" style="<?php echo esc_attr($slider_back);?>">
      <img class="slider-bg-image <?php echo esc_attr($img_bg); ?>" style="<?php echo esc_attr($slider_back);?> ">
        <div class="container  pt-4 ">
          <div class="row align-items-center slidder-inner-content-row">
            <div class="col-lg-6">
              <div class="slider-left-content  text-lg-start text-md-start text-sm-center text-center">
                <?php if ( get_theme_mod('vw_stock_images_pro_slider_heading') != ''): ?>
                  <h1 class="slider-heading text-lg-start text-md-start text-sm-center text-center">
                      <?php echo esc_html(get_theme_mod('vw_stock_images_pro_slider_heading')); ?>
                      <span> <?php echo esc_html(get_theme_mod('vw_stock_images_pro_slider_hightlight_heading')); ?></span>
                      <?php echo esc_html(get_theme_mod('vw_stock_images_pro_slider_heading_two')); ?>
                  </h1>
                <?php endif; ?>
                <?php if ( get_theme_mod('vw_stock_images_pro_slider_paragraph') != ''): ?>
                  <p class="theme-para py-lg-3 text-lg-start text-md-start text-sm-center text-center">
                    <?php echo esc_html(get_theme_mod('vw_stock_images_pro_slider_paragraph')); ?>
                  </p>
                <?php endif; ?>
                <a class="theme-btn text-lg-start text-md-start text-sm-center text-center" href="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_slider_btn_url')); ?>">
                <?php echo esc_html(get_theme_mod('vw_stock_images_pro_slider_btn_text')); ?>
                </a>
              </div>
              <!-- <?php if(get_theme_mod('vw_stock_images_pro_slider_additonal_img_one')!=''){ ?>
              <img class="slider-spider-img" src="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_slider_additonal_img_one')); ?>">
              <?php } ?> -->
              <?php if(get_theme_mod('vw_stock_images_pro_slider_additonal_img_two')!=''){ ?>
              <img class="slider-cock-img" src="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_slider_additonal_img_two')); ?>">
              <?php } ?>

            </div>
            <div class="col-lg-6 position-relative">
              <?php if(get_theme_mod('vw_stock_images_pro_slider_right_mosquito_img')!=''){ ?>
              <img class="right-mosquito-img" src="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_slider_right_mosquito_img')); ?>">
              <?php } ?>
              <div class="slider-right-mask-img">
                <?php if(get_theme_mod('vw_stock_images_pro_slider_right_man_img')!=''){ ?>
                <img class="img-man" src="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_slider_right_man_img')); ?>">
                <?php } ?>
                <div class="right-small-img">
                <?php if(get_theme_mod('vw_stock_images_pro_slider_right_beetle_img')!=''){ ?>
                <img  src="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_slider_right_beetle_img')); ?>">
                <?php } ?>
                </div>
              </div>
              <div class="slider-review position-absolute d-flex ">
                <?php if(get_theme_mod('vw_stock_images_pro_slider_right_reviews_img')!=''){ ?>
                <img class="" src="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_slider_right_reviews_img')); ?>">
                <?php } ?>
                <div class="slider-review-content">
                  <?php if ( get_theme_mod('vw_stock_images_pro_right_review_heading') != ''): ?>
                    <h6 class="">
                      <?php echo esc_html(get_theme_mod('vw_stock_images_pro_right_review_heading')); ?>
                    </h6>
                  <?php endif; ?>
                  <?php if ( get_theme_mod('vw_stock_images_pro_right_review_para') != ''): ?>
                    <p class="mb-0">
                      <?php echo esc_html(get_theme_mod('vw_stock_images_pro_right_review_para')); ?>
                    </p>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>

        </div>

  </div>
  <div class="bottom-social-icons">
    <div class="slider-social-icon row align-items-center">
    <div class="col-lg-5 col-sm-5 col-12 social-heading-main">
        <h4 class="slider-social-heading"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_slider_social_icon_heading')); ?></h4>
    </div>
      <div class="slider-social-main col-lg-7 col-sm-7 col-12 d-md-flex gap-md-2 justify-content-between d-sm-block d-block text-sm-center text-center">
        <?php if( get_theme_mod('vw_stock_images_pro_slider_facebook_icon') != '' ){ ?>
          <a class="facebook" href="<?php echo esc_url( get_theme_mod( 'vw_stock_images_pro_slider_facebook_icon_url' ) ); ?>" target="_blank"><i class="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_slider_facebook_icon')); ?> align-middle" aria-hidden="true"></i></a>
        <?php } ?>
        <?php if( get_theme_mod('vw_stock_images_pro_slider_twitter_icon') != '' ){ ?>
          <a class="facebook" href="<?php echo esc_url( get_theme_mod( 'vw_stock_images_pro_slider_twitter_icon_url' ) ); ?>" target="_blank"><i class="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_slider_twitter_icon')); ?> align-middle" aria-hidden="true"></i></a>
        <?php } ?>
        <?php if( get_theme_mod('vw_stock_images_pro_slider_instagram_icon') != '' ){ ?>
          <a class="facebook" href="<?php echo esc_url( get_theme_mod( 'vw_stock_images_pro_slider_instagram_icon_url' ) ); ?>" target="_blank"><i class="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_slider_instagram_icon')); ?> align-middle" aria-hidden="true"></i></a>
        <?php } ?>
        <?php if( get_theme_mod('vw_stock_images_pro_slider_youtube_icon') != '' ){ ?>
          <a class="facebook" href="<?php echo esc_url( get_theme_mod( 'vw_stock_images_pro_slider_youtube_icon_url' ) ); ?>" target="_blank"><i class="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_slider_youtube_icon')); ?> align-middle" aria-hidden="true"></i></a>
        <?php } ?>
        <?php if( get_theme_mod('vw_stock_images_pro_slider_dribble_icon') != '' ){ ?>
          <a class="facebook" href="<?php echo esc_url( get_theme_mod( 'vw_stock_images_pro_slider_dribble_icon_url' ) ); ?>" target="_blank"><i class="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_slider_dribble_icon')); ?> align-middle" aria-hidden="true"></i></a>
        <?php } ?>
      </div>

    </div>
  </div>
  </section>
