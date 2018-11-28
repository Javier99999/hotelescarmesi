<?php
     session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">

</head>

<body>

    <div class="container-fluid" style="background-color: black; background-color: rgba(0,0,0,0.6);">

        <!-- HEADER DE LA PAGINA  -->
        <?php
            include_once 'menu.php';
        ?>
        

        <!-- BANNER DE BIENVENIDA  -->
        <div class="row">
            <div id="carousel-1" class="carousel slide" data-ride="carousel">
                <!-- Indicadores-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-1" data-slide-to="1"></li>
                    <li data-target="#carousel-1" data-slide-to="2"></li>
                </ol>
                <!-- Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img width="100%" src="img/bannerInicio.jpg" class="img-responsive">

                    </div>
                    <div class="item">
                        <img width="100%" src="img/bannerInicio.jpg" class="img-responsive">
                    </div>
                    <div class="item">
                        <img width="100%" src="img/bannerInicio.jpg" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>

        <!-- SECCION ACERCA DE  -->
        <div class="row my-acercaDe">
            <div class="col-xs-12 col-sm-12 hidden-md hidden-lg">
                <h1 class="text-uppercase" style="color: #ffac00; margin-top: 100px;"> <strong>acerca de</strong></h1>

                <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex cupiditate corporis, suscipit animi
                    quod vitae. Eveniet reprehenderit saepe facilis vitae ipsum molestiae beatae alias ducimus quasi
                    voluptas dolorem, at id mollitia quaerat nisi, repudiandae aliquid fugiat doloremque accusamus
                    tempora! Asperiores dignissimos nostrum, illum corporis libero architecto consequatur eum a labore,
                    quasi itaque possimus placeat sunt modi consequuntur ipsam quam aliquid illo, est ad. Ipsa dolor,
                    amet omnis voluptate saepe possimus minus. Odit quaerat ea ducimus aspernatur, reiciendis quibusdam
                    aliquam ipsum numquam eveniet saepe officia provident consequatur, dolorum dolores ut vitae dolor
                    consequuntur facere ab, corporis quos accusantium veniam architecto? Doloremque?
                </p>
            </div>
            <div style="padding-left: 0px;" class="col-xs-12 col-sm-12 col-md-6">
                <img src="img/logo.jpg" class="img-responsive" style="width: 100%; margin-top: 70px;margin-bottom: 70px; padding-left: 0px;">

            </div>
            <div class="hidden-xs hidden-sm col-md-5">
                <br>
                <h1 class="text-right text-uppercase" style="color: #ffac00; ">
                    <strong>acerca de</strong></h1>

                <p class="text-justify">
                    <br><br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex cupiditate corporis, suscipit animi
                    quod vitae. Eveniet reprehenderit saepe facilis vitae ipsum molestiae beatae alias ducimus quasi
                    voluptas dolorem, at id mollitia quaerat nisi, repudiandae aliquid fugiat doloremque accusamus
                    tempora! Asperiores dignissimos nostrum, illum corporis libero architecto consequatur eum a labore,
                    quasi itaque possimus placeat sunt modi consequuntur ipsam quam aliquid illo, est ad. Ipsa dolor,
                    amet omnis voluptate saepe possimus minus. Odit quaerat ea ducimus aspernatur, reiciendis quibusdam
                    aliquam ipsum numquam eveniet saepe officia provident consequatur, dolorum dolores ut vitae dolor
                    consequuntur facere ab, corporis quos accusantium veniam architecto? Doloremque?
                </p>
            </div>
        </div>

        <!-- SECCION DE HOTELES  -->
        <div class="row my-hoteles">
            <h1 class="sucursal text-uppercase" style="color: white;">
                hoteles carmesí
            </h1>

            <div class="col-xs-12 col-sm-12 col-md-4" style="padding: 0px;" align="center">
                <section class="sucursal-item">
                    <img src="img/acapulco.jpg" alt="" class="img-responsive ">
                    <section style="padding: 10px" class="sucursal-text ">
                        <p>
                            <h3><img style="padding: 0px" src="img/dirección.png" alt=""> ACAPULCO</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, molestiae quam ea hic modi
                            praesentium cupiditate atque quas alias placeat cum itaque soluta mollitia corrupti
                            laboriosam error doloremque sapiente voluptate.
                        </p>

                    </section>

                </section>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 " style="padding: 0px;" align="center">
                <section class="sucursal-item">
                    <img src="img/cancun.jpg" alt="" class="img-responsive">
                    <section style="padding: 10px" class="sucursal-text">

                        <p>
                            <h3><img style="padding: 0px" src="img/dirección.png" alt=""> CANCÚN</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, molestiae quam ea hic modi
                            praesentium cupiditate atque quas alias placeat cum itaque soluta mollitia corrupti
                            laboriosam error doloremque sapiente voluptate.
                        </p>

                        
                    </section>
                </section>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 " style="padding: 0px;" align="center">
                <section class="sucursal-item">
                    <img src="img/cdmx.jpg" alt="" class="img-responsive">
                    <section style="padding: 10px" class="sucursal-text">
                        <p>
                            <h3><img style="padding: 0px" src="img/dirección.png" alt=""> C.D.M.X</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, molestiae quam ea hic modi
                            praesentium cupiditate atque quas alias placeat cum itaque soluta mollitia corrupti
                            laboriosam error doloremque sapiente voluptate.
                        </p>

                        
                    </section>
                </section>
            </div>
            <!-- Primer linea-->

            <div class="col-xs-12 col-sm-12 col-md-4" style="padding: 0px;" align="center">
                <section class="sucursal-item">
                    <img src="img/guadalajara.jpg" alt="" class="img-responsive">
                    <section style="padding: 10px" class="sucursal-text">

                        <p>
                            <h3><img style="padding: 0px" src="img/dirección.png" alt=""> GUADALAJARA</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, molestiae quam ea hic modi
                            praesentium cupiditate atque quas alias placeat cum itaque soluta mollitia corrupti
                            laboriosam error doloremque sapiente voluptate.
                        </p>

                        
                    </section>
                </section>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 " style="padding: 0px;" align="center">
                <section class="sucursal-item">
                    <img src="img/pachuca.jpg" alt="" class="img-responsive">
                    <section style="padding: 10px" class="sucursal-text">

                        <p>
                            <h3><img style="padding: 0px" src="img/dirección.png" alt=""> PACHUCA</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, molestiae quam ea hic modi
                            praesentium cupiditate atque quas alias placeat cum itaque soluta mollitia corrupti
                            laboriosam error doloremque sapiente voluptate.
                        </p>

                        
                    </section>
                </section>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 " style="padding: 0px;" align="center">
                <section class="sucursal-item">
                    <img src="img/vallarta.jpg" alt="" class="img-responsive">
                    <section style="padding: 10px" class="sucursal-text">

                        <p>
                            <h3><img style="padding: 0px" src="img/dirección.png" alt=""> PUERTO VALLARTA</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, molestiae quam ea hic modi
                            praesentium cupiditate atque quas alias placeat cum itaque soluta mollitia corrupti
                            laboriosam error doloremque sapiente voluptate.
                        </p>

                       
                    </section>
                </section>
            </div>

        </div>

        <div class="row" style="padding-top: 25px; background-color: black; background-color: rgba(0,0,0,0.6);">
            <div style="margin: auto; border: 0px; padding: 0px;" class="col-md-12 col-sm-12 col-xs-12">
                <img style="position: relative; width: 100%;" src="img/bannerContacto.jpg" alt="">
                <a href="contacto.php" style="color: #939797">
                    <button class="col-md-4 col-sm-4 col-xs-8" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); border-radius: 15px; background-color: white ; border-color: #ffac00;">
                        <h5>¡CONTÁCTANOS!</h5>
                    </button>
                </a>
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