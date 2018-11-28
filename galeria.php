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

<body class="fondo-galeria">

    <div class="container-fluid" style="background-color: black; background-color: rgba(0,0,0,0.6);">

        <!-- HEADER DE LA PAGINA  -->
        <?php
            include_once 'menu.php';
        ?>
        

        <div class="row" style="margin-top: 50px;">
            <div class="col-md-12 col-sm-12 col-xs-12" align="center">
                <h1 style="color: #fff"><strong>GALERÍA</strong></h1>
            </div>
        </div>


        <div class="row">
            <div style="background-color: rgba(0,0,0,0.6); border-radius: 10px; padding: 30px; margin-bottom: 15px;"
                class="col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">

                <div id="panel_default">

                    <div class="col-md-4 col-sm-12 col-xs-12 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img/1.jpg"
                            data-target="#image-gallery">
                            <img class="" src="img/1.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img/2.jpg"
                            data-target="#image-gallery">
                            <img class="" src="img/2.jpg" alt="">
                        </a>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img/3.jpg"
                            data-target="#image-gallery">
                            <img class="" src="img/3.jpg" alt="">
                        </a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-4 col-sm-12 col-xs-12 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img/4.jpg"
                            data-target="#image-gallery">
                            <img class="" src="img/4.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img/5.jpg"
                            data-target="#image-gallery">
                            <img class="" src="img/5.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img/6.jpg"
                            data-target="#image-gallery">
                            <img class="" src="img/6.jpg" alt="">
                        </a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-4 col-sm-12 col-xs-12 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img/7.jpg"
                            data-target="#image-gallery">
                            <img class="" src="img/7.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img/8.jpg"
                            data-target="#image-gallery">
                            <img class="" src="img/8.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 thumb">
                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img/9.jpg"
                            data-target="#image-gallery">
                            <img class="" src="img/9.jpg" alt="">
                        </a>
                    </div>
                </div>

                <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="image-gallery-title"></h4>
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                                        class="sr-only">Close</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img id="image-gallery-image" class="img-responsive" width="100%" src="">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary float-left" id="show-previous-image">
                                    <i class="glyphicon glyphicon-arrow-left"></i>
                                </button>

                                <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i
                                        class="glyphicon glyphicon-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>



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
    <script src="js/scriptGaleria.js"></script>
    
    <!-- SCRIPTS DE JQUERY -->

</body>

</html>