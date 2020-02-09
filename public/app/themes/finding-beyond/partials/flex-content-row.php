<?php while (have_posts()): $p = tev_post_factory(); ?>
    <?php $flexContent = $p->field('flex-content-row'); ?>

    <?php if (get_class($flexContent) == 'Tev\Field\Model\FlexibleContentField'): ?>
        <section class="full-width-section">
            <div class="container">
                <div class="row">

                    <?php while ($flexContent->valid()): ?>
                         <?php $layout = $flexContent->current(); ?>

                        <div class="<?php echo 'col-md-' . (12/(float)$layout->field('span')->selected()); ?>">
                            <?php echo $layout->field('content')->val(); ?>

                            <?php $repeater = $layout->field('links');?>
                            <?php if ($repeater->count()): ?>
                                <?php while($repeater->valid()): ?>
                                    <?php $btn = $repeater->current(); ?>
                                    <?php $link = getACFLink($btn); ?>

                                    <a class="btn btn--primary btn--go" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $btn->field('link-text'); ?></a>

                                    <?php $repeater->next();?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                         <?php $flexContent->next(); ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endwhile; ?>
