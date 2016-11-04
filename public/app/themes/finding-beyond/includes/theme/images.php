<?php

// Custom image sizes
add_action('init', function () {
    add_image_size('card', 600, 400, true);
    add_image_size('hero', 1500, 1500);
});
