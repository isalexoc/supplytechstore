<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

?>

<div class="container">
    <div class="row py-5">
        <div class="col-md-3">
		   <div class="d-none d-md-block"> <!-- Display only on medium and larger screens -->
        <!-- Display product categories as a list -->


<?php
// Display product categories as a list
$product_categories = get_terms('product_cat', array(
    'orderby'    => 'name',
    'order'      => 'ASC',
    'hide_empty' => 0,
));

if (!empty($product_categories)) {
	
	echo '<h4 class="ms-3">Categorías</h4>';
    echo '<ul class="cat-lista list-group list-group-flush ">';
	
    foreach ($product_categories as $category) {
        echo '<li class="list-group-item"><a class="text-decoration-none text-primary fw-bold" href="' . get_term_link($category) . '">' . $category->name . '</a></li>';
    }
    echo '</ul>';
}

?>
</div>
</div>
<div class=" col-12 d-md-none"> <!-- Display only on small screens (mobile) -->
    <form id="category-select-form" action="<?php echo esc_url(home_url('/')); ?>" method="GET">
        <select class="form-select fs-3 mb-2" id="category-select" name="product_cat">
            <option value="">selecciona una categoría</option>
            <?php
            if (!empty($product_categories)) {
                foreach ($product_categories as $category) {
                    echo '<option value="' . get_term_link($category) . '">' . $category->name . '</option>';
                }
            }
            ?>
        </select>
	</form>
</div>

 <div class="col-md-9">
<?php

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>



<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>
<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
        
            ?>
            <div class="row">
            <?php
        
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );
            ?>
            <div class="producto-individual col-md-3 col-sm-6">
            <?php

			wc_get_template_part( 'content', 'product' );
            ?>
            </div>
            <?php
		}
            ?>
            </div>
            <?php
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );



?>
</div>
</div>
</div>
<?php

get_footer( 'shop' );


