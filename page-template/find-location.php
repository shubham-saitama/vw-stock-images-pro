<?php



/**
  * The Template for displaying Find Location
  *
  * @package vw-stock-images-pro
  */
 /**
  * Template Name: Find Location
 */

get_header();
get_template_part('template-parts/banner');
set_theme_mod( 'vw_stock_images_pro_location_latitude', '28.8027594' );
set_theme_mod( 'vw_stock_images_pro_location_longitude', '-105.9808615' );
 ?>

<section id="find-location">
  <div class="container">
    <div class="row mb-3">
      <div class="col-md-12">
        <div class="location-map pt-2">
          <?php do_action('vw_stock_images_pro_before_map'); ?>
            <section class="google-map text-center p-0" id="map">
              <?php if ( get_theme_mod('vw_stock_images_pro_location_latitude',true) != "" && get_theme_mod('vw_stock_images_pro_location_longitude',true) != "" ) {?>
                <embed style="border-radius: 20px;" width="100%" height="570" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo esc_attr(get_theme_mod('vw_stock_images_pro_location_latitude')); ?>,<?php echo esc_attr(get_theme_mod('vw_stock_images_pro_location_longitude')); ?>&hl=es;z=14&amp;output=embed"></embed>
              <?php }?>
            </section>
          <?php do_action('vw_stock_images_pro_after_map'); ?>
        </div>
      </div>
    </div>
    <div class="row">
        <?php
          $location_number = get_theme_mod("vw_stock_images_pro_location_number");
          for( $j = 1; $j <= $location_number; $j++ ) {
          ?>
          <div class="col-lg-6 text-lg-start text-md-start text-sm-center text-center mb-3">
            <div class="location-box d-md-flex d-sm-flex d-block align-items-center">
              <div class="d-flex flex-column gap-1">
                <?php if(get_theme_mod('vw_stock_images_pro_location_name'.$j)!=''){ ?>
                  <h4 class=""><?php echo esc_html(get_theme_mod('vw_stock_images_pro_location_name'.$j)); ?></h4>
                <?php } ?>
                <?php if(get_theme_mod('vw_stock_images_pro_location_address'.$j)!=''){ ?>
                  <a class="location-address" target="_blank"  href="https://maps.google.com/?q=58250<?php  esc_html(get_theme_mod('vw_stock_images_pro_location_address'.$j)); ?>"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_location_address'.$j)); ?></a>
                <?php } ?>
                <?php if(get_theme_mod('vw_stock_images_pro_location_number'.$j)!=''){ ?>
                  <a class="location-number" href="tel:<?php esc_html(get_theme_mod('vw_stock_images_pro_location_number'.$j)); ?>"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_location_number'.$j)); ?></a>
                <?php } ?>
              </div>
              <div class="">
                <a class="theme-btn" target="_blank"  href="https://maps.google.com/?q=58250<?php  esc_html(get_theme_mod('vw_stock_images_pro_location_address'.$j)); ?>"><?php  echo esc_html(get_theme_mod('vw_stock_images_pro_location_find_now_btn'.$j));  ?></a>
              </div>
            </div>
          </div>
        <?php } ?>
    </div>
  </div>
</section>



<?php get_footer(); ?>
