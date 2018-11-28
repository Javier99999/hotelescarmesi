<?php

	class clsCarmesi{
		
		public function nombre($nom){
				return "Bienvenido" .$nom .", estas usando el servicio web";
		}

		public function acceso($usuario, $contra){
			$datos = array();
				
			if($conn = mysqli_connect('localhost', 'upmhworl_carmesi', 'HotelesCarmesi!', 'upmhworl_hotelescarmesi')){
				$renglon = mysqli_query($conn, "CALL `spValidarAcceso`('$usuario', '$contra');");
				while($resultado = mysqli_fetch_assoc($renglon)){
					$datos[0]["CLAVE"] = $resultado["CLAVE"];
					if((int)$datos[0]["CLAVE"]!=0){
						$datos[1]["NOMBRE"] = $resultado["NOMBRE"];
						$datos[2]["AP"] = $resultado["AP"];
						$datos[3]["AM"] = $resultado["AM"];
						$datos[4]["ROL"] = $resultado["ROL"];
						$datos[5]["FOTO"] = $resultado["FOTO"];
						$datos[6]["USUARIO"] = $resultado["USUARIO"];
						$datos[7]["CORREO"] = $resultado["CORREO"];
					}
				}
				mysqli_close($conn);
			}
			return $datos;
		}

		// ## Registro de Usuario
		public function registrarUsuario($NOMBRE,$APELLIDOPAT,$APELLIDOMAT,$USUARIO,$CONTRASENA,$CORREO)
		{	 
			$datosG=array();   
		
			if($conn = mysqli_connect('localhost', 'upmhworl_carmesi', 'HotelesCarmesi!', 'upmhworl_hotelescarmesi')){
				$renglon = mysqli_query($conn,"CALL spRegistrarUsuario('$NOMBRE','$APELLIDOPAT','$APELLIDOMAT','$USUARIO','$CONTRASENA','$CORREO')");	  			
				while($resultado = mysqli_fetch_assoc($renglon)){
					$datosG[0]["CLAVE"] =$resultado["CLAVE"];				
					if((int)$datosG[0]!=0){				
						$datosG[0]["CLAVE"] =$resultado["CLAVE"];
					}
				}							
				mysqli_close($conn); 		
			}    
			return $datosG;
		} 	
		
		
		
	}


?>
