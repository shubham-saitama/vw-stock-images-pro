<?php

$header_widgets_section = get_theme_mod('vw_stock_images_pro_header_widgets_enable');
if ('Disable' == $header_widgets_section) {
  return;
}
if (get_theme_mod('vw_stock_images_pro_header_widgets_bgcolor', '')) {
  $background_setting = 'background-color:' . esc_attr(get_theme_mod('vw_stock_images_pro_header_widgets_bgcolor', '')) . ';';
} else {
  $background_setting = '';
}
?>

<div id="vw-sticky-menu">
  <div class="container header-inner">
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-3 col-md-3 col-6">
        <div class="vw-logo" id="site-sticky-menu1">
          <?php
          $logo = get_theme_mod('custom_logo');
          if ($logo != '') {
            if (has_custom_logo()) {
              vw_stock_images_pro_the_custom_logo();
            }
          } else { ?>
            <?php if (get_theme_mod('vw_stock_images_pro_display_default_logo', true) != false) { ?>
              <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img
                  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo.png"
                  alt="<?php bloginfo('name'); ?>" /></a>
            <?php } ?>
          <?php } ?>
          <div class="logo-text">
            <?php if (get_theme_mod('vw_stock_images_pro_display_title') != false) { ?>
              <h2><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php esc_attr(bloginfo('name')); ?></a></h2>
            <?php }
            if (get_theme_mod('vw_stock_images_pro_display_tagline') != false) {
              $description = get_bloginfo('description', 'display');
              if ($description || is_customize_preview()): ?>
                <p>
                  <?php echo esc_html($description); ?>
                </p>
              <?php endif;
            }
            ?>
          </div>
        </div>
      </div>
      <div class="menu-wrapper-primary">
        <div class="innermenubox">
          <div class="toggle-nav mobile-menu">
          </div>
          <div class="main-header">
            <div id="mySidenav" class="sidenav">
              <nav id="site-navigation" class="main-navigation">
                <?php
                wp_nav_menu(array(
                  'theme_location' => 'primary',
                  'container_class' => 'menu clearfix',
                  'menu_class' => 'clearfix',
                  'items_wrap' => '<ul id="%1$s" class="%2$s primary_nav">%3$s</ul>',
                  'fallback_cb' => 'wp_page_menu',
                ));
                ?>
              </nav>
            </div>
              </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <?php
        // Define an array of page titles
        $page_titles = array(
          'Membership Account',
          'Collections Page',
          'Liked Page',
          'Membership Levels',
          'Log In' // Ensure this is exactly the page title
        );

        // Initialize an empty array to store the URLs
        $page_urls = array();

        foreach ($page_titles as $title) {
          // Set up the query arguments for each page
          $args = array(
            'post_type' => 'page',
            'title' => $title,
            'posts_per_page' => 1,
          );

          // Get the page based on title
          $pages = get_posts($args);

          if (!empty($pages)) {
            // Save the title as key and URL as value in the array
            $page_urls[$title] = get_permalink($pages[0]->ID);
          } else {
            // If the page is not found, store a placeholder value
            $page_urls[$title] = '#'; // Default fallback if page is not found
          }
        }
        ?>
        <div class="profile-search">
          <div class="profile-search">
            <?php if (is_user_logged_in()):
              $user_id = get_current_user_id();
              $user_avatar = get_avatar($user_id, 100); // 100px size avatar
              ?>
              <div class="profile">
                <a class="border-right" href="<?php echo esc_url($page_urls['Membership Levels']); ?>">
                  Pricing
                </a>
                <div class="user-profile">
                  <?php echo $user_avatar; ?>
                  <div class="user-menu-modal">
                    <ul>
                      <li><a href="<?php echo esc_url($page_urls['Membership Account']); ?>"><i
                            class="fa-regular fa-user"></i> Profile</a></li>
                      <li><a href="<?php echo esc_url($page_urls['Liked Page']); ?>"><i class="fa-regular fa-heart"></i>
                          Favorites</a></li>
                      <li><a href="<?php echo esc_url($page_urls['Collections Page']); ?>"><i
                            class="fa-regular fa-folder"></i> Collections</a></li>
                      <li><a href="<?php echo esc_url(wp_logout_url(home_url())); ?>"><i
                            class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            <?php else: ?>
              <div class="login">
                <a href="<?php echo isset($page_urls['Log In']) ? esc_url($page_urls['Log In']) : '#'; ?>">Login</a>
              </div>
              <div class="sign-in">
                <a href="<?php echo esc_url(wp_registration_url()); ?>">Sign In</a>
              </div>
            <?php endif; ?>
          </div>
          <div class="menu" id="menu-toggleBtn"><i class="<?php echo get_theme_mod('vw_stock_images_pro_res_open_menu_icon'); ?>"></i></div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<span class="d-none" id="menu-width"><?php echo esc_html($menu_width); ?></span>