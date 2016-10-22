<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="charset" content="<?php bloginfo('charset'); ?>">
        <meta name="theme-color" content="#ffffff">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,100' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css?family=Bungee+Shade|Monoton" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa|Londrina+Shadow|Vast+Shadow" rel="stylesheet">
        <title><?php wp_title('|', true, 'right'); ?></title>
        <?php wp_head(); ?>
        <script src="https://npmcdn.com/masonry-layout@4.1/dist/masonry.pkgd.js"></script>

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
            <span class="site-logo-wrapper">
            Finding Beyond
             <!--    <img src="<?php echo get_template_directory_uri().'/assets/img/fb-logo.png';?>"> -->
            </span>
            <?php wp_nav_menu([
                "theme_location" => "primary",
                "container" => "nav",
                "container_class" => "primary-nav",
                "menu_class"      => "primary-nav__menu",
                ]);?>
        </div>
    </header>
