<?php
  /*
  * Template part for the image filter
  *
  */
?>

<div class="filter-over-manager">
    <h6>
        <div class="filter-icon">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/panel.png' ?>"
                alt="Panel Icon">
        </div> Filter
    </h6>

    <!-- Licence Filter -->
    <div class="filter-outer">
        <div class="filter-head">
            <div class="filter-icons">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/premium-quality.png' ?>"
                    alt="Licence">
            </div>
            Licence
            <div class="filter-dropdown">
                <i class="fa-solid fa-caret-down"></i>
            </div>
        </div>
        <div class="filter-body">
            <ul class="filter-ul">
                <li>
                    <label for="license-all">
                        <input type="checkbox" id="license-all" value="" class="category-filter-checkbox"
                            name="licence">
                        All
                    </label>
                </li>
                <li>
                    <label for="license-free">
                        <input type="checkbox" id="license-free" value="free" class="category-filter-checkbox"
                            name="licence">
                        Free
                    </label>
                </li>
                <li>
                    <label for="license-premium">
                        <input type="checkbox" id="license-premium" value="premium" class="category-filter-checkbox"
                            name="licence">
                        Premium
                    </label>
                </li>
            </ul>
        </div>
    </div>

    <!-- Asset Type Filter -->
    <div class="filter-outer">
        <div class="filter-head">
            <div class="filter-icons">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/vector.png' ?>"
                    alt="Asset Type">
            </div>
            Asset Type
            <div class="filter-dropdown">
                <i class="fa-solid fa-caret-down"></i>
            </div>
        </div>
        <div class="filter-body">
            <ul class="filter-ul">
                <li>
                    <label for="asset-videos">
                        <input type="checkbox" id="asset-videos" value="videos" class="category-filter-checkbox"
                            name="image_cat">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/video.png' ?>"
                            alt="Videos"> Videos
                    </label>
                </li>
                <li>
                    <label for="asset-vectors">
                        <input type="checkbox" id="asset-vectors" value="vectors" class="category-filter-checkbox"
                            name="image_cat">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/maximize.png' ?>"
                            alt="Vectors"> Vectors
                    </label>
                </li>
                <li>
                    <label for="asset-photos">
                        <input type="checkbox" id="asset-photos" value="photos" class="category-filter-checkbox"
                            name="image_cat">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/photos.png' ?>"
                            alt="Photos"> Photos
                    </label>
                </li>
                <li>
                    <label for="asset-icons">
                        <input type="checkbox" id="asset-icons" value="icons" class="category-filter-checkbox"
                            name="image_cat">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/icons.png' ?>"
                            alt="Icons"> Icons
                    </label>
                </li>
            </ul>
        </div>
    </div>

    <!-- Orientation Filter -->
    <div class="filter-outer">
        <div class="filter-head">
            <div class="filter-icons">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/maximize.png' ?>"
                    alt="Orientation">
            </div>
            Orientation
            <div class="filter-dropdown">
                <i class="fa-solid fa-caret-down"></i>
            </div>
        </div>
        <div class="filter-body">
            <ul class="filter-ul">
                <li>
                    <label for="orientation-square">
                        <input type="checkbox" id="orientation-square" value="square" class="category-filter-checkbox"
                            name="orientation">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/square.png' ?>"
                            alt="Square"> Square
                    </label>
                </li>
                <li>
                    <label for="orientation-panoramic">
                        <input type="checkbox" id="orientation-panoramic" value="panoramic"
                            class="category-filter-checkbox" name="orientation">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/paranomic.png' ?>"
                            alt="Panoramic"> Panoramic
                    </label>
                </li>
                <li>
                    <label for="orientation-vertical">
                        <input type="checkbox" id="orientation-vertical" value="vertical"
                            class="category-filter-checkbox" name="orientation">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/potrate.png' ?>"
                            alt="Vertical"> Vertical
                    </label>
                </li>
                <li>
                    <label for="orientation-horizontal">
                        <input type="checkbox" id="orientation-horizontal" value="horizontal"
                            class="category-filter-checkbox" name="orientation">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/square.png' ?>"
                            alt="Horizontal"> Horizontal
                    </label>
                </li>
            </ul>
        </div>
    </div>

    <!-- Colours Filter -->
    <div class="filter-outer">
        <div class="filter-head">
            <div class="filter-icons">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/palette.png' ?>"
                    alt="Colours">
            </div>
            Colours
            <div class="filter-dropdown">
                <i class="fa-solid fa-caret-down"></i>
            </div>
        </div>
        <div class="filter-body">
            <ul class="filter-ul colored">
                <li>
                    <label for="color-black">
                        <input type="checkbox" id="color-black" value="white" class="category-filter-checkbox"
                            name="color">
                        <div class="color-box" style="">X</div>
                    </label>
                </li>
                <li>
                    <label for="color-white">
                        <input type="checkbox" id="color-white" value="black" class="category-filter-checkbox"
                            name="color">
                        <div class="color-box" style=""></div>
                    </label>
                </li>
                <!-- Add more colors similarly -->
            </ul>
        </div>
    </div>

    <!-- File Type Filter -->
    <div class="filter-outer">
        <div class="filter-head">
            <div class="filter-icons">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/shop-page/icons/folder.png' ?>"
                    alt="File Type">
            </div>
            File Type
            <div class="filter-dropdown">
                <i class="fa-solid fa-caret-down"></i>
            </div>
        </div>
        <div class="filter-body">
            <ul class="filter-ul">
                <li>
                    <label for="filetype-png">
                        <input type="checkbox" id="filetype-png" value="png" class="category-filter-checkbox"
                            name="file_type">
                        PNG
                    </label>
                </li>
                <li>
                    <label for="filetype-jpg">
                        <input type="checkbox" id="filetype-jpg" value="jpg" class="category-filter-checkbox"
                            name="file_type">
                        JPG
                    </label>
                </li>
                <li>
                    <label for="filetype-ai">
                        <input type="checkbox" id="filetype-ai" value="ai" class="category-filter-checkbox"
                            name="file_type">
                        AI
                    </label>
                </li>
                <li>
                    <label for="filetype-svg">
                        <input type="checkbox" id="filetype-svg" value="svg" class="category-filter-checkbox"
                            name="file_type">
                        SVG
                    </label>
                </li>
            </ul>
        </div>
    </div>
</div>