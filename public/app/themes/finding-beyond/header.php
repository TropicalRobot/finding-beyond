<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="charset" content="<?php bloginfo('charset'); ?>">
        <meta name="theme-color" content="#ffffff">
        <link href="//db.onlinewebfonts.com/c/d7b1b1488e2b196852b4ce2be77fd807?family=Sketchetik" rel="stylesheet" type="text/css"/>
        <title><?php wp_title('|', true, 'right'); ?></title>
        <?php wp_head(); ?>
        <script src="https://unpkg.com/masonry-layout@4.1/dist/masonry.pkgd.js"></script>

        <script type="text/javascript">
        window.onload = function() {
            var grid = document.querySelector('.masonry-grid');
            if(grid) {
        var msnry = new Masonry( grid, {
          itemSelector: '.grid-item'
        });
        grid.style.opacity = 1;
        }
    }

        </script>
    </head>

    <body id="body" <?php body_class(); ?>>
    <div class="body-mask"></div>

    <header id="site-header" class="site-header">
        <div class="container">
            <a href="/" class="site-logo-wrapper">
                <img src="<?php echo get_template_directory_uri().'/assets/img/fb-logo.png';?>">
            </a>
            <div id="social-bar-toggle" class="pull-right" style="line-height: 50px;
    text-transform: uppercase; cursor: pointer; padding-left: 20px; font-size: 24px;line-height: 43px;"><span class="icon-globe"></span></div>
            <?php wp_nav_menu([
                "theme_location" => "primary",
                "container" => "nav",
                "container_class" => "primary-nav",
                "menu_class"      => "primary-nav__menu",
                ]);?>
        </div>
    </header>
            <div class="social-bar">
        <?php echo tev_partial('partials/social-bar'); ?>
        </div>
