<?php
$category_slider_section = get_theme_mod('vw_stock_images_pro_category_slider_enable');
if ('Disable' == $category_slider_section) {
    return;
}

if (get_theme_mod('vw_stock_images_pro_our_category_slider_bg_color', '')) {
    $category_slider_backg = 'background-color:' . esc_attr(get_theme_mod('vw_stock_images_pro_our_category_slider_bg_color', '')) . ';';
} elseif (get_theme_mod('vw_stock_images_pro_our_category_slider_bg_image', '')) {
    $category_slider_backg = 'background-image:url(\'' . esc_url(get_theme_mod('vw_stock_images_pro_our_category_slider_bg_image')) . '\')';
} else {
    $category_slider_backg = '';
}
$img_bg = get_theme_mod('vw_stock_images_pro_our_category_slider_image_bg_attachement');
?>
<section id="category-slider" style="<?php echo esc_attr($category_slider_backg); ?>"
    class="<?php echo esc_attr($img_bg); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 news-col-1 news-content-main p-md-0">
                <div class="category_slider-content text-center">
                    <?php if (get_theme_mod('vw_stock_images_pro_category_slider_heading') != '') { ?>
                        <h2 class="section-heading text-center">
                            <?php echo esc_html(get_theme_mod('vw_stock_images_pro_category_slider_heading')); ?>
                        </h2>
                    <?php } ?>
                    <?php if (get_theme_mod('vw_stock_images_pro_category_slider_heading_text') != '') { ?>
                        <p class="section-heading-text text-center">
                            <?php echo esc_html(get_theme_mod('vw_stock_images_pro_category_slider_heading_text')); ?>
                        </p>
                    <?php } ?>
                </div>
                <div class="cat-slider-outer mt-5">
                    <button class="custom-prev slick-prev"><i class="fa fa-chevron-left"></i></button>
                    <div class="category-slider slick-slider">
                        <?php
                        $categories = get_terms(array(
                            'taxonomy' => 'image_cat',
                            'hide_empty' => true,
                        ));

                        foreach ($categories as $category) {
                            // Get the first post in each category
                            $args = array(
                                'post_type' => 'product_images', // Custom post type
                                'posts_per_page' => 1,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'image_cat',
                                        'field' => 'term_id',
                                        'terms' => $category->term_id,
                                    ),
                                ),
                            );
                            $posts = new WP_Query($args);

                            if ($posts->have_posts()) {
                                while ($posts->have_posts()) {
                                    $posts->the_post();
                                    ?>
                                    <div class="category-card">
                                        <div class="card-image">
                                            <?php if (has_post_thumbnail()) { ?>
                                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                            <?php } ?>
                                        </div>
                                        <div class="card-content">
                                            <h3 class="category-title"><?php echo esc_html($category->name); ?></h3>
                                            <p class="category-description text-center"><?php echo esc_html($category->description); ?></p>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            wp_reset_postdata();
                        }
                        ?>
                    </div>
                    <button class="custom-next slick-next"><i class="fa fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>