<?php
$user_id = get_current_user_id();
$post_id = get_the_ID();
// Get the image type (free or premium)
$image_type = get_post_meta($post_id, '_image_type', true);
$author_id = get_post_field('post_author', get_the_ID());
$author_name = get_the_author_meta('display_name', $author_id);
$author_avatar = get_avatar($author_id, 64);

// sinle collection 
$collection_id = isset($args['collection_id']) ? $args['collection_id'] : null;

?>

<div class="product-image" data-post-id="<?php echo $post_id; ?>">
    <div class="author-download">
        <?php echo $author_avatar; ?> <a href="" class="author"><?php echo esc_html($author_name); ?></a>
    </div>
    <div class="post-options">
        <?php add_save_post_buttons($post_id, '') ?>
        <?php render_remove_post_from_collection_button($collection_id, $post_id); ?>
    </div>
    <?php if ($image_type == 'premium') { ?>
        <div class="preimum-icon">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/premium.png' ?>" alt="">
        </div>
    <?php } ?>
    <a href="<?php the_permalink(); ?>">
        <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail('medium'); // Display the thumbnail linked to the post
        }
        ?>
    </a>
    <div class="product-btns-wrap ">
        <div class="image-download-btn">
            <?php
            if (is_user_logged_in()) {
                // Show download button by default
                $download_url = add_query_arg('download_image', $post_id, get_permalink($post_id));
                if ($image_type === 'free') {
                    echo '<a href="' . esc_url($download_url) . '" class="download-button " data-type="free"><i class="fa-solid fa-download"></i> Download</a>';
                } elseif ($image_type === 'premium') {
                    echo '<a href="' . esc_url($download_url) . '" class="download-button" data-type="premium"><i class="fa-solid fa-download"></i> Download</a>';
                }
            } else {
                // Show download button for non-logged-in users with a class to handle modal
                echo '<a href="#" class="download-button" data-type="login"><i class="fa-solid fa-download"></i> Download</a>';
            }
            ?>
        </div>
    </div>
</div>