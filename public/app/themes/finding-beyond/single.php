<?php get_header(); ?>

<?php while (have_posts()): $p = tev_post_factory(); ?>

    <div class="hero" style="background-image:url(<?php echo $p->getFeaturedImageUrl('large');?>); height: 500px; background-position: center;">
    <div class="container" style="position:relative; width: 100%; height: 100%;">
        <h1 style="    padding: 15px 15px;
    background-color: rgba(37, 37, 37, 0.86);
    color: #FFCB00;
    position: absolute;
    bottom: -44px;
    left: 0;
    font-family: futura; max-width: 70%; text-align: left;"><?php echo $p->getTitle(); ?></h1>
    </div>
    </div>

<?php endwhile; ?>


<section class="full-width-section single-content" style="margin-top: 30px; font-size: 18px; line-height: 30px; font-family: 'futuraLight'">
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="margin-top: 50px;">
                <?php echo $p->getContent(); ?>
            </div>
            <div class="col-md-3 col-md-offset-1 sidebar" style="margin-top: 50px;">
                <h2>SIDEBAR</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultrices ex id enim sollicitudin, non consectetur nibh fringilla. Etiam fermentum efficitur metus, sit amet dapibus ipsum imperdiet ut. Praesent finibus sed libero id euismod. Curabitur in fermentum nibh. Quisque fermentum nisl urna, at varius nibh dapibus sed.<p>
                <p>Phasellus lacus mi, mattis interdum tellus non, venenatis malesuada purus. Aliquam tempor luctus felis, sed facilisis purus dignissim eu. Etiam lobortis nec risus in pharetra. Nullam augue lorem, viverra a tortor et, pharetra sagittis erat.</p>
                <p>Nunc sagittis rhoncus ligula a euismod. Quisque mattis quis mi sed ultricies. Donec posuere, ligula a dignissim porta, purus magna convallis mi, a facilisis enim libero at magna. Curabitur vestibulum, est at semper gravida, metus nulla fermentum est, eu semper enim ex quis purus. Pellentesque pharetra eros sed ultricies pharetra.</p>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
