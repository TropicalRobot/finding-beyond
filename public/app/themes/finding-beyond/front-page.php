<?php get_header(); ?>

<div class="hero" style="background-image:url(<?php echo get_template_directory_uri().'/assets/img/mountains-azalea-sunset.jpg';?>);">
    <div style="border-top: 5px solid rgba(255, 255, 255, 0.59);
    border-bottom: 5px solid rgba(255, 255, 255, 0.6);
    padding: 38px;">
        <h1 class="hero__title">Travel & Lifestyle<br>Beyond the expected</h1>
    </div>
</div>


<?php $query = new WP_Query([
    'posts_per_page' => 6,
    'paged' => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1
]); $count = 0;?>

<section class="full-width-section">
    <div class="container">
        <div class="row">
            <?php while ($query->have_posts()): $query->the_post(); $p = tev_post_factory($post)?>

                <?php if($count === 0): ?>
                    <div class="col-md-7">
                        <a href="<?php echo $p->getUrl(); ?>" class="cta" style="background-image: url(<?php echo $p->getFeaturedImageUrl('large');?>); height: 500px;">
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
                <?php elseif ($count === 1 || $count === 2): ?>
                    <div class="col-md-5">
                        <a class="cta" href="<?php echo $p->getUrl(); ?>" style="background-image: url(<?php echo $p->getFeaturedImageUrl('large');?>); height: 240px;">
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
                <?php else: ?>

                <div class="col-md-4">
                    <a href="<?php echo $p->getUrl(); ?>" class="cta" style="background-image: url(<?php echo $p->getFeaturedImageUrl('large');?>); height: 300px;">
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
                <?php endif; ?>

                <?php $count++; ?>
            <?php endwhile; ?>
        </div>
        <div class="row" style="text-align: center;">
            <div style="border-top: 4px solid rgba(0,0,0, 0.8);
    border-bottom: 4px solid rgba(0,0,0, 0.8);
    padding: 15px 40px; display: inline-block; margin: 20px auto;">
                VIEW ALL POSTS &nbsp; >
            </div>
        </div>
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
                <h2 style="margin-bottom: 20px;">SIDEBAR</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultrices ex id enim sollicitudin, non consectetur nibh fringilla. Etiam fermentum efficitur metus, sit amet dapibus ipsum imperdiet ut. Praesent finibus sed libero id euismod. Curabitur in fermentum nibh. Quisque fermentum nisl urna, at varius nibh dapibus sed.<p>
                <p>Phasellus lacus mi, mattis interdum tellus non, venenatis malesuada purus. Aliquam tempor luctus felis, sed facilisis purus dignissim eu. Etiam lobortis nec risus in pharetra. Nullam augue lorem, viverra a tortor et, pharetra sagittis erat.</p>
            </div>
        </div>
    </div>
</section>

<section class="full-width-section hero" style="background-image:url('http://findingbeyond.ryan.3ev.in/app/uploads/2016/05/177-1.jpg'); background-size: cover; background-position: center; height: 500px; background-attachment: scroll;">
    <div style="border-top: 5px solid rgba(255, 255, 255, 0.59); border-bottom: 5px solid rgba(255, 255, 255, 0.6); padding: 38px;">
        <h1 class="hero__title" style="margin-bottom: 0;">Photos</h1>
    </div>
</section>

<?php get_footer(); ?>
