<?php

$section_hide = get_theme_mod('vw_stock_images_pro_designers_fav_enable');
if ('Disable' == $section_hide) {
    return;
}
if (get_theme_mod('vw_stock_images_pro_designers_fav_bgcolor', '')) {
    $designer_fav_sec_back = 'background-color:' . esc_attr(get_theme_mod('vw_stock_images_pro_designers_fav_bgcolor', '')) . ';';
} elseif (get_theme_mod('vw_stock_images_pro_designers_fav_bgimage', '')) {
    $designer_fav_sec_back = 'background-image:url(\'' . esc_url(get_theme_mod('vw_stock_images_pro_designers_fav_bgimage')) . '\')';
} else {
    $designer_fav_sec_back = '';
}
$img_bg = get_theme_mod('vw_stock_images_pro_designers_fav_bgimage_setting');
?>


<section id="designer-fav-sec" style="<?php echo esc_attr($designer_fav_sec_back); ?>"
    class="<?php echo esc_attr($img_bg); ?>">
    <div class="container">
        <div class="row">
            <div class="section-head-wrap row justify-content-between align-items-center">
                <div class="heading col-lg-8 col-md-6 col-12">
                    <h2 class="section-heading"><?php echo get_theme_mod('vw_stock_images_pro_designers_fav_sec_heading'); ?></h2>
                    <p class="section-heading-text">
                        <?php echo get_theme_mod('vw_stock_images_pro_designers_fav_sec_heading_text'); ?>
                    </p>
                </div>
                <a href="#" class="theme-button"><?php echo get_theme_mod('vw_stock_images_pro_designers_fav_sec_button'); ?> <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="mt-lg-5 mt-3">
                <div id="category-grid" class="cat-grid">
                <?php
                // Arguments to get 8 terms from a custom taxonomy
                $args = array(
                    'taxonomy' => 'image_cat', // Replace with your custom taxonomy slug
                    'number' => 8,           // Limit to 8 terms
                    'hide_empty' => false,       // Show terms even if they don't have posts
                );

                // Get the terms
                $terms = get_terms($args);

                // Check if terms exist and are not empty or an error
                if (!is_wp_error($terms) && !empty($terms)) {
                    foreach ($terms as $term) {
                        // Get one post image from each category (term)
                        $post_args = array(
                            'post_type' => 'product_images', // Replace with your post type
                            'posts_per_page' => 1,               // Limit to 1 post
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'image_cat', // Replace with your custom taxonomy
                                    'field' => 'slug',
                                    'terms' => $term->slug, // Filter by term slug
                                ),
                            ),
                        );
                        $term_url = get_term_link($term);

                        // Run the query for one post from this category
                        $query = new WP_Query($post_args);

                        // Check if the post exists
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();

                                // Get the post thumbnail (featured image)
                                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');

                                echo "<div class='fav-card'>";
                                // Display the category name and the image
                                echo '<h3><a href="' . esc_url($term_url) . '">' . esc_html($term->name) . '</a></h3>'; // Display term name as a link
                                if ($thumbnail_url) {
                                    echo '<a href="' . esc_url($term_url) . '"><img src="' . esc_url($thumbnail_url) . '" alt="' . esc_attr(get_the_title()) . '"></a>'; // Display image
                                } else {
                                    echo '<p>No image available</p>'; // Fallback if no image
                                }
                                echo '</div>';
                            }
                        } else {
                            echo '<p>No posts found in ' . esc_html($term->name) . '</p>';
                        }

                        // Reset post data after each query
                        wp_reset_postdata();
                    }
                } else {
                    echo 'No terms found'; // Fallback message if no terms are found
                }

                ?>
            </div>
        </div>
    </div>
</section>