<footer>
        <div class="footer-container">
           <div class="footer-logo">
           <a href=<?php echo site_url() ?>><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo.png" alt="Logo Wilma Nutre"></a>
           </div>
           <div class="footer-newsletter">
                <form id="enquiry">
                    <label for="email">
                        <span>Recibe contenido de expertos en tu correo</span>
                    </label>
                    <div class="newsletter-input">
                        <input type="email" name="email" placeholder="Ingresa tu email" required>
                        <button type="submit">Reg&iacute;strame</button>
                    </div>
                </form>
                <div id="success_message" class="alert-success" style="display:none"></div>
           </div>
           <div class="footer-social">
               <span>S&iacute;gueme</span>
               <ul class="social-links">
                  <a href="https://www.instagram.com/wilma_corrales">
                     <li>
                         <i class="fa-brands fa-instagram"></i>
                     </li>
                  </a>
                  <a href="https://www.facebook.com/wilmacorralest">
                       <li>
                        <i class="fa-brands fa-facebook"></i>
                       </li>
                  </a>
                  <a href="www.tiktok.com/@wilmacorrales205">
                      <li>
                        <i class="fa-brands fa-tiktok"></i>
                     </li>
                </a>
                <a href="https://www.youtube.com/@wilmanutre">
                     <li>
                        <i class="fa-brands fa-youtube"></i>
                     </li>
                </a>
                <a href="https://twitter.com/@corrales_wilma">
                     <li>
                        <i class="fa-brands fa-twitter"></i>
                     </li>
                </a>
               </ul>
           </div>
           <div class="footer-topics">
                <nav>
                    <ul class="topics-items">
                        <li>
                            <a href=<?php echo site_url('/alimentos-esenciales') ?>>Alimentos esenciales</a>
                        </li>
                        <li>
                            <a href=<?php echo site_url('/consejos') ?>>Consejos</a>
                        </li>
                        <li>
                            <a href=<?php echo site_url('/ayuno-intermitente') ?>>Ayuno intermitente</a>
                        </li>
                        <li>
                            <a href=<?php echo site_url('/noticias') ?>>Noticias</a>
                        </li>
                    </ul>
                </nav>
           </div>
           <div class="footer-links">
                <ul class="footer-links__list">
                    <li><a href=<?php echo site_url('/recetas') ?>>Recetas</a></li>
                    <li><a href=<?php echo site_url('/jugos-verdes') ?>>Jugos verdes</a></li>
                    <li><a href=<?php echo site_url('/dietas') ?>>Dietas</a></li>
                    <li><a href=<?php echo site_url('/super-alimentos') ?>>Super alimentos</a></li>
                    <li><a href=<?php echo site_url('/perder-peso') ?>>Perder peso</a></li>
                    <li><a href=<?php echo site_url('/consejos') ?>>Consejos</a></li>
                    <li><a href=<?php echo site_url('/alimentos-daninos') ?>>Alimentos da&ntilde;inos</a></li>
                    <li><a href=<?php echo site_url('/vitaminas') ?>>Vitaminas</a></li>
                    <li><a href=<?php echo site_url('/meditacion') ?>>Meditaci&oacute;n</a></li>
                    <li><a href=<?php echo site_url('/acerca-de-mi') ?>>Acerca de mi</a></li>
                    <li><a href=<?php echo site_url('/privacy-policy') ?>>Politica de privacidad</a></li>
                </ul>
           </div>
           <div class="footer-global">
               <div class="global-container">
                   <div class="global-nutrition">
                    <a href=<?php echo site_url() ?>>
                        Wilma<span>Nutre</span> <span>Nutrici&oacute;n</span>
                    </a>
                   </div>
                   <div class="global-meditation">
                    <a href=<?php echo site_url('/meditacion') ?>>
                        Wilma<span>Nutre</span> <span>Meditaci&oacute;n</span>
                    </a>
                   </div>
                   <div class="global-self">
                    <a href=<?php echo site_url('/autoestima') ?>>
                        Wilma<span>Nutre</span> <span>Autoestima</span>
                    </a>
                   </div>
               </div>
           </div>
           <div class="footer-button">
            <p>El contenido de WilmaNutre es solo para fines informativos y educativos. Nuestro sitio web no pretende ser un sustituto del consejo, diagnóstico o tratamiento médico profesional.</p>
            <p>Ⓒ 2023 Ominvestments, LLC. — Todos los derechos reservados</p>
           </div>
        </div>
    </footer>

    <script>


(function($){



    $('#enquiry').submit( function(event){


        event.preventDefault();

        var endpoint = '<?php echo admin_url('admin-ajax.php');?>';

        var form = $('#enquiry').serialize();

        var formdata = new FormData;

        formdata.append('action','enquiry');
        formdata.append('nonce', '<?php echo wp_create_nonce('ajax-nonce');?>');
        formdata.append('enquiry', form);

        

        $.ajax(endpoint, {

            type:'POST',
            data:formdata,
            processData: false,
            contentType: false,
  

            success: function(res){

                    $('#enquiry').fadeOut(200);

                    $('#success_message').text('Gracias, te respondo a la brevedad').show();

                    $('#enquiry').trigger('reset');

                    $('#enquiry').fadeIn(500);



            },


            error: function(err)
            {
                alert(err.responseJSON.data);

            }


        })

    })



})(jQuery)


</script>

    <?php wp_footer(); ?>
</body>
</html>