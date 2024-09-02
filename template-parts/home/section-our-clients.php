<?php
$client_section = get_theme_mod( 'vw_stock_images_pro_radio_our_client_enable' );
if ( 'Disable' == $client_section ) {
  return;
}

if( get_theme_mod('vw_stock_images_pro_our_client_color','') ) {
  $client_backg = 'background-color:'.esc_attr(get_theme_mod('vw_stock_images_pro_our_client_color','')).';';
}elseif( get_theme_mod('vw_stock_images_pro_our_client_image','') ){
  $client_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_stock_images_pro_our_client_image')).'\')';
}else{
  $client_backg = '';
}

$img_bg = get_theme_mod('vw_stock_images_pro_our_client_image_bg_attachement');

global $post;
$args = array(
    'post_type' => 'our-client',
    'posts_per_page' => -1
);
$new = new WP_Query( $args );
set_theme_mod( 'vw_stock_images_pro_our_client_quote_img_color', '#f7f7f7' );
?>

 <section id="our-client" style="<?php echo esc_attr($client_backg); ?>" class="<?php echo esc_attr($img_bg); ?>">
   <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <?php if(get_theme_mod('vw_stock_images_pro_our_client_heading')!=''){ ?>
          <h2 class="main-head text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_our_client_heading')); ?></h2>
        <?php } ?>
        <?php if(get_theme_mod('vw_stock_images_pro_our_client_paragraph')!=''){ ?>
          <p class="theme-para mb-md-0  mb-2 text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_our_client_paragraph')); ?></p>
        <?php } ?>
        <div class="slider slider-nav d-flex">
           <?php  while ( $new->have_posts() ){ $new->the_post();  ?>
             <div class="slider-left-content-main ">
               <div class="test-content my-lg-3 my-my-2 text-md-start text-sm-center text-center">
                 <?php echo get_the_content(); ?>
               </div>
               <div class="row align-items-center">
                 <div class="col-lg-7 col-8">
                   <div class="testi-image-box d-flex gap-4 justify-content-lg-start justify-content-sm-center justify-content-center">
                     <div class="testi-image">
                       <?php if (has_post_thumbnail()){ ?>
                         <img src="<?php the_post_thumbnail_url(); ?>">
                       <?php } ?>
                     </div>
                     <div class="">
                       <h5 class="testi-title"><a ><?php the_title(); ?></a></h5>
                       <div class="testi-desi mb-2"><?php echo esc_html(get_post_meta($post->ID,'client_designation',true)); ?> </div>
                     </div>
                   </div>
                 </div>
                 <div class="col-lg-5 col-4">
                   <svg class="quote-img" xmlns="http://www.w3.org/2000/svg" width="145.667" height="106.593" viewBox="0 0 160.667 122.593">
                     <g id="Quotemarks-right" transform="translate(-13.001 -9.412)" >
                       <path id="Path_79" data-name="Path 79" d="M38.514,9.412A38.515,38.515,0,0,0,36.28,86.376c.35,3.776.087,14.056-9.763,28.355a2.712,2.712,0,0,0,.315,3.458c4.031,4.031,6.522,6.569,8.265,8.345,2.282,2.322,3.323,3.381,4.847,4.765a2.714,2.714,0,0,0,3.6.04C60.713,116.4,79.78,85.544,77.022,47.729,75.4,25.527,59.21,9.412,38.514,9.412Zm3.281,116.172c-.739-.729-1.582-1.587-2.825-2.851-1.51-1.539-3.583-3.649-6.726-6.8,11.954-18.42,9.7-31.541,8.708-33.422a2.811,2.811,0,0,0-2.438-1.495,33.087,33.087,0,0,1,0-66.174c17.771,0,31.689,14,33.1,33.282C74.71,90.654,49.432,118.27,41.794,125.583Z" transform="translate(13)"  fill=<?php echo esc_html(get_theme_mod('vw_stock_images_pro_our_client_quote_img_color')); ?> />
                       <path id="Path_80" data-name="Path 80" d="M112.541,47.728v0c-1.622-22.2-17.819-38.314-38.51-38.314A38.515,38.515,0,0,0,71.8,86.376c.35,3.774.085,14.048-9.768,28.355a2.712,2.712,0,0,0,.315,3.458c4.015,4.015,6.5,6.548,8.244,8.321,2.292,2.337,3.339,3.4,4.871,4.791a2.713,2.713,0,0,0,3.6.034C96.23,116.4,115.3,85.542,112.541,47.728Zm-35.23,77.855c-.745-.734-1.6-1.6-2.849-2.875-1.51-1.537-3.575-3.641-6.7-6.779,11.954-18.423,9.7-31.541,8.713-33.422a2.82,2.82,0,0,0-2.441-1.495,33.087,33.087,0,1,1,0-66.174c17.768,0,31.689,14,33.1,33.284v0C110.228,90.648,84.949,118.27,77.312,125.583Z" transform="translate(60.859)" fill=<?php echo esc_html(get_theme_mod('vw_stock_images_pro_our_client_quote_img_color')); ?> />
                     </g>
                   </svg>
                 </div>

               </div>

             </div>
           <?php } wp_reset_query(); ?>
         </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="slider slider-for">
          <?php while ( $new->have_posts() ){ $new->the_post();  ?>
            <div class="cleint-img">
              <div class="client-img-quote">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="35" viewBox="0 0 64.466 52.761">
                  <defs>
                    <filter id="Path_81" x="0" y="0" width="39.915" height="52.761" filterUnits="userSpaceOnUse">
                      <feOffset dy="3" input="SourceAlpha"/>
                      <feGaussianBlur stdDeviation="3" result="blur"/>
                      <feFlood flood-opacity="0.161"/>
                      <feComposite operator="in" in2="blur"/>
                      <feComposite in="SourceGraphic"/>
                    </filter>
                    <filter id="Path_82" x="24.55" y="0" width="39.916" height="52.761" filterUnits="userSpaceOnUse">
                      <feOffset dy="3" input="SourceAlpha"/>
                      <feGaussianBlur stdDeviation="3" result="blur-2"/>
                      <feFlood flood-opacity="0.161"/>
                      <feComposite operator="in" in2="blur-2"/>
                      <feComposite in="SourceGraphic"/>
                    </filter>
                  </defs>
                  <g id="Quotemarks-right" transform="translate(9 6)">
                    <g transform="matrix(1, 0, 0, 1, -9, -6)" filter="url(#Path_81)">
                      <path id="Path_81-2" data-name="Path 81" d="M10.921,9.412a10.921,10.921,0,0,0-.633,21.823c.1,1.071.025,3.985-2.768,8.04a.769.769,0,0,0,.089.981c1.143,1.143,1.849,1.863,2.344,2.366.647.658.942.959,1.374,1.351a.769.769,0,0,0,1.022.011A29.489,29.489,0,0,0,21.84,20.276C21.381,13.981,16.79,9.412,10.921,9.412Zm.93,32.94c-.21-.207-.449-.45-.8-.809-.428-.437-1.016-1.035-1.907-1.929,3.39-5.223,2.749-8.943,2.469-9.477a.8.8,0,0,0-.691-.424,9.382,9.382,0,0,1,0-18.763c5.039,0,8.985,3.969,9.384,9.437A28.122,28.122,0,0,1,11.851,42.352Z" transform="translate(9 -3.41)" fill="#fff"/>
                    </g>
                    <g transform="matrix(1, 0, 0, 1, -9, -6)" filter="url(#Path_82)">
                      <path id="Path_82-2" data-name="Path 82" d="M57.356,20.276h0C56.9,13.981,52.3,9.412,46.437,9.412A10.921,10.921,0,0,0,45.8,31.235c.1,1.07.024,3.983-2.77,8.04a.769.769,0,0,0,.089.981c1.138,1.138,1.843,1.857,2.338,2.359.65.663.947.965,1.381,1.359a.769.769,0,0,0,1.022.01A29.491,29.491,0,0,0,57.356,20.276ZM47.367,42.352c-.211-.208-.452-.453-.808-.815-.428-.436-1.014-1.032-1.9-1.922,3.39-5.224,2.75-8.943,2.471-9.477a.8.8,0,0,0-.692-.424,9.382,9.382,0,1,1,0-18.763c5.038,0,8.985,3.969,9.385,9.438h0A28.127,28.127,0,0,1,47.367,42.352Z" transform="translate(-1.97 -3.41)" fill="#fff"/>
                    </g>
                  </g>
                </svg>
              </div>

              <?php if(get_post_meta($post->ID,'client-img-one',true)) { ?>
                <img class="h-100 w-100" src="<?php echo esc_html(get_post_meta($post->ID,'client-img-one',true)); ?>" >
              <?php } ?>

            </div>
          <?php } wp_reset_query(); ?>
        </div>
      </div>
    </div>
   </div>
 </section>
