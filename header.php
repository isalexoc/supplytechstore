<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class( ) ?>>
    <header class="header">
        <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark text-primary">
      <div class="container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand">
        SupplyTS
        </a>

        <!-- Modal Button -->
      <a 
        class="icons-user d-none"
        type="button"
        data-bs-toggle="modal"
        data-bs-target="#myModal">
          <i class="fas fa-search fa-2x text-white"></i>
      </a>
        
        
        <a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>" class="icons-user d-none"><i class="fas fa-user fa-2x text-white"></i></a>
        
        <div class="carrito-mobile nav-item d-none">
           <a class="nav-link fs-6 d-flex align-items-center text-white" href="<?php echo esc_url(home_url('/carrito')); ?>">
               <i class="fas fa-shopping-cart fa-2x"></i>
               <span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
           </a>
        </div>        

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto d-flex align-items-center text-center">

            <li class="nav-item d-none d-lg-flex">
                
                  <div class="text-center d-flex align-items-center">
                    <?php get_search_form(); ?>
                  </div>
                
            </li>

            
                
                <li class="nav-item">
                <a class="nav-link fs-5" href="<?php echo esc_url(home_url('/catalogo')); ?>">Catálogo</a>
                </li>
                <li class="nav-item d-none d-lg-flex ">
                  <a class="nav-link fs-5 d-flex align-items-center" href="<?php echo esc_url(home_url('/carrito')); ?>">
                    Carrito 
                    <i class="fas fa-shopping-cart fa-2x text-white"></i>
                    <span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                  </a>
                </li>
                
                <?php if( is_user_logged_in() ) : ?>
											<li class="nav-item">
												<a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ) ?>" class="nav-link fs-5">Cuenta</a>
											</li>
											<li class="nav-item">
												<a href="<?php echo esc_url( wp_logout_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ) ) ?>" class="nav-link fs-5">Logout</a>
											</li>
											<?php else: ?>
											<li class="nav-item">
												<a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ) ?>" class="nav-link fs-5">Login / Registro</a>
											</li>												
											<?php endif; ?>
                
                
                <li class="nav-item">
                <a class="nav-link fs-5" href="<?php echo esc_url(home_url('/contactanos')); ?>">Contáctanos</a>
                </li>
          </ul>
          
        </div>
      </div>
    </nav>
    
    </header>

    <section>
      <!-- Modal -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog"> <!-- Added this div -->
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="myModalLabel">Buscar productos</h1>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <ul class="navbar-nav ms-auto d-flex align-items-center text-center">
                        <li class="nav-item">
                            <div class="text-center d-flex align-items-center">
                                <?php get_search_form(); ?>
                            </div>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
      </div>
    </section>
    
