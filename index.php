<?php get_header(); ?>
<main>

    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/assets/imgs/wilma-banner.jpg') ?>);"></div>
        <div class="page-banner__content container-custom container--narrow">
            <h1 class="page-banner__title">Bienvenido a mi blog</h1>
            <div class="page-banner__intro">
                <p>Entérate de mis últimas noticias, productos, recomendaciones y mucho mas...</p>
            </div>
        </div>  
    </div>
    
    
    <?php if (have_posts()) : ?>
        <div class="archive-container-grid">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/content', 'archive'); ?>
            <?php endwhile; ?>
        </div>

        <div class="pagin-cont-product">

            <?php
            global $wp_query;

            $big = 999999999; // need an unlikely integer

            echo paginate_links(array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $wp_query->max_num_pages
            ));
            ?>

        </div>

        <?php else : ?>
            <p><?php esc_html_e('Lo siento, no hay artículos en este criterio.'); ?></p>

    <?php endif; ?>
</main>

<?php get_footer(); ?>
