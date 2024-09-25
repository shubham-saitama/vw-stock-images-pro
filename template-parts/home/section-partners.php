<?php
/**
 * Template to show the content of Partnes
 *
 * @package vw_stock_images_pro
 */
$about_section = get_theme_mod( 'vw_stock_images_pro_partners_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
if( get_theme_mod('vw_stock_images_pro_partners_bgcolor','') ) {
  $partner_backg = 'background-color:'.esc_attr(get_theme_mod('vw_stock_images_pro_partners_bgcolor','')).';';
}elseif( get_theme_mod('vw_stock_images_pro_partners_bgimage','') ){
  $partner_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_stock_images_pro_partners_bgimage')).'\')';
}else{
  $partner_backg = '';
}
$img_bg = get_theme_mod('vw_stock_images_pro_partners_bg_image_attachment');
?>
<section id="partner" style="<?php echo esc_attr($partner_backg); ?>" class="<?php echo esc_attr($img_bg); ?>">
	<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row justify-content-center owl-carousel">
           <?php $partner_number = get_theme_mod('vw_stock_images_pro_partners_number');
             for ($i=1; $i <=$partner_number; $i++) { ?>
               <div class="text-center">
                  <div class="our-partner-img">
                    <?php if ( get_theme_mod('vw_stock_images_pro_partners_images'.$i) != "" ) {?>
                        <img src="<?php echo esc_url(get_theme_mod('vw_stock_images_pro_partners_images'.$i)); ?>">
                      <?php } ?>
                  </div>

                 </div>
             <?php } ?>
         </div>
      </div>
    </div>
  </div>
</section>
