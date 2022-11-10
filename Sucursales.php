<?php
/*Plantilla para contactos de sucursales*/
$sucursal="Sucursales de Nicaragua";
include 'tag/head.php';
include 'tag/header.php';
include 'tag/breadcrumb_area.php';
 $var_nombre_de_sucursal= "<h2>Información de contacto de sucursal Managua<h2>";
 $var_address= "Esta es la dereccion ";
 $var_phone="Este es nuestros telefono";
 $var_email="infofunecachamanagua@gmail.com";
 $var_horariosemana=" 24/7 Todos los dias del año.";
 $var_ubicacionsucursal='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.6084409599803!2d-86.22330498515586!3d12.138921335885165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f73fdd60b242b1b%3A0x3e73897cc7e67029!2sFuneraria%20Carrasco%20Chavarria%20y%20Cia.%20Ltda.!5e0!3m2!1ses!2sni!4v1667324896170!5m2!1ses!2sni" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
/*Sucursal Chinandega*/
$var_sucursal1="<h2>Información de contacto de sucursal Chinandega<h2>";
$var_address1= "Hotel Balladares 25 ves al Oeste.";
$var_phone1="+505 2346 -8301";
$var_email1="infofunecachamanagua@gmail.com";
$var_ubicacionsucursal1='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d760.9665018430918!2d-87.1256446656326!3d12.631886759265441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f70f14b39310bf3%3A0xd4ad1ca6c8f2c2d0!2sFuneraria%20Carrasco%20Chavarria%20Chinandega.!5e0!3m2!1ses!2sni!4v1667330761037!5m2!1ses!2sni" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
/*Sucursal Esteli */
$var_sucursal2="<h2>Información de contacto de sucursal Esteli<h2>";
$var_address2= "Detrás del centro de salud Leonel Rugama, Frente al Instituto
Nacional.";
$var_phone2="+505 2710-3972";
$var_email2="infofunecachamanagua@gmail.com";
$var_ubicacionsucursal2='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d929.7981094648702!2d-86.353085146954!3d13.070918709607223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x40e53999c59a4583!2zMTPCsDA0JzE1LjQiTiA4NsKwMjEnMTAuNyJX!5e1!3m2!1ses!2sni!4v1667333084683!5m2!1ses!2sni" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
/**Sucursal Leon*/
$var_sucursal3="<h2>Información de contacto de sucursal león<h2>";
$var_address3= "Del portón de emergencia de HEODRA 1/2 Cuadra al Oeste, mano izquierda";
$var_phone3=" +505 2311-1353";
$var_email3="infofunecachamanagua@gmail.com";
$var_ubicacionsucursal3='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3893.2413050546593!2d-87.12705308518157!3d12.632168591079155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8482fee3275a2ea3!2zMTLCsDM3JzU1LjgiTiA4N8KwMDcnMjkuNSJX!5e0!3m2!1ses!2sni!4v1667332933160!5m2!1ses!2sni" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';

/**Sucursal Puerto Cabeza */
$var_sucursal4="<h2>Información de contacto de sucursal puerto cabeza <h2>";
$var_address4= "Escuela Normal Luxemburgo 600 mts al Este.";
$var_phone4="+505 2249-5713";
$var_email4="infofunecachamanagua@gmail.com";
$var_ubicacionsucursal4='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d994.1768862606069!2d-83.40685311451728!3d14.02609737108126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3ebc3ac2de1a01be!2zMTTCsDAxJzM0LjAiTiA4M8KwMjQnMjIuNyJX!5e1!3m2!1ses!2sni!4v1667333901330!5m2!1ses!2sni" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';

/**Susursal Rivas */
$var_sucursal5="<h2>Información de contacto de sucursal rivas<h2>";
$var_address5= " Parroquia San Jose, Rivas 2 1/2c al Sur.";
$var_phone5="+505 5223-2201";
$var_email5="infofunecachamanagua@gmail.com";
$var_horariosemana5=" 8:00 AM - 5:00 PM";
$var_horariofinsemana5=" 8:00 AM - 12:00 MD";
$var_ubicacionsucursal5='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3910.390945934462!2d-85.80126838519311!3d11.45168239186553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8101fbb8c4ab6e50!2zMTHCsDI3JzA2LjEiTiA4NcKwNDcnNTYuNyJX!5e0!3m2!1ses!2sni!4v1667334064857!5m2!1ses!2sni" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    
    

?>

<!-- ##### Contact Sucursal Managua ##### -->
<div class="contact-area-info section-padding-0-100">
    <div class="container">
        <div class="row align-items-center justify-content-between">
           
           <div class="col-12 col-md-6">
                <!-- Section Heading -->
                <div class="section-heading">
                     <?php print $var_nombre_de_sucursal; ?>
                    <p>Estamos mejorando nuestros servicios para atenderle mejor..</p>
                </div>
                <!-- Contact Information -->
                <div class="contact-information">
                    <p><span>Dirección:</span> <?php print $var_address;?> </p>
                    <p><span>Teléfono:</span> <?php print $var_phone;?></p>
                    <p><span>Email:</span><?php print $var_email;?></p>
                    <p><span> Horario de atención:</span><?php print $var_horariosemana; ?></p>
                  
                    <div class="welcome-btn-group">
                                <a href="https://goo.gl/maps/5Hdc7Pqk4kata5sA6"  target="_blank" class="btn alazea-btn mr-30">Ver ruta</a>
                                <BR></BR>
                               
                    </div>
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
</div>
<!-- ##### Sucursal Managua End ##### -->';

<!-- ##### Contact Sucursal Chinandega ##### -->
<div class="contact-area-info section-padding-0-100">
    <div class="container">
        <div class="row align-items-center justify-content-between">
           
        <div class="col-12 col-md-6">
                <!-- Section Heading -->
                <div class="section-heading">
                     <?php print $var_sucursal1; ?>
                    <p>Estamos mejorando nuestros servicios para atenderle mejor..</p>
                </div>
                <!-- Contact Information -->
                <div class="contact-information">
                    <p><span>Dirección:</span> <?php print $var_address1;?> </p>
                    <p><span>Teléfono:</span> <?php print $var_phone1;?></p>
                    <p><span>Email:</span><?php print $var_email1;?></p>
                    <p><span> Horario de atención:</span><?php print $var_horariosemana; ?></p>
                 
                    <div class="welcome-btn-group">
                                <a href="#" class="btn alazea-btn mr-30">Ver ruta</a>
                                <BR></BR>
                               
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <!-- Google Maps -->
                <div class="map-area mb-100">
                  
                    <?php print $var_ubicacionsucursal1; ?> 
                </div>
            </div> 

           
        </div>
    </div>
</div>
<!-- ##### Sucursal Chinandega End ##### -->';

<!-- ##### Contact Sucursal Esteli ##### -->
<div class="contact-area-info section-padding-0-100">
    <div class="container">
        <div class="row align-items-center justify-content-between">
           
        <div class="col-12 col-md-6">
                <!-- Section Heading -->
                <div class="section-heading">
                     <?php print $var_sucursal2; ?>
                    <p>Estamos mejorando nuestros servicios para atenderle mejor..</p>
                </div>
                <!-- Contact Information -->
                <div class="contact-information">
                    <p><span>Dirección:</span> <?php print $var_address2;?> </p>
                    <p><span>Teléfono:</span> <?php print $var_phone2;?></p>
                    <p><span>Email:</span><?php print $var_email2;?></p>
                    <p><span> Horarios de atención:</span><?php print $var_horariosemana; ?></p>
                
                    <div class="welcome-btn-group">
                                <a href="#" class="btn alazea-btn mr-30">Ver ruta</a>
                                <BR></BR>
                               
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <!-- Google Maps -->
                <div class="map-area mb-100">
                   
                    <?php print $var_ubicacionsucursal2; ?> 
                </div>
            </div> 

           
        </div>
    </div>
</div>
<!-- ##### Sucursal Esteli End ##### -->';

<!-- ##### Contact Sucursal Leon ##### -->
<div class="contact-area-info section-padding-0-100">
    <div class="container">
        <div class="row align-items-center justify-content-between">
           
        <div class="col-12 col-md-6">
                <!-- Section Heading -->
                <div class="section-heading">
                     <?php print $var_sucursal3; ?>
                    <p>Estamos mejorando nuestros servicios para atenderle mejor..</p>
                </div>
                <!-- Contact Information -->
                <div class="contact-information">
                    <p><span>Dirección:</span> <?php print $var_address3;?> </p>
                    <p><span>Teléfono:</span> <?php print $var_phone3;?></p>
                    <p><span>Email:</span><?php print $var_email3;?></p>
                    <p><span> Horarios de atención:</span><?php print $var_horariosemana; ?></p>
                
                    <div class="welcome-btn-group">
                                <a href="#" class="btn alazea-btn mr-30">Ver ruta</a>
                                <BR></BR>
                               
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <!-- Google Maps -->
                <div class="map-area mb-100">
                  
                    <?php print $var_ubicacionsucursal3; ?> 
                </div>
            </div> 

           
        </div>
    </div>
</div>
<!-- ##### Sucursal Leon End ##### -->';

<!-- ##### Contact Sucursal Puerto Cabeza ##### -->
<div class="contact-area-info section-padding-0-100">
    <div class="container">
        <div class="row align-items-center justify-content-between">
           
        <div class="col-12 col-md-6">
                <!-- Section Heading -->
                <div class="section-heading">
                     <?php print $var_sucursal4; ?>
                    <p>Estamos mejorando nuestros servicios para atenderle mejor..</p>
                </div>
                <!-- Contact Information -->
                <div class="contact-information">
                    <p><span>Dirección:</span> <?php print $var_address4;?> </p>
                    <p><span>Teléfono:</span> <?php print $var_phone4;?></p>
                    <p><span>Email:</span><?php print $var_email4;?></p>
                    <p><span> Horarios de atención:</span><?php print $var_horariosemana; ?></p>
                
                    <div class="welcome-btn-group">
                                <a href="#" class="btn alazea-btn mr-30">Ver ruta</a>
                                <BR></BR>
                               
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <!-- Google Maps -->
                <div class="map-area mb-100">
                 
                    <?php print $var_ubicacionsucursal4; ?> 
                </div>
            </div> 

           
        </div>
    </div>
</div>
<!-- ##### Sucursal puerto cabeza End ##### -->';

<!-- ##### Contact Sucursal Puerto Cabeza ##### -->
<div class="contact-area-info section-padding-0-100">
    <div class="container">
        <div class="row align-items-center justify-content-between">
           
        <div class="col-12 col-md-6">
                <!-- Section Heading -->
                <div class="section-heading">
                     <?php print $var_sucursal5; ?>
                    <p>Estamos mejorando nuestros servicios para atenderle mejor..</p>
                </div>
                <!-- Contact Information -->
                <div class="contact-information">
                    <p><span>Dirección:</span> <?php print $var_address5;?> </p>
                    <p><span>Teléfono:</span> <?php print $var_phone5;?></p>
                    <p><span>Email:</span><?php print $var_email5;?></p>
                    <p><span> Horarios de atención:</span><?php print $var_horariosemana; ?></p>
                
                    <div class="welcome-btn-group">
                                <a href="#" class="btn alazea-btn mr-30">Ver ruta</a>
                                <BR></BR>
                               
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <!-- Google Maps -->
                <div class="map-area mb-100">
                
                    <?php print $var_ubicacionsucursal5; ?> 
                </div>
            </div> 

           
        </div>
    </div>
</div>
<!-- ##### Sucursal puerto cabeza End 
<a rel="nofollow noopener" href="https://www.google.com/maps/dir/?api=1&destination=15120+Jog+Rd%2c+Delray+Beach%2c+FL+33446%2c+US" target="_blank">Get Directions</a>


https://www.google.com/maps/dir/?api=!1m18!1m12!1m3!1d3910.390945934462!2d-85.80126838519311!3d11.45168239186553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8101fbb8c4ab6e50!2zMTHCsDI3JzA2LjEiTiA4NcKwNDcnNTYuNyJX!5e0!3m2!1ses!2sni!4v1667334064857!5m2!1ses!2sni

##### -->




<?php
include 'tag/footer_area.php';
include 'tag/java.php';
?>






