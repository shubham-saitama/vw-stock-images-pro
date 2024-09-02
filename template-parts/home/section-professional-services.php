<?php
$services_section = get_theme_mod( 'vw_stock_images_pro_radio_professional_services_enable' );
if ( 'Disable' == $services_section ) {
  return;
}

if( get_theme_mod('vw_stock_images_pro_professional_services_bg_color','') ) {
  $services_backg = 'background-color:'.esc_attr(get_theme_mod('vw_stock_images_pro_professional_services_bg_color','')).';';
}elseif( get_theme_mod('vw_stock_images_pro_professional_services_image','') ){
  $services_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_stock_images_pro_professional_services_image')).'\')';
}else{
  $services_backg = '';
}

$img_bg = get_theme_mod('vw_stock_images_pro_professional_services_image_bg_attachement');


$services_categories = get_theme_mod('vw_stock_images_pro_professional_services_categories');

$terms_tabs_cat = get_terms(array(
  'taxonomy' => 'services-category',
  'slug'     => $services_categories,
  'hide_empty' => false
));

$service_cat = is_array($terms_tabs_cat) ? count($terms_tabs_cat) : 0;

// $all_services_tabs_sub_cat_value = 'services-category';
?>
<section id="professional-services" style="<?php echo esc_attr($services_backg); ?>" class="<?php echo esc_attr($img_bg); ?>">
   <div class="container">
     <div class="row align-items-center">
       <div class="col-lg-8 col-md-7">
           <?php if(get_theme_mod('vw_stock_images_pro_professional_services_heading')!=''){ ?>
             <h2 class="main-head text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_professional_services_heading')); ?></h2>
           <?php } ?>
           <?php if(get_theme_mod('vw_stock_images_pro_professional_services_paragraph')!=''){ ?>
             <p class="theme-para mb-md-2 mb-2 text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_professional_services_paragraph')); ?></p>
           <?php } ?>
       </div>
       <div class="col-lg-4 col-md-5 text-lg-end">
         <ul class="nav nav-pills justify-content-lg-end  justify-content-md-end justify-content-center  gap-2" id="pills-tab" role="tablist" >
             <?php $i=1; foreach ( $terms_tabs_cat as $all_services_tabs_sub_cat_key => $all_services_tabs_sub_cat_value ): ?>
             <li class="nav-item " role="presentation">
              <button
                  class="nav-link text-md-start text-sm-center text-center <?php if($all_services_tabs_sub_cat_key==0){ echo 'active'; } ?>"
                  id="pills-<?php echo esc_attr($i);?>-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-<?php echo esc_attr($i);?>"
                  type="button"
                  role="tab"
                  aria-controls="pills-<?php echo esc_attr($i);?>"
                  aria-selected="false">
                  <?php
                       $name = $all_services_tabs_sub_cat_value->name;
                       echo esc_html( $name );
                     ?>
              </button>
             </li>
             <?php $i++; endforeach; ?>
           </ul>
       </div>
     </div>
     <div class="row">
       <div class="tab-content" id="pills-tabContent">
                 <?php $i=1;
                 $loop_count = $service_cat+1;
                 for ($v=0; $v < $loop_count; $v++) {
                     $args = array(
                         'post_type' => 'services'
                     );

                     if ( $v > 0 ) {
                       $args['tax_query'] = array(
                         array(
                           'taxonomy' => 'services-category',
                           'field' => 'id',
                           'terms' => $terms_tabs_cat[$v-1]->term_id
                         )
                       );
                     }
                     $loop = new WP_Query($args); ?>

                     <div class="tab-pane fade <?php if($v==0){ echo 'active show'; } ?>" id="pills-<?php echo esc_attr($v); ?>" role="tabpanel" aria-labelledby="pills-<?php echo esc_attr($v); ?>-tab">
                         <div class="owl-carousel">
                             <?php while ( $loop->have_posts() ) : $loop->the_post(); global $post; ?>
                               <div class="services-box m-1 d-flex flex-column text-center gap-3">
                                 <div class="services-img-main position-relative">
                                   <?php if(get_post_meta($post->ID,'service-img',true)) { ?>
                                     <img src="<?php echo esc_html(get_post_meta($post->ID,'service-img',true)); ?>" alt="Services Image" >
                                   <?php } ?>
                                     <div class="services-img">
                                       <?php the_post_thumbnail();?>
                                     </div>
                                 </div>
                                   <h4 class="service-title text-center px-lg-3 position-relative">
                                     <a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                                   </h4>
                                   <p class="mb-0  px-lg-3"><?php
                                      $excerpt = get_the_excerpt();
                                      echo esc_html(vw_stock_images_pro_string_limit_words($excerpt,('13')));
                                      ?></p>
                                   <div class="service-view-btn  px-lg-3">
                                      <a class="theme-btn" href="<?php echo the_permalink(); ?>">	<?php echo esc_html(get_post_meta($post->ID,'read-more-text',true)); ?></a>
                                   </div>
                               </div>
                           <?php endwhile; wp_reset_query(); ?>
                       </div>
                     </div>
                   <?php $i++; }  ?>
             </div>
     </div>
   </div>
</section>
