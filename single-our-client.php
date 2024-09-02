<?php
/**
 * The Template for displaying all single team.
 *
 * @package vw-stock-images-pro
 */
get_header();
get_template_part( 'template-parts/banner' );
?>
<?php do_action('vw_stock_images_pro_before_contact_title'); ?>
<div class="container single-testimonial-parent-div py-5">
    <div class="row">
        <div id="testimonial_single" class="col-md-9">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php if ( has_post_thumbnail() ) { ?>
                    <div class="team_feature-box">
                        <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                    </div>
                <?php } ?>
                <div class="testimonial_des">
                    <p class="mt-3"><?php the_content();?></p>
                </div>
                <?php if(get_post_meta($post->ID,'vw_stock_images_pro_posttype_testimonial_desigstory',true)!= ''){ ?>
                <div class="teams-desig mb-3 mt-3"><strong><?php _e('Designation: ','vw-stock-images-pro');?></strong><?php echo esc_html(get_post_meta($post->ID,'vw_stock_images_pro_posttype_testimonial_desigstory',true)); ?></div>
                <?php }?>
                <div class="clearfix"></div>
            <?php endwhile; // end of the loop. ?>

            <div class="post_pagination mt-4">
                <?php the_post_navigation( array(
                    'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'vw-stock-images-pro' ) . '</span> ' .
                        '<span class="screen-reader-text">' . __( 'Next post:', 'vw-stock-images-pro' ) . '</span> ' .
                        '<span class="post-title">%title</span>',
                    'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'vw-stock-images-pro' ) . '</span> ' .
                        '<span class="screen-reader-text">' . __( 'Previous post:', 'vw-stock-images-pro' ) . '</span> ' .
                        '<span class="post-title">%title</span>',
                ) );?>
            </div>
        </div>
        <div class="col-md-3" id="sidebar">
            <?php dynamic_sidebar('sidebar-1'); ?>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?php get_footer(); ?>
