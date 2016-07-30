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
<?php $p = tev_post_factory($post); ?>
    <div class="card">
      <img class="card-img-top" src="<?php echo $p->getFeaturedImageUrl('card');?>" alt="Card image cap">
      <div class="card-block">
        <div class="text-small primary-color">
            <?php echo $p->getPublishedDate()->format('d M Y'); ?>
        </div>
        <h4 class="card-title"><?php echo $p->getTitle(); ?></h4>
        <a href="" class="btn btn-primary">Read More</a>
      </div>
    </div>

<?php endforeach; ?>
