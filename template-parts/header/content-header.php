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
    <div class="row align-items-center">
      <div class="col-lg-3 col-md-3 col-12">
        <div class="vw-logo" id="site-sticky-menu1">
          <?php
          $logo = get_theme_mod('custom_logo');
          if ($logo != '') {
            if (has_custom_logo()) {
              vw_stock_images_pro_the_custom_logo();
            }
          } else { ?>
            <?php if (get_theme_mod('vw_stock_images_pro_display_default_logo', true) != false) { ?>
              <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" target="_blank"><img
                  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo.png"
                  alt="<?php bloginfo('name'); ?>" /></a>
            <?php } ?>
          <?php } ?>
          <div class="logo-text">
            <?php if (get_theme_mod('vw_stock_images_pro_display_title') != false) { ?>
              <h2><a href="<?php echo esc_url(home_url('/')); ?>"
                  rel="home"><?php esc_attr(bloginfo('name')); ?></a></h2>
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
      <div class="col-xl-7 col-1">
        <div class="innermenubox">
          <div class="toggle-nav mobile-menu">
            <div role="button" on="tap:sidebar1.toggle" tabindex="0" class="hamburger" id="open_nav"><span
                class="screen-reader-text"><?php echo esc_html('Menu', 'vw-stock-images-pro'); ?></span><i
                class="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_res_open_menu_icon', 'fas fa-bars')); ?>"></i>
            </div>
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
          <amp-sidebar id="sidebar1" layout="nodisplay" side="left">
            <div role="button" aria-label="close sidebar" on="tap:sidebar1.toggle" tabindex="0"
              class="close-sidebar closebtn mobile-menu" id="close_nav"><i
                class="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_res_close_menu_icon', 'fas fa-times')); ?>"></i>
            </div>
            <div id="mySidenav" class="nav sidenav">
              <nav id="site-navigation" class="main-navigation">
                <?php
                wp_nav_menu(array(
                  'theme_location' => 'primary',
                  'container_class' => 'menu clearfix',
                  'menu_class' => 'clearfix',
                  'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                  'fallback_cb' => 'wp_page_menu',
                ));
                ?>
              </nav>
            </div>
          </amp-sidebar>
        </div>
      </div>
      <div class="col-lg-2 col-md-2 col-6">
            <div class="profile-search">
                <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                <a href="#"><i class="fa-solid fa-user"></i></a>
            </div>
      </div>
    </div>
  </div>
</div>
</div>

<span class="d-none" id="menu-width"><?php echo esc_html($menu_width); ?></span>