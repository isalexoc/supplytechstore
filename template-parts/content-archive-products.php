        <div class="container_content_archive_product">
            <a class="product-img-anchor" href=<?php the_permalink() ?>>
                <div class="featured-img featured-img-product">
                    <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail('medium');
                    } ?> 
                </div>
            </a>
            
                <div class="category-tag-green">
                <h2><a href=<?php the_permalink() ?>><?php the_title(); ?></a></h2>
                <span class="cat-p-green-tag"><?php the_terms( get_the_ID(  ), 'cat-products'); ?></span>
                <h4><?php the_excerpt(); ?></h4>

            </div>

        </div>

  