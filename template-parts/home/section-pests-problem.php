<?php

$section_hide = get_theme_mod( 'vw_stock_images_pro_pests_problem_enable' );
if ( 'Disable' == $section_hide ) {
 return;
}
if( get_theme_mod('vw_stock_images_pro_pests_problem_bgcolor','') ) {
 $pests_back = 'background-color:'.esc_attr(get_theme_mod('vw_stock_images_pro_pests_problem_bgcolor','')).';';
}elseif( get_theme_mod('vw_stock_images_pro_pests_problem_bgimage','') ){
 $pests_back = 'background-image:url(\''.esc_url(get_theme_mod('vw_stock_images_pro_pests_problem_bgimage')).'\')';
}else{
 $pests_back='';
}
  $img_bg = get_theme_mod('vw_stock_images_pro_pests_problem_bgimage_setting');

  $args = array(
    'post_type' => 'pests-problem',
    'posts_per_page' => -1
);
$query = new WP_Query( $args );


?>
<section id="pests-problem"  style="<?php echo esc_attr( $pests_back ); ?>"  class="<?php echo esc_attr($img_bg); ?>" >
  <div class="container">
    <div class="row">
      <div class="col-lg-10">
          <?php if(get_theme_mod('vw_stock_images_pro_pests_problem_heading')!=''){ ?>
            <h2 class="main-head text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_pests_problem_heading')); ?></h2>
          <?php } ?>
          <?php if(get_theme_mod('vw_stock_images_pro_pests_problem_paragraph')!=''){ ?>
            <p class="theme-para mb-lg-0 mb-sm-0 mb-2 text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_pests_problem_paragraph')); ?></p>
          <?php } ?>
      </div>
      <div class="col-lg-2 text-lg-end text-md-end text-sm-center text-center">
        <a class="theme-btn" href="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_pests_problem_btn_url')); ?>">
        <?php echo esc_html(get_theme_mod('vw_stock_images_pro_pests_problem_btn_text')); ?>
        </a>
      </div>
    </div>
    <div class="owl-carousel">
           <?php
           $i = 1;
           while ( $query->have_posts() ) : $query->the_post(); global $post;

            ?>
             <div class="pests-problem-box m-1">

                <div class="pests-problem-inner text-center">
                     <div class="pests-problem-inner-content d-flex flex-column gap-2">
                       <div class="pests-problem-img">
                         <?php the_post_thumbnail();?>
                       </div>
                       <div class="pests-problem-title">
                         <h4><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
                       </div>
                       <div class="pests-problem-content">
                           <?php
                           $excerpt = get_the_excerpt();
                           echo esc_html(vw_stock_images_pro_string_limit_words($excerpt,('15')));
                           ?>
                       </div>
                    </div>
                  </div>

            </div>
           <?php $i++;endwhile; wp_reset_query(); ?>
        </div>
  </div>

</section>
