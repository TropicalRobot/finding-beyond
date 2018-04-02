<?php
/*
Template Name: Flex Content Page
*/
?>


<?php get_header(); ?>

<?php echo tev_partial('partials/hero'); ?>

<div class="main-content">

    <?php echo tev_partial('partials/flex-content-row'); ?>

    <?php echo tev_partial('partials/flex-sections'); ?>

    <?php echo tev_partial('partials/social-bar'); ?>
</div>

<?php get_footer(); ?>
