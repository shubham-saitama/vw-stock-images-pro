<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <select name="taxonomy_term" id="taxonomy_dropdown">
        <option value=""><?php _e('All', 'textdomain'); ?></option>

        <?php
        // Define the taxonomies to include in the dropdown
        $taxonomies = array('image_cat', 'file_type', 'orientation', 'colors'); // Add your taxonomy names here
        
        // Loop through each taxonomy
        foreach ($taxonomies as $taxonomy) {
            $terms = get_terms(array('taxonomy' => $taxonomy, 'hide_empty' => false));
            if (!empty($terms) && !is_wp_error($terms)) {
                // Add each term to the dropdown, including the taxonomy in the value
                foreach ($terms as $term) {
                    echo '<option value="' . esc_attr($taxonomy . ':' . $term->slug) . '">' . esc_html($term->name) .'</option>';
                }
            }
        }
        ?>
    </select>
    <label>
        <span class="screen-reader-text"><?php _e('Search for:', 'textdomain'); ?></span>
        <input class="search-home" type="search" name="s" value="<?php echo get_search_query(); ?>"
            placeholder="<?php _e('Search...', 'textdomain'); ?>" />
    </label>

    <button type="submit" class="search-submit"><?php _e('Search', 'textdomain'); ?></button>
</form>