<?php get_header(); ?>


<div class="hero hero--full-height" style="background-image:url('http://findingbeyond.ryan.3ev.in/app/uploads/2016/05/33-1.jpg');">
    <div class="hero__header">
        <h1 class="hero__title">Travel & Lifestyle<br>Beyond the expected</h1>
    </div>
</div>

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
                <h2 class="section-header" style="margin-bottom: 20px;">LATEST POSTS</h2>
            </div>
        </div>
        <div class="row">
        <div class="latest-posts--centered" style="display: flex">
            <div class="col-sm-3">
                <?php foreach ($query->posts as $post): ?>
                    <?php $p = tev_post_factory($post)?>
                    <div class="card">
                      <img class="card-img-top" src="<?php echo $p->getFeaturedImageUrl('card');?>" alt="Card image cap">
                      <div class="card-block">
                        <div class="text-small primary-color">
                            <?php echo $p->getPublishedDate()->format('d M Y'); ?>
                        </div>
                        <h4 class="card-title"><?php echo $p->getTitle(); ?></h4>
                      </div>
                    </div>

                        <?php if($count%2 != 0 && $post != end($query->posts)): ?>
                            </div>
                            <div class="col-sm-3" style="order:1">
                        <?php endif; ?>
                        <?php $count++; ?>
                <?php endforeach; ?>
            </div>
            <div class="col-md-6">
            <?php $p = tev_post_factory($latestPost->posts[0])?>
                <div class="card">
                  <img class="card-img-top" src="<?php echo $p->getFeaturedImageUrl('large');?>" alt="Card image cap">
                  <div class="card-block">
                    <div class="text-small primary-color">
                        <?php echo $p->getPublishedDate()->format('d M Y'); ?>
                    </div>
                    <h4 class="card-title"><?php echo $p->getTitle(); ?></h4>
                    <p class="card-text"><?php echo $p->getExcerpt(); ?></p>
                    <a href="" class="btn btn-primary">Read More</a>
                  </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<?php $query = new WP_Query([
    'posts_per_page' => 3
]); ?>

<section class="full-width-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-xs-center">
                <h2 class="section-header" style="margin-bottom: 20px;">SELECTED POSTS</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($query->posts as $post) : ?>
            <?php $p = tev_post_factory($post)?>
            <div class="col-md-4">
                <a href="<?php echo $p->getUrl(); ?>" class="cta cta--card" style="background-image: url(<?php echo $p->getFeaturedImageUrl('large');?>); height: 300px;">
                    <div class="cta__text">
                        <div class="text-small primary-color">
                            <?php echo $p->getPublishedDate()->format('d M Y'); ?>
                        </div>
                        <div class="cta__trans">
                            <div class="cta__title"><?php echo $p->getTitle(); ?></div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
                    <div class="row" style="text-align: center;">
            <a href="http://findingbeyond.ryan.3ev.in/posts/" style="border-top: 4px solid rgba(0,0,0, 0.8);
    border-bottom: 4px solid rgba(0,0,0, 0.8);
    padding: 15px 40px; display: inline-block; margin: 20px auto;">
                VIEW ALL POSTS &nbsp; >
            </a>
        </div>
</section>

<section class="full-width-section" style="margin-top: 30px;">

    <div class="container">
        <div class="row">
            <div class="col-md-8" style="padding-right: 40px;">
            <h2 style="margin-bottom: 20px;">ABOUT FINDING BEYOND</h2>
                <div style="background-image: url('http://findingbeyond.ryan.3ev.in/app/uploads/2016/04/Us-Selfie-72.jpg'); background-size: cover; height: 200px; width: 240px; float: left; margin: 0 20px 20px 0;"></div>
                <p>Hi, and thanks for visiting our blog! We're darren and shelley, a thirty something travel obsessed couple from london, england. We love our hometown in old blighty, london is seen by many as the capital of the world and we couldn't agree more, but we just can't get enough of seeing other parts of the world. Experiencing new cultures, sights, smells, tastes and people is what makes us feel like we're really living. We've been traveling on and off for the past ten years now and we're about to yet again quit our jobs, sell our possessions and pack our lives into backpacks to see more of this incredible planet. But this time we're doing things a little differently. We've bought a one way ticket, created a blog and have the desire to find a new lifestyle beyond our current hectic big city lives. Join us to see how it all pans out! For more information about us and our plans please visit our 'about us' page. Thank you.</p>
            </div>
            <div class="col-md-4 sidebar">
                <?php echo do_shortcode('[ninja_forms id=1]'); ?>
            </div>
        </div>
    </div>
</section>

<section class="full-width-section cta cta--full-width" style="background-image:url('http://findingbeyond.ryan.3ev.in/app/uploads/2016/05/177-1.jpg');">
    <a class="cta__link link-block" href="http://findingbeyond.ryan.3ev.in/photos"></a>
    <div class="cta__header">
        <h1 class="cta__heading">Photos</h1>
    </div>
</section>

<?php get_footer(); ?>
