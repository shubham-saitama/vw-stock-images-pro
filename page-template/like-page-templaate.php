<?php
get_header();
get_template_part('template-parts/banner');
?>

<div id="primary" class="content-area my-5">
    <main id="main" class="site-main">
        <div class="container">
            <?php
            if (is_user_logged_in()) {
                $user_id = get_current_user_id();
                $saved_posts = get_user_meta($user_id, 'saved_posts', true);

                // Ensure $saved_posts is an array
                if (!is_array($saved_posts)) {
                    $saved_posts = array();
                }

                if (!empty($saved_posts)) {
                    // Query to get saved posts
                    $args = array(
                        'post_type' => 'product_images', // Change to your post type if necessary
                        'post__in' => $saved_posts,
                        'posts_per_page' => -1, // Retrieve all saved posts
                    );
                    $query = new WP_Query($args);

                    if ($query->have_posts()):
                        echo '<div class="grid row">';
                        while ($query->have_posts()):
                            $query->the_post();
                            ?>
                            <div class="grid-item col-lg-4 col-md-6 col-12">
                                <?php
                                // Pass the collection ID to the product-image template part
                                get_template_part('template-parts/product-image');
                                ?>
                            </div>

                            <?php
                        endwhile;
                        echo '</div>';

                        // Reset Post Data
                        wp_reset_postdata();
                    else:
                        echo '<p>No saved posts found.</p>';
                    endif;
                } else {
                    echo '<p>You have no saved posts.</p>';
                }
            } else {
                echo '<p>Please log in to view your saved posts.</p>';
            }
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
<?php
get_footer();
?>
