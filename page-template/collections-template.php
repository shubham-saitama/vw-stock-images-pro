<?php
/**
 * Template Name: Collections Page
 */

get_header();
get_template_part('template-parts/banner'); ?>

<div id="primary" class="content-area pt-5">
    <main id="main" class="site-main">
        <div class="container">
            <h3>My Collections</h3>
            <?php
            // Start the Loop.
            while (have_posts()):
                the_post();

                // Display the content of the page.
                the_content();
                $current_user = wp_get_current_user();
                // Query collections.
                $args = array(
                    'post_type' => 'collection',
                    'posts_per_page' => -1, 
                    'author' => $current_user->ID,
                );
                $collections_query = new WP_Query($args);

                if ($collections_query->have_posts()):
                    echo '<div class="collections-grid row">'; // Grid container.

                    while ($collections_query->have_posts()):
                        $collections_query->the_post();
                        $collection_items = get_post_meta(get_the_ID(), '_collections', true);
                        
                        // Check if $collection_items is an array or return an empty array
                        $collection_items = is_array($collection_items) ? $collection_items : array();
                        $number_of_items = count($collection_items);
                        ?>

                        <div class="collection-item col-lg-3 py-5">
                            <div class="collection-top ">
                                <a href="<?php the_permalink(); ?>" class="view-collection-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="16" height="16"
                                        aria-hidden="true" class="_24ydrq0 _1286nb13o _1286nb12pd">
                                        <path
                                            d="M448.9 24.4H189c-34.8 0-63.1 28.3-63.1 63.1v201.8c0 34.8 28.3 63.1 63.1 63.1h259.8c34.8 0 63.1-28.3 63.1-63.1V87.4c.1-34.7-28.2-63-63-63M189 74.4h259.8c7.2 0 13.1 5.9 13.1 13.1v170.1l-30.6-31c-4.7-4.8-11.1-7.4-17.8-7.4s-13.1 2.7-17.8 7.5l-23 23.5-90-90.3c-4.7-4.7-11.1-7.4-17.7-7.4s-13 2.6-17.7 7.3L176 231.2V87.4c0-7.2 5.8-13 13-13">
                                        </path>
                                        <path
                                            d="M388 172.7c15.8 0 28.6-12.8 28.6-28.6s-12.8-28.6-28.6-28.6-28.6 12.8-28.6 28.6 12.8 28.6 28.6 28.6M326.3 428.1c-2 7-9.2 11-16.2 9.1L59.6 366.9c-3.4-.9-6.2-3.1-7.9-6.2s-2.1-6.6-1.2-10L76 260.1V112.5c-8.8 7.8-15.6 18.1-19 30.3L2.4 337.3c-4.5 16.2-2.5 33.3 5.8 48s21.8 25.3 38 29.8l250.5 70.2c5.7 1.6 11.4 2.3 17 2.3 27.6 0 53-18.3 60.8-46.1l11-39.2h-51.9z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="collection-bottom">
                                <a href="<?php the_permalink(); ?>" class="">
                                    <?php
                                    // Display collection title and handle the case where title is empty.
                                    if (get_the_title()) {
                                        the_title('<h5 class="collection-title mt-3 mb-1">', '</h5>');
                                    } else {
                                        echo '<h5 class="collection-title mt-3 mb-1">Untitled Collection</h5>';
                                    }
                                    ?>
                                </a>
                                <div class="number-of-items">
                                    <span><?php echo esc_html($number_of_items); ?> resources</span>
                                </div>
                                <!-- Add the delete button -->
                                <button class="delete-collection-btn" data-collection-id="<?php the_ID(); ?>">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div>

                    <?php endwhile;

                    echo '</div>'; // Close grid container.
            
                    // Restore original Post Data.
                    wp_reset_postdata();

                else:
                    echo '<p>No collections found.</p>';
                endif;

            endwhile; // End of the loop.
            ?>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
