<?php $link = getACFLink($item);?>

<section class="full-width-section cta cta--full-width <?php echo $link['url'] ? 'cta--full-width-linked' : ''; ?>">
    <div class="cta__bg-img" style="background-image:url(<?php echo $item->field('image')->sizeUrl('hero'); ?>)"></div>

    <div class="cta__header">
        <?php if ($item->field('heading')->val() != ''): ?>
            <h1 class="cta__heading"><?php echo $item->field('heading')->val(); ?></h1>
        <?php endif; ?>

        <?php echo $item->field('text')->val(); ?>
    </div>

    <?php if ($link['url'] && $item->field('link_text')->val()): ?>
        <div class="cta__link-button-row">
            <a class="cta__link-button btn btn--white btn--go" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $item->field('link_text')->val(); ?></a>
        </div>
    <?php endif; ?>

    <?php if ($link['url']): ?>
        <a class="cta__link" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"></a>
    <?php endif; ?>
</section>

