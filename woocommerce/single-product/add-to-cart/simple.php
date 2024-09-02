<?php
/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! $product->is_purchasable() ) {
	return;
}

echo wc_get_stock_html( $product ); // WPCS: XSS ok.

if ( $product->is_in_stock() ) : ?>

	<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<?php /* <?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>*/ ?>



	<form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
		<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

		<?php
		do_action( 'woocommerce_before_add_to_cart_quantity' );

		woocommerce_quantity_input(
			array(
				'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
				'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
				'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
			)
		);

		do_action( 'woocommerce_after_add_to_cart_quantity' );
		?>

		<div class="single-pro-btn d-md-flex d-sm-flex d-block pb-3 gap-2 align-items-center justify-content-md-start justify-content-sm-center" style="position: relative;">
				<button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>"
					class="single_add_to_cart_button button alt" id="buy_now_button">
					<?php echo esc_html('Add To Cart'); ?>
				</button>

				<?php if (class_exists('YITH_WCWL')) { ?>
					<div class="wishlist_text d-flex">
						<?php echo do_shortcode(get_theme_mod('cricket-league-pro_recommended_add_to_wishlist', '[yith_wcwl_add_to_wishlist]')); ?>
					</div>
				<?php } else {
					echo "Please install and activate YITH WooCommerce Wishlist to add product wishlist";
				} ?>
			</div>
			<div class="row pb-lg-2 pb-lg-3 pt-lg-4 pt-sm-0 pt-3 pb-sm-0 pb-0 single-shipping-box">
				<?php
				for ($i = 1; $i <= 4; $i++) { ?>
					<div class="col-lg-2 col-sm-3 col-6  text-center mb-md-0 mb-sm-2 mb-4">
						<div class="Discount-offer-img-box align-self-center">
							<img src=" <?php echo esc_url(get_post_meta(get_the_ID(), 'shipping-img' . $i, true)); ?> ">
						</div>
						<div class="Discount-offer-text-box align-self-center">
							<?php echo esc_html(get_post_meta(get_the_ID(), 'shipping-text' . $i, true)); ?>
						</div>
					</div>
				<?php } ?>
			</div>
		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
	</form>

	<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php endif; ?>
