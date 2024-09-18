<div class="row">
    <div class="product-image col-lg-5">
        <div class="product-image">
            <?php

            // Check if the current product is premium
            $is_premium = get_post_meta($post_id, '_image_type', true);

            if ($is_premium == 'premium') {
                // Generate a watermarked preview
                $original_image_url = get_the_post_thumbnail_url($post_id, 'large');
                $watermarked_image_url = generate_watermarked_image($original_image_url, $post_id);

                if ($watermarked_image_url) {
                    // Display the watermarked image
                    echo '<img src="' . esc_url($watermarked_image_url) . '" alt="' . esc_attr(get_the_title()) . '" />';
                } else {
                    // Fallback to the original image if watermark generation fails
                    echo get_the_post_thumbnail($post_id, 'large');
                }
            } else {
                // Display the original image for non-premium products
                echo get_the_post_thumbnail($post_id, 'large');
            }
            ?>
        </div>
    </div>
    <div class="modal-right col-lg-7">


        <!-- Remove Collection Form -->
        <!-- <form id="remove-collection-form">
            <select name="collection_id">
                <?php
                // // Fetch user's collections and populate the select options
                // $user_collections = get_posts(array(
                //     'post_type' => 'collection',
                //     'author' => get_current_user_id(),
                //     'posts_per_page' => -1
                // ));
                // foreach ($user_collections as $collection) {
                //     echo '<option value="' . $collection->ID . '">' . $collection->post_title . '</option>';
                // }
                ?>
            </select>
            <input type="submit" value="Remove Collection">
        </form> -->

        <form id="add-post-to-collection-form">
            <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
            <!-- Hidden field for current post ID -->

            <label for="post_collection_id">Choose a collection:</label>
            <select name="post_collection_id" id="post_collection_id">
                <option value="">-- Select Collection --</option>
                <?php
                // Fetch user's collections
                $user_collections = get_posts(array(
                    'post_type' => 'collection',
                    'author' => get_current_user_id(),
                    'posts_per_page' => -1
                ));
                foreach ($user_collections as $collection) {
                    echo '<option value="' . $collection->ID . '">' . $collection->post_title . '</option>';
                }
                
                ?>
            </select>

            <input type="submit" value="Add to Collection">
        </form>
        <!-- Add Collection Form -->
        <form id="add-collection-form">
            <input type="text" name="collection_name" placeholder="Collection Name" required>
            <input type="submit" value="Add Collection">
        </form>
    </div>
</div>