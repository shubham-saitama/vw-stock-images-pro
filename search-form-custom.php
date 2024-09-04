<?php
// Get the categories
$categories = array(
    'category1' => 'ALL',
    'category2' => 'AAdrak',
    'category3' => 'Lassan',
);
?>

<form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <select name="image_category" id="image_category">
        <?php foreach ($categories as $value => $label): ?>
            <option value="<?php echo esc_attr($value); ?>" <?php selected(get_query_var('image_category'), $value); ?>>
                <?php echo esc_html($label); ?>
            </option>
        <?php endforeach; ?>
    </select>
    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search...">
    <input type="submit" id="searchsubmit" value="Search">
</form>