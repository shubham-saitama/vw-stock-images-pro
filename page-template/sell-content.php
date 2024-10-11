<?php /**
  * The Template for displaying Sell Content
  *
  * @package vw-stock-images-pro
  */
/**
 * Template Name: Sell Content
 */

get_header();

?>
<div class="banner-top ">
    <div class="container">
        <div class="row">
            <div class="breadcrumb-holder">
                <?php echo vw_stock_images_pro_the_breadcrumb(); ?>
            </div>
        </div>
    </div>
</div>
<section class="sell-content-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <h2 class="mb-4">Sell Images & Videos On VW Stock Images & Video</h2>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#"
                    class="theme-button">Register Now <i
                        class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="sell-content-grid">
                    <div class="gird-first-row">
                        <div class="grid-row-left">
                            <img src="<?php echo get_theme_mod('vw_stock_images_sell_content_grid_1'); ?>" alt="grid item 1">
                        </div>
                        <div class="grid-row-right">
                            <div class="grid-img-wrap">
                                <img src="<?php echo get_theme_mod('vw_stock_images_sell_content_grid_2'); ?>" alt="">
                            </div>
                            <div class="grid-img-wrap">
                                <img src="<?php echo get_theme_mod('vw_stock_images_sell_content_grid_3'); ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="grid-second-row">
                        <div class="grdi-img-wrap">
                            <img src="<?php echo get_theme_mod('vw_stock_images_sell_content_grid_4'); ?>" alt="">
                        </div>
                        <div class="grdi-img-wrap">
                            <img src="<?php echo get_theme_mod('vw_stock_images_sell_content_grid_5'); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="why-choose-us text-center">
    <div class="container">
        <div class="row">
            <h2><?php echo get_theme_mod('vw_stock_images_pro_premium_why_join_us_heading_text'); ?></h2>
        </div>
        <div class="row">
            <div class="row justify-content-between mt-5">
                <?php for ($i = 1; $i <= 3; $i++) {
                    ?>
                    <div class="feature-card col-lg-4 col-md-4 col-6">
                        <div class="feature-img-wrap">
                            <img src="<?php echo get_theme_mod('vw_stock_images_pro_why_join_us_sec_image' . $i); ?>"
                                alt="Feature Image">
                        </div>
                        <h4 class="text-start">
                            <?php echo get_theme_mod('vw_stock_images_pro_why_join_us_sec_feature_title_' . $i); ?>
                        </h4>
                        <p class="feature-text text-start">
                            <?php echo get_theme_mod('vw_stock_images_pro_why_join_us_sec_feature_desc_' . $i); ?>

                        </p>
                    </div>
                    <?php
                } ?>
            </div>
        </div>
    </div>
</section>
<section class="join-counter">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <h2>Join In On Something Big</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.</p>
            </div>
            <div class="col-lg-7">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4 col-12">
                        <span class="counter-num">
                            16K+
                        </span>
                        <div class="counter-name">
                            Contributors
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <span class="counter-num">
                            16K+
                        </span>
                        <div class="counter-name">
                            Contributors
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <span class="counter-num">
                            16K+
                        </span>
                        <div class="counter-name">
                            Contributors
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
if (get_theme_mod('vw_stock_images_pro_our_join_left_bgimage', '')) {
    $joinLeft_backg = 'background-image:url(\'' . esc_url(get_theme_mod('vw_stock_images_pro_our_join_left_bgimage')) . '\')';
}
if (get_theme_mod('vw_stock_images_pro_our_join_right_bgimage', '')) {
    $joinright_backg = 'background-image:url(\'' . esc_url(get_theme_mod('vw_stock_images_pro_our_join_right_bgimage')) . '\')';
}
?>
<section class="join-newletter">
    <div class="container-fluid p-0">
        <div class="row justify-content-center gap-4 p-0">
            <div class="outer row justify-content-end" style="<?php echo $joinLeft_backg; ?>">
                <div class=" join-left ">
                    <h3 class="">Anyone Can Join The VW Stock Images & Videos Community</h3>
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore
                        et dolore magna aliqua.</p>
                    <a href=" #" class="button-sell-content">Register Now</a>
                </div>
            </div>
            <div class="outer" style="<?php echo $joinright_backg; ?>">
                <div class="col-lg-6 join-right">
                    <h3>Subscribe For A Stock Images & Video</h3>
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore
                        et dolore magna aliqua.</p>
                    <?php echo do_shortcode(get_theme_mod('vw_stock_images_pro_our_newsletter_shortcode')); ?>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="commection">
    <div class="container">
        <div class="row">
            <h2 class="text-center">Commission Module Per Contribution</h2>
        </div>
        <div class="row mt-5">
            <div class="table-wrapper">
                <table cellpadding="10">
                    <thead>
                        <tr>
                            <th>Contributor Level</th>
                            <th>Total Downloads</th>
                            <th>Commission Rate Per Download</th>
                            <th>Monthly Upload Limit</th>
                            <th>Bonus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bronze</td>
                            <td>0 - 500</td>
                            <td>25%</td>
                            <td>100</td>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <td>Silver</td>
                            <td>501 - 2000</td>
                            <td>30%</td>
                            <td>200</td>
                            <td>$50 after 1000 Sales</td>
                        </tr>
                        <tr>
                            <td>Gold</td>
                            <td>2001 - 5000</td>
                            <td>35%</td>
                            <td>300</td>
                            <td>$100 after 3000 Sales</td>
                        </tr>
                        <tr>
                            <td>Platinum</td>
                            <td>5001 - 10000</td>
                            <td>40%</td>
                            <td>400</td>
                            <td>$200 after 7000 Sales</td>
                        </tr>
                        <tr>
                            <td>Diamond</td>
                            <td>10001 +</td>
                            <td>50%</td>
                            <td>Unlimited</td>
                            <td>$500 after 10000 Sales</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</section>
<section class="creative-freedom">
    <div class="container">
        <div class="row">
            <h2 class="text-center">Enjoy Creative Freedom</h2>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et
                dolore magna aliqua.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 position-relative freedom-card">
                <h4 class="text-center mt-1">Sell Photos</h4>
                <p class="text-center mt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt.</p>
                <div class="freedom-img-wrap">
                    <img src="<?php echo get_theme_mod('vw_stock_images_freedom_card_1'); ?>"
                        alt="freedom Section image">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="community mb-5">
    <div class="container">
        <div class="row">
            <h2 class="text-center">Discover The Benefits Of Our Community</h2>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 col-md-6 col-2">
                <div class="community-card">
                    <div class="community-image mb-3">
                        <img src="<?php echo get_theme_mod('vw_stock_images_community_card_1'); ?>" alt="">
                    </div>
                    <h4 class="mb-2">Referral Program</h4>
                    <p>Participate in our Referral Program: tell your friends about us and make more money.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-2">
                <div class="community-card">
                    <div class="community-image mb-3">
                        <img src="<?php echo get_theme_mod('vw_stock_images_community_card_1'); ?>" alt="">
                    </div>
                    <h4 class="mb-2">Referral Program</h4>
                    <p>Participate in our Referral Program: tell your friends about us and make more money.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>