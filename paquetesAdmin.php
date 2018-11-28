<?php
    session_start();
    if(isset($_SESSION['activo']) && isset($_SESSION['ROL'])){
        if($_SESSION['activo'] == 1 && $_SESSION['ROL'] == 'Administrador'){

        }else if($_SESSION['activo'] == 1 && $_SESSION['ROL'] == 'Cliente'){
            header('Location: ./reservaciones.php');
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
    <link rel="stylesheet" href="./css/stylesAdmin.css">

</head>

<body>

        <?php include_once 'menuAdmin.php' ?>

        <div class="main">
            <img class="my-banner" src="./img/bannerAdmin.jpg" alt="">
            <h1 class="my-title-banner">Paquetes</h1>

            <div class="container-fluid">
                
            
            <div class="row">
                <div class=" col-lg-10 col-lg-offset-1">
                    
                </div>
            </div>
            
                
                
            </div>
            

        </div>










    <!-- SCRIPTS DE JQUERY -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scriptAdmin.js"></script>
    
    <!-- SCRIPTS DE JQUERY -->


</body>

</html>