<h2 style="margin-bottom: 20px;">Related Posts</h2>

<?php $query = new WP_Query([
    'post__not_in' => [$id],
    'post_type' => 'post',
    'posts_per_page' => 4,
    'tax_query' => [
        [
            'taxonomy' => 'category',
            'field'    => 'id',
            'terms'    => $cats,
        ],
    ]
]); ?>

<?php foreach ($query->posts as $post): ?>
    <?php echo tev_partial('partials/card', [
        'post' => tev_post_factory($post),
        'slide' => false
    ]); ?>

<?php endforeach; ?>
