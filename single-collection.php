<?php
get_header();
get_template_part('template-parts/banner');
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">
            <?php
            // Start the Loop.
            while (have_posts()):
                the_post();
                $collection_id = get_the_ID();
                $collection_items = get_post_meta(get_the_ID(), '_collections', true);

                // Ensure $collection_items is an array
                if (!is_array($collection_items)) {
                    $collection_items = array($collection_items);
                }

                // Check if $collection_items is not empty before querying
                if (!empty($collection_items)) {
                    // Query to get product_images posts based on collection_items
                    $args = array(
                        'post_type' => 'product_images',
                        'post__in' => $collection_items, // Filter posts by IDs in the collection
                        'posts_per_page' => -1, // Retrieve all related posts
                    );
                    $query = new WP_Query($args);
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <?php
                            the_title('<h3 class="entry-title pt-5">', '</h3>');
                            ?>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <?php
                            the_content();

                            // Display related product_images
                            if ($query->have_posts()):
                                echo '<div class="grid row py-5">';
                                while ($query->have_posts()):
                                    $query->the_post(); ?>
                                    <div class="grid-item col-lg-4 col-md-6 col-12">
                                        <?php 
                                        // Pass the collection ID to the product-image template part
                                        get_template_part('template-parts/product-image', null, array('collection_id' => $collection_id)); 
                                        ?>
                                    </div>
                                    <?php
                                endwhile;
                                echo '</div>';

                                // Reset Post Data
                                wp_reset_postdata();
                            else:
                                // Optionally display a message if no posts are found
                                echo '<p>No product images found in this collection.</p>';
                            endif;
                            ?>
                        </div><!-- .entry-content -->

                    </article>
                    <?php
                } else {
                    // Optionally display a message if collection_items is empty
                    echo '<p>No items found in this collection.</p>';
                }
            endwhile; // End of the loop.
            ?>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->
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
<!-- Modal HTML (unchanged) -->

<?php get_footer(); ?>
