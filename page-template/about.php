<?php
/**
 * Template Name:About Us Template
 *
 *
 */

get_header();
get_template_part('template-parts/banner');

if( get_theme_mod('vw_stock_images_pro_about_sec_one_bgcolor','') ) {
 $about_page_back = 'background-color:'.esc_attr(get_theme_mod('vw_stock_images_pro_about_sec_one_bgcolor','')).';';
}elseif( get_theme_mod('vw_stock_images_pro_about_sec_one_bgimage','') ){
 $about_page_back = 'background-image:url(\''.esc_url(get_theme_mod('vw_stock_images_pro_about_sec_one_bgimage')).'\')';
}else{
 $about_page_back='';
}
$img_bg = get_theme_mod('vw_stock_images_pro_about_sec_one_bg_attachment');

if( get_theme_mod('vw_stock_images_pro_about_team_bgcolor','') ) {
 $about_team_back = 'background-color:'.esc_attr(get_theme_mod('vw_stock_images_pro_about_team_bgcolor','')).';';
}elseif( get_theme_mod('vw_stock_images_pro_about_team_bgimage','') ){
 $about_team_back = 'background-image:url(\''.esc_url(get_theme_mod('vw_stock_images_pro_about_team_bgimage')).'\')';
}else{
 $about_team_back='';
}
$team_bg = get_theme_mod('vw_stock_images_pro_about_team_bg_attachment');


set_theme_mod( 'vw_stock_images_pro_about_section_vission_img_one',get_template_directory_uri().'/assets/images/about-page/vision1.png' );
set_theme_mod( 'vw_stock_images_pro_about_section_vission_img_two',get_template_directory_uri().'/assets/images/about-page/vision2.png' );

?>
<div id="about-page-maine">
<?php  get_template_part('template-parts/home/section-about'); ?>
  <section id="vission-mission">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <?php if(get_theme_mod('vw_stock_images_pro_about_section_mission_heading')!=''){ ?>
            <h5 class=" text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_section_mission_heading')); ?></h5>
          <?php } ?>
          <?php if(get_theme_mod('vw_stock_images_pro_about_section_mission_paragraph')!=''){ ?>
            <p class="text-lg-start text-md-start text-sm-center text-center py-3"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_section_mission_paragraph')); ?></p>
          <?php } ?>
        </div>
        <div class="col-lg-6">
          <?php if(get_theme_mod('vw_stock_images_pro_about_section_story_heading')!=''){ ?>
            <h5 class=" text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_section_story_heading')); ?></h5>
          <?php } ?>
          <?php if(get_theme_mod('vw_stock_images_pro_about_section_story_paragraph')!=''){ ?>
            <p class="text-lg-start text-md-start text-sm-center text-center py-3"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_section_story_paragraph')); ?></p>
          <?php } ?>
        </div>
      </div>
      <div class="row pt-md-3 mt-md-3">
        <div class="col-lg-6">
          <?php if(get_theme_mod('vw_stock_images_pro_about_section_vission_heading')!=''){ ?>
            <h5 class=" text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_section_vission_heading')); ?></h5>
          <?php } ?>
          <?php if(get_theme_mod('vw_stock_images_pro_about_section_vission_paragraph')!=''){ ?>
            <p class=" text-lg-start text-md-start text-sm-center text-center py-3"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_section_vission_paragraph')); ?></p>
          <?php } ?>
          <div class="vision-points">
            <?php if(get_theme_mod('vw_stock_images_pro_about_section_vission_point_one') != ''){ ?>
              <p class="position-relative ps-4"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_section_vission_point_one')); ?></p>
            <?php } ?>
            <?php if(get_theme_mod('vw_stock_images_pro_about_section_vission_point_two') != ''){ ?>
              <p class="position-relative ps-4"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_section_vission_point_two')); ?></p>
            <?php } ?>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <?php if ( get_theme_mod('vw_stock_images_pro_about_section_vission_img_one') != "" ) {?>
                      <img src="<?php echo esc_url(get_theme_mod('vw_stock_images_pro_about_section_vission_img_one')); ?>">
                    <?php } ?>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <?php if ( get_theme_mod('vw_stock_images_pro_about_section_vission_img_two') != "" ) {?>
                  <img src="<?php echo esc_url(get_theme_mod('vw_stock_images_pro_about_section_vission_img_two')); ?>">
                <?php } ?>
              </div>
          </div>
        </div>
      </div>
    </div>
</section>
  <?php  get_template_part('template-parts/home/section-counter'); ?>
  <?php  get_template_part('template-parts/home/section-our-clients'); ?>
  <section id="our-values">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <?php if(get_theme_mod('vw_stock_images_pro_about_section_our_value_heading')!=''){ ?>
          <h5 class=" text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_section_our_value_heading')); ?></h5>
        <?php } ?>
        <?php if(get_theme_mod('vvw_stock_images_pro_about_section_our_value_paragraph')!=''){ ?>
          <p class="text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vvw_stock_images_pro_about_section_our_value_paragraph')); ?></p>
        <?php } ?>
      </div>
      <div class="col-lg-6">
        <?php if(get_theme_mod('vw_stock_images_pro_about_our_resource_heading')!=''){ ?>
          <h5 class=" text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_our_resource_heading')); ?></h5>
        <?php } ?>
        <?php if(get_theme_mod('vw_stock_images_pro_about_our_resource_paragraph')!=''){ ?>
          <p class="text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_our_resource_paragraph')); ?></p>
        <?php } ?>
      </div>
    </div>
    <div class="row pt-md-3 mt-md-3">
      <div class="col-lg-6">
          <?php if ( get_theme_mod('vw_stock_images_pro_about_section_feature_img') != "" ) {?>
            <img src="<?php echo esc_url(get_theme_mod('vw_stock_images_pro_about_section_feature_img')); ?>">
          <?php } ?>
        </div>
      <div class="col-lg-6">
          <?php if(get_theme_mod('vw_stock_images_pro_about_section_feature_heading')!=''){ ?>
            <h5 class=" text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_section_feature_heading')); ?></h5>
          <?php } ?>
          <?php if(get_theme_mod('vw_stock_images_pro_about_section_feature_paragraph')!=''){ ?>
            <p class=" text-lg-start text-md-start text-sm-center text-center py-3"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_section_feature_paragraph')); ?></p>
          <?php } ?>
          <div class="vision-points">
              <?php if(get_theme_mod('vw_stock_images_pro_about_section_feature_point_one') != ''){ ?>
                <p class="position-relative ps-4"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_section_feature_point_one')); ?></p>
              <?php } ?>
              <?php if(get_theme_mod('vw_stock_images_pro_about_section_feature_point_two') != ''){ ?>
                <p class="position-relative ps-4"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_about_section_feature_point_two')); ?></p>
            <?php } ?>
          </div>
      </div>
  </div>
</section>
<?php  get_template_part('template-parts/home/section-gallery'); ?>
</div>
<?php get_footer(); ?>
