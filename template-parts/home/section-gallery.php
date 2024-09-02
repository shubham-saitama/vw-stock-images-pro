<?php
/**
 * Template part for displaying Gallery
 *
 * @package vw_stock_images_pro
 */

  $section_hide = get_theme_mod( 'vw_stock_images_pro_gallery_enabledisable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  if( get_theme_mod('vw_stock_images_pro_gallery_bg_color','') ) {
    $gallery_backg = 'background-color:'.esc_attr(get_theme_mod('vw_stock_images_pro_gallery_bg_color','')).';';
  }elseif( get_theme_mod('vw_stock_images_pro_gallery_bg_image','') ){
    $gallery_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_stock_images_pro_gallery_bg_image')).'\');';
  }else{
    $gallery_backg= '';
  }

  $img_bg = get_theme_mod('vw_stock_images_pro_gallery_bg_image_attachment');

?>
<section id="gallery" style="<?php echo esc_attr($gallery_backg);?>" class="<?php echo esc_attr($img_bg); ?> ">
    <div class="container">
      <div class="row">
        <?php if(get_theme_mod('vw_stock_images_pro_gallery_heading')!=''){ ?>
          <h2 class="main-head text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_gallery_heading')); ?></h2>
        <?php } ?>
        <?php if(get_theme_mod('vw_stock_images_pro_gallery_paragraph')!=''){ ?>
          <p class="theme-para mb-0 text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_gallery_paragraph')); ?></p>
        <?php } ?>
        <div class="gallery-main mt-5">
            <?php $number = get_theme_mod('vw_stock_images_pro_gallery_number'); ?>
            <?php for ($i=1; $i<=$number; $i++) { ?>
            <div class="gallery-items magnific-img">
              <a class="image-popup-vertical-fit" href="<?php echo esc_url(get_theme_mod('vw_stock_images_pro_gallery_image'.$i)); ?>">
                <img class="gallery-img" src="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_gallery_image'.$i)); ?>" alt="">
                <i class="fa fa-plus  gallery-icon" aria-hidden="true"></i>
              </a>
            </div>
            <?php } ?>
       </div>
      </div>
    </div>
</section>
