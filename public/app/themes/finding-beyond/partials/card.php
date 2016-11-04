<div class="card-wrapper <?php echo $colClass; ?>">
<div class="card">
    <?php if (!empty($slide) && $slide): ?>
        <a href="<?php echo $post->getUrl(); ?>" class="card-link a-clean"></a>
        <div class="card-slide">
            <div class="card-slide-content">
                <div><?php echo substr($post->getExcerpt(), 0, 160).'...'; ?></div>
                <div class="card-slide-more btn btn-primary">Read more</div>
            </div>
        </div>
    <?php endif; ?>
    <img class="card-img-top" src="<?php echo $post->getFeaturedImageUrl('card');?>" alt="Card image cap">
    <div class="card-block">
        <div class="card-meta">
            <?php echo $post->getPublishedDate()->format('d M Y'); ?>
        </div>
        <h4 class="card-title"><?php echo $post->getTitle(); ?></h4>
        <?php if (!empty($text) && $text): ?>
            <p class="card-text"><?php echo $post->getExcerpt(); ?></p>
        <?php endif;?>
        <?php if (empty($slide) || !$slide): ?>
            <a href="<?php echo $post->getUrl(); ?>" class="btn btn-primary">Read More</a>
        <?php endif;?>
    </div>
</div>
</div>
