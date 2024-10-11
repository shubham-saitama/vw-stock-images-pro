<?php
/**
 * Template Name:About Us Template
 *
 *
 */

get_header();

if (get_theme_mod('vw_stock_images_pro_about_sec_one_bgcolor', '')) {
  $about_page_back = 'background-color:' . esc_attr(get_theme_mod('vw_stock_images_pro_about_sec_one_bgcolor', '')) . ';';
} elseif (get_theme_mod('vw_stock_images_pro_about_sec_one_bgimage', '')) {
  $about_page_back = 'background-image:url(\'' . esc_url(get_theme_mod('vw_stock_images_pro_about_sec_one_bgimage')) . '\')';
} else {
  $about_page_back = '';
}
$img_bg = get_theme_mod('vw_stock_images_pro_about_sec_one_bg_attachment');

if (get_theme_mod('vw_stock_images_pro_about_team_bgcolor', '')) {
  $about_team_back = 'background-color:' . esc_attr(get_theme_mod('vw_stock_images_pro_about_team_bgcolor', '')) . ';';
} elseif (get_theme_mod('vw_stock_images_pro_about_team_bgimage', '')) {
  $about_team_back = 'background-image:url(\'' . esc_url(get_theme_mod('vw_stock_images_pro_about_team_bgimage')) . '\')';
} else {
  $about_team_back = '';
}
$team_bg = get_theme_mod('vw_stock_images_pro_about_team_bg_attachment');


set_theme_mod('vw_stock_images_pro_about_section_vission_img_one', get_template_directory_uri() . '/assets/images/about-page/vision1.png');
set_theme_mod('vw_stock_images_pro_about_section_vission_img_two', get_template_directory_uri() . '/assets/images/about-page/vision2.png');

?>
<div class="banner-top ">
  <div class="container">
    <div class="row">
      <div class="breadcrumb-holder">
        <?php echo vw_stock_images_pro_the_breadcrumb(); ?>
      </div>
    </div>
  </div>
</div>
<section class="sell-content-main">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12 col-12">
        <h2 class="mb-4">Express The Power Of Your Ideas With VW Stock Images & Videos</h2>
        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.</p>
      </div>
      <div class="col-lg-6 col-md-6 col-12 aboutus-grid">
        <div class="sell-content-grid">
          <div class="gird-first-row">
            <div class="grid-row-left">
              <img src="<?php echo get_theme_mod('vw_stock_images_sell_content_grid_1'); ?>" alt="grid item 1">
            </div>
            <div class="grid-row-right">
              <div class="grid-img-wrap">
                <img src="<?php echo get_theme_mod('vw_stock_images_sell_content_grid_2'); ?>" alt="">
              </div>
              <div class="grid-img-wrap">
                <img src="<?php echo get_theme_mod('vw_stock_images_sell_content_grid_3'); ?>" alt="">
              </div>
            </div>
          </div>
          <div class="grid-second-row">
            <div class="grdi-img-wrap">
              <img src="<?php echo get_theme_mod('vw_stock_images_sell_content_grid_4'); ?>" alt="">
            </div>
            <div class="grdi-img-wrap">
              <img src="<?php echo get_theme_mod('vw_stock_images_sell_content_grid_5'); ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div id="about-page-maine">
  <section id="vission-mission">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <?php if (get_theme_mod('vw_stock_images_pro_about_section_mission_heading') != '') { ?>
            <h5 class=" text-lg-start text-md-start text-sm-center text-center">
              <?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_section_mission_heading')); ?>
            </h5>
          <?php } ?>
          <?php if (get_theme_mod('vw_stock_images_pro_about_section_mission_paragraph') != '') { ?>
            <p class="text-lg-start text-md-start text-sm-center text-center py-3">
              <?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_section_mission_paragraph')); ?>
            </p>
          <?php } ?>
        </div>
        <div class="col-lg-6">
          <?php if (get_theme_mod('vw_stock_images_pro_about_section_story_heading') != '') { ?>
            <h5 class=" text-lg-start text-md-start text-sm-center text-center">
              <?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_section_story_heading')); ?>
            </h5>
          <?php } ?>
          <?php if (get_theme_mod('vw_stock_images_pro_about_section_story_paragraph') != '') { ?>
            <p class="text-lg-start text-md-start text-sm-center text-center py-3">
              <?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_section_story_paragraph')); ?>
            </p>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/home/section-ourFeatures'); ?>
  <?php get_template_part('template-parts/home/section-premiumFeatures'); ?>
  <section class="vision-features">
    <div class="container">
      <div class="row pt-md-3 mt-md-3">
        <div class="col-lg-6">
          <?php if (get_theme_mod('vw_stock_images_pro_about_section_vission_heading') != '') { ?>
            <h5 class=" text-lg-start text-md-start text-sm-center text-center">
              <?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_section_vission_heading')); ?>
            </h5>
          <?php } ?>
          <?php if (get_theme_mod('vw_stock_images_pro_about_section_vission_paragraph') != '') { ?>
            <p class=" text-lg-start text-md-start text-sm-center text-center py-3">
              <?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_section_vission_paragraph')); ?>
            </p>
          <?php } ?>
          <div class="vision-points">
            <?php if (get_theme_mod('vw_stock_images_pro_about_section_vission_point_one') != '') { ?>
              <p class="position-relative ps-4">
                <?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_section_vission_point_one')); ?>
              </p>
            <?php } ?>
            <?php if (get_theme_mod('vw_stock_images_pro_about_section_vission_point_two') != '') { ?>
              <p class="position-relative ps-4">
                <?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_section_vission_point_two')); ?>
              </p>
            <?php } ?>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <?php if (get_theme_mod('vw_stock_images_pro_about_section_vission_img_one') != "") { ?>
                <img src="<?php echo esc_url(get_theme_mod('vw_stock_images_pro_about_section_vission_img_one')); ?>">
              <?php } ?>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <?php if (get_theme_mod('vw_stock_images_pro_about_section_vission_img_two') != "") { ?>
                <img src="<?php echo esc_url(get_theme_mod('vw_stock_images_pro_about_section_vission_img_two')); ?>">
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="our-values">
    <div class="container">
      <div class="row pt-md-3 mt-md-3">
        <div class="col-lg-6">
          <?php if (get_theme_mod('vw_stock_images_pro_about_section_feature_img') != "") { ?>
            <img src="<?php echo esc_url(get_theme_mod('vw_stock_images_pro_about_section_feature_img')); ?>">
          <?php } ?>
        </div>
        <div class="col-lg-6">
          <?php if (get_theme_mod('vw_stock_images_pro_about_section_feature_heading') != '') { ?>
            <h5 class=" text-lg-start text-md-start text-sm-center text-center">
              <?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_section_feature_heading')); ?>
            </h5>
          <?php } ?>
          <?php if (get_theme_mod('vw_stock_images_pro_about_section_feature_paragraph') != '') { ?>
            <p class=" text-lg-start text-md-start text-sm-center text-center py-3">
              <?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_section_feature_paragraph')); ?>
            </p>
          <?php } ?>
          <div class="vision-points">
            <?php if (get_theme_mod('vw_stock_images_pro_about_section_feature_point_one') != '') { ?>
              <p class="position-relative ps-4">
                <?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_section_feature_point_one')); ?>
              </p>
            <?php } ?>
            <?php if (get_theme_mod('vw_stock_images_pro_about_section_feature_point_two') != '') { ?>
              <p class="position-relative ps-4">
                <?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_section_feature_point_two')); ?>
              </p>
            <?php } ?>
          </div>
        </div>
      </div>
  </section>
</div>
<?php get_footer(); ?>