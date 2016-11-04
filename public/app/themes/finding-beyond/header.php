<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="charset" content="<?php bloginfo('charset'); ?>">
        <meta name="theme-color" content="#ffffff">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,100' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700," rel="stylesheet">

        <?php $faviconPath =  get_template_directory_uri().'/assets/img/favicon'; ?>
        <link rel="shortcut icon" href="<?php echo $faviconPath.'/favicon.ico';?> type="image/x-icon" />
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $faviconPath.'/apple-touch-icon-57x57.png';?>">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $faviconPath.'/apple-touch-icon-60x60.png';?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $faviconPath.'/apple-touch-icon-72x72.png';?>">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $faviconPath.'/apple-touch-icon-76x76.png';?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $faviconPath.'/apple-touch-icon-114x114.png';?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $faviconPath.'/apple-touch-icon-120x120.png';?>">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $faviconPath.'/apple-touch-icon-144x144.png';?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $faviconPath.'/apple-touch-icon-152x152.png';?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $faviconPath.'/apple-touch-icon-180x180.png';?>">
        <link rel="icon" type="image/png" href="<?php echo $faviconPath.'/favicon-16x16.png';?>" sizes="16x16">
        <link rel="icon" type="image/png" href="<?php echo $faviconPath.'/favicon-32x32.png';?>" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php echo $faviconPath.'/favicon-96x96.png';?>" sizes="96x96">
        <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
        <meta name="msapplication-square70x70logo" content="<?php echo $faviconPath.'/smalltile.png';?>" />
        <meta name="msapplication-square150x150logo" content="<?php echo $faviconPath.'/mediumtile.png';?>" />
        <meta name="msapplication-wide310x150logo" content="<?php echo $faviconPath.'/widetile.png';?>" />
        <meta name="msapplication-square310x310logo" content="<?php echo $faviconPath.'/largetile.png';?>" />

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

    <header id="site-header" class="site-header">
        <div class="container site-header__container">
            <div class="site-logo"><a class="a-clean" href="<?php echo get_home_url(); ?>">Finding Beyond</a></div>
            <div class="primary-nav-wrapper">
                <?php wp_nav_menu([
                    "theme_location" => "primary",
                    "container" => "nav",
                    "container_class" => "primary-nav",
                    "menu_class"      => "primary-nav__menu",
                    ]);?>
            </div>
            <div class="mobile-menu-trigger">
                <div class="icon"></div>
            </div>
        </div>
    </header>
