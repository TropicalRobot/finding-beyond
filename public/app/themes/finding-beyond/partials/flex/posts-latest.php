<?php
$latestPosts = new WP_Query([
    'posts_per_page' => 3
]);

$posts = [];
foreach ($latestPosts->posts as $post) {
    $posts[] = tev_post_factory($post);
}

echo tev_partial('partials/flex/posts-row', [
    'posts' => $posts,
    'heading' => $item->field('heading')->val()
]);
