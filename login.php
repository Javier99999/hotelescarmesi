<?php

	session_start();
    if(isset($_SESSION['activo'])){
        if($_SESSION['activo'] == 1 && $_SESSION['ROL'] == 'Cliente'){
            header('Location: ./index.php');
        }else if($_SESSION['activo'] == 1 && $_SESSION['ROL'] == 'Administrador'){
			header('Location: ./hotelesAdmin.php');
		}
    }



    if (isset($_POST['login-submit'])) {
        //guarda los datos que se capturaron en las cajas de texto del formulario
        $usuario="";
        $contra="";
        //recibe los datos que devuelve metodo del web service
        $datos=array();
    
        //Verifica que tengan informacion
        if( !empty($_POST['username' ]) && !empty($_POST['password'])){ 
            $usuario = htmlspecialchars($_POST['username']);
            $contra = htmlspecialchars($_POST['password']);
            //hace uso del servicio web que esta pulicando en el webhost
            $cliente = new SoapClient(null, array(
                'uri' => 'https://www.upmhworld.com',
                'location' => 'https://www.upmhworld.com/hotelescarmesi/servicioweb/wsusuario.php'
            ));
        
            //se ejecuta el metodo del servicio web, pasando sus parametros 
            $datos=$cliente->acceso($usuario,$contra);
            //hasta aqui ya recibieron los resultados del servicio web
        
            //verifica si encontro o no al usuario
            if((int)$datos[0]["CLAVE"]!= null){
	        //envia a la pagina principal de administrar
				echo '<script language="javascript">alert("Bienvenidos al sistema '.$datos[1]["NOMBRE"].', estas accediendo como '.$datos[4]["ROL"].'");</script>';
				
	    	    if($datos[4]["ROL"]== 'Administrador'){
					echo "<script> document.location.href = './hotelesAdmin.php';</script>";
					session_start();
                	$_SESSION['activo'] = 1;
                	$_SESSION['CLAVE'] =  $datos[0]["CLAVE"];
                	$_SESSION['NOMBRE'] =  $datos[1]["NOMBRE"];
					$_SESSION['AP'] =  $datos[2]["AP"];
					$_SESSION['AM'] =  $datos[3]["AM"];
					$_SESSION['ROL'] =  $datos[4]["ROL"];
					$_SESSION['FOTO'] =  $datos[5]["FOTO"];
					$_SESSION['USUARIO'] =  $datos[6]["USUARIO"];
					$_SESSION['CORREO'] =  $datos[7]["CORREO"];
	    	    }else if($datos[4]["ROL"]== 'Cliente'){
					echo "<script> document.location.href = './reservaciones.php';</script>";
					session_start();
                	$_SESSION['activo'] = 1;
                	$_SESSION['CLAVE'] =  $datos[0]["CLAVE"];
                	$_SESSION['NOMBRE'] =  $datos[1]["NOMBRE"];
					$_SESSION['AP'] =  $datos[2]["AP"];
					$_SESSION['AM'] =  $datos[3]["AM"];
					$_SESSION['ROL'] =  $datos[4]["ROL"];
					$_SESSION['FOTO'] =  $datos[5]["FOTO"];
					$_SESSION['USUARIO'] =  $datos[6]["USUARIO"];
					$_SESSION['CORREO'] =  $datos[7]["CORREO"];

	    	    }
	        }
	        else{
	            //NO encuentra al usuario
	            $datos[0]=0;
	    	    echo '<script language="javascript">alert("Acceso denegado, los datos son incorrectos");</script>';
            }
	    }
    } else if(isset($_POST['register-submit'])){
        $cliente = new SoapClient(null, array(
            'uri' => 'https://www.upmhworld.com',
            'location' => 'https://www.upmhworld.com/hotelescarmesi/servicioweb/wsusuario.php'
        ));
        $nombre="";
        $ap="";
        $am="";
        $usuario="";
        $correo="";
		$contra="";
		if(!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['lastname2']) && !empty($_POST['username']) &&!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm-password'])){
			if($_POST['password'] == $_POST['confirm-password']){
				$nombre=$_POST['name'];
				$ap=$_POST['lastname'];
				$am=$_POST['lastname2'];
				$usuario=$_POST['username'];
				$correo=$_POST['email'];
				$contra=$_POST['password'];
				$datosG = $cliente->registrarUsuario($nombre,$ap,$am,$usuario,$contra,$correo);
				if($datosG[0]['CLAVE'] == '1'){
                    echo '<script language="javascript">alert("Registro existoso");</script>';
	            }
	            else{
	    	        echo '<script language="javascript">alert("No se pudo registrar");</script>';
	            
	            }

			}
			else{
				echo '<script language="javascript">alert("Su contraseña no coincide, por favor vuelve a ingresarla");</script>';
			}
		}else{
			echo '<script language="javascript">alert("Debe de llenar todos los campos");</script>';
		}        
        
    }
    
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Iniciar sesión</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilosLogin.css">
	<link rel="stylesheet" href="./css/styles.css">
</head>

<body>

	<div class="container">
		<!-- HEADER DE LA PAGINA  -->
        <?php
            include_once 'menu.php';
        ?>
        


		<div class="row">
			<div class="col-md-12my-col">
				<br><br><br>
				<img class="my-img" src="img/logo blanco.png" alt="">
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Iniciar sesión</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Registrate</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="#" method="post" role="form" style="display: block;" autocomplete="off">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Usuario"
										 value="" required="required">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña"
										 required="required">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Mantener la sesión abierta</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3" align="center">
												<button type="submit" name="login-submit" id="login-submit" tabindex="4" class="button button-contact button-style button-style-dark button-style-color-2">Entrar!</button>

											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="#" tabindex="5" class="forgot-password">He olvidado mi contraseña</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="#" method="post" role="form" style="display: none;" autocomplete="off">
									<div class="form-group">
										<input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Nombre(s)" value=""
										 required="required">
									</div>
									<div class="form-group">
										<input type="text" name="lastname" id="lastname" tabindex="2" class="form-control" placeholder="Apellido Paterno"
										 value="" required="required">
									</div>
									<div class="form-group">
										<input type="text" name="lastname2" id="lastname2" tabindex="3" class="form-control" placeholder="Apellido Materno"
										 value="" required="required">
									</div>
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="4" class="form-control" placeholder="Nombre de usuario"
										 value="" required="required">
									</div>

									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="5" class="form-control" placeholder="Contraseña"
										 required="required">
									</div>

									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="6" class="form-control"
										 placeholder="Confirmar contraseña" required="required">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="7" class="form-control" placeholder="Correo electrónico"
										 value="" required="required">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3" align="center">
												<button type="submit" name="register-submit" id="register-submit" tabindex="8" class="button button-contact button-style button-style-dark button-style-color-2">Registrate!</button>

											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>

	<!-- SCRIPTS -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scriptLogin.js"></script>
	
</body>

</html>