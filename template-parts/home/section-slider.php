<?php
/**
 * Template to show the content of Slider
 *
 * @package vw-stock-images-pro
 */

$section_hide = get_theme_mod('vw_stock_images_pro_slider_enabledisable');
if ('Disable' == $section_hide) { ?>
  <?php
  return;
}
set_theme_mod('vw_stock_images_pro_slider_bgimage', get_template_directory_uri() . '/assets/images/slider/banner-bg.png');
set_theme_mod('vw_stock_images_pro_slider_bgimage_2', get_template_directory_uri() . '/assets/images/slider/form-bg.png');

if (get_theme_mod('vw_stock_images_pro_slider_bgcolor', '')) {
  $slider_back = 'background-color:' . esc_attr(get_theme_mod('vw_stock_images_pro_slider_bgcolor', '')) . ';';
} elseif (get_theme_mod('vw_stock_images_pro_slider_bgimage', '')) {
  $slider_back = 'background-image:url(\'' . esc_url(get_theme_mod('vw_stock_images_pro_slider_bgimage')) . '\')';
} else {
  $slider_back = '';
}
if (get_theme_mod('vw_stock_images_pro_slider_bgcolor_2', '')) {
  $slider_back_2 = 'background-color:' . esc_attr(get_theme_mod('vw_stock_images_pro_slider_bgcolor_2', '')) . ';';
} elseif (get_theme_mod('vw_stock_images_pro_slider_bgimage_2', '')) {
  $slider_back_2 = 'background-image:url(\'' . esc_url(get_theme_mod('vw_stock_images_pro_slider_bgimage_2')) . '\')';
} else {
  $slider_back_2 = '';
}
$img_bg = get_theme_mod('vw_stock_images_pro_slider_bgimage_setting');

?>
<section id="slider" style="<?php echo esc_attr($slider_back); ?>" class="<?php echo $img_bg; ?>">
  <div class="slider-mask-img">
    <div class="container  pt-4 ">
      <div class="row align-items-center slidder-inner-content-row">
        <div class="col-lg-12">
          <div class="slider-left-content  text-lg-center text-md-center text-sm-center text-center"
            style="<?php echo esc_attr($slider_back_2); ?>">
            <?php if (get_theme_mod('vw_stock_images_pro_slider_paragraph') != ''): ?>
              <p class="theme-para text-lg-center text-md-center text-sm-center text-center">
                <?php echo esc_html(get_theme_mod('vw_stock_images_pro_slider_paragraph')); ?>
              </p>
            <?php endif; ?>
            <?php if (get_theme_mod('vw_stock_images_pro_slider_heading') != ''): ?>
              <h1 class="slider-heading text-lg-center text-md-center text-sm-center text-center">
                <?php echo esc_html(get_theme_mod('vw_stock_images_pro_slider_heading')); ?>
              </h1>
            <?php endif; ?>
            <div class="banner-form-wrapper">
              <?php get_template_part('search-form-custom'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>