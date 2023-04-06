
        <div class="container_content_archive">
            <a href=<?php the_permalink() ?>><div class="featured-img">
               <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail('large');
                } ?> 
            </div></a>
            <a href=<?php the_permalink() ?>><div class="category-tag-green">
                <h2><?php the_title(); ?></h2>
                <?php the_category(); ?>
                <h4><?php the_excerpt(); ?></h4>
            </div></a>

        </div>

  


