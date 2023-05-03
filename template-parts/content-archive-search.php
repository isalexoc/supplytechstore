


<div class="container-archive-search">
    <a class="product-img-anchor" href=<?php the_permalink() ?>>
        <div class="img-archive-search">
            <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail('medium');
            } ?> 
        </div>
    </a>

    <div class="category-tag-green">
        <h2><a href=<?php the_permalink() ?>><?php the_title(); ?></a></h2>
        <span class="cat-p-green-tag">
            <?php
                $post_type = get_post_type();

                // Check if it's a custom post type or a blog post (standard post)
                if ($post_type == 'post') {
                    // This is a standard blog post
                    the_category();
                } else {
                    // This is a custom post type
                    the_terms( get_the_ID(  ), 'cat-products');
                }
            ?>
        </span>
        <span class="cat-p-blue-tag">
            <?php
                $post_type = get_post_type();

                // Check if it's a custom post type or a blog post (standard post)
                if ($post_type == 'post') {
                    // This is a standard blog post
                   echo "Artículo";
                } else {
                    // This is a custom post type
                   echo "Producto";
                }
            ?>
        </span>
        <h4><?php the_excerpt(); ?></h4>
    </div>
</div>