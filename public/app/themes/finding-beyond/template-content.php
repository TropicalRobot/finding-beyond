<?php
/*
Template Name: Content Page
*/
?>


<?php get_header(); ?>

<?php echo tev_partial('partials/hero'); ?>

<?php while (have_posts()): $p = tev_post_factory(); ?>

<?php if ($p->field('content_enable')->val()): ?>
    <section class="full-width-section single-content">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8">
                    <?php if ($p->field('content_heading')->val() != ''): ?>
                        <h2 class="content-block__heading"><?php echo $p->field('content_heading'); ?></h2>
                    <?php endif; ?>
                    <div><?php echo $p->field('content_text'); ?></div>

                    <?php if ($p->field('gallery_enable')->val()): ?>
                        <div class="row content-block__images">
                            <div class="col-xs-12">
                                <?php $repeater = $p->field('gallery_images')?>
                                <div class="row clx">
                                <?php while ( $repeater->valid() ): ?>
                                    <?php if ( $repeater->key() != 0 && $repeater->key() %3 == 0 ): ?>
                                        </div>
                                        <div class="row clx">
                                    <?php endif;?>
                                    <?php
                                        $image = $repeater->current();
                                        $link = false;
                                        if ($image->field('gallery_image_link_type')->selected() == "internal") {
                                            $link = $image->field('gallery_image_internal_link');
                                        } else {
                                            $link = $image->field('gallery_image_external_link');
                                        }
                                    ?>
                                    <a href="<?php echo $link; ?>" class="img-wrapper col-xs-12 col-sm-4">
                                        <img src="<?php echo $image->field('gallery_images_image')->mediumUrl()?>" />
                                    </a>
                                    <?php $repeater->next() ?>
                                <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

<?php endif; ?>

<?php endwhile; ?>
<?php get_footer(); ?>
