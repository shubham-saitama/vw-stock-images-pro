<?php
$team_section = get_theme_mod( 'vw_stock_images_pro_radio_team_enable' );
if ( 'Disable' == $team_section ) {
  return;
}

if( get_theme_mod('vw_stock_images_pro_team_color','') ) {
  $team_backg = 'background-color:'.esc_attr(get_theme_mod('vw_stock_images_pro_team_color','')).';';
}elseif( get_theme_mod('vw_stock_images_pro_team_image','') ){
  $team_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_stock_images_pro_team_image')).'\')';
}else{
  $team_backg = '';
}

$img_bg = get_theme_mod('vw_stock_images_pro_team_image_bg_attachement');

$args = array(
    'post_type' => 'pests-team',
    'posts_per_page' => -1
);
$query = new WP_Query( $args );

 ?>
<section id="professionals-team" style="<?php echo esc_attr($team_backg); ?>" class="<?php echo esc_attr($img_bg); ?>">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-10">
        <?php if(get_theme_mod('vw_stock_images_pro_team_heading')!=''){ ?>
          <h2 class="main-head"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_team_heading')); ?></h2>
        <?php } ?>
        <?php if(get_theme_mod('vw_stock_images_pro_team_paragraph')!=''){ ?>
          <p class="theme-para mb-0"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_team_paragraph')); ?></p>
        <?php } ?>
      </div>
    </div>
    <div class="owl-carousel mt-lg-4">
         <?php
         $i = 1;
         while ( $query->have_posts() ) : $query->the_post(); global $post;
          ?>
            <div class="team-inner text-lg-start text-md-start text-sm-center text-center">
                 <div class="team-inner-content">
                     <div class="service-img position-relative">
                       <?php the_post_thumbnail();?>
                     </div>

                <div class="service-bottom-content">
                  <div class="service-title">
                    <h4 class="text-center"><?php echo the_title(); ?></h4>
                  </div>
                  <h6 class="team-desig text-center">
                    <?php echo esc_html(get_post_meta(get_the_ID(),'team_desig',true)); ?>
                  </h6>

                  <?php
                    // Get the current post ID
                    $post_id = get_the_ID();
                    $title = get_the_title();
                    // Get values for social media fields
                    $team_facebook = get_post_meta($post_id, 'team_facebook', true);
                    $team_instagram = get_post_meta($post_id, 'team_instagram', true);
                    $team_twitter = get_post_meta($post_id, 'team_twitter', true);
                    $team_youtube = get_post_meta($post_id, 'team_youtube', true);

                    ?>
                    <div class="team-social-icon-box-main">
                      <div class="team-social-icon-box d-flex align-items-center justify-content-center gap-2">
                          <?php
                          // Display social media links
                          if ($team_facebook) {
                              echo '<p class="mb-0"><a href="' . esc_url($team_facebook) . '" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></p>';
                          }
                          if ($team_twitter) {
                              echo '<p class="mb-0"><a href="' . esc_url($team_twitter) . '" target="_blank"><i class="fab fa-x-twitter"></i></a></p>';
                          }
                          if ($team_instagram) {
                            echo '<p class="mb-0"><a href="' . esc_url($team_instagram) . '" target="_blank"><i class="fab fa-instagram"></i></a></p>';
                          }
                          if ($team_youtube) {
                              echo '<p class="mb-0"><a href="' . esc_url($team_youtube) . '" target="_blank"><i class="fab fa-youtube"></i></a></p>';
                          }
                          ?>
                      </div>
                    </div>

                </div>
              </div>
            </div>

         <?php $i++;endwhile; wp_reset_query(); ?>
      </div>
  </div>
</section>
