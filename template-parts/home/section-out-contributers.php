<?php
/**
 * Template part for displaying contributer
 *
 * @package vw-stock-images-pro
 */

$section_hide = get_theme_mod('vw_stock_images_pro_contributer_enable');
if ('Disable' == $section_hide) {
  return;
}
if (get_theme_mod('vw_stock_images_pro_contributer_bgcolor', '')) {
  $contributer_back = 'background-color:' . esc_attr(get_theme_mod('vw_stock_images_pro_contributer_bgcolor', '')) . ';';
} elseif (get_theme_mod('vw_stock_images_pro_contributer_bgimage', '')) {
  $contributer_back = 'background-image:url(\'' . esc_url(get_theme_mod('vw_stock_images_pro_contributer_bgimage')) . '\')';
} else {
  $contributer_back = '';
}
$img_bg = get_theme_mod('vw_stock_images_pro_contributer_bgimage_setting');

?>
<section class="contributers <?php echo esc_attr($img_bg); ?>" style="<?php echo esc_attr($contributer_back); ?>">
  <div class="container">
    <div class="row">
      <div class="section-head-wrap row justify-content-between align-items-center">
        <div class="heading col-lg-8 col-md-6 col-12">
          <h2 class="section-heading"><?php echo get_theme_mod('vw_stock_images_pro_contributer_sec_contri_heading'); ?></h2>
          <p class="section-heading-text">
          <?php echo get_theme_mod('vw_stock_images_pro_contributer_sec_contri_heading_text'); ?>
          </p>
        </div>
        <a href="#" class="theme-button"><?php echo get_theme_mod('vw_stock_images_pro_contributer_sec_contri_button'); ?> <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
    <div class="row mt-5">
      <?php
      $managers = get_users(array('role' => 'Administrator'));

      if (!empty($managers)) {
        foreach ($managers as $manager) {
          // User details
          $user_name = $manager->display_name;
          $user_avatar = get_avatar($manager->ID, 100); // 96px size avatar
          $user_location = get_user_meta($manager->ID, 'country', true);

          echo '<div class="user-card col-lg-4 col-md-4 col-12 mb-3">';
          echo '<div class="user-header">';
          echo '<h3>' . esc_html($user_name) . '</h3>';
          echo '<p>' . esc_html($user_location) . '</p>';
          echo '</div>';

          // Query two posts from 'product_images' CPT
          $user_posts = new WP_Query(array(
            'post_type' => 'product_images',
            'posts_per_page' => 2,
            'author' => $manager->ID
          ));

          if ($user_posts->have_posts()) {
            echo '<div class="user-posts">';
            while ($user_posts->have_posts()) {
              $user_posts->the_post();
              echo '<div class="user-post">';
              echo get_the_post_thumbnail();
              echo '</div>';
            }
            echo '<div class="contributer-dp">'.$user_avatar.'</div>';
            echo '</div>';
          }

          wp_reset_postdata();
          echo '</div>';
        }
      } else {
        echo 'No product image managers found.';
      }

      ?>
    </div>
  </div>
</section>