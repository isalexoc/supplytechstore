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
                <ul>
                    <li class="nav-link"><a href=<?php echo site_url(); ?>>Principal</a></li>
                    <li class="nav-link"><a href=<?php echo site_url('/blog'); ?>>Blog</a></li>
                    <li class="nav-link"><a href=<?php echo site_url('/acerca-de-mi'); ?>>Acerca de mi</a></li>
                    <li class="nav-link"><a href=<?php echo get_post_type_archive_link('products'); ?>>Productos</a></li>
                    <li class="nav-link"><a href=<?php echo site_url('/contacto'); ?>>Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>