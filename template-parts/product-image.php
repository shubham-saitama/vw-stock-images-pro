<?php

$user_id = get_current_user_id();
$post_id = get_the_ID();
// Get the image type (free or premium)
$image_type = get_post_meta($post_id, '_image_type', true);
$author_id = get_post_field('post_author', get_the_ID());
$author_name = get_the_author_meta('display_name', $author_id);
$author_avatar = get_avatar($author_id, 64);

// Single collection 
$collection_id = isset($args['collection_id']) ? $args['collection_id'] : null;

// Get the video URL if the post is in the 'video' category
$video_url = get_post_meta($post_id, '_product_image_video_url', true);
// var_dump($video_url);
$is_video_category = has_term('Videos', 'image_cat', $post_id);
// var_dump($is_video_category);
?>

<div class="product-image" data-post-id="<?php echo $post_id; ?>">
    <div class="post-options">
        <?php if (is_user_logged_in()) {
            add_save_post_buttons($post_id, '');
        } ?>
        <?php render_remove_post_from_collection_button($collection_id, $post_id); ?>
    </div>

    <?php if ($image_type == 'premium') { ?>
        <div class="premium-icon">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/premium.png' ?>" alt="">
        </div>
    <?php } ?>

    <!-- Render the image thumbnail -->
    <a href="<?php the_permalink(); ?>">
        <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail('medium'); // Display the thumbnail linked to the post
        }
        ?>
    </a>

    <?php if ($is_video_category && $video_url) { ?>
        <!-- Render the play video button on top of the featured image -->
        <a href="<?php echo esc_url($video_url); ?>" data-html5lightbox="<?php echo esc_attr('video-' . $post_id); ?>"
            class="play-video-button">
            <i class="fa fa-play" aria-hidden="true"></i>
        </a>
    <?php } ?>

    <div class="product-btns-wrap">
        <div class="author-download">
            <a href="" class="author"><?php echo $author_avatar; ?>
                <div class="name"><?php echo esc_html($author_name); ?></div>
            </a>
        </div>
        <div class="image-download-btn">
            <?php echo add_download_button(''); ?>
        </div>
    </div>
</div>