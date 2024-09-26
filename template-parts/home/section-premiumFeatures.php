<?php
/**
 * Template part for displaying our premium_featuresd
 *
 * @package vw-stock-images-pro
 */

$section_hide = get_theme_mod('vw_stock_images_pro_radio_premium_features_enable');
if ('Disable' == $section_hide) {
    return;
}
if (get_theme_mod('vw_stock_images_pro_premium_features_bg_color', '')) {
    $premium_features_back = 'background-color:' . esc_attr(get_theme_mod('vw_stock_images_pro_premium_features_bg_color', '')) . ';';
} elseif (get_theme_mod('vw_stock_images_pro_premium_features_image', '')) {
    $premium_features_back = 'background-image:url(\'' . esc_url(get_theme_mod('vw_stock_images_pro_premium_features_image')) . '\')';
} else {
    $premium_features_back = '';
}
$img_bg = get_theme_mod('vw_stock_images_pro_premium_features_image_bg_attachement');

?>

<section class="premium-featuress <?php echo esc_attr($img_bg); ?>" style="<?php echo esc_attr($premium_features_back); ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="section-head-wrap row justify-content-between align-items-center">
                <div class="heading col-lg-12 col-md-12 col-12">
                    <h2 class="section-heading text-center">
                        <?php echo get_theme_mod('vw_stock_images_pro_premium_features_sec_heading'); ?></h2>
                    <p class="section-heading-text text-center">
                        <?php echo get_theme_mod('vw_stock_images_pro_premium_features_sec_heading_text'); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-between mt-5">
            <?php for ($i = 1; $i <= 4; $i++) {
                ?>
                <div class="feature-card col-lg-3 col-md-3 col-6">
                    <div class="feature-img-wrap">
                        <img src="<?php echo get_theme_mod('vw_stock_images_pro_premium_features_sec_image' . $i); ?>"
                            alt="Feature Image">
                    </div>
                    <h4 class=""><?php echo get_theme_mod('vw_stock_images_pro_premium_features_sec_feature_title_' . $i); ?></h4>
                    <p class="feature-text "><?php echo get_theme_mod('vw_stock_images_pro_premium_features_sec_feature_desc_' . $i); ?>
                    </p>
                </div>
                <?php
            } ?>
        </div>
    </div>
</section>