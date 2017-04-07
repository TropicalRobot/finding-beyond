<?php

// Custom image sizes
add_action('init', function () {
    add_image_size('card', 600, 400, true);
    add_image_size('hero', 1500, 1500);
});


add_filter('wpseo_opengraph_image', 'mysite_opengraph_single_image_filter');
function mysite_opengraph_single_image_filter($val) {
    return strtr($val, array(
        'https' => 'http',
        'wp-content' => 'app'
    ));
}
