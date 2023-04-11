
<main>
            <div class="page-banner">
                <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/assets/imgs/wilma-banner.jpg') ?>);"></div>
                <div class="page-banner__content container-custom container--narrow">
                    <h1 class="page-banner__title"><?php the_title(); ?></h1>
                    <div class="page-banner__intro">
                    <p><?php the_excerpt(  ) ?></p>
                    </div>
                </div>  
            </div>
    <section>
        <div class="container_content">

            <span><?php the_date(); ?></span><br>
            <span>Categorías: <?php the_category(); ?></span><br>

            <?php 
            the_tags( '<span class="tag-single-custom"><i class="fa fa-tag"></i>&nbsp;', '</span><span class="tag-single-custom"><i class="fa fa-tag"></i>&nbsp;', '</span>');
            ?><br>
            
            <span class="comment"><a href=""><i class='fa fa-comment'></i>&nbsp;<?php comments_number(); ?></a></span>

            <div class="featured-img">
               <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail('large');
                } ?> 
            </div>

            <h2><?php the_excerpt(); ?></h2>

            <?php the_content(); ?>

            <?php comments_template(); ?>

        </div>
    </section>
    
</main>


