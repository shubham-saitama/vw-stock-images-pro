<?php
/*
 Plugin Name: VW Stock Images Posttype
 lugin URI: https://www.vwthemes.com/
 Description: Creating new post type for VW Ebook Store Pro Theme.
 Author: VW Themes
 Version: 0.0.1
 Author URI: https://www.vwthemes.com/
*/

define( 'vw_stock_images_pro_POSTTYPE_VERSION', '1.1' );

add_action( 'init', 'vw_stock_images_pro_posttype_create_post_type' );
add_action( 'init', 'vw_stock_images_pro_posttype_create_services_post_type' );
add_action( 'init', 'vw_stock_images_pro_posttype_create_team_post_type' );
add_action( 'init', 'vw_stock_images_pro_posttype_create_client_post_type' );

function vw_stock_images_pro_posttype_create_post_type() {

  register_post_type( 'pests-problem',
    array(
  		'labels' => array(
  			'name' => __( 'Pests Problem','vw-stock-images-pro-posttype' ),
  			'singular_name' => __( 'Pests Problem','vw-stock-images-pro-posttype' )
  		),
  		'capability_type' => 'post',
  		'menu_icon'  => 'dashicons-admin-tools',
  		'public' => true,
  		'supports' => array(
  			'title',
  			'editor',
  			'thumbnail'
  		)
		)
	);
}
function vw_stock_images_pro_posttype_create_services_post_type() {

  register_post_type( 'services',
    array(
  		'labels' => array(
  			'name' => __( 'Professional Services','vw-stock-images-pro-posttype' ),
  			'singular_name' => __( 'Professional Services','vw-stock-images-pro-posttype' )
  		),
  		'capability_type' => 'post',
  		'menu_icon'  => 'dashicons-admin-tools',
  		'public' => true,
  		'supports' => array(
  			'title',
  			'editor',
  			'thumbnail'
  		)
		)
	);
}

function vw_stock_images_pro_posttype_create_team_post_type() {

  register_post_type( 'pests-team',
    array(
  		'labels' => array(
  			'name' => __( 'Professional Team','vw-stock-images-pro-posttype' ),
  			'singular_name' => __( 'Professional Team','vw-stock-images-pro-posttype' )
  		),
  		'capability_type' => 'post',
  		'menu_icon'  => 'dashicons-businessman',
  		'public' => true,
  		'supports' => array(
  			'title',
  			'editor',
  			'thumbnail'
  		)
		)
	);
}
function vw_stock_images_pro_posttype_create_client_post_type() {

  register_post_type( 'our-client',
    array(
  		'labels' => array(
  			'name' => __( 'Our Client','vw-stock-images-pro-posttype' ),
  			'singular_name' => __( 'Our Client','vw-stock-images-pro-posttype' )
  		),
  		'capability_type' => 'post',
  		'menu_icon'  => 'dashicons-businessman',
  		'public' => true,
  		'supports' => array(
  			'title',
  			'editor',
  			'thumbnail'
  		)
		)
	);
}



// Blog Post section

function vw_stock_images_pro_posttype_bn_blog_meta_box() {
	add_meta_box( 'vw-stock-images-pro-posttype-blog-meta', __( 'Enter Details', 'vw-stock-images-pro-posttype' ), 'vw_stock_images_pro_posttype_bn_blog_meta_callback', 'post', 'normal', 'high' );
}
// Hook things in for admin
if (is_admin()){
    add_action('admin_menu', 'vw_stock_images_pro_posttype_bn_blog_meta_box');
}
/* Adds a meta box for custom post */
function vw_stock_images_pro_posttype_bn_blog_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'vw_stock_images_pro_posttype_posttype_blog_meta_nonce' );
  //$bn_stored_meta = get_post_meta( $post->ID );
	$blog_que = get_post_meta( $post->ID, 'post-ques', true );
	$blog_text = get_post_meta( $post->ID, 'post-para-one', true );
	$blog_point1 = get_post_meta( $post->ID, 'post-point-one', true );
	$blog_point2 = get_post_meta( $post->ID, 'post-point-two', true );
	$blog_point3 = get_post_meta( $post->ID, 'post-point-three', true );
	$blog_point4 = get_post_meta( $post->ID, 'post-point-four', true );

	?>
	<div id="posts_custom_stuff">
		<table id="list">
			<tbody id="the-list" data-wp-lists="list:meta">
				<tr id="meta-1">
					<td class="left">
						<?php _e( 'Blog Paragraph', 'vw-stock-images-pro-posttype' )?>
					</td>
					<td class="left" >
						<input type="text" name="post-ques" id="post-ques" value="<?php echo esc_attr( $blog_que ); ?>" />
					</td>
				</tr>
				<tr id="meta-2">
					<td class="left">
						<?php _e( 'Blog Text 1', 'vw-stock-images-pro-posttype' )?>
					</td>
					<td class="left" >
						<input type="text" name="post-para-one" id="post-para-one" value="<?php echo esc_attr( $blog_text ); ?>" />
					</td>
				</tr>
				<tr id="meta-3">
					<td class="left">
						<?php _e( 'Blog Point 1', 'vw-stock-images-pro-posttype' )?>
					</td>
					<td class="left" >
						<input type="text" name="post-point-one" id="post-point-one" value="<?php echo esc_attr( $blog_point1 ); ?>" />
					</td>
				</tr>
				<tr id="meta-4">
					<td class="left">
						<?php _e( 'Blog Point 2', 'vw-stock-images-pro-posttype' )?>
					</td>
					<td class="left" >
						<input type="text" name="post-point-two" id="post-point-two" value="<?php echo esc_attr( $blog_point2 ); ?>" />
					</td>
				</tr>
				<tr id="meta-5">
					<td class="left">
						<?php _e( 'Blog Point 3', 'vw-stock-images-pro-posttype' )?>
					</td>
					<td class="left" >
						<input type="text" name="post-point-three" id="post-point-three" value="<?php echo esc_attr( $blog_point3 ); ?>" />
					</td>
				</tr>
				<tr id="meta-6">
					<td class="left">
						<?php _e( 'Blog Point 4', 'vw-stock-images-pro-posttype' )?>
					</td>
					<td class="left" >
						<input type="text" name="post-point-four" id="post-point-four" value="<?php echo esc_attr( $blog_point4); ?>" />
					</td>
				</tr>

				</tr>

			</tbody>
		</table>
	</div>
	<?php
}

/* Saves the custom meta input */
function vw_stock_images_pro_posttype_bn_blog_post_meta_save( $post_id ) {
	if (!isset($_POST['vw_stock_images_pro_posttype_posttype_blog_meta_nonce']) || !wp_verify_nonce($_POST['vw_stock_images_pro_posttype_posttype_blog_meta_nonce'], basename(__FILE__))) {
		return;
	}

	if (!current_user_can('edit_post', $post_id)) {
		return;
	}

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}

	// Save desig.
	if( isset( $_POST[ 'post-ques' ] ) ) {
		update_post_meta( $post_id, 'post-ques', sanitize_text_field($_POST[ 'post-ques']) );
	}
	if( isset( $_POST[ 'post-para-one' ] ) ) {
		update_post_meta( $post_id, 'post-para-one', sanitize_text_field($_POST[ 'post-para-one']) );
	}
	if( isset( $_POST[ 'post-point-one' ] ) ) {
		update_post_meta( $post_id, 'post-point-one', sanitize_text_field($_POST[ 'post-point-one']) );
	}
	if( isset( $_POST[ 'post-point-two' ] ) ) {
		update_post_meta( $post_id, 'post-point-two', sanitize_text_field($_POST[ 'post-para-two']) );
	}
	if( isset( $_POST[ 'post-point-three' ] ) ) {
		update_post_meta( $post_id, 'post-point-three', sanitize_text_field($_POST[ 'post-point-three']) );
	}
	if( isset( $_POST[ 'post-point-four' ] ) ) {
		update_post_meta( $post_id, 'post-point-four', sanitize_text_field($_POST[ 'post-point-four']) );
	}

}

add_action( 'save_post', 'vw_stock_images_pro_posttype_bn_blog_post_meta_save' );


//----------------------------  Pests Problmes section------------------------

function vw_stock_images_pro_posttype_bn_pest_problem_meta_box() {
	add_meta_box( 'vw-stock-images-pro-posttype-pest-problem-meta', __( 'Enter Details', 'vw-stock-images-pro-posttype' ), 'vw_stock_images_pro_posttype_bn_pests_problem_meta_callback', 'pests-problem', 'normal', 'high' );
}
// Hook things in for admin
if (is_admin()){
    add_action('admin_menu', 'vw_stock_images_pro_posttype_bn_pest_problem_meta_box');
}
/* Adds a meta box for custom post */
function vw_stock_images_pro_posttype_bn_pests_problem_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'vw_stock_images_pro_posttype_posttype_pests_problem_meta_nonce' );
  //$bn_stored_meta = get_post_meta( $post->ID );
	$pest_para_one = get_post_meta( $post->ID, 'pests-para-one', true );
	$pests_list_heading = get_post_meta( $post->ID, 'pests-list-heading', true );
	$pests_list_one = get_post_meta( $post->ID, 'pests-list-one', true );
	$pests_list_two= get_post_meta( $post->ID, 'pests-list-two', true );
	$pests_list_three = get_post_meta( $post->ID, 'pests-list-three', true );
	$pests_list_four = get_post_meta( $post->ID, 'pests-list-four', true );
	$pests_list_five = get_post_meta( $post->ID, 'pests-list-five', true );
	$pest_para_two = get_post_meta( $post->ID, 'pests-para-two', true );


	?>
	<div id="posts_custom_stuff">
		<table id="list">
			<tbody id="the-list" data-wp-lists="list:meta">
				<tr id="meta-1">
					<td class="left">
						<?php _e( 'Paragraph', 'vw-stock-images-pro-posttype' )?>
					</td>
					<td class="left" >
						<input type="text" name="pests-para-one" id="pests-para-one" value="<?php echo esc_attr( $pest_para_one ); ?>" />
					</td>
				</tr>
				<tr id="meta-2">
					<td class="left">
						<?php _e( 'Pests Point Heading', 'vw-stock-images-pro-posttype' )?>
					</td>
					<td class="left" >
						<input type="text" name="pests-list-heading" id="pests-list-heading" value="<?php echo esc_attr( $pests_list_heading ); ?>" />
					</td>
				</tr>
				<tr id="meta-3">
					<td class="left">
						<?php _e( 'Pests Point 1', 'vw-stock-images-pro-posttype' )?>
					</td>
					<td class="left" >
						<input type="text" name="pests-list-one" id="pests-list-one" value="<?php echo esc_attr( $pests_list_one ); ?>" />
					</td>
				</tr>
				<tr id="meta-4">
					<td class="left">
						<?php _e( 'Pests Point 2', 'vw-stock-images-pro-posttype' )?>
					</td>
					<td class="left" >
						<input type="text" name="pests-list-two" id="pests-list-two" value="<?php echo esc_attr( $pests_list_two ); ?>" />
					</td>
				</tr>
				<tr id="meta-5">
					<td class="left">
						<?php _e( 'Pests Point 3', 'vw-stock-images-pro-posttype' )?>
					</td>
					<td class="left" >
						<input type="text" name="pests-list-three" id="pests-list-three" value="<?php echo esc_attr( $pests_list_three ); ?>" />
					</td>
				</tr>
				<tr id="meta-6">
					<td class="left">
						<?php _e( 'Pests Point 4', 'vw-stock-images-pro-posttype' )?>
					</td>
					<td class="left" >
						<input type="text" name="pests-list-four" id="pests-list-four" value="<?php echo esc_attr( $pests_list_four); ?>" />
					</td>
				</tr>
				<tr id="meta-7">
					<td class="left">
						<?php _e( 'Pests Point 5', 'vw-stock-images-pro-posttype' )?>
					</td>
					<td class="left" >
						<input type="text" name="pests-list-five" id="pests-list-five" value="<?php echo esc_attr( $pests_list_five); ?>" />
					</td>
				</tr>
				<tr id="meta-7">
					<td class="left">
						<?php _e( 'Pests Paragraph Two', 'vw-stock-images-pro-posttype' )?>
					</td>
					<td class="left" >
						<input type="text" name="pests-para-two" id="pests-para-two" value="<?php echo esc_attr( $pest_para_two); ?>" />
					</td>
				</tr>

				</tr>

			</tbody>
		</table>
	</div>
	<?php
}

/* Saves the custom meta input */
function vw_stock_images_pro_posttype_bn_pests_problem_meta_save( $post_id ) {
	if (!isset($_POST['vw_stock_images_pro_posttype_posttype_pests_problem_meta_nonce']) || !wp_verify_nonce($_POST['vw_stock_images_pro_posttype_posttype_pests_problem_meta_nonce'], basename(__FILE__))) {
		return;
	}

	if (!current_user_can('edit_post', $post_id)) {
		return;
	}

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}

	// Save desig.
	if( isset( $_POST[ 'pests-para-one' ] ) ) {
		update_post_meta( $post_id, 'pests-para-one', sanitize_text_field($_POST[ 'pests-para-one']) );
	}
	if( isset( $_POST[ 'pests-list-heading' ] ) ) {
		update_post_meta( $post_id, 'pests-list-heading', sanitize_text_field($_POST[ 'pests-list-heading']) );
	}
	if( isset( $_POST[ 'pests-list-one' ] ) ) {
		update_post_meta( $post_id, 'pests-list-one', sanitize_text_field($_POST[ 'pests-list-one']) );
	}
	if( isset( $_POST[ 'pests-list-two' ] ) ) {
		update_post_meta( $post_id, 'pests-list-two', sanitize_text_field($_POST[ 'pests-list-two']) );
	}
	if( isset( $_POST[ 'pests-list-three' ] ) ) {
		update_post_meta( $post_id, 'pests-list-three', sanitize_text_field($_POST[ 'pests-list-three']) );
	}
	if( isset( $_POST[ 'pests-list-four' ] ) ) {
		update_post_meta( $post_id, 'pests-list-four', sanitize_text_field($_POST[ 'pests-list-four']) );
	}
	if( isset( $_POST[ 'pests-list-five' ] ) ) {
		update_post_meta( $post_id, 'pests-list-five', sanitize_text_field($_POST[ 'pests-list-five']) );
	}
	if( isset( $_POST[ 'pests-para-two' ] ) ) {
		update_post_meta( $post_id, 'pests-para-two', sanitize_text_field($_POST[ 'pests-para-two']) );
	}

}

add_action( 'save_post', 'vw_stock_images_pro_posttype_bn_pests_problem_meta_save' );


// -----------------Professional Services-------------------

function vw_stock_images_pro_posttype_professional_services_meta_box() {
	add_meta_box( 'vw-stock-images-pro-posttype-professional-services-meta', __( 'Services Details', 'vw-stock-images-pro-posttype' ), 'vw_stock_images_pro_posttype_bn_professional_services_meta_callback', 'services', 'normal', 'high' );
}
//Hook things in for admin
if (is_admin()){
    add_action('admin_menu', 'vw_stock_images_pro_posttype_professional_services_meta_box');
}

function vw_stock_images_pro_posttype_bn_professional_services_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'vw_stock_images_pro_posttype_posttype_professional_services_meta_nonce' );
  $bn_stored_meta = get_post_meta( $post->ID );
  $services_img = get_post_meta($post->ID,'service-img',true);
  $read_more_text = get_post_meta($post->ID,'read-more-text',true);
  $services_inner_title = get_post_meta($post->ID,'services_inner_title',true);
  $services_inner_para = get_post_meta($post->ID,'services_inner_para',true);
  $get_service_btn = get_post_meta($post->ID,'get_service_btn',true);
  $get_service_btn_url = get_post_meta($post->ID,'get_service_btn_url',true);
	?>
	<div id="team_custom_stuff">
		<table id="list">
			<tbody id="the-list" data-wp-lists="list:meta">
        <tr class="meta-1">
          <th class="left">
            <?php _e( 'Services Image', 'vw-stock-images-pro-posttype' )?></th>
          <td>
              <input type="text" name="service-img" value="<?php echo $services_img; ?>" readonly>
              <input type="button" class="button button-primary" value="Upload Image" id="service-img"><br>
          </td>
        </tr>
        <tr id="meta-2">
          <td class="left">
            <?php _e( 'Text More Text', 'vw-stock-images-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="read-more-text" id="read-more-text" value="<?php echo esc_attr( $read_more_text ); ?>" />
          </td>
        </tr>
        <tr id="meta-3">
          <td class="left">
            <?php _e( 'Title Two', 'vw-stock-images-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="services_inner_title" id="services_inner_title" value="<?php echo esc_attr( $services_inner_title ); ?>" />
          </td>
        </tr>
        <tr id="meta-3">
          <td class="left">
            <?php _e( 'Paragraph Two', 'vw-stock-images-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="services_inner_para" id="services_inner_para" value="<?php echo esc_attr( $services_inner_para ); ?>" />
          </td>
        </tr>
        <tr id="meta-3">
          <td class="left">
            <?php _e( 'Get Service Now Text', 'vw-stock-images-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="get_service_btn" id="get_service_btn" value="<?php echo esc_attr( $get_service_btn ); ?>" />
          </td>
        </tr>
        <tr id="meta-3">
          <td class="left">
            <?php _e( 'Get Service Now Url', 'vw-stock-images-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="get_service_btn_url" id="get_service_btn_url" value="<?php echo esc_attr( $get_service_btn_url ); ?>" />
          </td>
        </tr>
			</tbody>
		</table>
	</div>
	<?php
}

/* Saves the custom meta input */
function vw_stock_images_pro_posttype_bn_professional_services_meta_save( $post_id ) {
	if (!isset($_POST['vw_stock_images_pro_posttype_posttype_professional_services_meta_nonce']) || !wp_verify_nonce($_POST['vw_stock_images_pro_posttype_posttype_professional_services_meta_nonce'], basename(__FILE__))) {
		return;
	}

	if (!current_user_can('edit_post', $post_id)) {
		return;
	}

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}

	// Save desig.
	if( isset( $_POST[ 'service-img' ] ) ) {
		update_post_meta( $post_id, 'service-img', sanitize_text_field($_POST[ 'service-img']) );
	}
	if( isset( $_POST[ 'read-more-text' ] ) ) {
		update_post_meta( $post_id, 'read-more-text', sanitize_text_field($_POST[ 'read-more-text']) );
	}
	if( isset( $_POST[ 'services_inner_title' ] ) ) {
		update_post_meta( $post_id, 'services_inner_title', sanitize_text_field($_POST[ 'services_inner_title']) );
	}
	if( isset( $_POST[ 'services_inner_para' ] ) ) {
		update_post_meta( $post_id, 'services_inner_para', sanitize_text_field($_POST[ 'services_inner_para']) );
	}
	if( isset( $_POST[ 'get_service_btn' ] ) ) {
		update_post_meta( $post_id, 'get_service_btn', sanitize_text_field($_POST[ 'get_service_btn']) );
	}
	if( isset( $_POST[ 'get_service_btn_url' ] ) ) {
		update_post_meta( $post_id, 'get_service_btn_url', sanitize_text_field($_POST[ 'get_service_btn_url']) );
	}

}

add_action( 'save_post', 'vw_stock_images_pro_posttype_bn_professional_services_meta_save' );


function add_custom_services_taxonomies(){
    $labels = array(
    'name'     => __( 'Categories', 'vw-stock-images-pro-posttype' ),
    'singular_name'  => __( 'Category', 'vw-stock-images-pro-posttype' ),
    'search_items'  => __( 'Search Categories', 'vw-stock-images-pro-posttype' ),
    'all_items'   => __( 'All Categories', 'vw-stock-images-pro-posttype' ),
    'parent_item'  => __( 'Parent Categories', 'vw-stock-images-pro-posttype' ),
    'parent_item_colon' => __( 'Parent Categories:', 'vw-stock-images-pro-posttype' ),
    'edit_item'  => __( 'Edit Categories', 'vw-stock-images-pro-posttype' ),
    'view_item'  => __( 'View Categories', 'vw-stock-images-pro-posttype' ),
    'update_item'  => __( 'Update Categories', 'vw-stock-images-pro-posttype' ),
    'add_new_item' => __( 'Add New Category', 'vw-stock-images-pro-posttype' ),
    'new_item_name' => __( 'New Categories', 'vw-stock-images-pro-posttype' ),
    'menu_name'  => __( 'Categories', 'vw-stock-images-pro-posttype' ),
  	);
  	$args = array(
  		'hierarchical' => false,
  		'labels' => $labels,
  		'public' => true,
  		'publicly_queryable' => true,
  		'show_in_menu' => true,
  		'show_ui' => true,
  		'show_admin_column' => true,
  		'query_var'	=> true,
  		'show_in_rest'	=> true,
  		'rewrite' => array( 'slug' => 'services_category' ),
  	);
  	$result = register_taxonomy( 'services-category', array('services'), $args );
    if (post_type_exists('services'))
    {
        add_post_type_support('services', 'author');
    }
}

add_action( 'init', 'add_custom_services_taxonomies', 0 );


function save_services_taxonomy_custom_meta_field( $term_id ) {
    if ( isset( $_POST['serv_cat_heading'] ) ) {
        update_term_meta($term_id, 'serv_cat_heading', $_POST['serv_cat_heading']);
    }
    if ( isset( $_POST['serv_cat_paragraph'] ) ) {
        update_term_meta($term_id, 'serv_cat_paragraph', $_POST['serv_cat_paragraph']);
    }
    if ( isset( $_POST['serv_points_heading'] ) ) {
        update_term_meta($term_id, 'serv_points_heading', $_POST['serv_points_heading']);
    }
    if ( isset( $_POST['serv_points_one'] ) ) {
        update_term_meta($term_id, 'serv_points_one', $_POST['serv_points_one']);
    }
    if ( isset( $_POST['serv_points_two'] ) ) {
        update_term_meta($term_id, 'serv_points_two', $_POST['serv_points_two']);
    }
    if ( isset( $_POST['serv_points_three'] ) ) {
        update_term_meta($term_id, 'serv_points_three', $_POST['serv_points_three']);
    }
    if ( isset( $_POST['serv_points_four'] ) ) {
        update_term_meta($term_id, 'serv_points_four', $_POST['serv_points_four']);
    }
    if ( isset( $_POST['category_image_one'] ) ) {
        update_term_meta($term_id, 'category_image_one', $_POST['category_image_one']);
    }
    if ( isset( $_POST['category_image_two'] ) ) {
        update_term_meta($term_id, 'category_image_two', $_POST['category_image_two']);
    }
}
add_action( 'edited_services-category', 'save_services_taxonomy_custom_meta_field', 10, 2 );
add_action( 'create_services-category', 'save_services_taxonomy_custom_meta_field', 10, 2 );

function taxonomy_add_custom_field() {
			 ?>
       <div class="form-field" id="Heading">
        	<label>Heading</label>
      		<input type="text" name="serv_cat_heading" id="serv_cat_heading" value="" />
      </div>
       <div class="form-field" id="Paragraph">
        <label>Paragraph</label>
        <input type="text" name="serv_cat_paragraph" id="serv_cat_paragraph" value="" />
      </div>
       <div class="form-field" id="Paragraph">
        <label>Points Heading</label>
      	<input type="text" name="serv_points_heading" id="serv_points_heading" value="" />
      </div>
       <div class="form-field" id="points1">
        <label>Point One</label>
      	<input type="text" name="serv_points_one" id="serv_points_one" value="" />
      </div>
       <div class="form-field" id="points2">
        <label>Point Two</label>
      	<input type="text" name="serv_points_two" id="serv_points_two" value="" />
      </div>
      <div class="form-field" id="points3">
        <label>Point Three</label>
      	<input type="text" name="serv_points_three" id="serv_points_three" value="" />
      </div>
      <div class="form-field" id="points3">
        <label>Point Four</label>
      	<input type="text" name="serv_points_four" id="serv_points_four" value="" />
      </div>
      <div class="form-field" id="points3">
        <label>Point Four</label>
      	<input type="text" name="serv_points_four" id="serv_points_four" value="" />
      </div>
       <tr class="form-field term-image-wrap">
           <th scope="row"><label for="category_image_one"><?php _e( 'Image' ); ?></label></th>
           <td>
               <p><a href="#" class="aw_upload_image_button button button-secondary" id="cat-image-one"><?php _e('Upload Image'); ?></a></p><br/>
               <input type="text" name="category_image_one" value="" size="40" />
           </td>
       </tr>
       <tr class="form-field term-image-wrap">
           <th scope="row"><label for="category_image_two"><?php _e( 'Image' ); ?></label></th>
           <td>
               <p><a href="#" class="aw_upload_image_button button button-secondary" id="cat-image-two"><?php _e('Upload Image'); ?></a></p><br/>
               <input type="text" name="category_image_two" value="" size="40" />
           </td>
       </tr>
	 	 <?php
}
add_action( 'services-category_add_form_fields', 'taxonomy_add_custom_field', 10, 2 );

function taxonomy_edit_custom_field($term) {
      $heading = get_term_meta($term->term_id, 'serv_cat_heading', true);
      $paragraph = get_term_meta($term->term_id, 'serv_cat_paragraph', true);
      $points_heading = get_term_meta($term->term_id, 'serv_points_heading', true);
      $point1 = get_term_meta($term->term_id, 'serv_points_one', true);
      $point2 = get_term_meta($term->term_id, 'serv_points_two', true);
      $point3 = get_term_meta($term->term_id, 'serv_points_three', true);
      $point4 = get_term_meta($term->term_id, 'serv_points_four', true);
      $image_one = get_term_meta($term->term_id, 'category_image_one', true);
      $image_two = get_term_meta($term->term_id, 'category_image_two', true);
    ?>
		<tr id="Heading">
			<td class="left">
				<?php _e( 'Heading', 'vw-stock-images-pro-posttype' )?>
			</td>
			<td class="left" >
				<input type="text" name="serv_cat_heading" id="serv_cat_heading" value="<?php echo esc_attr( $heading ); ?>" />
			</td>
		</tr>
		<tr id="paragraph">
			<td class="left">
				<?php _e( 'Paragraph', 'vw-stock-images-pro-posttype' )?>
			</td>
			<td class="left" >
				<input type="text" name="serv_cat_paragraph" id="serv_cat_paragraph" value="<?php echo esc_attr( $paragraph ); ?>" />
			</td>
		</tr>
		<tr id="Heading">
			<td class="left">
				<?php _e( 'Points Heading', 'vw-stock-images-pro-posttype' )?>
			</td>
			<td class="left" >
				<input type="text" name="serv_points_heading" id="serv_points_heading" value="<?php echo esc_attr( $points_heading ); ?>" />
			</td>
		</tr>
		<tr id="Point One">
			<td class="left">
				<?php _e( 'Point One', 'vw-stock-images-pro-posttype' )?>
			</td>
			<td class="left" >
				<input type="text" name="serv_points_one" id="serv_points_one" value="<?php echo esc_attr( $point1 ); ?>" />
			</td>
		</tr>
		<tr id="Point Two">
			<td class="left">
				<?php _e( 'Point Two', 'vw-stock-images-pro-posttype' )?>
			</td>
			<td class="left" >
				<input type="text" name="serv_points_two" id="serv_points_two" value="<?php echo esc_attr( $point2 ); ?>" />
			</td>
		</tr>
		<tr id="Point Three">
			<td class="left">
				<?php _e( 'Point Three', 'vw-stock-images-pro-posttype' )?>
			</td>
			<td class="left" >
				<input type="text" name="serv_points_three" id="serv_points_three" value="<?php echo esc_attr( $point3 ); ?>" />
			</td>
		</tr>
		<tr id="Point Four">
			<td class="left">
				<?php _e( 'Point Four', 'vw-stock-images-pro-posttype' )?>
			</td>
			<td class="left" >
				<input type="text" name="serv_points_four" id="serv_points_four" value="<?php echo esc_attr( $point4 ); ?>" />
			</td>
		</tr>
    <tr class="form-field term-image-wrap">
        <th scope="row"><label for="category_image_one"><?php _e( 'Image' ); ?></label></th>
        <td>
            <p><a href="#" class="aw_upload_image_button button button-secondary" id="cat-image-one"><?php _e('Upload Image'); ?></a></p><br/>
            <input type="text" name="category_image_one"  value="<?php echo $image_one; ?>" size="40" />
        </td>
    </tr>
    <tr class="form-field term-image-wrap">
        <th scope="row"><label for="category_image_two"><?php _e( 'Image' ); ?></label></th>
        <td>
            <p><a href="#" class="aw_upload_image_button button button-secondary" id="cat-image-two"><?php _e('Upload Image'); ?></a></p><br/>
            <input type="text" name="category_image_two" value="<?php echo $image_two; ?>" size="40" />
        </td>
    </tr>
    <?php
}
add_action( 'services-category_edit_form_fields', 'taxonomy_edit_custom_field', 10, 2 );



function add_custom_meta_box() {
    add_meta_box(
        'repeater_fields_meta_box',
        'Repeater Fields',
        'render_repeater_fields_meta_box',
        'services',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'add_custom_meta_box');

function render_repeater_fields_meta_box($post) {
    // Retrieve existing values from the database
    $repeater_fields = get_post_meta($post->ID, 'services_repeater_fields', true);

    // Output the repeater fields form
    ?>
    <div>
        <ul id="repeater_fields_container">
            <?php if ($repeater_fields) : ?>
                <?php foreach ($repeater_fields as $index => $field) : ?>
                    <li>
                        <label for="repeater_field_<?php echo $index; ?>">Points:</label>
                        <input type="text" name="repeater_fields[<?php echo $index; ?>][points]" value="<?php echo esc_attr($field['points']); ?>">
                        <!-- Add more fields here as needed -->
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
        <button id="add_repeater_field">Add Field</button>
    </div>
    <script>
        // JavaScript to handle adding new repeater fields
        document.getElementById('add_repeater_field').addEventListener('click', function(event) {
            event.preventDefault();
            var container = document.getElementById('repeater_fields_container');
            var newIndex = container.querySelectorAll('li').length;
            var newItem = document.createElement('li');
            newItem.innerHTML = '<label for="repeater_field_' + newIndex + '">Points:</label>' +
                                '<input type="text" name="repeater_fields[' + newIndex + '][points]" value="">';
            container.appendChild(newItem);
        });
    </script>
    <?php
}

function save_custom_meta_box_data($post_id) {
    // Save repeater fields data
    if (isset($_POST['repeater_fields'])) {
        $repeater_fields = $_POST['repeater_fields'];
        $cleaned_fields = array();

        foreach ($repeater_fields as $index => $field) {
            // Check if the title is not empty
            if (!empty($field['points'])) {
                $cleaned_fields[$index] = array(
                    'points' => sanitize_text_field($field['points'])
                    // You can add more fields here if needed
                );
            }
        }

        // Update post meta with cleaned repeater fields
        if (!empty($cleaned_fields)) {
            update_post_meta($post_id, 'services_repeater_fields', $cleaned_fields);
        } else {
            // If all fields were empty, delete the meta
            delete_post_meta($post_id, 'services_repeater_fields');
        }
    }
}
add_action('save_post', 'save_custom_meta_box_data');

// ----------------------------Professional Team---------------------

function vw_stock_images_pro_posttype_professional_team_meta_box() {
	add_meta_box( 'vw-stock-images-pro-posttype-professional-team-meta', __( 'Team Details', 'vw-stock-images-pro-posttype' ), 'vw_stock_images_pro_posttype_bn_professional_team_meta_callback', 'pests-team', 'normal', 'high' );
}
//Hook things in for admin
if (is_admin()){
    add_action('admin_menu', 'vw_stock_images_pro_posttype_professional_team_meta_box');
}

function vw_stock_images_pro_posttype_bn_professional_team_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'vw_stock_images_pro_posttype_posttype_professionals_team_meta_nonce' );
  $bn_stored_meta = get_post_meta( $post->ID );
	$team_desig = get_post_meta( $post->ID, 'team_desig', true );
  $team_facebook = get_post_meta( $post->ID, 'team_facebook', true );
  $team_twitter = get_post_meta( $post->ID, 'team_twitter', true );
  $team_instagram = get_post_meta( $post->ID, 'team_instagram', true );
  $team_youtube = get_post_meta( $post->ID, 'team_youtube', true );
	?>
	<div id="team_custom_stuff">
		<table id="list">
			<tbody id="the-list" data-wp-lists="list:meta">
				<tr id="meta-1">
					<td class="left">
						<?php _e( 'Team Designation', 'vw-stock-images-pro-posttype' )?>
					</td>
					<td class="left" >
						<input type="text" name="team_desig" id="team_desig" value="<?php echo esc_attr( $team_desig ); ?>" />
					</td>
				</tr>
        <tr id="meta-2">
          <td class="left">
            <?php _e( 'Facebook Icon Url', 'vw-stock-images-pro-posttype' )?>
          </td>
          <td class="left" >
            <input type="text" name="team_facebook" id="team_facebook" value="<?php echo esc_attr( $team_facebook ); ?>" />
          </td>
        </tr>
        <tr id="meta-3">
					<td class="left">
						<?php _e( 'Twitter Icon Url', 'vw-stock-images-pro-posttype' )?>
					</td>
					<td class="left" >
						<input type="Text" name="team_twitter" id="team_twitter" value="<?php echo esc_attr( $team_twitter ); ?>" />
					</td>
				</tr>
        <tr id="meta-4">
					<td class="left">
						<?php _e( 'Instagram Icon Url', 'vw-stock-images-pro-posttype' )?>
					</td>
					<td class="left" >
						<input type="Text" name="team_instagram" id="team_instagram" value="<?php echo esc_attr( $team_instagram ); ?>" />
					</td>
				</tr>
        <tr id="meta-5">
					<td class="left">
						<?php _e( 'Youtube Icon Url', 'vw-stock-images-pro-posttype' )?>
					</td>
					<td class="left" >
						<input type="Text" name="team_youtube" id="team_youtube" value="<?php echo esc_attr( $team_youtube ); ?>" />
					</td>
				</tr>

			</tbody>
		</table>
	</div>
	<?php
}

/* Saves the custom meta input */
function vw_stock_images_pro_posttype_bn_professional_team_meta_save( $post_id ) {
	if (!isset($_POST['vw_stock_images_pro_posttype_posttype_professionals_team_meta_nonce']) || !wp_verify_nonce($_POST['vw_stock_images_pro_posttype_posttype_professionals_team_meta_nonce'], basename(__FILE__))) {
		return;
	}

	if (!current_user_can('edit_post', $post_id)) {
		return;
	}

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}

	// Save desig.
	if( isset( $_POST[ 'team_desig' ] ) ) {
		update_post_meta( $post_id, 'team_desig', sanitize_text_field($_POST[ 'team_desig']) );
	}
  if( isset( $_POST[ 'team_facebook' ] ) ) {
    update_post_meta( $post_id, 'team_facebook', sanitize_text_field($_POST[ 'team_facebook']) );
  }
  if( isset( $_POST[ 'team_twitter' ] ) ) {
    update_post_meta( $post_id, 'team_twitter', sanitize_text_field($_POST[ 'team_twitter']) );
  }
  if( isset( $_POST[ 'team_instagram' ] ) ) {
    update_post_meta( $post_id, 'team_instagram', sanitize_text_field($_POST[ 'team_instagram']) );
  }
  if( isset( $_POST[ 'team_youtube' ] ) ) {
    update_post_meta( $post_id, 'team_youtube', sanitize_text_field($_POST[ 'team_youtube']) );
  }

}

add_action( 'save_post', 'vw_stock_images_pro_posttype_bn_professional_team_meta_save' );



//---------------Our Client Sectoion------------

function vw_stock_images_pro_posttype_our_client_meta_box() {
	add_meta_box( 'vw-stock-images-pro-posttype-our-client-meta', __( 'Enter Details', 'vw-stock-images-pro-posttype' ), 'vw_stock_images_pro_posttype_bn_our_client_meta_callback', 'our-client', 'normal', 'high' );
}
//Hook things in for admin
if (is_admin()){
    add_action('admin_menu', 'vw_stock_images_pro_posttype_our_client_meta_box');
}

function vw_stock_images_pro_posttype_bn_our_client_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'vw_stock_images_pro_posttype_our_client_meta_nonce' );
  $bn_stored_meta = get_post_meta( $post->ID );
	$client_designation = get_post_meta( $post->ID, 'client_designation', true );
  $client_img = get_post_meta($post->ID,'client-img-one',true);
	?>
	<div id="team_custom_stuff">
		<table id="list">
			<tbody id="the-list" data-wp-lists="list:meta">
				<tr id="meta-1">
					<td class="left">
						<?php _e( 'Client Designation', 'vw-stock-images-pro-posttype' )?>
					</td>
					<td class="left" >
						<input type="text" name="client_designation" id="client_designation" value="<?php echo esc_attr( $client_designation ); ?>" />
					</td>
				</tr>
        <tr class="meta-3">
            <th class="left">
              <?php _e( 'Client Image', 'vw-stock-images-pro-posttype' )?></th>
            <td>
                <input type="text" name="client-img-one" value="<?php echo $client_img; ?>" readonly>
                <input type="button" class="button button-primary" value="Upload Image" id="client-img-one"><br>
            </td>
        </tr>
			</tbody>
		</table>
	</div>
	<?php
}
/* Saves the custom meta input */
function vw_stock_images_pro_posttype_bn_our_client_meta_save( $post_id ) {
	if (!isset($_POST['vw_stock_images_pro_posttype_our_client_meta_nonce']) || !wp_verify_nonce($_POST['vw_stock_images_pro_posttype_our_client_meta_nonce'], basename(__FILE__))) {
		return;
	}

	if (!current_user_can('edit_post', $post_id)) {
		return;
	}

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}

	// Save desig.
	if( isset( $_POST[ 'client_designation' ] ) ) {
		update_post_meta( $post_id, 'client_designation', sanitize_text_field($_POST[ 'client_designation']) );
	}
  if( isset( $_POST[ 'client-img-one' ] ) ) {
    update_post_meta( $post_id, 'client-img-one', sanitize_text_field($_POST[ 'client-img-one']) );
  }
}

add_action( 'save_post', 'vw_stock_images_pro_posttype_bn_our_client_meta_save' );
