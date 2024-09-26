<?php
$newsletter_section = get_theme_mod('vw_stock_images_pro_radio_newsletter_enable');
if ('Disable' == $newsletter_section) {
    return;
}

if (get_theme_mod('vw_stock_images_pro_our_newsletter_bg_color_one', '')) {
    $newsletter_backg = 'background-color:' . esc_attr(get_theme_mod('vw_stock_images_pro_our_newsletter_bg_color_one', '')) . ';';
} elseif (get_theme_mod('vw_stock_images_pro_our_newsletter_bgimage', '')) {
    $newsletter_backg = 'background-image:url(\'' . esc_url(get_theme_mod('vw_stock_images_pro_our_newsletter_bgimage')) . '\')';
} else {
    $newsletter_backg = '';
}
$img_bg = get_theme_mod('vw_stock_images_pro_our_newsletter_image_bg_attachement');
?>
<section id="our-newsletter" style="<?php echo esc_attr($newsletter_backg); ?>"
    class="<?php echo esc_attr($img_bg); ?>">
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-12 col-md-12 news-col-1 news-content-main p-md-0">
                <div class="newsletter-content text-center">
                    <?php if (get_theme_mod('vw_stock_images_pro_newsletter_section_heading') != '') { ?>
                        <h2 class="main-head text-center">
                            <?php echo esc_html(get_theme_mod('vw_stock_images_pro_newsletter_section_heading')); ?>
                        </h2>
                    <?php } ?>
                    <?php if (get_theme_mod('vw_stock_images_pro_newsletter_section_heading_text') != '') { ?>
                        <p class="theme-para text-center">
                            <?php echo esc_html(get_theme_mod('vw_stock_images_pro_newsletter_section_heading_text')); ?>
                        </p>
                    <?php } ?>
                    <?php echo do_shortcode(get_theme_mod('vw_stock_images_pro_our_newsletter_shortcode')); ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>