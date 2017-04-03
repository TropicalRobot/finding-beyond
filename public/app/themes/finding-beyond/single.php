<?php get_header(); ?>

<?php while (have_posts()): $p = tev_post_factory(); ?>

<?php if($imageSrc = get_the_post_thumbnail_url($p->getId(), 'hero')): ?>
    <div class="hero hero--single">
        <div class="hero__image" style="background-image:url(<?php echo $imageSrc;?>)"></div>
        <div class="container">
            <?php $catIds = wp_get_post_categories($p->getId(), ['exclude' => '1']); ?>
            <?php if(count($catIds)): ?>
                <div class="card-tag">
                <?php foreach ($catIds as $c): ?>
                    <?php $cat = get_category( $c ); ?>
                    <a href="<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></a>
                <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

    <section class="full-width-section single-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="single-content__heading"><?php echo $p->getTitle(); ?></h1>
                    <div class="single-content__body">
                        <?php echo $p->getContent(); ?>
                    </div>
                </div>

                <div class="offset-lg-1 col-lg-3">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>
                    <?php endif;?>
                </div>

            </div>
        </div>
    </section>
    <section class="prev-next-posts">
        <div class="container">
            <div class="row">
            <?php if ($prevPost = get_previous_post()) :?>
                <a href="<?php echo get_permalink( $prevPost->ID ); ?>" class="col-xs-6 prev-next-btn">
                    <span class="icon-chevron-left"></span>
                    <div class="post-pag-text">
                        <strong><?php echo $prevPost->post_title; ?></strong>
                        <div class="post-pag-meta">
                            By <?php echo get_the_author_meta('display_name', $prevPost->post_author); ?> - <?php echo get_the_date('F j, Y ',$prevPost->the_ID); ?>
                        </div>
                    </div>
                </a>
                <?php endif; ?>
                <?php if ($nextPost = get_next_post()) :?>
                <a href="<?php echo get_permalink( $nextPost->ID ); ?>" class="col-xs-6 prev-next-btn">
                    <div class="post-pag-text">
                        <strong><?php echo $nextPost->post_title; ?></strong>
                        <div class="post-pag-meta">
                            By <?php echo get_the_author_meta('display_name', $nextPost->post_author); ?> - <?php echo get_the_date('F j, Y ',$nextPost->the_ID); ?>
                        </div>
                    </div>
                    <span class="icon-chevron-right"></span>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="full-width-section">
        <div class="container">
            <div class="row">
                <?php echo tev_partial('partials/related-posts', [
                    'id' => $p->getId(),
                    'cats' => wp_get_post_categories($p->getId())
                ]); ?>
            </div>
        </div>
    </section>
    <section class="full-width-section">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <?php comments_template(); ?>
                </div>
            </div>
        </div>
     </section>


<?php endwhile; ?>

<?php get_footer(); ?>
