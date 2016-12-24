<div class="card-wrapper <?php echo $colClass; ?>">
<div class="card">
    <?php if (!empty($slide) && $slide): ?>
        <div class="card-slide">
            <div class="card-slide-content">
                <div><?php echo substr($post->getExcerpt(), 0, 160).'...'; ?></div>
            </div>
        </div>
    <?php endif; ?>
    <a href="<?php echo $post->getUrl(); ?>" class="card-img-wrapper">
        <div class="card__date">
            <?php $pubDate = $post->getPublishedDate(); ?>
            <div class="card__date-day"><?php echo $pubDate->format('j'); ?></div>
            <div class="card__date-month"><?php echo $pubDate->format('M'); ?></div>
            <div class="card__date-year"><?php echo $pubDate->format('Y'); ?></div>
        </div>
        <img class="card-img-top" src="<?php echo $post->getFeaturedImageUrl('card');?>" alt="Card image cap">
    </a>
    <div class="card-block">
        <div class="card-tag">
            <?php foreach ($post->getCategories() as $cat): ?>
                <a href="<?php echo $cat->getUrl(); ?>"><?php echo $cat->getName(); ?></a>
            <?php endforeach; ?>
        </div>
        <a class="card__title-link" href="<?php echo $post->getUrl(); ?>" class="clean-link">
            <h4 class="card__title"><?php echo $post->getTitle(); ?></h4>
        </a>
        <?php if (!empty($text) && $text): ?>
            <p class="card__text"><?php echo $post->getExcerpt(); ?></p>
        <?php endif;?>
        <div class="comments-count-bubble">
            <span class="icon-chat-bubble-two"></span>
            <span class="comments-count"><?php echo get_comments_number($post->getId()); ?> comments</span>
        </div>
    </div>
</div>
</div>
