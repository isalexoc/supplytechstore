<?php 

/*
Template Name: about
*/

?>

<?php get_header('about');?>  

<?php pageBanner(); ?>  

<div class="container_about">
    <h2>Hola, soy Wilma Corrales</h2>
    <div class="main-content_container">
      <div class="first-div grid-div-container">
        <p>Desde siempre, he creído que somos lo que comemos y por eso considero que es fundamental prestar atención a nuestra alimentación. Me gradué como licenciada en Bioanálisis en la Universidad de Carabobo, en Venezuela, y mi vida dio un giro inesperado cuando me diagnosticaron cáncer de garganta hace 9 años.</p>

        <img width="300px" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/wilma.png" alt="[nombre] - Licenciada en Bioanálisis" />
      </div>
      <div class="second-div grid-div-container-dif">
        
        <p class="grid-about-p">Gracias a Dios, pude recuperarme y fue entonces cuando comprendí la importancia de llevar una vida más saludable y consciente. Adopté buenos hábitos alimenticios y descubrí cómo la comida puede ser nuestra mejor aliada para mejorar nuestra salud y bienestar.</p>
        <img class="grid-about-img" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/about1.jpg" alt="Alimentación sana" />
      </div>
      <div class="third-div grid-div-container">
        <p>Desde ese momento, me propuse compartir mis conocimientos y experiencias con todos aquellos que buscan mejorar su calidad de vida. Por eso, decidí crear este blog personal, un espacio donde podrás encontrar consejos, recetas e información valiosa para llevar una vida más sana y plena.</p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/about2.jpg" alt="Recetas saludables" />
      </div>
      <div class="fourth-div grid-div-container-dif">
        
        <p class="grid-about-p">En este blog, también compartiré mis experiencias personales, cómo enfrenté el cáncer y cómo la alimentación sana me ayudó en mi proceso de recuperación. Además, encontrarás información sobre distintos alimentos, sus beneficios y cómo incorporarlos en tu dieta diaria de manera deliciosa y creativa.</p>
        <img class="grid-about-img" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/about3.jpg" alt="Superalimentos" />
      </div>
      <div class="fifth-div grid-div-container">
        <p>No solo me enfocaré en la alimentación, sino también en la importancia de llevar un estilo de vida activo y equilibrado, que incluya ejercicio y cuidado mental. Hablaré sobre la relevancia de la conexión entre cuerpo, mente y espíritu para lograr una vida plena y saludable.</p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/about4.jpg" alt="Ejercicio y bienestar" />
      </div>
      <div class="sixth-div grid-div-container-dif">
        
        <p class="grid-about-p">Te invito a unirte a mí en este viaje hacia el bienestar y a descubrir cómo la comida, el ejercicio y el cuidado de nuestra mente pueden transformar nuestras vidas. ¡Comencemos juntos este camino hacia una vida más saludable y feliz!</p>
        <img class="grid-about-img" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/about5.jpg" alt="Felicidad y salud" />
      </div>
    </div>
    <div class="about-video-intro">
      <h3>Video de introducción</h3>
      <div class="responsive-video">
        <iframe src="https://www.youtube.com/embed/_r8-J7IhnZ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
</div>

<?php get_footer(); ?>