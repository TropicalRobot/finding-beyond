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
        <?php if ($imageSrc = get_the_post_thumbnail_url($post->getId(), 'card')):?>
            <img class="card-img-top" src="<?php echo $imageSrc;?>" alt="Card image cap">
        <?php else: ?>
            <div class="card-img-top card-img-holder"></div>
        <?php endif; ?>
    </a>
    <div class="card-block">
        <?php $catIds = wp_get_post_categories($post->getId(), ['exclude' => '1']); ?>
        <?php if(count($catIds)): ?>
            <div class="card-tag">
            <?php foreach ($catIds as $c): ?>
                <?php $cat = get_category( $c ); ?>
                <a href="<?php echo get_category_link($c); ?>"><?php echo $cat->name; ?></a>
            <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <a class="card__title-link" href="<?php echo $post->getUrl(); ?>" class="clean-link">
            <h4 class="card__title"><?php echo $post->getTitle(); ?></h4>
        </a>
        <?php if (!empty($text) && $text): ?>
            <p class="card__text"><?php echo $post->getExcerpt(); ?></p>
        <?php endif;?>

        <?php if ( !isset($hideComments) || (isset($hideComments) && !$hideComments) ): ?>
            <div class="comments-count-bubble">
                <span class="icon-chat-bubble-two"></span>
                <span class="comments-count"><?php echo get_comments_number($post->getId()); ?> comments</span>
            </div>
        <?php endif;?>
    </div>
</div>
</div>
