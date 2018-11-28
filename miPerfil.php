<?php
    session_start();
    if(isset($_SESSION['activo']) && isset($_SESSION['ROL'])){
        if($_SESSION['activo'] == 1 && $_SESSION['ROL'] == 'Cliente'){

        }else if($_SESSION['activo'] == 1 && $_SESSION['ROL'] == 'Administrador'){
            header('Location: ./hotelesAdmin.php');
        }
    }else{
        header('Location: ./login.php');
    }
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