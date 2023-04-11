<?php

function pageBanner() {
    //LOGIC HERE
?>
    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/assets/imgs/wilma-banner.jpg') ?>);"></div>
        <div class="page-banner__content container-custom container--narrow">
            <h1 class="page-banner__title"><?php the_title(); ?></h1>
            <div class="page-banner__intro">
            <p><?php the_excerpt(); ?></p>
            </div>
        </div>  
    </div>

    <?php
}

function wilmanutre_theme_support() {
    // Adding dinamic title tag support
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'wilmanutre_theme_support');

function wilmanutre_register_styles() {
    wp_enqueue_style('mobile_styles', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_style( 'tablet-style', get_stylesheet_directory_uri() . '/css/tablet.css', array(), '1.0.0', 'screen and (min-width: 930px)' );
    wp_enqueue_style( 'poppins-font', 'https://fonts.googleapis.com/css2?family=Poppins&display=swap' );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css', array(), '6.3.0', 'all' );
}

add_action('wp_enqueue_scripts', 'wilmanutre_register_styles');

function wilmanutre_register_scripts() {
    wp_enqueue_script( 'my-custom-script', get_template_directory_uri() . '/js/app.js', array(), microtime(), true );
  }
  
add_action( 'wp_enqueue_scripts', 'wilmanutre_register_scripts' );



?>