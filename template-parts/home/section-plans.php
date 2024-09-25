<?php /** * Template to show the content of Pricing * * 
  * @package vw_stock_images_pro */
$about_section = get_theme_mod('vw_stock_images_pro_radio_our_pricing_enable');
if ('Disable' == $about_section) {
    return;
}
if (get_theme_mod('vw_stock_images_pro_our_pricing_color', '')) {
    $partner_backg = 'background-color:' .
        esc_attr(get_theme_mod('vw_stock_images_pro_our_pricing_color', '')) . ';';
} elseif
(get_theme_mod('vw_stock_images_pro_our_pricing_image', '')) {
    $partner_backg = 'background-image:url(\'' . esc_url(get_theme_mod(' vw_stock_images_pro_our_pricing_image')) . '\'
    )';
} else {
    $partner_backg = '';
}
$img_bg = get_theme_mod('vw_stock_images_pro_our_pricing_image_bg_attachement'); ?>
<section id="plans" style="<?php echo esc_attr($partner_backg); ?>" class="<?php echo esc_attr($img_bg); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="pricing-table">
                    <div class="table-head">
                        <table>
                            <thead>
                                <tr>
                                    <th>Plans Table</th>
                                    <th>Free</th>
                                    <th>Premium</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php for ($i = 1; $i <= 4; $i++) { ?>
                                    <?php
                                    $feature_text = get_theme_mod('vw_home_automation_pro_our_pricing_feature_text_' . $i);
                                    $free_text = get_theme_mod('vw_home_automation_pro_our_pricing_free_text_' . $i);
                                    $premium_text = get_theme_mod('vw_home_automation_pro_our_pricing_premium_text_' . $i);
                                    ?>
                                    <tr>
                                        <?php if (!empty($feature_text)) { ?>
                                            <td><?php echo $feature_text; ?> <a class="table-read-more" href="#">Read More</a>
                                            </td>
                                        <?php } ?>

                                        <?php if (!empty($free_text)) { ?>
                                            <td><?php echo $free_text; ?></td>
                                        <?php } ?>

                                        <?php if (!empty($premium_text)) { ?>
                                            <td><?php echo $premium_text; ?></td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                                <?php for ($i = 1; $i <= 4; $i++) { ?>
                                    <?php
                                    $feature_text = get_theme_mod('vw_home_automation_pro_our_pricing_features_checkbox_text_' . $i);
                                    $free_text = get_theme_mod('vw_home_automation_pro_our_pricing_free_checkbox_text_' . $i);
                                    $premium_text = get_theme_mod('vw_home_automation_pro_our_pricing_premium_text_checkbox_' . $i);
                                    ?>
                                    <tr>
                                        <?php if (!empty($feature_text)) { ?>
                                            <td><?php echo $feature_text; ?> <a class="table-read-more" href="#">Read More</a>
                                            </td>
                                        <?php } ?>

                                        <?php if (!empty($free_text)) { ?>
                                            <td class="text-center"><i class="<?php echo $free_text; ?>"></i></td>
                                        <?php } ?>

                                        <?php if (!empty($premium_text)) { ?>
                                            <td class="text-center"><i class="<?php echo $premium_text; ?>"></i></td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <?php
                // Get all membership levels
                $levels = pmpro_getAllLevels();
                if (!empty($levels)) {
                    // Loop through each level and display its details
                    foreach ($levels as $level) {
                        $levelID = $level->id;
                        $is_bestVal = get_post_meta($levelID, 'best_value', true);
                        ?>
                        <div class="plan-card">
                            <div class="row align-items-center justify-content-between">
                                <div class="plan-right">
                                    <div class="plan-name"><?php echo esc_html($level->name); ?></div>
                                    <div class="plan-price">
                                        <?php echo esc_html(pmpro_formatPrice($level->initial_payment)); ?><span>/Month</span>
                                    </div>
                                    <div class="plan-desc"><?php echo wp_kses_post($level->description); ?></div>
                                </div>
                                <div class="plan-left">
                                    <?php if ($is_bestVal) {
                                        ?>
                                        <div class="isbest">Best Value</div>
                                    <?php } ?>
                                    <?php $checkout_url = pmpro_url('checkout', '?level=' . $level->id);
                                    echo '<a href="' . esc_url($checkout_url) . '" class="pmpro-btn pmpro-btn-primary">Subscribe Now</a>';
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <?php

                } else {
                    echo 'No membership levels found.';
                }
                ?>

            </div>
        </div>
    </div>
</section>