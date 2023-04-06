<?php get_header(); ?>
<main>

    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/assets/imgs/wilma-banner.jpg') ?>);"></div>
        <div class="page-banner__content container-custom container--narrow">
            <h1 class="page-banner__title"><?php the_archive_title( ); ?></h1>
            <div class="page-banner__intro">
                <p><?php the_archive_description( ); ?></p>
            </div>
        </div>  
    </div>
    
    <?php if (have_posts()) : ?>
        <div class="archive-container-grid">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/content', 'archive'); ?>
            <?php endwhile; ?>
        </div>

        <?php the_posts_navigation(); ?>

        <?php else : ?>
            <p><?php esc_html_e('Lo siento, no hay artículos en este criterio.'); ?></p>
    <?php endif; ?>
    
</main>

<?php get_footer(); ?>
