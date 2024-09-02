<?php
/**
 * Template Name:Blog with Right Sidebar
 */

get_header();

get_template_part('template-parts/banner'); ?>

<?php do_action('vw_stock_images_pro_before_blog'); ?>

<section id="blog-right-sidebar">
	<div class="container">
	    <div class="middle-align">
		    <div class="row">
				<div class="col-lg-8 col-md-8 content_page">
					<div class="row">
						<?php if ( have_posts() ) : ?>
					      	<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
								$args = array(
								   'paged' => $paged,
								   'category_name' => get_theme_mod('vw_stock_images_pro_category_setting'),
			             'posts_per_page' => 6
								);
							$custom_query = new WP_Query( $args );
							while($custom_query->have_posts()) :
							   $custom_query->the_post();?>
								 <div class="col-md-6 mb-4">
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

							<?php  endwhile; // end of the loop.
							wp_reset_postdata(); ?>
						<?php else : ?>
							<h2><?php _e('Not Found','vw-stock-images-pro'); ?></h2>
						<?php endif; ?>
					</div>
					<div class="navigation">
	              	<?php
									$big = 999999999;
									echo paginate_links( array(
										'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
										'format' => 'paged=%#%',
										'current' =>  (get_query_var('paged') ? get_query_var('paged') : 1),
										'total' => $custom_query->max_num_pages,
										'prev_text'          => __( '<i class="fas fa-chevron-left"></i>', 'vw-stock-images-pro' ),
										'next_text'          => __( '<i class="fas fa-chevron-right"></i>', 'vw-stock-images-pro' ),
									) );
									?>
            </div>
				</div>
				<div class="col-lg-4 col-md-4" id="sidebar">

					<?php dynamic_sidebar('sidebar-1'); ?>
				</div>
		        <div class="clearfix"></div>
		    </div>
	    </div>
	</div>
</section>

<?php do_action('vw_stock_images_pro_after_blog'); ?>

<?php get_footer(); ?>
