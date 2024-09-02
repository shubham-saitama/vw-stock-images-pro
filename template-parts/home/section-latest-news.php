<?php
/**
 * Template to show the content of Latest News
 *
 * @package vw_stock_images_pro
 */
$about_section = get_theme_mod( 'vw_stock_images_pro_latest_news_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
if( get_theme_mod('vw_stock_images_pro_latest_news_bgcolor','') ) {
  $latest_backg = 'background-color:'.esc_attr(get_theme_mod('vw_stock_images_pro_latest_news_bgcolor','')).';';
}elseif( get_theme_mod('vw_stock_images_pro_latest_news_bgimage','') ){
  $latest_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_stock_images_pro_latest_news_bgimage')).'\')';
}else{
  $latest_backg = '';
}
$img_bg = get_theme_mod('vw_stock_images_pro_latest_news_bg_image_attachment');
?>
<section id="blog-news" style="<?php echo esc_attr($latest_backg); ?>" class="<?php echo esc_attr($img_bg); ?>">
	<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8">
          <?php if(get_theme_mod('vw_stock_images_pro_latest_news_heading')!=''){ ?>
            <h2 class="main-head text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_latest_news_heading')); ?></h2>
          <?php } ?>
          <?php if(get_theme_mod('vw_stock_images_pro_latest_news_paragraph')!=''){ ?>
            <p class="theme-para  mb-md-0  mb-2 text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_latest_news_paragraph')); ?></p>
          <?php } ?>
      </div>
      <div class="col-lg-4 col-md-4 text-md-end text-center">
        <a class="theme-btn" href="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_latest_news_btn_url')); ?>">
        <?php echo esc_html(get_theme_mod('vw_stock_images_pro_latest_news_btn_text')); ?>
        </a>
      </div>
    </div>


    <div class="owl-carousel mt-3 pt-3">
      <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => -1
        );
        $new = new WP_Query($args);
        $loop_index = 0; $i=1;
           while ( $new->have_posts() ){
            $new->the_post();

            $post_id = get_the_ID();

            $assigned_category = get_the_terms( $post_id, 'category' );

            $assigned_category_name = '';$category_link = '#';
            if (!empty($assigned_category)) {
              $assigned_category_name = $assigned_category[0]->name;
              $category_link = get_category_link( $assigned_category[0]->term_id );
            }

            ?>
            <div class="<?php if($i == 1){ echo 'active';}?>">
              <div class="blog-detail">
                <div class="blog-detail-inner d-flex flex-column gap-3">
                  <div class="blog-img-outer">
                    <?php if (has_post_thumbnail()) { ?>
                      <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title() ?>">
                    <?php } ?>
                  </div>
                  <div class="blog-category">
                    <a href="<?php echo $category_link; ?>"><?php echo wp_get_post_terms(get_the_ID(), 'category')[0]->name;  ?></a>
                  </div>
                  <div class="blog-title">
                      <h3 style="line-height:0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  </div>
                  <div class="d-flex gap-3 justify-content-md-start justify-content-center">
                    <div class="blog-admin position-relative">
                      <p class="mb-0" >By <?php the_author(); ?></p>
                    </div>
                    <div class="post-month-outer">
                      <div class="post-month"><?php echo get_the_date( 'j M , Y' ); ?></div>
                    </div>
                  </div>
                  <div class="blog-content">
                    <?php
                        $excerpt = get_the_excerpt();
                        echo esc_html(vw_stock_images_pro_string_limit_words($excerpt,('33')));
                     ?>
                  </div>
                </div>
              </div>
            </div>
            <?php $i++; }
           wp_reset_query(); ?>
        </div>
	</div>
</section>
