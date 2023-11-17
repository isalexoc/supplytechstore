<?php



//ADD THEME SUPPORT


function wilmanutre_theme_support() {
    // Adding dinamic title tag support
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );
    add_theme_support( 'widgets' );
	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width' => 255,
		'single_image_width'	=> 255,
		'product_grid' 			=> array(
			'default_rows'    => 10,
			'min_rows'        => 5,
			'max_rows'        => 10,
			'default_columns' => 1,
			'min_columns'     => 1,
			'max_columns'     => 1,				
		)
	) );
}

add_action('after_setup_theme', 'wilmanutre_theme_support');

function wilmanutre_register_styles() {
    
    wp_enqueue_style( 'poppins-font', 'https://fonts.googleapis.com/css2?family=Poppins&display=swap' );
    wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.css');
      // Enqueue Bootstrap CSS
      wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.css');
	  wp_enqueue_style('my-custom-css', get_stylesheet_directory_uri() . '/css/styles.css');
}

add_action('wp_enqueue_scripts', 'wilmanutre_register_styles');

function wilmanutre_register_scripts() {
    wp_enqueue_script( 'replaceme-js', get_template_directory_uri() . '/js/replaceme.min.js', array(), '1.3', true );
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), '3.6.0', true);
    wp_enqueue_script( 'my-custom-script', get_template_directory_uri() . '/js/script.js', array(), '1.3', true );
    // Enqueue Bootstrap 5 JavaScript
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), null, true);
  }
  
add_action( 'wp_enqueue_scripts', 'wilmanutre_register_scripts' );


// MENUS
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',

    )
);







/**
 * Change the number of products displayed per page.
 *
 * @param int $per_page Number of products per page.
 * @return int Custom number of products per page.
 */
function custom_change_products_per_page( $per_page ) {
    return 24; // Change this number to the desired quantity.
}
add_filter( 'loop_shop_per_page', 'custom_change_products_per_page', 20 );


/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'fancy_lab_woocommerce_header_add_to_cart_fragment' );

function fancy_lab_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
	<?php
	$fragments['span.items'] = ob_get_clean();
	return $fragments;
}