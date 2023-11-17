<?php


get_header(); ?>

<!-- Header -->
    <div class="header-dos position-relative overflow-hidden">
      <img
        src="<?php echo get_template_directory_uri() . '/images/vertical-decoration-left.svg'; ?>"
        alt=""
        class="vertical-decoration position-absolute d-none d-md-block"
      />
      <div class="container">
        <div class="row">
          <div class="col-md-6 pt-5">
            <h1 class="xl-text mt-5 text-white">
            Productos y Soluciones para la
              <span class="titulo-header text-primary fw-bold replace-me"
                >Industria, Construcción, &nbsp;&nbsp;vivienda&nbsp;&nbsp;</span
              >
            </h1>
            <p class="display-6 text-white">
                Impulsa tu negocio.
            </p>
            <a href="<?php echo esc_url(home_url('/catalogo')); ?>" class="boton-header btn btn-primary text-white fw-bold fs-4">Visita la tienda</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Partners -->
    <section class="partners py-6 overflow-hidden">
      <div class="container">
        <div class="text-center mb-5">
            <h4 class="mb-2">Nuestras Marcas</h4>
        </div>
        
        <div class="card-group">
            <div class="card" style="width: 25rem">
              <div class="d-flex align-items-center justify-content-center h-100">
                <img src="<?php echo get_template_directory_uri() . '/images/l1.jpg'; ?>" class="card-img-top" alt="" />
              </div>
            </div>
            <div class="card" style="width: 25rem">
              <div class="d-flex align-items-center justify-content-center h-100">
                <img src="<?php echo get_template_directory_uri() . '/images/l2.jpg'; ?>" class="card-img-top" alt="" />
              </div>
                
            </div>
            <div class="card" style="width: 25rem">
              <div class="d-flex align-items-center justify-content-center h-100">
                <img src="<?php echo get_template_directory_uri() . '/images/l3.jpg'; ?>" class="card-img-top" alt="" />
              </div>
                
            </div>
            <div class="card" style="width: 25rem">
              <div class="d-flex align-items-center justify-content-center h-100">
                <img src="<?php echo get_template_directory_uri() . '/images/l4.jpg'; ?>" class="card-img-top" alt="" />
              </div>
                
            </div>
            <div class="card" style="width: 25rem">
              <div class="d-flex align-items-center justify-content-center h-100">
                <img src="<?php echo get_template_directory_uri() . '/images/l5.jpg'; ?>" class="card-img-top" alt="" />
              </div>
                
            </div>
            <div class="card" style="width: 25rem">
              <div class="d-flex align-items-center justify-content-center h-100">
                <img src="<?php echo get_template_directory_uri() . '/images/l6.jpg'; ?>" class="card-img-top" alt="" />
              </div>
                
            </div>
            <div class="card" style="width: 25rem">
              <div class="d-flex align-items-center justify-content-center h-100">
                <img src="<?php echo get_template_directory_uri() . '/images/l7.jpg'; ?>" class="card-img-top" alt="" />
              </div>
                
            </div>
            <div class="card" style="width: 25rem">
              <div class="d-flex align-items-center justify-content-center h-100">
                <img src="<?php echo get_template_directory_uri() . '/images/l8.jpg'; ?>" class="card-img-top" alt="" />
              </div>
                
            </div>
       </div>

      </div>
    </section>

<!-- Categorías de Productos -->
<section class="product-categories text-bg-dark py-6 position-relative">
  <div class="container position-relative">
    <div class="text-center mb-5">
      <h2 class="mb-2">Descubre Nuestros Productos</h2>
      <p class="lead">
        Tenemos una amplia variedad de productos de ferretería disponibles para ti en toda Venezuela. Explora nuestras categorías.
      </p>
    </div>
    <div class="row">
      <div class="col-md-4 text-center">
        <i class="fas fa-hard-hat fa-3x text-primary mb-3"></i>
        <h3 class="fs-3">Construcción</h3>
        <hr class="w-25 mx-auto" />
        <p class="fs-5">
          Encuentra todo lo que necesitas para tus proyectos de construcción.
        </p>
      </div>

      <div class="col-md-4 text-center">
        <i class="fas fa-bolt fa-3x text-primary mb-3"></i>
        <h3 class="fs-3">Electricidad</h3>
        <hr class="w-25 mx-auto" />
        <p class="fs-5">
          Descubre productos eléctricos de alta calidad para tu hogar o negocio.
        </p>
      </div>

      <div class="col-md-4 text-center">
        <i class="fas fa-tools fa-3x text-primary mb-3"></i>
        <h3 class="fs-3">Herramientas</h3>
        <hr class="w-25 mx-auto" />
        <p class="fs-5">
          Explora nuestra gama de herramientas para tus proyectos de construcción.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Estadísticas -->
<section class="stats py-6 text-bg-secondary">
  <div class="container">
    <div class="row g-0">
      <div class="col-md-4 col-lg-2">
        <div class="stat text-center border-end border-dark">
          <i class="fas fa-fire fa-3x mb-3 mb-sm-1"></i>
          <p class="fs-4">Soldadura y Oxicorte</p>
          <h6 class="text-uppercase">Productos de Calidad</h3>
        </div>
      </div>
      <div class="col-md-4 col-lg-2">
        <div class="stat text-center border-end border-dark">
          <i class="fas fa-screwdriver fa-3x mb-3 mb-sm-1"></i>
          <p class="fs-4">Tornillería</p>
          <h6 class="text-uppercase">Amplia Variedad</h3>
        </div>
      </div>
      <div class="col-md-4 col-lg-2">
        <div class="stat text-center border-end border-dark">
          <i class="fas fa-hammer fa-3x mb-3 mb-sm-1"></i>
          <p class="fs-4">Herramientas Manuales</p>
          <h6 class="text-uppercase">Alta Calidad</h3>
        </div>
      </div>
      <div class="col-md-4 col-lg-2">
        <div class="stat text-center border-end border-dark">
          <i class="fas fa-bolt fa-3x mb-3 mb-sm-1"></i>
          <p class="fs-4">Herramientas Eléctricas</p>
          <h6 class="text-uppercase">Eficiencia Energética</h3>
        </div>
      </div>
      <div class="col-md-4 col-lg-2">
        <div class="stat text-center border-end border-dark">
          <i class="fas fa-recycle fa-3x mb-3 mb-sm-1"></i>
          <p class="fs-4">Consumibles</p>
          <h6 class="text-uppercase">Productos Eco-Amigables</h3>
        </div>
      </div>
      <div class="col-md-4 col-lg-2">
        <div class="stat text-center border-end border-dark">
            <i class="fas fa-wrench fa-3x mb-3 mb-sm-1"></i>
            <p class="fs-4">Plomería</p>
            <h6 class="text-uppercase">Sistemas de Plomería</h3>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
get_footer(); 
