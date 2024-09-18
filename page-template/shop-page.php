<?php
/**
 * Template Name: Shop page
 *
 * @package WordPress
 */

get_header();

// Define query arguments
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'product_images',
    'posts_per_page' => 13,
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $paged,
);

$query = new WP_Query($args);

// Get all categories (taxonomy 'category') for dynamic filter buttons
$categories = get_terms(array(
    'taxonomy' => 'image_cat', // Change this to your custom taxonomy if needed
    'hide_empty' => true,
));

?>


<section id="shop-main" class="shop-page">
    <div class="container-fluid p-0">
        <div class="shop-wrapper">
            <div class="sidebar-filter p-0">
                <?php get_template_part('template-parts/filters/shop-image-filter'); ?>
            </div>

            <div class="shop-right-main">
                <div class="">
                    <div class="col-lg-12 col-md-12 col-12 text-center">
                        <!-- Isotope Filter Buttons -->
                        <div id="filters" class="button-group">
                            <button class="button is-checked filter-button" data-filter="*">All</button>
                            <?php
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
                        <?php  // Pagination
                            echo '<div class="pagination-wrapper">';
                            echo paginate_links(array(
                                'total' => $query->max_num_pages,
                                'current' => $paged,
                                'mid_size' => 2,
                                'prev_text' => __('<i class="fa-solid fa-chevron-left"></i>'),
                                'next_text' => __('<i class="fa-solid fa-chevron-right"></i>'),
                            ));
                            echo '</div>';

                    } else {
                        echo '<p>No products found.</p>';
                    }

                    // Reset post data
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div id="myNewModal" class="modal-new animated fadeInDownBig delay-1000" data-wow-duration="2s">
        <div class="container">
            <!-- Modal content -->

            <div class="row justify-content-between">
                <div class="modal-contents col-lg-12 position-relative">
                    <button class="close-one"><i class="fa-solid fa-xmark"></i>
                        <span class="screen-reader-text"><?php echo esc_html('Close button', 'vw-stock-images-pro'); ?>
                        </span>
                    </button>
                    <div class="modal-data"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Collection Modal -->
    <div id="collectionModal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <div class="modal-data container">
                <!-- Collection content will be loaded here -->
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap Modal -->
<div class="modal fade" id="notificationModal" tabindex="-1" aria-labelledby="notificationModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="notificationModalLabel">Notification</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Content will be injected here by JavaScript -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>