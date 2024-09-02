<?php

/*
* Related Post
*/

if ( !function_exists('vw_stock_images_pro_related_posts') ) {
    function vw_stock_images_pro_related_posts(){ ?>
        <div class="related-post-wrapper">
            <?php if(get_theme_mod('vw_stock_images_pro_related_posts_title')!=''){ ?>
                <h3>
                    <?php echo esc_html(get_theme_mod('vw_stock_images_pro_related_posts_title')); ?>
                </h3>
            <?php } ?>
            <div class="row">
                <?php
                    $current_post_title = get_the_ID();
                    $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => get_theme_mod('vw_stock_images_pro_related_post_count')
                    );
                    $query = new WP_Query($args);
                    if ( $query->have_posts() ) :  while ($query->have_posts()) : $query->the_post();

                    if(get_the_ID() != $current_post_title){?>
                    <div class="col-lg-4 col-md-4 related-post-wrap mb-4">
                        <?php
                        if(has_post_thumbnail()){
                          the_post_thumbnail();
                        }
                        ?>
                        <a href="<?php the_permalink(); ?>" class="post-page-title pt-2"><?php the_title(); ?></a>
                        <div class="post-single-text"><?php $excerpt = get_the_excerpt(); echo esc_html(vw_stock_images_pro_string_limit_words($excerpt,15)); ?></div>
                    </div>
                <?php } endwhile; endif; ?>
            </div>
        </div>
    <?php }
}

/*
* Post navigation
*/
if ( !function_exists('vw_stock_images_pro_single_navigation') ) {
    function vw_stock_images_pro_single_navigation(){
        the_post_navigation( array(
            'next_text' => '<span class="meta-nav" aria-hidden="true">' . __(get_theme_mod('vw_stock_images_pro_blog_category_next_title'), 'vw-stock-images-pro' ) .'</span> ' .
                '<span class="screen-reader-text">' . __( 'Next post:', 'vw-stock-images-pro' ) . '</span> ' .
                '<span class="post-title">%title</span>',
            'prev_text' => '<span class="meta-nav" aria-hidden="true">'. __(get_theme_mod('vw_stock_images_pro_blog_category_prev_title'), 'vw-stock-images-pro' ) . '</span> ' .
                '<span class="screen-reader-text">' . __( 'Previous post:', 'vw-stock-images-pro' ) . '</span> ' .
                '<span class="post-title">%title</span>',
        ) );
    }
}

/*
* Show Page title on pages, post.
*/


/*
* Show post Share
*/
if ( !function_exists('vw_stock_images_pro_social_share') ) {
    /**
     * [vw_stock_images_pro_social_share show all the social share buttons
     * @return [type] string
     */
    function vw_stock_images_pro_social_share(){
        ?>
        <?php do_action('vw_stock_images_pro_before_blog_sharing'); ?>
            <div class="share_icon">
                <div class="socila_share position-relative">
                    <?php if(get_theme_mod('vw_stock_images_pro_post_general_settings_post_share_facebook',true)==1 || get_theme_mod('vw_stock_images_pro_post_general_settings_post_share_linkedin',true)==1 || get_theme_mod('vw_stock_images_pro_post_general_settings_post_share_twitter',true)==1){ ?>

                    <div class="meta-heading" style="cursor:pointer"><?php echo esc_html('Share  ','vw-stock-images-pro'); ?><i class="fa-solid fa-chevron-down"></i></div>

                  <?php }?>
                  <div class="social-share-icon-main">
                    <?php   if ( get_theme_mod('vw_stock_images_pro_post_general_settings_post_share_facebook',true) == "1" ) { ?>
                          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" target="_blank"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php echo esc_html('facebook.com', 'vw-stock-images-pro' ) ; ?></span></a>
                      <?php }

                      if ( get_theme_mod('vw_stock_images_pro_post_general_settings_post_share_linkedin',true) == "1" ) { ?>
                          <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=<?php the_title(); ?>" target="_blank"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php echo esc_html('linkedin.com', 'vw-stock-images-pro' ) ; ?></span></a>
                      <?php }

                      if ( get_theme_mod('vw_stock_images_pro_post_general_settings_post_share_twitter',true) == "1" ) { ?>
                          <a href="https://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=<?php echo the_title(); ?>" target="_blank"><i class="fab fa-x-twitter"></i><span class="screen-reader-text"><?php echo esc_html('twitter.com', 'vw-stock-images-pro' ) ; ?></span></a>
                      <?php } ?>
                  </div>

                </div>
            </div>
        <?php
    }
}

 /* Breadcrumb Begin */
 function vw_stock_images_pro_shop_breadcrumbs() {
 	if (!is_home()) {
 		  echo '<a href="';
 	      	echo esc_url(home_url());
 	    	echo '">';
 	      	echo ' Home / Shop';
 	   	 	echo "</a> ";
 		}
 }


function vw_stock_images_pro_the_breadcrumb() {
    if (!is_home()) {
      echo '<a href="';
        echo esc_url(home_url());
      echo '">';
       echo ' Home /';
      echo "</a> ";
      if (is_category() || is_single()) {
        the_category(', ');
        if (is_single()) {
          echo "<span> ";
            the_title();
          echo "</span> ";
        }
      } elseif (is_page()) {
        echo "<span> ";
          the_title();
        echo "</span> ";
      } elseif (is_tax()) {
        echo '<span>';
        single_term_title();
        echo '</span>';
      }
    }
}

function vw_stock_images_pro_string_limit_words($string, $word_limit) {
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}

// Recent post widget with thumbnails
// include vw_stock_images_pro_EXT_DIR.'../../../wp-includes/default-widgets.php';
Class My_Recent_Posts_Widget extends WP_Widget_Recent_Posts {
    function widget($args, $instance) {
            if ( ! isset( $args['widget_id'] ) ) {
            $args['widget_id'] = $this->id;
        }
        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts', 'vw-stock-images-pro' );
        /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
        $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
        if ( ! $number )
            $number = 5;
        $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;
        /**
         * Filter the arguments for the Recent Posts widget.
         *
         * @since 3.4.0
         *
         * @see WP_Query::get_posts()
         *
         * @param array $args An array of arguments used to retrieve the recent posts.
         */
        $r = new WP_Query( apply_filters( 'widget_posts_args', array(
            'posts_per_page'      => $number,
            'no_found_rows'       => true,
            'post_status'         => 'publish',
            'ignore_sticky_posts' => true
        ) ) );
        if ($r->have_posts()) :
        ?>
        <?php echo $args['before_widget']; ?>
        <?php if ( $title ) {
            echo $args['before_title'] . esc_html($title) . $args['after_title'];
        } ?>
        <ul>
          <?php while ( $r->have_posts() ) : $r->the_post(); ?>
              <li>
                <div class="recent-post-box">
                  <div class="media post-thumb">
                    <?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?>
                    <div class="media-body post-content ps-3">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                     <?php if ( $show_date ) : ?>
                         <p class="post-date"><?php echo get_the_date(); ?></p>
                     <?php endif; ?>
                    </div>
                  </div>
                </div>
              </li>
          <?php endwhile;
          wp_reset_postdata(); ?>
        </ul>

        <?php echo $args['after_widget'];

        endif;
    }
}
function my_recent_widget_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('My_Recent_Posts_Widget');
}
add_action('widgets_init', 'my_recent_widget_registration');
