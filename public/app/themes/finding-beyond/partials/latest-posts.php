<?php $latestPost = new WP_Query([
    'posts_per_page' => 1
]);?>

<?php $query = new WP_Query([
    'posts_per_page' => 4,
    'post__not_in' => [$latestPost->posts[0]->ID],
]); $count = 0;?>

<section class="full-width-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-xs-center">
                <h2 class="section-header"><span>LATEST POSTS</span></h2>
            </div>
        </div>
        <div class="row">
        <div class="latest-posts-wrappper">
            <div class="col-xs-12 col-lg-6 latest-posts__post flex-lg-unordered">
                <div class="row latest-posts__row">
                    <?php echo tev_partial('partials/card', [
                        'post' => tev_post_factory($latestPost->posts[0]),
                        'text' => true,
                        'slide' => false,
                        'colClass' => 'col-xs-12'
                    ]); ?>
                </div>
            </div>
            <div class="col-xs-12 col-lg-3 latest-posts__post flex-lg-first">
                <div class="row latest-posts__row">
                <?php foreach ($query->posts as $post): ?>
                    <?php echo tev_partial('partials/card', [
                        'post' => tev_post_factory($post),
                        'slide' => true,
                        'colClass' => 'col-xs-12 col-sm-6 col-lg-12'
                    ]); ?>
                    <?php if($count%2 != 0 && $post != end($query->posts)): ?>
                        </div>
                        </div>
                        <div class="col-xs-12 col-lg-3 latest-posts__post flex-lg-last">
                        <div class="row">
                    <?php endif; ?>
                    <?php $count++; ?>
                <?php endforeach; ?>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
