<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="charset" content="<?php bloginfo('charset'); ?>">
        <meta name="theme-color" content="#ffffff">

        <title><?php wp_title('|', true, 'right'); ?></title>
        <?php wp_head(); ?>
    </head>

    <body id="body" <?php body_class(); ?>>

    <header id="site-header" class="site-header">
        <div class="container">
            <a href="/" class="site-logo-wrapper">
                <img src="<?php echo get_template_directory_uri().'/assets/img/fb-logo.png';?>">
            </a>
            <?php wp_nav_menu([
                "theme_location" => "primary",
                "container" => "nav",
                "container_class" => "primary-nav",
                "menu_class"      => "primary-nav__menu",
                ]);?>
        </div>
    </header>
