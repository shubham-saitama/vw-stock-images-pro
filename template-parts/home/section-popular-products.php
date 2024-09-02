<?php

$section_hide = get_theme_mod( 'vw_stock_images_pro_popular_products_enable' );
if ( 'Disable' == $section_hide ) {
 return;
}
if( get_theme_mod('vw_stock_images_pro_popular_products_bgcolor','') ) {
 $product_back = 'background-color:'.esc_attr(get_theme_mod('vw_stock_images_pro_popular_products_bgcolor','')).';';
}elseif( get_theme_mod('vw_stock_images_pro_popular_products_bgimage','') ){
 $product_back = 'background-image:url(\''.esc_url(get_theme_mod('vw_stock_images_pro_popular_products_bgimage')).'\')';
}else{
 $product_back='';
}
  $img_bg = get_theme_mod('vw_stock_images_pro_popular_products_bgimage_setting');
?>

<section id="popular-product"  style="<?php echo esc_attr($product_back); ?>" class="<?php echo esc_attr($img_bg); ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-8">
          <?php if(get_theme_mod('vw_stock_images_pro_popular_products_heading')!=''){ ?>
            <h2 class="main-head text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_popular_products_heading')); ?></h2>
          <?php } ?>
          <?php if(get_theme_mod('vw_stock_images_pro_popular_products_paragraph')!=''){ ?>
            <p class="theme-para mb-0 mb-md-0  mb-2 text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_popular_products_paragraph')); ?></p>
          <?php } ?>
      </div>
      <div class="col-lg-2 col-md-4 text-md-end text-center ">
        <a class="theme-btn" href="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_popular_products_btn_url')); ?>">
        <?php echo esc_html(get_theme_mod('vw_stock_images_pro_popular_products_btn_text')); ?>
        </a>
      </div>
    </div>
    <div class="row new-product-main mt-3 pt-3">
        <?php
        $args = array(
          'post_type' => 'product',
           'order' => 'ASC',
          'posts_per_page' => 8
        );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">
            <div class="popular-pro-box d-flex flex-column product-main-wrap">
              <div class="position-relative">
                <div class="pro-img">
                  <div class="content-overlay"></div>
                  <?php the_post_thumbnail();?>
                </div>
                <div class="product-icon d-flex justify-content-center  gap-2">
                    <div class="cart-btn">
                      <?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_add_to_cart( $loop->post, $product ); } ?>
                    </div>
                    <?php if ( class_exists( 'YITH_WCWL' ) ) {  ?>
                        <div class="wishlist_text">
                          <?php echo do_shortcode(get_theme_mod('vw_stock_images_pro_popular_products_add_to_wishlist', '[yith_wcwl_add_to_wishlist]')); ?>
                        </div>
                      <?php } else {
                        echo "Please install and activate YITH WooCommerce Wishlist to add product wishlist";
                      } ?>
                  </div>
              </div>

              <div class="pro-content  text-center">
                <h2 class="product-title">
                  <a href="<?php the_permalink(); ?>">
                  <?php echo get_the_title(); ?>
                  </a>
                </h2>
                <div class="product-content mb-2">
                  <?php //echo the_content(); ?>
                     <p><?php $excerpt = get_the_excerpt(); echo esc_html(vw_stock_images_pro_string_limit_words($excerpt,12)); ?></p>
                </div>
                <div class="d-flex justify-content-center gap-2">
                      <?php echo $product->get_price_html(); ?>
                </div>

              </div>
            </div>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      </div>
  </div>
</section>
