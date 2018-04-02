<?php if ( count($item->field('items')->val()) == 5 ): ?>

    <?php echo tev_partial('partials/flex/posts-row-5', [
        'posts' => $item->field('items')->val(),
        'heading' => $item->field('heading')->val()
    ]); ?>

<?php else: ?>

    <?php echo tev_partial('partials/flex/posts-row', [
        'posts' => $item->field('items')->val(),
        'heading' => $item->field('heading')->val()
    ]); ?>

<?php endif ;?>
