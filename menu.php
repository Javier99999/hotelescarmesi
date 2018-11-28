<!-- HEADER DE LA PAGINA  -->
<div class="row">
            <nav class="navbar navbar-fixed-top my-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span style="background-color: white;" class="icon-bar"></span>
                        <span style="background-color: white;" class="icon-bar"></span>
                        <span style="background-color: white;" class="icon-bar"></span>
                    </button>
                    <a href="index.php"><img class="my-logo" src="./img/logo blanco.png">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul style="padding-right: 30px" class="nav navbar-nav navbar-right">
                        <li><a class="menu" href="index.php">
                                <h6 class="my-text-nav">INICIO</h6>
                            </a></li>
                        <li><a class="menu" href="acercaDe.php">
                                <h6 class="my-text-nav">ACERCA DE</h6>
                            </a></li>
                        <li><a class="menu" href="reservaciones.php">
                                <h6 class="my-text-nav">RESERVACIONES</h6>
                            </a></li>
                        <li><a class="menu" href="paquetes.php">
                                <h6 class="my-text-nav">PAQUETES</h6>
                            </a></li>
                        <li><a class="menu" href="hoteles.php">
                                <h6 class="my-text-nav">HOTELES</h6>
                            </a></li>
                        <li><a class="menu" href="galeria.php">
                                <h6 class="my-text-nav">GALERÍA</h6>
                            </a></li>
                        <li><a class="menu" href="contacto.php">
                                <h6 class="my-text-nav">CONTACTO</h6>
                            </a></li>
                            
                        
                            <?php
                                if(isset($_SESSION['activo'])){
                                    if($_SESSION['activo'] == 1){ ?>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <h6 class="my-text-nav" style="text-transform: uppercase; display:inline-block;"><?php echo $_SESSION['USUARIO'];?></h6>
                                            <span class="glyphicon glyphicon-chevron-down" style="display:inline-block;"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="navbar-login">
                                                            
                                                            <div class="col-lg-12">
                                                                <p class="text-left"><strong><?php echo $_SESSION['NOMBRE'].' '.$_SESSION['AP'];?></strong></p>
                                                                <p class="text-left small"><?php echo $_SESSION['CORREO'];?></p>
                                                                <p class="text-left">
                                                                    <a href="miPerfil.php" class="btn btn-primary btn-block btn-sm">Actualizar Datos</a>
                                                                </p>
                                                            </div>
                                                    </div>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <div class="navbar-login navbar-login-session">
                                                            <div class="col-lg-12">
                                                                <p>
                                                                    <a href="logout.php" class="btn btn-danger btn-block">Cerrar Sesion</a>
                                                                </p>
                                                            </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    <?php 
                                    }
                                }else{?>
                                    <li><a class="menu" href="login.php">
                                        <h6 class="my-text-nav">INICIAR SESIÓN</h6>
                                    </a></li>
                                <?php
                                }
                            ?>
                        
                    </ul>

                </div>
            </nav>
        </div>


                    
