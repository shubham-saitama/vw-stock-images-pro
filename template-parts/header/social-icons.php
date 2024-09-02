<?php
/**
 * The Template for displaying Social Icons.
 */
 ?>
<?php if( get_theme_mod('vw_stock_images_pro_headertwitter') != '' || get_theme_mod('vw_stock_images_pro_headerinstagram') != '' || get_theme_mod('vw_stock_images_pro_headerfacebook') != '' || get_theme_mod('vw_stock_images_pro_headeryoutube') != '' || get_theme_mod('vw_stock_images_pro_headerpinterest') != '' || get_theme_mod('vw_stock_images_pro_headerlinkedin') != '' || get_theme_mod('vw_stock_images_pro_headertumblric') != '' || get_theme_mod('vw_stock_images_pro_headergoogleplus') != '' || get_theme_mod('vw_stock_images_pro_headerflickr') != '' || get_theme_mod('vw_stock_images_pro_headervk') != ''){ ?>
  <div class="top_social">
    <div class="socialbox">
      <?php if( get_theme_mod('vw_stock_images_pro_headertwitter') != '' ){ ?>
        <a class="twitter" href="<?php echo esc_url( get_theme_mod( 'vw_stock_images_pro_headertwitter' ) ); ?>" target="_blank"><i class="fab fa-twitter align-middle" aria-hidden="true"></i></a>
      <?php } ?>
      <?php if( get_theme_mod('vw_stock_images_pro_headerinstagram') != '' ){ ?>
        <a class="insta" href="<?php echo esc_url( get_theme_mod( 'vw_stock_images_pro_headerinstagram' ) ); ?>" target="_blank"><i class="fab fa-instagram align-middle" aria-hidden="true"></i></a>
      <?php } ?>
      <?php if( get_theme_mod('vw_stock_images_pro_headerfacebook') != '' ){ ?>
        <a class="facebook" href="<?php echo esc_url( get_theme_mod( 'vw_stock_images_pro_headerfacebook' ) ); ?>" target="_blank"><i class="fab fa-facebook-f align-middle " aria-hidden="true"></i></a>
      <?php } ?>

    </div>
  </div>
<?php } ?>
