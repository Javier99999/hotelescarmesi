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

            <div class="container-fluid">
                  
                <div class="row">
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 my-section-contact">
                        <h1 style="color: white; font-size: 4vh" align="center">
                            HOTELES
                        </h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 my-section-contact">
                        <form class="contact-us pattern-bg" autocomplete="off">

                            <div class="col-sm-12">
                                <div class="form-group-contact">
                                    <input type="text" id="name" class="form-control my-input-contact" placeholder="Nombre"
                                        required="True">
                                </div>
                            </div>

                            <div class="col-sm-12">
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
                                <button type="submit" class="button button-contact button-style button-style-dark button-style-color-2">GUARDAR</button>
                            </div>

                        </form>

                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <br><br><br>
                    </div>

                </div>






                <div class="row">
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 my-section-contact">
                        <h1 style="color: white; font-size: 4vh" align="center">
                            LISTA DE HOTELES
                        </h1>

                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 my-section-contact">
                        <table id="example" class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="my-table-head">ID</th>
                                    <th class="my-table-head">NOMBRE</th>
                                    <th class="my-table-head">FECHA</th>
                                    <th class="my-table-head">PRODUCTO</th>
                                    <th class="my-table-head">MODELO</th>
                                    <th class="my-table-head">STATUS</th>
                                    <th class="my-table-head">ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody class="my-table-body buscar">
                                <tr>
                                    <td>
                                        <p class="my-table-item">#123</p>
                                    </td>
                                    <td>
                                        <p class="my-table-item">Esteban Zamudio Guzman</p>
                                    </td>
                                    <td>
                                        <p class="my-table-item">10-ABR-16</p>
                                    </td>
                                    <td>
                                        <p class="my-table-item">Servicio medico</p>
                                    </td>
                                    <td>
                                        <p class="my-table-item">Seguro de vida</p>
                                    </td>

                                    <td>
                                        <p class="my-table-item"><span class="label label-pendiente">PENDIENTE</span></p>
                                    </td>
                                    <td>
                                        <a href="#" type="button" class="btn btn-primary my-btn-view">VER</a>
                                        <a href="#" type="button" class="btn btn-primary my-btn-delete">ELIMINAR</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="my-table-item">#123</p>
                                    </td>
                                    <td>
                                        <p class="my-table-item">Esteban Zamudio Guzman</p>
                                    </td>
                                    <td>
                                        <p class="my-table-item">10-ABR-16</p>
                                    </td>
                                    <td>
                                        <p class="my-table-item">Servicio medico</p>
                                    </td>
                                    <td>
                                        <p class="my-table-item">Seguro de vida</p>
                                    </td>


                                    <td>
                                        <p class="my-table-item"><span class="label label-pendiente">PENDIENTE</span></p>
                                    </td>
                                    <td>
                                        <a href="#" type="button" class="btn btn-primary my-btn-view">VER</a>
                                        <a href="#" type="button" class="btn btn-primary my-btn-delete">ELIMINAR</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="my-table-item">#123</p>
                                    </td>
                                    <td>
                                        <p class="my-table-item">Esteban Zamudio Guzman</p>
                                    </td>
                                    <td>
                                        <p class="my-table-item">10-ABR-16</p>
                                    </td>
                                    <td>
                                        <p class="my-table-item">Servicio medico</p>
                                    </td>
                                    <td>
                                        <p class="my-table-item">Seguro de vida</p>
                                    </td>

                                    <td>
                                        <p class="my-table-item"><span class="label label-pendiente">PENDIENTE</span></p>
                                    </td>
                                    <td>
                                        <a href="#" type="button" class="btn btn-primary my-btn-view">VER</a>
                                        <a href="#" type="button" class="btn btn-primary my-btn-delete">ELIMINAR</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="my-table-item">#123</p>
                                    </td>
                                    <td>
                                        <p class="my-table-item">Esteban Zamudio Guzman</p>
                                    </td>
                                    <td>
                                        <p class="my-table-item">10-ABR-16</p>
                                    </td>
                                    <td>
                                        <p class="my-table-item">Servicio medico</p>
                                    </td>
                                    <td>
                                        <p class="my-table-item">Seguro de vida</p>
                                    </td>

                                    <td>
                                        <p class="my-table-item"><span class="label label-pendiente">PENDIENTE</span></p>
                                    </td>
                                    <td>
                                        <a href="#" type="button" class="btn btn-primary my-btn-view">VER</a>
                                        <a href="#" type="button" class="btn btn-primary my-btn-delete">ELIMINAR</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="my-table-item">#123</p>
                                    </td>
                                    <td>
                                        <p class="my-table-item">Esteban Zamudio Guzman</p>
                                    </td>
                                    <td>
                                        <p class="my-table-item">10-ABR-16</p>
                                    </td>
                                    <td>
                                        <p class="my-table-item">Servicio medico</p>
                                    </td>
                                    <td>
                                        <p class="my-table-item">Seguro de vida</p>
                                    </td>

                                    <td>
                                        <p class="my-table-item"><span class="label label-atendido">ATENDIDO</span></p>
                                    </td>
                                    <td>
                                        <a href="#" type="button" class="btn btn-primary my-btn-view">VER</a>
                                        <a href="#" type="button" class="btn btn-primary my-btn-delete">ELIMINAR</a>
                                    </td>
                                </tr>



                            </tbody>
                        </table>

                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <br><br><br>
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