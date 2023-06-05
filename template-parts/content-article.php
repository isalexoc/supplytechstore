



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
    </div>

    <div class="container_content_product">
    
        <section class="blog_content_item with_blog-content">
            <div class="container_content">

                <h2><?php the_excerpt(); ?></h2>

                <?php the_content(); ?>

            </div>
        </section>

        <section class="blog_content_item with_blog-sidebar">
            <div class="container_content sidebar_blog">
                <?php
                    //SIDEBAR
                    if(is_active_sidebar('blog-sidebar' )):?>

                        <?php dynamic_sidebar( 'blog-sidebar' ); ?>

                <?php endif; ?>
            </div>
        </section>

    </div>

    <div class="container_content">
        <?php comments_template(); ?>
    </div>
    



