<section class="full-width-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-xs-center">
                <h2 class="section-header"><span><?php echo $heading; ?></span></h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($posts as $post) : ?>
                    <?php echo tev_partial('partials/card', [
                        'post' => $post,
                        'text' => true,
                        'slide' => false,
                        'colClass' => 'col-xs-12 col-lg-4',
                        'hideComments' => true
                    ]); ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
