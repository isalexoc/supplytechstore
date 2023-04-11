<?php get_header(); ?>

<main>

    <?php pageBanner(); ?>
    
    <?php if (have_posts()) : ?>
        <div class="single-product-container">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/content', 'product'); ?>
            <?php endwhile; ?>
        </div>

        <?php the_posts_navigation(); ?>

        <?php else : ?>
            <p><?php esc_html_e('Lo siento, no hay productos en este criterio.'); ?></p>
    <?php endif; ?>
    
</main>

<?php get_footer(); ?>
