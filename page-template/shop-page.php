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
                <div class="filter-over-manager">
                    <h6>
                        <div class="filter-icon">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/panel.png' ?>"
                                alt="Panel Icon">
                        </div> Filter
                    </h6>

                    <!-- Licence Filter -->
                    <div class="filter-outer">
                        <div class="filter-head">
                            <div class="filter-icons">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/premium-quality.png' ?>"
                                    alt="Licence">
                            </div>
                            Licence
                            <div class="filter-dropdown">
                                <i class="fa-solid fa-caret-down"></i>
                            </div>
                        </div>
                        <div class="filter-body">
                            <ul class="filter-ul">
                                <li>
                                    <label for="license-all">
                                        <input type="checkbox" id="license-all" value=""
                                            class="category-filter-checkbox" name="licence">
                                        All
                                    </label>
                                </li>
                                <li>
                                    <label for="license-free">
                                        <input type="checkbox" id="license-free" value="free"
                                            class="category-filter-checkbox" name="licence">
                                        Free
                                    </label>
                                </li>
                                <li>
                                    <label for="license-premium">
                                        <input type="checkbox" id="license-premium" value="premium"
                                            class="category-filter-checkbox" name="licence">
                                        Premium
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Asset Type Filter -->
                    <div class="filter-outer">
                        <div class="filter-head">
                            <div class="filter-icons">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/vector.png' ?>"
                                    alt="Asset Type">
                            </div>
                            Asset Type
                            <div class="filter-dropdown">
                                <i class="fa-solid fa-caret-down"></i>
                            </div>
                        </div>
                        <div class="filter-body">
                            <ul class="filter-ul">
                                <li>
                                    <label for="asset-videos">
                                        <input type="checkbox" id="asset-videos" value="videos"
                                            class="category-filter-checkbox" name="image_cat">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/video.png' ?>"
                                            alt="Videos"> Videos
                                    </label>
                                </li>
                                <li>
                                    <label for="asset-vectors">
                                        <input type="checkbox" id="asset-vectors" value="vectors"
                                            class="category-filter-checkbox" name="image_cat">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/maximize.png' ?>"
                                            alt="Vectors"> Vectors
                                    </label>
                                </li>
                                <li>
                                    <label for="asset-photos">
                                        <input type="checkbox" id="asset-photos" value="photos"
                                            class="category-filter-checkbox" name="image_cat">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/photos.png' ?>"
                                            alt="Photos"> Photos
                                    </label>
                                </li>
                                <li>
                                    <label for="asset-icons">
                                        <input type="checkbox" id="asset-icons" value="icons"
                                            class="category-filter-checkbox" name="image_cat">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/icons.png' ?>"
                                            alt="Icons"> Icons
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Orientation Filter -->
                    <div class="filter-outer">
                        <div class="filter-head">
                            <div class="filter-icons">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/maximize.png' ?>"
                                    alt="Orientation">
                            </div>
                            Orientation
                            <div class="filter-dropdown">
                                <i class="fa-solid fa-caret-down"></i>
                            </div>
                        </div>
                        <div class="filter-body">
                            <ul class="filter-ul">
                                <li>
                                    <label for="orientation-square">
                                        <input type="checkbox" id="orientation-square" value="square"
                                            class="category-filter-checkbox" name="orientation">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/square.png' ?>"
                                            alt="Square"> Square
                                    </label>
                                </li>
                                <li>
                                    <label for="orientation-panoramic">
                                        <input type="checkbox" id="orientation-panoramic" value="panoramic"
                                            class="category-filter-checkbox" name="orientation">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/paranomic.png' ?>"
                                            alt="Panoramic"> Panoramic
                                    </label>
                                </li>
                                <li>
                                    <label for="orientation-vertical">
                                        <input type="checkbox" id="orientation-vertical" value="vertical"
                                            class="category-filter-checkbox" name="orientation">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/potrate.png' ?>"
                                            alt="Vertical"> Vertical
                                    </label>
                                </li>
                                <li>
                                    <label for="orientation-horizontal">
                                        <input type="checkbox" id="orientation-horizontal" value="horizontal"
                                            class="category-filter-checkbox" name="orientation">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/square.png' ?>"
                                            alt="Horizontal"> Horizontal
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Colours Filter -->
                    <div class="filter-outer">
                        <div class="filter-head">
                            <div class="filter-icons">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/palette.png' ?>"
                                    alt="Colours">
                            </div>
                            Colours
                            <div class="filter-dropdown">
                                <i class="fa-solid fa-caret-down"></i>
                            </div>
                        </div>
                        <div class="filter-body">
                            <ul class="filter-ul colored">
                                <li>
                                    <label for="color-black">
                                        <input type="checkbox" id="color-black" value="black"
                                            class="category-filter-checkbox" name="color">
                                        <div class="color-box" style="">X</div>
                                    </label>
                                </li>
                                <li>
                                    <label for="color-white">
                                        <input type="checkbox" id="color-white" value="white"
                                            class="category-filter-checkbox" name="color">
                                        <div class="color-box" style=""></div>
                                    </label>
                                </li>
                                <!-- Add more colors similarly -->
                            </ul>
                        </div>
                    </div>

                    <!-- File Type Filter -->
                    <div class="filter-outer">
                        <div class="filter-head">
                            <div class="filter-icons">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/folder.png' ?>"
                                    alt="File Type">
                            </div>
                            File Type
                            <div class="filter-dropdown">
                                <i class="fa-solid fa-caret-down"></i>
                            </div>
                        </div>
                        <div class="filter-body">
                            <ul class="filter-ul">
                                <li>
                                    <label for="filetype-png">
                                        <input type="checkbox" id="filetype-png" value="png"
                                            class="category-filter-checkbox" name="file_type">
                                        PNG
                                    </label>
                                </li>
                                <li>
                                    <label for="filetype-jpg">
                                        <input type="checkbox" id="filetype-jpg" value="jpg"
                                            class="category-filter-checkbox" name="file_type">
                                        JPG
                                    </label>
                                </li>
                                <li>
                                    <label for="filetype-ai">
                                        <input type="checkbox" id="filetype-ai" value="ai"
                                            class="category-filter-checkbox" name="file_type">
                                        AI
                                    </label>
                                </li>
                                <li>
                                    <label for="filetype-svg">
                                        <input type="checkbox" id="filetype-svg" value="svg"
                                            class="category-filter-checkbox" name="file_type">
                                        SVG
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
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