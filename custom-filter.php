<?php
function get_shop_page_filter()
{

	$paged_from_post = isset($_POST['data']['paged']) ? $_POST['data']['paged'] : null;
	$paged_from_query = get_query_var('paged');

	$paged = $paged_from_post ? $paged_from_post : ($paged_from_query ? $paged_from_query : 1);

	$args = array(
		'post_type' => 'product_images',
		'post_status' => 'publish',
		'posts_per_page' => 12,
		'paged' => $paged
	);

	if ($_POST['data']) {
		$post_data = $_POST['data'];

		// Handle search value
		if (isset($post_data['search_value'])) {
			$args['s'] = sanitize_text_field($post_data['search_term']);
		}

		$meta_query_array = array();
		$tax_query_array = array(
			'relation' => 'AND'
		);

		// Check if 'image_cat' or 'orientation' exist in $post_data and if they are arrays
		if (
			(isset($post_data['image_cat']) && is_array($post_data['image_cat']) && count($post_data['image_cat']) > 0) ||
			(isset($post_data['orientation']) && is_array($post_data['orientation']) && count($post_data['orientation']) > 0) ||
			(isset($post_data['color']) && is_array($post_data['color']) && count($post_data['color']) > 0) ||
			(isset($post_data['file_type']) && is_array($post_data['file_type']) && count($post_data['file_type']) > 0)
		) {
			// Check and sanitize the 'image_cat' if it exists
			if (isset($post_data['image_cat']) && is_array($post_data['image_cat'])) {
				$category = array_filter($post_data['image_cat']); // Removes empty values

				// Add 'image_cat' to tax_query if categories are present
				if (!empty($category)) {
					array_push($tax_query_array, array(
						'taxonomy' => 'image_cat',
						'field' => 'slug',
						'terms' => $category,
					));
				}
			}

			// Check and sanitize the 'orientation' if it exists
			if (isset($post_data['orientation']) && is_array($post_data['orientation'])) {
				$orientation_cat = array_filter($post_data['orientation']); // Removes empty values

				// Add 'orientation' to tax_query if orientations are present
				if (!empty($orientation_cat)) {
					array_push($tax_query_array, array(
						'taxonomy' => 'orientation',
						'field' => 'slug',
						'terms' => $orientation_cat,
					));
				}
			}
			// Check and sanitize the 'orientation' if it exists
			if (isset($post_data['color']) && is_array($post_data['color'])) {
				$colors_cat = array_filter($post_data['color']); // Removes empty values

				// Add 'colors' to tax_query if colorss are present
				if (!empty($colors_cat)) {
					array_push($tax_query_array, array(
						'taxonomy' => 'colors',
						'field' => 'slug',
						'terms' => $colors_cat,
					));
				}
			}
			// Check and sanitize the 'orientation' if it exists
			if (isset($post_data['file_type']) && is_array($post_data['file_type'])) {
				$file_types_cat = array_filter($post_data['file_type']); // Removes empty values

				// Add 'file_types' to tax_query if file_typess are present
				if (!empty($file_types_cat)) {
					array_push($tax_query_array, array(
						'taxonomy' => 'file_type',
						'field' => 'slug',
						'terms' => $file_types_cat,
					));
				}
			}
		}

		// Check for taxonomy_term
		if (isset($post_data['taxonomy_term'])) {
			$taxonomy_term = sanitize_text_field($post_data['taxonomy_term']);

			// Ensure there is a colon in the taxonomy term
			if (strpos($taxonomy_term, ':') !== false) {
				list($taxonomy, $term_slug) = explode(':', $taxonomy_term, 2); // Limit explode to 2 elements

				// Ensure both $taxonomy and $term_slug are non-empty
				if (!empty($taxonomy) && !empty($term_slug)) {
					$tax_query_array[] = array(
						'taxonomy' => $taxonomy,
						'field' => 'slug',
						'terms' => $term_slug,
					);
				}
			} else {
				// Handle the case where there is no colon
				// For example, you might log an error or set a default behavior
				error_log('Invalid taxonomy_term format: ' . $taxonomy_term);
			}
		}


		// Check and sanitize meta queries
		if (isset($post_data['licence']) && is_array($post_data['licence'])) {
			$meta_query_array[] = array(
				'key' => '_image_type',
				'value' => array_map('sanitize_text_field', $post_data['licence']),
				'compare' => 'IN'
			);
		}

		if (!empty($tax_query_array)) {
			$args['tax_query'] = $tax_query_array;
		}

		if (!empty($meta_query_array)) {
			$args['meta_query'] = $meta_query_array;
		}
	}

	error_log('query args===========>' . print_r($args, true));
	$loop = new WP_Query($args);
	$shop_page_loop_html = '';

	ob_start();
	if ($loop->have_posts()):
		while ($loop->have_posts()):
			$loop->the_post();
			// Get the post's categories (or custom taxonomy terms) for filtering
			$post_categories = wp_get_post_terms(get_the_ID(), 'image_cat'); // Change 'category' to your custom taxonomy if needed
			$category_classes = '';
			foreach ($post_categories as $post_category) {
				$category_classes .= ' category-' . $post_category->term_id;
			}

			// global $product;
			?>
			<div class="grid-item col-lg-3 col-md-6 col-12 <?php echo esc_attr($category_classes); ?>">
				<?php get_template_part('template-parts/product-image'); ?>
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

	$base = str_replace(999999999, '%#%', $base);

	$current = 1;
	$total = $loop->max_num_pages;

	$pages = paginate_links(
		array(
			'base' => add_query_arg('paged', '%#%'),
			'format' => '',
			'current' => max(1, $paged),
			'total' => $total,
			'prev_text' => '<i class="fas fa-chevron-left"></i>',
			'next_text' => '<i class="fas fa-chevron-right"></i>',
			'type' => 'list',
			'add_args' => array(
				'search_value' => isset($_POST['data']['search_value']) ? $_POST['data']['search_value'] : '',
				'image_cat' => isset($_POST['data']['image_cat']) ? $_POST['data']['image_cat'] : '',
				'values' => isset($_POST['data']['values']) ? $_POST['data']['values'] : ''
			)
		)
	);

	$response_data = array(
		'html' => $shop_page_loop_html,
		'pagination' => $pages
	);

	wp_send_json($response_data);
	exit;
}

add_action('wp_ajax_get_shop_page_filter', 'get_shop_page_filter');
add_action('wp_ajax_nopriv_get_shop_page_filter', 'get_shop_page_filter');
?>