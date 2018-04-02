<?php $link = getACFLink($item);?>

<section class="full-width-section cta cta--full-width <?php echo $link['url'] ? 'cta--full-width-linked' : ''; ?>">
    <div class="cta__bg-img" style="background-image:url(<?php echo $item->field('image')->val(); ?>)"></div>

    <div class="cta__header">
        <?php if ($item->field('heading')->val() != ''): ?>
            <h1 class="cta__heading"><?php echo $item->field('heading')->val(); ?></h1>
        <?php endif; ?>

        <p><?php echo $item->field('text')->val(); ?></p>
    </div>

    <?php if ($link['url']): ?>
        <a class="cta__link" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"></a>
    <?php endif; ?>
</section>

