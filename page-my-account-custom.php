<?php
/*
Template Name: My Account Custom Template
*/

get_header();

while (have_posts()) {
    the_post(); ?>

    <div class="container-custom container--narrow page-section">

        <?php
        $theParent = wp_get_post_parent_id(get_the_ID());
        if ($theParent) { ?>
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Regresa a <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
            </div>
        <?php }
        ?>

        <?php
        $testArray = get_pages(array(
            'child_of' => get_the_ID()
        ));

        if ($theParent or $testArray) { ?>
            <div class="page-links">
                <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
                <ul class="min-list">
                    <?php
                    if ($theParent) {
                        $findChildrenOf = $theParent;
                    } else {
                        $findChildrenOf = get_the_ID();
                    }

                    wp_list_pages(array(
                        'title_li' => NULL,
                        'child_of' => $findChildrenOf,
                        'sort_column' => 'menu_order'
                    ));
                    ?>
                </ul>
            </div>
        <?php } ?>

        <?php
        if (is_page('mi-cuenta')) { // Check if this is the "My Account" page
            if (is_user_logged_in()) { // Check if the user is logged in
                // Display the WooCommerce account information using the shortcode
                echo do_shortcode('[woocommerce_my_account]');
            } else {
                // Display a message to prompt the user to log in
                echo 'Please log in to view your account information.';
            }
        }
        ?>

    </div>

<?php }

get_footer();
