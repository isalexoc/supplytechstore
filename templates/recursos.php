<?php 

/*
Template Name: recursos
*/

?>

<?php get_header('recursos');?>  

<main>

  <?php pageBanner(); ?>  

  <section>
    <div class="recursos__container">
      <h2 class="recursos-title">Encuentra la opción que más te interese</h2>
      <div class="recursos-opciones__container">
        
        <a href="<?php echo site_url('/blog') ?>">
          <div class="opciones-item__container blog-item__container">
            <div class="item-content__container">
              <h2>BLOG</h2>
              <h3>Últimas <br> publicaciones</h3>
            </div>
          </div>
        </a>
        <a href="<?php echo site_url('/products') ?>">
          <div class="opciones-item__container productos-item__container">
            <div class="item-content__container">
              <h2>PRODUCTOS</h2>
              <h3>Selección <br> saludable</h3>
            </div>
          </div>
        </a>
        <a href="<?php echo site_url('/acerca-de-mi') ?>">
          <div class="opciones-item__container acerca-item__container">
            <div class="item-content__container">
              <h2>ACERCA DE MÍ</h2>
              <h3>Mi <br> historia</h3>
            </div>
          </div>
        </a>
        <a href="<?php echo site_url('/contacto') ?>">
          <div class="opciones-item__container contacto-item__container">
            <div class="item-content__container">
              <h2>CONTACTO</h2>
              <h3>Escríbeme</h3>
            </div>
          </div>
        </a>
        <a href="<?php echo site_url('/consejos') ?>">
          <div class="opciones-item__container consejos-item__container">
            <div class="item-content__container">
              <h2>CONSEJOS</h2>
              <h3>Vida <br> equilibrada</h3>
            </div>
          </div>
        </a>
        <a href="<?php echo site_url('/dietas') ?>">
          <div class="opciones-item__container dietas-item__container">
            <div class="item-content__container">
              <h2>DIETAS</h2>
              <h3>Planes <br> alimenticios</h3>
            </div>
          </div>
        </a>
        <a href="<?php echo site_url('/jugos-verdes') ?>">
          <div class="opciones-item__container jugos-item__container">
            <div class="item-content__container">
              <h2>JUGOS VERDES</h2>
              <h3>Energía <br> líquida</h3>
            </div>
          </div>
        </a>
        <a href="<?php echo site_url('/meditacion') ?>">
          <div class="opciones-item__container meditacion-item__container">
            <div class="item-content__container">
              <h2>MEDITACIÓN</h2>
              <h3>Bienestar <br> emocional</h3>
            </div>
          </div>
        </a>
        <a href="<?php echo site_url('/noticias') ?>">
          <div class="opciones-item__container noticias-item__container">
            <div class="item-content__container">
              <h2>NOTICIAS</h2>
              <h3>Actualidad <br> nutricional</h3>
            </div>
          </div>
        </a>
        <a href="<?php echo site_url('/perder-peso') ?>">
          <div class="opciones-item__container perderpeso-item__container">
            <div class="item-content__container">
              <h2>PERDER PESO</h2>
              <h3>Estrategias <br> efectivas</h3>
            </div>
          </div>
        </a>
        <a href="<?php echo site_url('/recetas') ?>">
          <div class="opciones-item__container recetas-item__container">
        <div class="item-content__container">
        <h2>RECETAS</h2>
        <h3>Cocina <br> saludable</h3>
        </div>

          </div>
        </a>
        <a href="<?php echo site_url('/super-alimentos') ?>">
          <div class="opciones-item__container super-item__container">
            <div class="item-content__container">
              <h2>SUPER ALIMENTOS</h2>
              <h3>Potencia <br> nutricional</h3>
            </div>
          </div>
        </a>
        <a href="<?php echo site_url('/vitaminas') ?>">
          <div class="opciones-item__container vitaminas-item__container">
            <div class="item-content__container">
              <h2>VITAMINAS</h2>
              <h3>Equilibrio <br> dietético</h3>
            </div>
          </div>
        </a>
        <a href="<?php echo site_url('/aprende-conmigo') ?>">
          <div class="opciones-item__container aprende-item__container">
            <div class="item-content__container">
              <h2>APRENDE CONMIGO</h2>
              <h3>Cursos <br> online</h3>
            </div>
          </div>
        </a>
        <a href="<?php echo site_url('/ayuno-intermitente') ?>">
          <div class="opciones-item__container ayuno-item__container">
            <div class="item-content__container">
              <h2>AYUNO INTERMITENTE</h2>
              <h3>Práctica <br> rejuvenecedora</h3>
            </div>
          </div>
        </a>
      

      </div>
    </div>
  </section>

  <section>
  <div class="wilma-info box center-app">
                    <a class="whatsapp-link" href="https://wa.me/15406173054?text=Hola%20Wilma,%20, quiero%20agendar%20una%20cita">
                        <p>Chat directo →</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/whatsapp-button.png" alt="Boton para chatear por whastapp">
                    </a>
    </div>
  </section>
</main>

<?php get_footer(); ?>