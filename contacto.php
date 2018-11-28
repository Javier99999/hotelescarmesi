<?php
     session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Acerca De</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body class="fondo-contacto">

    <div class="container-fluid">

        <!-- HEADER DE LA PAGINA  -->
        <?php
            include_once 'menu.php';
        ?>
        


        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <br><br><br>
            </div>

            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 my-section-contact">
                <h1 style="color: white; font-size: 4vh" align="center">
                    Oficina central
                </h1>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 my-section-contact">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="color: white;">
                    <h3 style="line-height:20%;"><i class="fa fa-home fa-1x" style="line-height:6%;color:#339966"></i>
                        Dirección:</h3><br>
                    <p style="margin-top:6%;line-height:35%">Pachuca de Soto, Hidalgo</p>
                    <br />
                    <br />
                    <h3 style="line-height:20%;"><i class="fa fa-envelope fa-1x" style="line-height:6%;color:#339966"></i>
                        E-Mail:</h3><br>
                    <p style="margin-top:6%;line-height:35%">hotelescarmesi@gmail.com</p>
                    <br />
                    <br />
                    <h3 style="line-height:20%;"><i class="fa fa-user fa-1x" style="line-height:6%;color:#339966"></i>
                        Teléfono:</h3><br>
                    <p style="margin-top:6%;line-height:35%">Sorumlu Kişi</p>
                    <br />
                    <br />

                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59955.738979486436!2d-98.79179732323142!3d20.08251594864727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1a7716f1e038b%3A0x13315c101496b749!2sPachuca+de+Soto%2C+Hgo.!5e0!3m2!1ses!2smx!4v1541993648913"
                        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 my-section-contact">
                <h1 style="color: white; font-size: 4vh" align="center">
                    ¡CONTÁCTANOS!
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 my-section-contact">
                <form class="contact-us pattern-bg" autocomplete="off">

                    <div class="col-sm-6">
                        <div class="form-group-contact">
                            <input type="text" id="name" class="form-control my-input-contact" placeholder="Nombre"
                                required="True">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group-contact">
                            <input type="email" id="email" class="form-control my-input-contact" placeholder="Email"
                                required="True">
                        </div>
                    </div>



                    <div class="col-sm-12">
                        <div class="textarea-message form-group-contact ">
                            <textarea id="message" class="textarea-message form-control my-input-contact" placeholder="Mensaje"
                                rows="5"></textarea>
                        </div>
                    </div>


                    <div class="text-center">
                        <button type="submit" class="button button-contact button-style button-style-dark button-style-color-2">Enviar</button>
                    </div>

                </form>

            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <br><br><br>
            </div>

        </div>








        <!-- FOOTER DE LA PAGINA  -->
        <div class="row">
            <div class="col-md-12 my-footer">
                <div class="col-md-3">
                    <h6>¡CONTÁCTANOS AHORA!</h6>
                </div>
                <div class="col-md-3">
                    <div class="col-md-4">
                        <a href="#"><img width="25px" src="img/facebook.png"></a>
                    </div>
                    <div class="col-md-4">
                        <a href="#"><img width="25px" src="img/instagram.png"></a>
                    </div>
                    <div class="col-md-4">
                        <a href="#"><img width="25px" src="img/twitter.png"></a>
                    </div>

                </div>
                <div class="col-md-3">
                    <h6><img width="20px" src="img/correo.png"> reservaciones@hotelescarmesi.com </h6>
                </div>
                <div class="col-md-3">
                    <h6><img width="15px" src="img/telefono.png"> Llamanos: 55-14-10-91-81</h6>
                </div>
            </div>
        </div>




    </div>







    <!-- SCRIPTS DE JQUERY -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <!-- SCRIPTS DE JQUERY -->

</body>

</html>