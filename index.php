<?php
    $landing = "landing";
    $keywords = "";
    $the_title = "";
    $description = "";
    $canonical = "";
    $metakeywords = "";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $the_title ?></title>

        <!--Meta etiquetas-->
        <meta neme="title" content="<?php echo $the_title ?>"/>
        <meta name="description" content="<?php echo $description ?>"/>
        <meta name="keywords" content="<?php echo $keywords ?>"/>
        <meta name="canonical" content="<?php echo $canonical ?>"/>
        <meta name="metakeywords" content="<?php echo $metakeywords ?>"/>

        <meta name="google-site-verification" content="Yf5ZN_V-PB2Fk27kUvrhE_Np9T65pg6gMutNrguU0xM"/>
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="libs/iziModal/css/iziModal.min.css">
        <!-- inicio: librerias -->
        <script src="libs/jQuery/jQuery-3-3-1.min.js"></script>
    </head>
    <body>
    <div id="modal-iframe" data-izimodal-group="group1">
    </div>
        <div class="c-top">
            <a href=""><img src="img/salauno-logo-top.svg" alt=""></a>
            <div class="c-top-tel">
                <span class="dinnR white fs18">Celular directo</span>
                <img src="img/mobile-icon.svg" alt=""><span class="tel-aleatorio yellow02 dinnB fs20"></span>
            </div>
        </div>
<button class="btn-agendar">Agendar</button>
<!---------------------- Por qué confiar INICIO ---------------------->
<div class="c-porque-confiar-main">
    <div class="porque-title"><span class="dinnB fs24 green8B">¿Por qué confiar tus ojos a salauno?</span></div>
    <div class="c-porque-item">
        <div class="porque-item"><img src="img/confiar/1-medicos-certificados.svg" alt=""><span class="dinnB fs20 green8B">Oftalmólogos certificados</span></div>
        <div class="porque-item"><img src="img/confiar/2-atencion-personalizada.svg" alt=""><span class="dinnB fs20 green8B">Atención personalizada</span></div>
        <div class="porque-item"><img src="img/confiar/3-revision-minuciosa-ojos.svg" alt=""><span class="dinnB fs20 green8B">Revisión minuciosa de tus ojos</span></div>
        <div class="porque-item"><img src="img/confiar/4-precios-accesibles.svg" alt=""><span class="dinnB fs20 green8B">Nuestros precios son accesibles</span></div>
        <div class="porque-item"><img src="img/confiar/5-diferentes-metodos-pago.svg" alt=""><span class="dinnB fs20 green8B">Diversos métodos de pago</span></div>
    </div>
</div>


<!---------------------- Por qué confiar FIN ---------------------->









<!---------------------- Aseguradoras INICIO ---------------------->
<div class="c-aseguradoras-main">
    <div class="aseguradoras-title"><span class="dinnB fs24 green8B">Tenemos convenio con las principales aseguradoras de México</span></div>
    <div class="c-aseguradoras-items">
        <div class="aseguradora-item"><img src="img/aseguradoras/1-logo-gnp.jpg" alt=""></div>
        <div class="aseguradora-item"><img src="img/aseguradoras/2-logo-mediaccess.jpg" alt=""></div>
        <div class="aseguradora-item"><img src="img/aseguradoras/3-logo-plan-seguro.jpg" alt=""></div>
        <div class="aseguradora-item"><img src="img/aseguradoras/4.-logo-Thona-seguros.jpg" alt=""></div>
        <div class="aseguradora-item"><img src="img/aseguradoras/5-logo-mapfre.jpg" alt=""></div>
        <div class="aseguradora-item"><img src="img/aseguradoras/6-logo-axa.jpg" alt=""></div>
        <div class="aseguradora-item"><img src="img/aseguradoras/7-logo-ike.jpg" alt=""></div>
        <div class="aseguradora-item"><img src="img/aseguradoras/8-logo-sis-nova-seguro.jpg" alt=""></div>
        <div class="aseguradora-item"><img src="img/aseguradoras/9-logo-la-latino-seguro.jpg" alt=""></div>
        <div class="aseguradora-item"><img src="img/aseguradoras/10-logo-inbursa-logo.jpg" alt=""></div>
        <div class="aseguradora-item"><img src="img/aseguradoras/11-logo-general-de-salud-logo.jpg" alt=""></div>
        <div class="aseguradora-item"><img src="img/aseguradoras/12-logo-seguros-monterrey-logo.jpg" alt=""></div>
        <div class="aseguradora-item"><img src="img/aseguradoras/13-logo-dentegra.jpg" alt=""></div>
        <div class="aseguradora-item"><img src="img/aseguradoras/14-logo-prevem.jpg" alt=""></div>
    </div>
</div>
<!---------------------- Aseguradoras FIN ---------------------->


        <footer>
            <div>
                <span class="dinnB fs18 fs24 yellow00  footer-tel-text">
                    <a href="" id="linkTel" class="yellow00 linkTel">
                        <img src="img/mobile-icon.svg" alt="">
                        <span class="tel-aleatorio"></span>
                        <span class="dinnR fs18 yellow00">(Celular directo)</span>
                    </a>
                </span>
            </div>
            <p class="dinnB fs20 yellow00">© 2018 salauno®</p>
        </footer>
        <script src="js/main.js"></script>
        <script src="libs/inview/jquery.inview.js"></script>
        <script src="libs/iziModal/js/iziModal.min.js"></script>
    </body>