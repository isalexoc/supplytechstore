

        <div class="container_content container_content_product">
            <div class="p-imgs product_content_item">
                <br>
                <span>Categorías: <?php the_terms( get_the_ID(  ), 'cat-products'); ?></span><br>

                <?php 
                    the_terms( get_the_ID(  ), 'tag-products', '<span class="tag-single-custom"><i class="fa fa-tag"></i>&nbsp;', '</span><span class="tag-single-custom"><i class="fa fa-tag"></i>&nbsp;', '</span>');
                ?><br>
                
                <span class="comment"><a href=""><i class='fa fa-comment'></i>&nbsp;<?php comments_number(); ?></a></span>

                <br><br>

                <div class="featured-img-single-product">
                    <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail('medium');
                        } ?> 
                </div>
            </div>

           <div class="p-des product_content_item">
                <?php the_content(); ?>
                <?php 
                $link = get_field('link');
                if( $link ): ?>
                    <a class="button hero-btn" href="<?php echo esc_url( $link ); ?>">Comprar en Amazon</a>
                <?php endif; ?>
           </div>

           <br><br><br>

           

           <?php comments_template(); ?>

           
        </div>


