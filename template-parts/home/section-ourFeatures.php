<?php
/**
 * Template part for displaying our featuresd
 *
 * @package vw-stock-images-pro
 */

$section_hide = get_theme_mod('vw_stock_images_pro_radio_our_features_enable');
if ('Disable' == $section_hide) {
    return;
}
if (get_theme_mod('vw_stock_images_pro_our_features_bg_color', '')) {
    $features_back = 'background-color:' . esc_attr(get_theme_mod('vw_stock_images_pro_our_features_bg_color', '')) . ';';
} elseif (get_theme_mod('vw_stock_images_pro_our_features_image', '')) {
    $features_back = 'background-image:url(\'' . esc_url(get_theme_mod('vw_stock_images_pro_our_features_image')) . '\')';
} else {
    $features_back = '';
}
$img_bg = get_theme_mod('vw_stock_images_pro_our_features_image_bg_attachement');

?>

<section class="featuress <?php echo esc_attr($img_bg); ?>" style="<?php echo esc_attr($features_back); ?>">
    <div class="container">
        <div class="justify-content-between row">
            <?php for ($i = 1; $i <= 4; $i++) {
                ?>
                <div class="feature-card col-lg-3 col-md-6 col-6 text-center">
                    <div class="feature-img-wrap">
                        <img src="<?php echo get_theme_mod('vw_stock_images_pro_our_features_sec_image'.$i); ?>" alt="Feature Image">
                    </div>
                    <h4 class="text-center"><?php echo get_theme_mod('vw_stock_images_pro_our_features_sec_feature_title_'.$i); ?></h4>
                    <p class="feature-text text-center"><?php echo get_theme_mod('vw_stock_images_pro_our_features_sec_feature_desc_'.$i); ?></p>
                </div>
                <?php
            } ?>
        </div>
    </div>
</section>