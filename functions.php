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

//ADD THEME SUPPORT


function wilmanutre_theme_support() {
    // Adding dinamic title tag support
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );
    add_theme_support( 'widgets' );
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
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), '3.6.0', true);
    wp_enqueue_script( 'my-custom-script', get_template_directory_uri() . '/js/app.js', array(), microtime(), true );
  }
  
add_action( 'wp_enqueue_scripts', 'wilmanutre_register_scripts' );


// MENUS
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',

    )
);

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

//REGISTER SIDEBARS
function wilmanutre_register_sidebars() {
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name' => 'Product Sidebar',
            'id' => 'product-sidebar',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}

add_action('widgets_init', 'wilmanutre_register_sidebars');


//CONTACT FORM

add_action('wp_ajax_enquiry', 'enquiry_form');
add_action('wp_ajax_nopriv_enquiry', 'enquiry_form');
function enquiry_form()
{


	if(  !wp_verify_nonce( $_POST['nonce'], 'ajax-nonce' )  )
	{

		wp_send_json_error('Nonce is incorrect', 401);
		die();

	}



	$formdata = [];

	wp_parse_str($_POST['enquiry'], $formdata);


	// Admin email
	$admin_email = get_option('admin_email');


	// Email headers
	$headers[] = 'Content-Type: text/html; charset=UTF-8';
	$headers[] = 'From: My Website <' . $admin_email . '>';
	$headers[] = 'Reply-to:' . $formdata['email'];

	// Who are we sending the email to?
	$send_to = $admin_email;

	// Subject
	$subject = "Enquiry from " . $formdata['name']; 

	// Message
	$message = '';

	foreach($formdata as $index => $field)
	{
		$message .= '<strong>' . $index . '</strong>: ' . $field . '<br />';
	}


	try {

		if( wp_mail($send_to, $subject, $message, $headers) )
		{

			wp_send_json_success('Email sent');

		}
		else {


			wp_send_json_error('Email error');

		}

	} catch (Exception $e)
	{
			wp_send_json_error($e->getMessage());
	}


	wp_send_json_success( $formdata['name'] );
}

//COMMENT FORM

add_filter( 'comment_form_default_fields', 'remove_website_from_fields' );

function remove_website_from_fields( $fields ) {
    if ( isset( $fields['url'] ) )
        unset( $fields['url'] );
    return $fields;
}


//SEARCH FORM
function modify_search_query($query) {
    if ($query->is_search && !is_admin()) {
        $query->set('post_type', array('post', 'products'));
    }
    return $query;
}
add_filter('pre_get_posts','modify_search_query');


//SLIDER SCRIPT FOR FRONT PAGE
function add_slider_front_page() {
    if ( is_front_page() ) {
        wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/sliderFile.js', array(), '1.0', true );
    }
}
add_action( 'wp_enqueue_scripts', 'add_slider_front_page' );

?>