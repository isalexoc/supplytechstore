<?php get_header(); ?>

<main>
<section class="hero">
            <div class="hero-img-container">
                <div class="hero-message-container">
                    <h1>Alimentación <span>regenerativa.</span></h1>
                    <h2>Bioanalista de profesión, nutricionista <span>de corazón.</span></h2>
                    <a class="hero-btn" href=<?php echo site_url('/aprende-conmigo') ?>>Aprende conmigo</a>
                    <h3>"Eres lo <span>que comes."</span></h3>
                </div>
            </div>
            <div class="licenciada">
                <h2>Licenciada<br><span>Wilma Corrales.</span></h2>
            </div>
            <div class="wilma-info-container">
                <div class="wilma-img box">
                    <figure><img src="./wp-content/themes/wilmanutre-theme/assets/imgs/wilma.png" alt="Una foto de la licenciada Wilma Corrales"></figure>
                </div>
                <div class="wilma-info box">
                    <h2>Agenda tu cita ahora.</h2>
                    <a href="">
                        <p>Chat directo →</p>
                        <img src="./wp-content/themes/wilmanutre-theme/assets/icons/whatsapp-button.png" alt="Boton para chatear por whastapp">
                    </a>
                </div>
            </div>
</section>
<section class="services-main-grid">
    <h2>Cuál te interesa?</h2>
        <div class="services-grid__container">
            <div class="service-grid__item sg-item-1"><a href=<?php echo site_url('/recetas') ?>><span></span><p>Recetas</p></a></div>
            <div class="service-grid__item sg-item-2"><a href=<?php echo site_url('/jugos-verdes') ?>><span></span><p>Jugos verdes</p></a></div>
            <div class="service-grid__item sg-item-3"><a href=<?php echo site_url('/dietas') ?>><span></span><p>Dietas</p></a></div>
            <div class="service-grid__item sg-item-4"><a href=<?php echo site_url('/super-alimentos') ?>><span></span><p>Super alimentos</p></a></div>
            <div class="service-grid__item sg-item-5"><a href=<?php echo site_url('/perder-peso') ?>><span></span><p>Perder peso</p></a></div>
            <div class="service-grid__item sg-item-6"><a href=<?php echo site_url('/consejos') ?>><span></span><p>Consejos</p></a></div>
            <div class="service-grid__item sg-item-7"><a href=<?php echo site_url('/alimentos-daninos') ?>><span></span><p>Alimentos dañinos</p></a></div>
            <div class="service-grid__item sg-item-8"><a href=<?php echo site_url('/vitaminas') ?>><span></span><p>Vitaminas</p></a></div>
            <div class="service-grid__item sg-item-9"><a href=<?php echo site_url('/meditacion') ?>><span></span><p>Meditación</p></a></div>      
        </div>
</section>

<section class="post-section">
    <h2 class="section-tittle">Artículos nuevos <a class="hero-btn" href=<?php echo site_url('/blog') ?>>Ver todos</a></h2>
    <div class="post-container">
        <?php
            $homepagePosts = new WP_Query(array(
                'posts_per_page' => 3
            ));

            while ($homepagePosts->have_posts()) {
                $homepagePosts->the_post(  ); ?>
                <div class="post-link">
                    <article class="post">
                        <?php the_post_thumbnail( 'medium' ); ?>
                        <div class="post-title-content">
                            <div class="category-title"><?php the_category(); ?></div>
                            <h2><a href="<?php the_permalink( ); ?>"><?php the_title( ); ?></a></h2>
                            <h3><?php echo wp_trim_words( get_the_excerpt(  ), 18 ) ?><a href="<?php the_permalink( ); ?>"> Leer mas</a></h3>
                        </div>
                    </article>
                </div>
            <?php } wp_reset_postdata(  );
        ?>
    </div>
</section>

<section>
    <h2 class="section-tittle">Productos mas nuevos <a class="hero-btn" href=<?php echo get_post_type_archive_link('products'); ?>>Ver todos</a></h2>
    <?php 
        $homePageProducts = new WP_Query(array(
            'posts_per_page' => 4,
            'post_type' => 'products'
        ));?>

        <div class="archive-container-grid">

        <?php while($homePageProducts->have_posts(  )) {
            $homePageProducts->the_post(  );?>
            
            
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
                        <h4><?php echo wp_trim_words( get_the_excerpt(  ), 18 ) ?><a href="<?php the_permalink( ); ?>"> Leer mas</a></h4>
                    </div>

                </div>
            

            <?php
        } wp_reset_postdata(  ); ?>

        </div>

        

</section>


        <section class="advise-info__section">
            <h2>Alimentos esenciales</h2>
            <div class="advise-info__container">
                <div class="item-1 advise-box">
                    <div class="img-title">
                        <img src="./wp-content/themes/wilmanutre-theme/assets/imgs/nuts-small.jpg" alt="una foto de varios frutos secos">
                        <h3>Frutos secos</h3>
                    </div>
                    <p>Los frutos secos son ricos en proteínas, fibra, grasas saludables, vitaminas y minerales. Ayudan a la salud del corazón, el cerebro y el peso.</p>
                </div>
                <div class="item-2 advise-box">
                    <div class="img-title">
                        <img src="./wp-content/themes/wilmanutre-theme/assets/imgs/green-juice-small.jpg" alt="una foto de varios jugos verdes">
                        <h3>Jugos verdes</h3>
                    </div>
                    <p>Los jugos verdes son una bebida saludable, refrescante y llena de nutrientes. Una forma fácil de obtener una dosis diaria de vitaminas.</p>
                </div>
                <div class="item-3 advise-box">
                    <div class="img-title">
                        <img src="./wp-content/themes/wilmanutre-theme/assets/imgs/fruits-small.jpg" alt="una foto de varias frutas">
                        <h3>Frutas</h3>
                    </div>
                    <p>Las frutas son una fuente de vitaminas, minerales, fibra y antioxidantes. Agrega variedad y sabor a tu dieta, mientras mejoras tu salud.</p>
                </div>
                <div class="item-4 advise-box">
                    <div class="img-title">
                        <img src="./wp-content/themes/wilmanutre-theme/assets/imgs/vegetables-small.jpg" alt="una foto de varios vegetales">
                        <h3>Verduras y vegetales</h3>
                    </div>
                    <p>Las verduras son una excelente fuente de fibra, vitaminas, minerales y antioxidantes. Consumirlas regularmente ayuda a mantener una dieta saludable.</p>
                </div>
            </div>
        </section>
        <section>
            <div class="diets-container">
                <h3>Conoce la ciencia detrás de las dietas mas populares</h3>
                <ul>
                    <a href=<?php echo site_url('/dieta-mediterranea') ?>><li>Dieta Mediterranea</li></a>
                    <a href=<?php echo site_url('/dieta-dash') ?>><li>Dieta DASH</li></a>
                    <a href=<?php echo site_url('/dieta-keto') ?>><li>Dieta KETO</li></a>
                    <a href=<?php echo site_url('/dieta-vegana') ?>><li>Dieta Vegana</li></a>
                </ul>
                <img src="./wp-content/themes/wilmanutre-theme/assets/imgs/bowl-salad.png" alt="Un Bowl de ensalada">
            </div>
        </section>
        <section class="blog-info">
            <div class="blog-info__container">
                <div class="blog-info-hero">
                    <div class="blog-info-hero-text">
                        <p>Información confiable cuando mas lo necesitas.</p>
                        <h3>Conoce más, se mas saludable</h3>
                    </div>
                    <div class="blog-info-hero-img">
                        <figure><img src="./wp-content/themes/wilmanutre-theme/assets/imgs/blog-info-img.png" alt="Una foto de un plato de comida balanceada"></figure>
                    </div>
                </div>
                <div class="blog-info-links">
                    <a class="link-a" href=<?php echo site_url('/acerca-de-mi') ?>>
                        <h3>25 años</h3>
                        <p>de experiencia</p>
                    </a>
                    <a class="link-a" href=<?php echo site_url('/acerca-de-mi') ?>>
                        <h3>100+</h3>
                        <p>Datos basados en videncia</p>
                    </a>
                    <a class="link-a" href=<?php echo site_url('/acerca-de-mi') ?>>
                        <h3>150 Mil+</h3>
                        <p>Lectores cada mes</p>
                    </a>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>

