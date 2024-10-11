<?php
$args = array(
    'p' => $post_id,
    'post_type' => 'product_images',
    'post_status' => 'publish',
);

$query = new WP_Query($args);
// Check if the post exists
if ($query->have_posts()):
    while ($query->have_posts()):
        $query->the_post();
        // Display content
        // Get the image type (free or premium)
        $image_type = get_post_meta($post_id, '_image_type', true);
        // Get the author of the image
        $author_id = get_post_field('post_author', get_the_ID());
        $author_name = get_the_author_meta('display_name', $author_id);
        $author_avatar = get_avatar($author_id, 64); // 64 is the size in pixels

        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="entry-content">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-6 col-12">
                        <div class="product-image">
                            <?php
                            // Check if the current product is premium
                            $is_premium = get_post_meta(get_the_ID(), '_image_type', true);
                            if ($is_premium == 'premium') {
                                // Generate a watermarked preview
                                $original_image = get_the_post_thumbnail_url(get_the_ID(), 'large');
                                $watermarked_image = generate_watermarked_image($original_image, get_the_ID());
                                if ($watermarked_image) {
                                    // Display the watermarked image
                                    echo '<img src="' . esc_url($watermarked_image) . '" alt="' . get_the_title() . '" />';
                                } else {
                                    // Fallback to the original image if watermark generation fails
                                    the_post_thumbnail('large');
                                }
                            } else {
                                // Display the original image for non-premium products
                                the_post_thumbnail('large');
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-12">
                        <header class="entry-header">
                            <h3 class="entry-title"><?php the_title(); ?></h3>
                        </header>
                        <div class="image-description">
                            <?php the_content(); ?>
                        </div>
                        <div class="row utility-btn-holder gap-3">
                            <div class="image-download-btn p-0">
                                <?php
                                echo add_download_button('');
                                ?>
                            </div>
                            <?php
                            if (is_user_logged_in()) {
                                add_save_post_buttons($post_id, 'main-post-button');
                            }
                            ?>

                            <a href="#" class="collection-btn" data-post-id="<?php echo $post_id; ?>"><i
                                    class="fa-solid fa-bookmark"></i> Collections</a>
                        </div>
                        <div class="file-info">
                            <?php
                            $thumbnail_id = get_post_thumbnail_id($post_id);
                            $image_meta = wp_get_attachment_metadata($thumbnail_id);
                            $original_width = $image_meta['width'];
                            $original_height = $image_meta['height'];
                            $image_url = wp_get_attachment_url($thumbnail_id);
                            $file_info = pathinfo($image_url);
                            $file_type = $file_info['extension'];
                            // Get the full file path and file size
                            $file_path = get_attached_file($thumbnail_id);
                            $file_size = filesize($file_path);
                            $size_kb = format_size_units($file_size);
                            $views = '';
                            $downloads = get_post_meta(get_the_ID(), '_image_downloads', true);
                            $location = get_post_meta(get_the_ID(), '_product_image_location', true);
                            ?>
                            <div class="info-holder">
                                <span class="attribute-name">File : </span>
                                <span><?php echo $original_width . 'px X ' . $original_height . ' px /' . $file_type; ?> </span>
                            </div>
                            <div class="info-holder">
                                <span class="attribute-name">Licence : </span> <span><?php echo $image_type; ?></span>
                            </div>
                            <div class="info-holder">
                                <span class="attribute-name">Size : </span> <span><?php echo $size_kb; ?></span>
                            </div>
                            <div class="info-holder">
                                <span class="attribute-name">Downloads : </span>
                                <span><?php echo $downloads ? $downloads : '0'; ?></span>
                            </div>
                            <div class="info-holder">
                                <span class="attribute-name">Views : </span> <span><?php echo $views ? $views : '0'; ?></span>
                            </div>
                            <div class="info-holder">
                                <span class="attribute-name">Location : </span>
                                <span><?php echo $location ? $location : 'NA' ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <?php
    endwhile;
else:
    echo 'No posts found template.';
endif;

?>
<div class="shop-right-main">
    <div class="">
        <div class="col-lg-12 col-md-12 col-12 text-center">
            <!-- Isotope Filter Buttons -->
            <div id="filters" class="button-group">
                <h6 class="mt-1">Related Tags:</h6>
                <?php
                // Define query arguments
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'product_images',
                    'posts_per_page' => 12,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'orderby' => 'rand', // This orders posts randomly
                );

                $query = new WP_Query($args);

                // Get all categories (taxonomy 'category') for dynamic filter buttons
                $categories = get_terms(array(
                    'taxonomy' => 'image_cat', // Change this to your custom taxonomy if needed
                    'hide_empty' => true,
                ));

                if ($categories && !is_wp_error($categories)) {
                    foreach ($categories as $category) {
                        // Retrieve the term meta image URL
                        $term_img = get_term_meta($category->term_id, 'image_cat_image', true); // Adjust 'meta_image' to your actual meta key
                
                        // Check if term_img is available
                        $img_html = $term_img ? '<img src="' . esc_url($term_img) . '" alt="' . esc_attr($category->name) . '" />' : '';

                        // Generate button with image and category name
                        echo '<button class="button filter-button" data-filter=".category-' . esc_attr($category->term_id) . '">'
                            . $img_html . esc_html($category->name) .
                            '</button>';
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <div class="">
        <?php

        // Check if the query has posts
        if ($query->have_posts()) { ?>
            <div class="row grid">
                <?php
                while ($query->have_posts()) {
                    $query->the_post();

                    // Get the post's categories (or custom taxonomy terms) for filtering
                    $post_categories = wp_get_post_terms(get_the_ID(), 'image_cat'); // Change 'category' to your custom taxonomy if needed
                    $category_classes = '';
                    foreach ($post_categories as $post_category) {
                        $category_classes .= ' category-' . $post_category->term_id;
                    }

                    ?>
                    <div class="grid-item col-lg-3 col-md-6 col-12 <?php echo esc_attr($category_classes); ?>">
                        <?php get_template_part('template-parts/product-image'); ?>
                    </div>
                    <?php
                } ?>

            </div>
            <?php
        } else {
            echo '<p>No products found.</p>';
        }

        // Reset post data
        wp_reset_postdata();
        ?>
    </div>
</div>