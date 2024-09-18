<?php get_header();

// Get the search query and taxonomy term
$s = get_search_query();
$taxonomy_term = isset($_GET['taxonomy_term']) ? sanitize_text_field($_GET['taxonomy_term']) : '';

// Define arguments for WP_Query
$args = array(
    's' => $s,
    'post_type' => 'product_images', // Ensure you are querying the correct post type
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1 // Handle pagination
);

// If a taxonomy term is selected, add it to the query
if (!empty($taxonomy_term)) {
    list($taxonomy, $term_slug) = explode(':', $taxonomy_term);

    $args['tax_query'] = array(
        array(
            'taxonomy' => $taxonomy,
            'field' => 'slug',
            'terms' => $term_slug,
        ),
    );
}
// Get all categories (taxonomy 'category') for dynamic filter buttons
$categories = get_terms(array(
    'taxonomy' => 'image_cat', // Change this to your custom taxonomy if needed
    'hide_empty' => true,
));

// Execute the query
$the_query = new WP_Query($args);
?>

<section class="shop-page" id="shop-main">
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
                <?php if ($the_query->have_posts()): ?>
                    <header class="page-header">
                        <h1 class="page-title">
                            <?php
                            /* translators: %s: Search query. */
                            printf(esc_html__('Search Results for: %s', 'textdomain'), '<span>' . esc_html($s) . '</span>');
                            ?>
                        </h1>
                    </header><!-- .page-header -->

                    <div class="row grid">

                        <?php
                        // Start the Loop.
                        while ($the_query->have_posts()):
                            $the_query->the_post();
                            ?>
                            <div class="grid-item col-lg-3 col-md-6 col-12">
                                <?php get_template_part('template-parts/product-image'); ?>
                            </div>
                            <?php
                        endwhile;
                        ?>
                    </div>

                    <!-- Pagination -->
                    <?php
                    echo paginate_links(array(
                        'total' => $the_query->max_num_pages
                    ));
                    ?>

                <?php else: ?>
                    <section class="no-results not-found">
                        <header class="page-header">
                            <h1 class="page-title"><?php esc_html_e('Nothing Found', 'textdomain'); ?></h1>
                        </header><!-- .page-header -->

                        <div class="page-content">
                            <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'textdomain'); ?>
                            </p>
                            <?php get_search_form(); ?>
                        </div><!-- .page-content -->
                    </section><!-- .no-results -->

                <?php endif; ?>

                <?php
                // Reset post data
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </div>
</section>

<!-- Modal templates -->
<div id="myNewModal" class="modal-new animated fadeInDownBig delay-1000" data-wow-duration="2s">
    <div class="container">
        <!-- Modal content -->
        <div class="row justify-content-between">
            <div class="modal-contents col-lg-12 position-relative">
                <button class="close-one"><i class="fa-solid fa-xmark"></i>
                    <span
                        class="screen-reader-text"><?php echo esc_html('Close button', 'vw-stock-images-pro'); ?></span>
                </button>
                <div class="modal-data"></div>
            </div>
        </div>
    </div>
</div>

<div id="collectionModal" class="modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>
        <div class="modal-data container">
            <!-- Collection content will be loaded here -->
        </div>
    </div>
</div>

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

<?php get_footer(); ?>