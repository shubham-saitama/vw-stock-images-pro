<?php
/**
 * Template part for displaying Top Bar Content
 *
 * @package vw_stock_images_pro
 */

$about_section = get_theme_mod('vw_stock_images_pro_topbar_enable');
if ('Disable' == $about_section) {
  return;
}

if (get_theme_mod('vw_stock_images_pro_topbar_bgcolor', '')) {
  $topbar_back = 'background-color:' . esc_attr(get_theme_mod('vw_stock_images_pro_topbar_bgcolor', '')) . ';';
} elseif (get_theme_mod('vw_stock_images_pro_topbar_bgimage', '')) {
  $topbar_back = 'background-image:url(\'' . esc_url(get_theme_mod('vw_stock_images_pro_topbar_bgimage')) . '\')';
} else {
  $topbar_back = '';
}
$img_bg = get_theme_mod('vw_stock_images_pro_topbar_bgimage_setting');


?>
<div id="site_top" style="<?php echo esc_attr($topbar_back); ?>" class="<?php echo esc_attr($img_bg); ?>">
  <div class="container">
    <div class="row py-2 align-items-center">
        <p class="text-center p-0">Freshly Baked Delights Daily! Enjoy 10% Off on Your First Order with Code WELCOME10!</p>
    </div>
  </div>
</div>
</div>
