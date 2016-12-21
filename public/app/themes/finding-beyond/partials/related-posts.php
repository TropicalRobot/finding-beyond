<div class="col-xs-12">
    <h2 style="margin-bottom: 20px;">Related Posts</h2>
</div>

<?php $query = new WP_Query([
    'post__not_in' => [$id],
    'post_type' => 'post',
    'posts_per_page' => 3,
    'tax_query' => [
        [
            'taxonomy' => 'category',
            'field'    => 'id',
            'terms'    => $cats,
        ],
    ]
]); ?>

<?php foreach ($query->posts as $post): ?>
    <div class="col-xs-12 col-md-4">
        <?php echo tev_partial('partials/card', [
            'post' => tev_post_factory($post),
            'slide' => false
        ]); ?>
    </div>

<?php endforeach; ?>
