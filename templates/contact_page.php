<?php 

/*
Template Name: Contact
*/

?>

<?php get_header(); ?>

<main>

<?php pageBanner(); ?>

<section>
    <div class="datos_wilma">
        <h2><span>e-mail:</span> wilma@wilmanutre.com</h2>
        <h2><span>Teléfono:</span> 5406173054</h2>
        <h2>Stafford, VA</h2>
    </div>

    <form id="enquiry" class="contact_contact-box">
			<div class="contact_left contact_grid-item">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/wilma.png" alt="Foto de la licenciada Wilma Corrales">
                </figure>
            </div>
			<div class="contact_right contact_grid-item">
				<h2>Déjame un mensaje</h2>
				<input type="text" name="name" class="contact_field" placeholder="Nombre" required>
                <input type="email" name="email" class="contact_field" placeholder="email" required>
                <input type="tel" name="phone" class="contact_field" placeholder="Teléfono" required>
                <textarea name="message" placeholder="Mensaje" class="contact_field" required></textarea>
				<button type="submit" class="contact_btn">Enviar</button>
                
		    </div>
            </form>
            <div id="success_message" class="alert-success" style="display:none"></div>
            <div class="wilma-info box center-app">
                    <h2>Agenda tu cita ahora.</h2>
                    <a class="whatsapp-link" href="https://wa.me/15406173054?text=Hola%20Wilma,%20, quiero%20agendar%20una%20cita">
                        <p>Chat directo →</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/whatsapp-button.png" alt="Boton para chatear por whastapp">
                    </a>
            </div>
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

</section>

</main>

<?php get_footer(); ?>
