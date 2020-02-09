<?php while (have_posts()): $p = tev_post_factory(); ?>
    <?php $flexContent = $p->field('flex-sections'); ?>

    <?php if (get_class($flexContent) == 'Tev\Field\Model\FlexibleContentField'): ?>
        <section>
            <?php while ($flexContent->valid()): ?>
                 <?php $layout = $flexContent->current(); ?>

                 <?php echo tev_partial('partials/flex/' . $layout->layout(), ['item' => $layout]); ?>

                 <?php $flexContent->next(); ?>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>
<?php endwhile; ?>
