<?php
/**
 * Template part for displaying Design and Earn
 *
 * @package vw-stock-images-pro
 */

$section_hide = get_theme_mod('vw_stock_images_pro_design_earn_enable');
if ('Disable' == $section_hide) {
    return;
}
if (get_theme_mod('vw_stock_images_pro_design_earn_bgcolor', '')) {
    $design_earn_back = 'background-color:' . esc_attr(get_theme_mod('vw_stock_images_pro_design_earn_bgcolor', '')) . ';';
} elseif (get_theme_mod('vw_stock_images_pro_design_earn_bgimage', '')) {
    $design_earn_back = 'background-image:url(\'' . esc_url(get_theme_mod('vw_stock_images_pro_design_earn_bgimage')) . '\')';
} else {
    $design_earn_back = '';
}
$img_bg = get_theme_mod('vw_stock_images_pro_design_earn_bgimage_setting');
?>

<section class="design-earn" style="<?php echo esc_attr($design_earn_back); ?>" class="<?php echo esc_attr($img_bg); ?>">
    <div class="container"> 
        <div class="justify-content-between row">
           <div class="col-lg-6 col-md-6 col-12 design-earn-left">
                <h2><?php echo get_theme_mod('vw_stock_images_pro_design_earn_heading'); ?></h2>
                <p><?php echo get_theme_mod('vw_stock_images_pro_design_earn_heading_text'); ?></p>
                <a href="#" class="design-earn-btn"><?php echo get_theme_mod('vw_stock_images_pro_design_earn_button_text'); ?></a>
           </div>
           <div class="col-lg-4 col-md-6 col-12 design-earn-right">
                <div class="earn-img-wrapper">
                    <img src="<?php echo get_theme_mod('vw_stock_images_pro_design_earn_img'); ?>" alt="Design And Earn Image">
                </div>
           </div>
        </div>
    </div>
</section>