<?php

$section_hide = get_theme_mod('vw_stock_images_pro_pests_problem_enable');
if ('Disable' == $section_hide) {
  return;
}
if (get_theme_mod('vw_stock_images_pro_pests_problem_bgcolor', '')) {
  $pests_back = 'background-color:' . esc_attr(get_theme_mod('vw_stock_images_pro_pests_problem_bgcolor', '')) . ';';
} elseif (get_theme_mod('vw_stock_images_pro_pests_problem_bgimage', '')) {
  $pests_back = 'background-image:url(\'' . esc_url(get_theme_mod('vw_stock_images_pro_pests_problem_bgimage')) . '\')';
} else {
  $pests_back = '';
}
$img_bg = get_theme_mod('vw_stock_images_pro_pests_problem_bgimage_setting');

$args = array(
  'post_type' => 'pests-problem',
  'posts_per_page' => -1
);
$query = new WP_Query($args);


?>
<section id="pests-problem" style="<?php echo esc_attr($pests_back); ?>" class="<?php echo esc_attr($img_bg); ?>">
  <div class="container">
    <div class="section-head-wrap row justify-content-between align-items-center">
      <div class="heading col-lg-12 col-md-12 col-12">
        <h2 class="section-heading text-center">Trending Images & Videos</h2>
        <p class="section-heading-text text-center">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </p>
      </div>
    </div>
    <div class="pop-grid-items mt-5">
      <?php
      // Define the query arguments
      $args = array(
        'post_type' => 'product_images',
        'posts_per_page' => 9, // Number of images to retrieve
        'post_status' => 'publish' // Only get published images
      );

      // Create a new query
      $query = new WP_Query($args);

      // Check if there are any posts
      if ($query->have_posts()) {
      
        while ($query->have_posts()) {
          $query->the_post();

          // Get the post's categories (or custom taxonomy terms) for filtering
          $post_categories = wp_get_post_terms(get_the_ID(), 'image_cat'); // Change 'category' to your custom taxonomy if needed
          $category_classes = '';
          foreach ($post_categories as $post_category) {
            $category_classes .= ' category-' . $post_category->term_id;
          }

          ?>
          <div class="grid-item popular-posts <?php echo esc_attr($category_classes); ?>">
            <?php get_template_part('template-parts/product-image-home'); ?>
          </div>
          <?php
        }
        echo '<div class="grid-item popular-posts">';
        echo '<a href="" class="theme-button"> Explore More <i class="fa-solid fa-arrow-right"></i></a>';
        echo '</div>';

     
        // Restore original post data
        wp_reset_postdata();
      } else {
        echo 'No images found.';
      }
      ?>

    </div>
  </div>

</section>
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