<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tablet.css" media="screen and (min-width: 930px)">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/about.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class( ) ?>>
    <header class="header">
        <div class="container flex-nav">
            <div class="nav-header">
                <h2><a href=<?php echo site_url() ?>><span class="avocado-icon"></span>Wilma<span> Nutre</span></a></h2>
                <button class="nav-toggle" id="navToggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <nav class="nav-links" id="nav-links">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                        'container' => 'ul',
                        'container_class' => 'nav-links',
                        'add_li_class' => 'nav-link',
                    )
                )
                ?>
            </nav>
        </div>
    </header>