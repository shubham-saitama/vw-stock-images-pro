<?php
/**
 * Template part for displaying our featuresd
 *
 * @package vw-stock-images-pro
 */

$section_hide = get_theme_mod('vw_stock_images_pro_features_enable');
if ('Disable' == $section_hide) {
    return;
}
if (get_theme_mod('vw_stock_images_pro_features_bgcolor', '')) {
    $features_back = 'background-color:' . esc_attr(get_theme_mod('vw_stock_images_pro_features_bgcolor', '')) . ';';
} elseif (get_theme_mod('vw_stock_images_pro_features_bgimage', '')) {
    $features_back = 'background-image:url(\'' . esc_url(get_theme_mod('vw_stock_images_pro_features_bgimage')) . '\')';
} else {
    $features_back = '';
}
$img_bg = get_theme_mod('vw_stock_images_pro_features_bgimage_setting');

?>

<section class="featuress" style="<?php echo esc_attr($features_back); ?>" class="<?php echo esc_attr($img_bg); ?>">
    <div class="container">
        <div class="justify-content-between row">
            <?php for ($i = 1; $i <= 4; $i++) {
                ?>
                <div class="feature-card col-lg-3 col-md-6 col-6 text-center">
                    <div class="feature-img-wrap">
                        <img src="<?php echo get_theme_mod('vw_stock_images_pro_features_image_'.$i); ?>" alt="Feature Image">
                    </div>
                    <h4 class="text-center"><?php echo get_theme_mod('vw_stock_images_pro_features_title_'.$i); ?></h4>
                    <p class="feature-text text-center"><?php echo get_theme_mod('vw_stock_images_pro_features_text_'.$i); ?></p>
                </div>
                <?php
            } ?>
        </div>
    </div>
</section>