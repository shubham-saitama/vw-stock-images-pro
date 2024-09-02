<?php
/**
   * The Template for displaying Pests Library.
   *
   * @package vw-stock-images-pro
   */
  /**
   * Template Name: FAQ
  */

get_header();
get_template_part('template-parts/banner');

$args = array(
  'post_type' => 'pests-problem',
  'posts_per_page' => -1
);
$query = new WP_Query( $args );

?>
<section id="pests-library">
  <div class="container">
    <div class="row">
      <?php
      $i = 1;
      while ( $query->have_posts() ) : $query->the_post(); global $post;
       ?>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-md-4">
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
        </div>
           <?php $i++;endwhile; wp_reset_query(); ?>
    </div>
  </div>


</section>

<?php get_footer(); ?>
