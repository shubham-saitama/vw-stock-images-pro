<?php
function get_shop_page_filter(){

	$paged_from_post = isset($_POST['data']['paged']) ? $_POST['data']['paged'] : null;
	$paged_from_query = get_query_var('paged');

	$paged = $paged_from_post ? $paged_from_post : ($paged_from_query ? $paged_from_query : 1);

	$args = array(
		'post_type'       =>  'product',
		'post_status'     =>  'publish',
		'posts_per_page'  =>  9,
		'paged'           => $paged
	);

	if ( $_POST['data'] ) {
		$post_data = $_POST['data'];

		if ( isset( $post_data['search_value'] ) ) {
			$args['s'] = $post_data['search_value'];
		}

		$meta_query_array = array();

		$tax_query_array = array(
			'relation' => 'AND'
		);

		if( isset( $post_data['products_categories'] ) && count( $post_data['products_categories'] ) ) {
			$category = $post_data['products_categories'];

			array_push( $tax_query_array, array(
			  'taxonomy'  =>  'product_cat',
			  'field'     =>  'term_id',
			  'terms'     =>  $category
			));
		}


		if( isset( $post_data['values'] ) && count( $post_data['values'] ) ) {

			array_push( $meta_query_array,
			array(
				array(
					'key' => '_price',
					'value' => array($post_data['values'][0], $post_data['values'][1]),
					'compare' => 'BETWEEN',
					'type' => 'numeric',
					)
					)
				);

		}

		$args['meta_query'] = $meta_query_array;
		$args['tax_query'] = $tax_query_array;
	}

	$loop = new WP_Query($args);
	$shop_page_loop_html = '';

	ob_start();
	if ($loop->have_posts()):
		while ($loop->have_posts()):
			$loop->the_post();
			global $product;


			?>

			<div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
				<div class="popular-pro-box d-flex flex-column">
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
						<div class="">
								<?php echo $product->get_price_html(); ?>
						</div>

					</div>
				</div>
			</div>


		<?php endwhile;
	endif;

	$shop_page_loop_html = ob_get_clean();

	$base = $_POST['data']['base_url'];

	if (str_contains($base, '?')) {
	  $base .= '&paged=999999999';
	} else {
	  $base .= '?paged=999999999';
	}

	$base = str_replace( 999999999, '%#%', $base );

	$current = 1;
	$total = $loop->max_num_pages;

	$pages = paginate_links(
		array(
			'base'      => add_query_arg('paged', '%#%'),
			'format'    => '',
			'current'   => max(1, $paged),
			'total'     => $total,
			'prev_text' => '<i class="fas fa-chevron-left"></i>',
			'next_text' => '<i class="fas fa-chevron-right"></i>',
			'type'      => 'list',
			'add_args'  => array(
				'search_value' => isset($_POST['data']['search_value']) ? $_POST['data']['search_value'] : '',
				'products_categories' => isset($_POST['data']['products_categories']) ? $_POST['data']['products_categories'] : '',
				'values' => isset($_POST['data']['values']) ? $_POST['data']['values'] : ''
			)
		)
	);

	$response_data = array(
		'html'          =>  $shop_page_loop_html,
		'pagination'    =>  $pages
	);

	wp_send_json( $response_data );
	exit;
}

add_action('wp_ajax_get_shop_page_filter','get_shop_page_filter');
add_action('wp_ajax_nopriv_get_shop_page_filter','get_shop_page_filter');
?>
