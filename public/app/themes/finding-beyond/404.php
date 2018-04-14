<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */

get_header(); ?>

<section class="content-404">
    <div class="container">
        <div class="row">
        <div class="col-xs-12 col-md-8 col-offset-md-2">
            <h2>404 Not Found</h2>
            <br>
            <p>This might be because you have typed the web address incorrectly, or
            the page you were looking for may have been moved, updated or deleted.</p>
            <p><a href="<?php echo home_url(); ?>">Back to homepage</a></p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
