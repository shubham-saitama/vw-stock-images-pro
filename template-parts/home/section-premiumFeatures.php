<?php
/**
 * Template part for displaying our premium_featuresd
 *
 * @package vw-stock-images-pro
 */

$section_hide = get_theme_mod('vw_stock_images_pro_premium_features_enable');
if ('Disable' == $section_hide) {
    return;
}
if (get_theme_mod('vw_stock_images_pro_premium_features_bgcolor', '')) {
    $premium_features_back = 'background-color:' . esc_attr(get_theme_mod('vw_stock_images_pro_premium_features_bgcolor', '')) . ';';
} elseif (get_theme_mod('vw_stock_images_pro_premium_features_bgimage', '')) {
    $premium_features_back = 'background-image:url(\'' . esc_url(get_theme_mod('vw_stock_images_pro_premium_features_bgimage')) . '\')';
} else {
    $premium_features_back = '';
}
$img_bg = get_theme_mod('vw_stock_images_pro_premium_features_bgimage_setting');

?>

<section class="premium-featuress" style="<?php echo esc_attr($premium_features_back); ?>"
    class="<?php echo esc_attr($img_bg); ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="section-head-wrap row justify-content-between align-items-center">
                <div class="heading col-lg-12 col-md-12 col-12">
                    <h2 class="section-heading text-center">
                        <?php echo get_theme_mod('vw_stock_images_pro_premium_features_heading'); ?></h2>
                    <p class="section-heading-text text-center">
                        <?php echo get_theme_mod('vw_stock_images_pro_premium_features_heading_text'); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-between mt-5">
            <?php for ($i = 1; $i <= 4; $i++) {
                ?>
                <div class="feature-card col-lg-3 col-md-3 col-6">
                    <div class="feature-img-wrap">
                        <img src="<?php echo get_theme_mod('vw_stock_images_pro_premium_features_image_' . $i); ?>"
                            alt="Feature Image">
                    </div>
                    <h4 class=""><?php echo get_theme_mod('vw_stock_images_pro_premium_features_title_' . $i); ?></h4>
                    <p class="feature-text "><?php echo get_theme_mod('vw_stock_images_pro_premium_features_text_' . $i); ?>
                    </p>
                </div>
                <?php
            } ?>
        </div>
    </div>
</section>