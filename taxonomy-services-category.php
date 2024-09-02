<?php
/**
 * The template for displaying Sevices Category Page.
 *
 *=
 *
 * @package vw-stock-images-pro
 */
get_header();

$background_img = get_theme_mod('vw_stock_images_pro_inner_page_banner_bgimage');
$current_term = get_queried_object();

$term_id = '';
// Check if the current term exists
if ($current_term) {
// Get the term ID
$term_id = $current_term->term_id;
$term_name = $current_term->name;
}
?>
<?php if(get_theme_mod('vw_stock_images_pro_slider_additonal_img_one')!=''){ ?>
<img class="slider-spider-img" src="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_slider_additonal_img_one')); ?>">
<?php } ?>
<div class="title-box banner-img" style="background-image:url(<?php echo esc_url( $background_img); ?>)">
  <div class="banner-page-text container">
    <div class="row">
      <div class="col-lg-5 col-sm-7 col-7 banner-left-col">
        <div class="above_title">
            <h1><?php echo single_term_title(); ?> Service</h1>
            <?php if ( get_theme_mod('vw_stock_images_pro_site_breadcrumb_enable', true) != '' ) { ?>
                  <div class=" bradcrumbs">
                    <?php vw_stock_images_pro_the_breadcrumb(); ?>
                  </div>
              <?php }
              ?>
      </div>
      </div>
      <div class="col-lg-7 col-sm-5 col-5" >

      </div>
    </div>
  </div>
</div>

<section id="services-category-main">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="cat-desc-main d-flex flex-column gap-3">
          <h2 class="main-head text-lg-start text-md-start text-sm-center text-center">
            <?php echo esc_html(get_term_meta($term_id,'serv_cat_heading',true)); ?>
          </h2>
          <p class="theme-para mb-lg-0 mb-sm-0 mb-2 text-lg-start text-md-start text-sm-center text-center">
            <?php echo esc_html(get_term_meta($term_id,'serv_cat_paragraph',true)); ?>
          </p>

          <div class="cat-points">
              <h6 class="mb-3  text-lg-start text-md-start text-sm-center text-center">  <?php echo esc_html(get_term_meta($term_id,'serv_points_heading',true)); ?>  </h6>
            <div class="d-md-flex gap-md-2 gap-sm-2 gap-2 d-sm-flex d-flex align-items-md-center mb-md-3 mb-3">
                <img class="check-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services/check-icon.png"/>
                <p class="mb-0"><?php echo esc_html(get_term_meta($term_id,'serv_points_one',true)); ?></p>
            </div>
            <div class="d-md-flex gap-md-2 gap-sm-2 gap-2 d-sm-flex d-flex align-items-md-center mb-md-3 mb-3">
                <img class="check-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services/check-icon.png"/>
                <p class="mb-0"><?php echo esc_html(get_term_meta($term_id,'serv_points_two',true)); ?></p>
            </div>
            <div class="d-md-flex gap-md-2 gap-sm-2 gap-2 d-sm-flex d-flex align-items-md-center mb-md-3 mb-3">
                <img class="check-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services/check-icon.png"/>
                <p class="mb-0"><?php echo esc_html(get_term_meta($term_id,'serv_points_three',true)); ?></p>
            </div>
            <div class="d-md-flex gap-md-2 gap-sm-2 gap-2 d-sm-flex d-flex align-items-md-center mb-md-3 mb-3">
                <img class="check-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services/check-icon.png"/>
                <p class="mb-0"><?php echo esc_html(get_term_meta($term_id,'serv_points_four',true)); ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="cat-images-main ">
          <?php if(get_term_meta($term_id,'category_image_one',true)) { ?>
            <img class="category-image-one" src="<?php echo esc_html(get_term_meta($term_id,'category_image_one',true)); ?>" >
          <?php } ?>
          <?php if(get_term_meta($term_id,'category_image_two',true)) { ?>
            <img class="category-image-two" src="<?php echo esc_html(get_term_meta($term_id,'category_image_two',true)); ?>" >
          <?php } ?>
        </div>

      </div>
    </div>


  </div>
</section>

<section  id="tab-services-category" style="background:#F1F1F1">
  <div class="container">
    <div class="row align-items-start">

    <div class="col-xl-3 col-md-5 col-lg-4">
        <div class="single-cat-title"><?php echo esc_html($term_name); ?></div>
      <div class="nav flex-column nav-pills" id="services-cat-pills-tab" role="tablist" aria-orientation="vertical">
        <?php
          $args = array(
            'post_type' => 'services',
            'posts_per_page' => 10
          );

          if ($term_id) {
            $args['tax_query'] = array(
              array(
                'taxonomy' => 'services-category',
                'field' => 'id',
                'terms' => $term_id
              )
            );
          }

          $query = new WP_Query( $args );
          $i = 0;
          while ( $query->have_posts() ) : $query->the_post();
            global $post; ?>
            <button class="nav-link <?php echo $i == 0 ? 'active' : ''; ?>"
              id="ser-cat-pills-<?php echo $i; ?>-tab" data-bs-toggle="pill"
              data-bs-target="#ser-cat-pills-<?php echo $i; ?>" type="button" role="tab"
              aria-controls="ser-cat-pills-<?php echo $i; ?>" aria-selected="<?php echo $i == 0 ? 'true' : 'false'; ?>">
              <div class="d-flex gap-lg-4 gap-md-2 align-items-center justify-content-md-start justify-content-center">
                  <div class="single-cat-post-img">
                       <?php the_post_thumbnail();?>
                  </div >
                  <div class="single-cat-post-title">
                      <?php the_title(); ?>
                  </div>
              </div>
            </button>
          <?php $i++; endwhile;
          wp_reset_query();
        ?>
      </div>
    </div>
    <div class="col-xl-9  col-md-7 col-lg-8">
      <div class="tab-content" id="services-cat-pills-tabContent">
        <?php
        $s = 0;
        while ( $query->have_posts() ) : $query->the_post();
          global $post;

          $services_repeater_fields = get_post_meta( get_the_ID() , 'services_repeater_fields', true);
          ?>

          <div class="tab-pane fade <?php echo $s == 0 ? 'show active' : ''; ?>" id="ser-cat-pills-<?php echo $s; ?>" role="tabpanel" aria-labelledby="ser-cat-pills-<?php echo $s; ?>-tab">

            <div class="post-title">
                  <?php the_title(); ?>
            </div>
            <?php the_content();?>
            <div class="row post-extra-content">
              <div class="col-xl-6">
                <?php if(get_post_meta($post->ID,'service-img',true)) { ?>
                  <img src="<?php echo esc_html(get_post_meta($post->ID,'service-img',true)); ?>" alt="Services Image" >
                <?php } ?>
              </div>

              <div class="col-xl-6">
                <h4 class="mb-3"> <?php echo esc_html(get_post_meta($post->ID,'services_inner_title',true)); ?></h4>
                <p class="mb-0"><?php echo esc_html(get_post_meta($post->ID,'services_inner_para',true)); ?></p>
              </div>
            </div>
            <div class="mt-3">
              <?php
                if (is_array($services_repeater_fields)) {
                  foreach ($services_repeater_fields as $key => $services_field) {
                    $field = $services_field['points']; ?>
                      <div class="d-md-flex gap-md-2 gap-sm-2 gap-2 d-sm-flex d-flex align-items-md-center align-items-start mb-md-3 mb-2">
                        <img class="check-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services/check-icon.png"/>
                        <p class="mb-0 text-start"><?php echo $field; ?></p>
                      </div>
                  <?php }
                }
             ?>
            </div>
            <div class="">
              <a class="theme-btn" href="<?php echo esc_html(get_post_meta($post->ID,'get_service_btn_url',true)); ?>"><?php echo esc_html(get_post_meta($post->ID,'get_service_btn',true)); ?></a>
            </div>
          </div>

        <?php $s++; endwhile;
          wp_reset_query(); ?>
      </div>
    </div>

  </div>
  </div>
</section>
<?php get_footer(); ?>
