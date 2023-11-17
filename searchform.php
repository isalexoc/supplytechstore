<?php
/**
 * Template for displaying search forms in wilmanuthe-theme
 *
 * @package wilmanuthe-theme
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">

	<div class="input-group input-group-lg">
		<button 
			type="submit" 
			class="search-submit input-group-text rounded-start-5">
				<span class="fas fa-search"></span>
				<span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'twentysixteen' ); ?></span>
		</button>
		<input 
			type="search" 
			class="search-field form-control rounded-end-5" 
			placeholder="<?php echo esc_attr_x( 'Buscar productos &hellip;', 'placeholder', 'twentysixteen' ); ?>" 
			value="<?php echo get_search_query(); ?>" name="s" 
		/>
	</div>

	<?php if( class_exists( 'WooCommerce' )): ?>
		<input type="hidden" value="product" name="post_type" id="post_type">
	<?php endif; ?>
</form>

