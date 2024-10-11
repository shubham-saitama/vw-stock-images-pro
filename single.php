<?php
/**
 * The Template for displaying all single posts.
 *
 * @package vw-stock-images-pro
 */
get_header();

$terms = get_the_terms(get_the_ID(), 'category');
$posts_category_var = array();
foreach ($terms as $term) {
	$posts_category_var[] = $term->name;
}
$posts_category_name = join(", ", $posts_category_var);

$current_user = wp_get_current_user();


?>
<div class="banner-container">
	<div class="container">
		<div class="row">
			<div class="above_title">
				<?php if (get_theme_mod('vw_stock_images_pro_site_breadcrumb_enable', true) != '') { ?>
					<div class=" bradcrumbs">
						<h2><a href="<?php echo home_url(); ?> ">Home</a>/ Single Blog</h2>
					</div>
				<?php }
				?>
			</div>
		</div>
	</div>
</div>
<?php while (have_posts()):
	the_post(); ?>
	<section id="single-post">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="single-post-img">
						<?php if (has_post_thumbnail()) { ?>
							<div class="single-post-img">
								<img src="<?php the_post_thumbnail_url('full'); ?>">
							</div>
						<?php } ?>
					</div>
					<h1 class="my-3"><?php the_title(); ?></h1>
					<div class="post-meta py-3">
						<div class="d-flex justify-content-between align-items-center post-meta-inner">
							<div class="single-post-author">
								<?php if (get_theme_mod('vw_stock_images_pro_post_general_settings_post_author', true) == "1") { ?>
									<div
										class="entry-autho gap-2 d-flex align-items-center justify-content-lg-start justify-content-md-start justify-content-center ">
										<img class="single-author-image"
											src="<?php echo esc_url(get_avatar_url($current_user->ID)); ?>">
										<p class="author-name mb-0 ">
											<?php the_author(); ?>
										</p>
									</div>
								<?php } ?>
							</div>
							<div class="single-post-date">
								<?php if (get_theme_mod('vw_stock_images_pro_post_general_settings_post_date', true) == "1") { ?>
									<div class="entry-date meta-heading">
										<?php echo get_the_date('F j , Y'); ?>
									</div>
								<?php } ?>
							</div>
							<div class="single-post-comment">
								<?php if (get_theme_mod('vw_stock_images_pro_post_general_settings_post_comments', true) == "1") { ?>
									<div class="entry-comments">
										<a href="#comments">
											<a href="#comments" class="meta-heading">
												<?php
												$get_comments_number = get_comments_number(get_the_ID()) != 0 ? get_comments_number(get_the_ID()) : 0;
												echo $get_comments_number . ' Comments'; ?>
											</a>
										</a>
									</div>
								<?php } ?>
							</div>
							<div class="single-post-category">
								<?php if (get_theme_mod('vw_stock_images_pro_post_general_settings_category_setting', true) == "1") { ?>
									<p class="mb-0 meta-heading">
										<span>
											Categories: <?php echo $posts_category_name; ?>
										</span>
									</p>
								<?php } ?>
							</div>
							<div class="single-post-icons">
								<?php if (get_theme_mod('vw_stock_images_pro_post_general_settings_post_share', true)) {
									if (function_exists('vw_stock_images_pro_social_share')) {
										vw_stock_images_pro_social_share();
									}
								} ?>
							</div>
						</div>
					</div>
					<div class="single-blog-content">
						<?php the_content(); ?>
						<h6 class="mb-2 blog-que  ps-lg-2">
							<?php echo esc_html(get_post_meta($post->ID, 'post-ques', true)); ?>
						</h6>
						<p class="mb-3 ps-lg-2">
							<?php echo esc_html(get_post_meta($post->ID, 'post-para-one', true)); ?>
						</p>
						<div class="row mt-4  ps-lg-2 mb-4">
							<div class="col-lg-6">
								<p class="mb-2">
									<i
										class="fas fa-chevron-right pe-2"></i><?php echo esc_html(get_post_meta($post->ID, 'post-point-one', true)); ?>
								</p>
							</div>
							<div class="col-lg-6">
								<p class="mb-2 ">
									<i
										class="fas fa-chevron-right pe-2"></i><?php echo esc_html(get_post_meta($post->ID, 'post-point-two', true)); ?>
								</p>
							</div>
							<div class="col-lg-6">
								<p class="mb-2 ">
									<i
										class="fas fa-chevron-right pe-2"></i><?php echo esc_html(get_post_meta($post->ID, 'post-point-two', true)); ?>
								</p>
							</div>
							<div class="col-lg-6">
								<p class="mb-2">
									<i class="fas fa-chevron-right  pe-2"></i>
									<?php echo esc_html(get_post_meta($post->ID, 'post-point-two', true)); ?>
								</p>
							</div>
						</div>
					</div>
				</div>

				<hr />
				<div class="single-post-comment mt-4 mb-5">
					<?php
					if (comments_open() || '0' != get_comments_number()) {
						comments_template();
					}
					?>
				</div>
			</div>
			<div class="row justify-content-center mt-3">
				<div class="col-lg-8 col-md-8">
					<?php if (get_theme_mod('vw_stock_images_pro_recent_blog_heading') != '') { ?>
						<h2 class="main-head  text-center">
							<?php echo esc_html(get_theme_mod('vw_stock_images_pro_recent_blog_heading')); ?>
						</h2>
					<?php } ?>
					<?php if (get_theme_mod('vw_stock_images_pro_recent_blog_paragraph') != '') { ?>
						<p class="theme-para  mb-md-0  mb-2  text-center">
							<?php echo esc_html(get_theme_mod('vw_stock_images_pro_recent_blog_paragraph')); ?>
						</p>
					<?php } ?>
				</div>
				<div class="recent-blogs row mt-3 pt-3">
					<?php
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 3
					);
					$new = new WP_Query($args);
					$loop_index = 0;
					$i = 1;
					while ($new->have_posts()) {
						$new->the_post();

						$post_id = get_the_ID();

						$assigned_category = get_the_terms($post_id, 'category');

						$assigned_category_name = '';
						$category_link = '#';
						if (!empty($assigned_category)) {
							$assigned_category_name = $assigned_category[0]->name;
							$category_link = get_category_link($assigned_category[0]->term_id);
						}

						?>
						<div class=" col-lg-4 col-md-6 mb-3">
							<div class="blog-detail ">
								<div class="blog-detail-inner d-flex flex-column gap-3">
									<div class="blog-img-outer">
										<?php if (has_post_thumbnail()) { ?>
											<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title() ?>">
										<?php } ?>
									</div>
									<div class="blog-category">
										<a
											href="<?php echo $category_link; ?>"><?php echo wp_get_post_terms(get_the_ID(), 'category')[0]->name; ?></a>
									</div>
									<div class="blog-title">
										<h3 style="line-height:0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h3>
									</div>
									<div class="d-flex gap-3 justify-content-md-start justify-content-center">
										<div class="blog-admin position-relative">
											<p class="mb-0">By <?php the_author(); ?></p>
										</div>
										<div class="post-month-outer">
											<div class="post-month"><?php echo get_the_date('j M , Y'); ?></div>
										</div>
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
						<?php $i++;
					}
					wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer();
