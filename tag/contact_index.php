<?php
include 'tag/breadcrumb_area.php';
?>


<!-- ##### Contact Area Info Start ##### -->
<div class="contact-area-info section-padding-0-100">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <!-- Contact Thumbnail -->
            <div class="col-12 col-md-6">
                <div class="contact--thumbnail">
             
                    <img src="img/bg-img/25.jpg" alt="">
                </div>
            </div>

            <div class="col-12 col-md-5">
                <!-- Section Heading -->
                <div class="section-heading">
                    <h2>CONTACTENOS</h2>
                    <p>Estamos mejorando nuestros servicios para atenderle mejor..</p>
                </div>
                <!-- Contact Information -->
                <div class="contact-information">
                    <p><span>Dirección:</span> <?php print $var_address;?> </p>
                    <p><span>Teléfono:</span> <?php print $var_phone;?></p>
                    <p><span>Email:</span><?php print $var_email;?></p>
                    <p><span> Horario de Lunes a Viernes:</span><?php print $var_horariosemana; ?></p>
                    <p><span>Horario de Sábado:</span>'<?php print $var_horariofinsemana;?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Contact Area Info End ##### -->';


<!-- ##### Contact Area Start ##### -->
<section class="contact-area">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-12 col-lg-5">
                <!-- Section Heading -->
                <div class="section-heading">
                    <h2>PONTE EN CONTACTO CON NOSOTROS</h2>
                    <p>Envíenos un mensaje, le llamaremos más tarde.</p>
                </div>
                <!-- Contact Form Area -->
                <div class="contact-form-area mb-100">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="contact-name" placeholder="Nombres y apellidos">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input type="number" class="form-control" id="contact-phone" placeholder="Teléfono">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="emai" class="form-control" id="contact-email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="contact-subject" placeholder="Asunto">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Escribe tu consulta"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn alazea-btn mt-15">Enviar mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <!-- Google Maps -->
                <div class="map-area mb-100">

                    <?php print $var_ubicacionsucursal; ?> 
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->