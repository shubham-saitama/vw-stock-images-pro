<?php
$content_type = get_theme_mod('vw_stock_images_pro_post_content_blog', 'Excerpt Content');
$excerpt_length = "";
if ($content_type == "Excerpt Content") {
  $excerpt_length = get_theme_mod('vw_stock_images_pro_excerpt_length', 15);
}



?>
<div class="col-md-4 mb-4">
  <div class="blog-detail">
    <div class="blog-detail-inner d-flex flex-column gap-2">
      <div class="blog-img-outer position-relative">
        <?php if (has_post_thumbnail()) { ?>
          <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title() ?>">
        <?php } ?>
        <div class="post-month-outer">
          <i class="fa-solid fa-calendar-days"></i>
          <div class="post-month"><?php echo get_the_date('j M , Y'); ?></div>
        </div>
      </div>
      <div class="blog-title">
        <h3 style="line-height:0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      </div>
      <div class="d-flex gap-3 justify-content-md-start justify-content-center">

      </div>
      <div class="blog-content">
        <?php
        $excerpt = get_the_excerpt();
        echo esc_html(vw_stock_images_pro_string_limit_words($excerpt, ('33')));
        ?>
      </div>
    </div>
  </div>
</div>