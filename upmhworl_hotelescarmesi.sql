-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-12-2018 a las 19:12:50
-- Versión del servidor: 5.6.39-cll-lve
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `upmhworl_hotelescarmesi`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`upmhworl`@`localhost` PROCEDURE `spBorrarSalon` (IN `CLAVE` INT)  BEGIN
IF EXISTS(select * from hot_salon where sal_cve_salon=CLAVE) THEN
DELETE from hot_salon where sal_cve_salon=CLAVE;
SELECT "1" CLAVE;
ELSE
SELECT "0" CLAVE;
END IF;
END$$

CREATE DEFINER=`upmhworl`@`localhost` PROCEDURE `spBorrarSolicitud` (IN `CLAVE` INT)  BEGIN
IF EXISTS(select * from hot_informes where inf_cve_informes=CLAVE) THEN
DELETE from hot_informes where inf_cve_informes=CLAVE;
SELECT "1" CLAVE;
ELSE
SELECT "0" CLAVE;
END IF;
END$$

CREATE DEFINER=`upmhworl`@`localhost` PROCEDURE `spConsultaHotel` (IN `id` INT(11))  BEGIN
	IF (id=0)THEN
    	BEGIN
        SELECT * FROM hot_hotel ORDER BY hot_cve_hotel;
        END;
    ELSE
    	SELECT * from hot_hotel WHERE hot_cve_hotel=id;
    END IF;
	
END$$

CREATE DEFINER=`upmhworl`@`localhost` PROCEDURE `spConsultarHabitacion` (IN `claveHabitacion` INT(11))  BEGIN
	IF (claveHabitacion=0)THEN
		BEGIN
        	SELECT * FROM hot_habitacion a, hot_tipo_habitacion b, hot_hotel c WHERE a.hab_cve_tipo = b.tip_cve_habitacion AND a.hab_cve_hotel = c.hot_cve_hotel ORDER BY a.hab_cve_habitacion; 
        END;
    ELSE
    	SELECT * FROM hot_habitacion a, hot_tipo_habitacion b, hot_hotel c WHERE a.hab_cve_habitacion = claveHabitacion AND a.hab_cve_tipo = b.tip_cve_habitacion AND a.hab_cve_hotel = c.hot_cve_hotel ORDER BY a.hab_cve_habitacion;
    END IF;
END$$

CREATE DEFINER=`upmhworl`@`localhost` PROCEDURE `spConsultarHabitacionCliente` (IN `clave` INT)  BEGIN
		
        SELECT hab_nombre as NOMBRE, hab_descripcion as DESCRIPCION, hab_tarifa as TARIFA, hab_imagen_principal as PRINCIPAL, hab_capacidad as CAPACIDAD,
        hab_nocamas as CAMAS
        FROM hot_habitacion
        WHERE hab_cve_habitacion = clave;
      
      END$$

CREATE DEFINER=`upmhworl`@`localhost` PROCEDURE `spConsultaSalon` (IN `id` INT(11))  BEGIN
	IF (id=0)THEN
    	BEGIN
        SELECT * FROM hot_salon;
        END;
    ELSE
    	SELECT * from hot_salon WHERE sal_cve_salon=id;
    END IF;
	
END$$

CREATE DEFINER=`upmhworl`@`localhost` PROCEDURE `spEditarHabitacion` (IN `claveHabitacion` INT(11), IN `claveTipo` INT(11), IN `nombre` VARCHAR(50), IN `capacidad` VARCHAR(50), IN `ncamas` INT(11), IN `tarifa` INT(11), IN `imagen` VARCHAR(200), IN `estado` INT(11), IN `descripcion` VARCHAR(50), IN `claveHotel` INT(11))  BEGIN
	
    IF EXISTS (SELECT * FROM hot_habitacion where claveHabitacion = hab_cve_habitacion)THEN
    	BEGIN
        	UPDATE hot_habitacion SET hab_cve_tipo = claveTipo,hab_nombre = nombre, hab_capacidad = capacidad, hab_nocamas = ncamas, hab_tarifa = tarifa, hab_imagen_principal = imagen,hab_estatus = estado, hab_descripcion = descripcion, hab_cve_hotel= claveHotel WHERE claveHabitacion = hab_cve_habitacion;
            SELECT '1' CLAVE;
        END;
        ELSE
        	SELECT '0' CLAVE;
        END IF;
END$$

CREATE DEFINER=`upmhworl`@`localhost` PROCEDURE `spEditarHotel` (IN `id` INT(11), IN `nombre` VARCHAR(50), IN `estado` VARCHAR(50), IN `ciudad` VARCHAR(50), IN `estrellas` INT(11), IN `descripcion` VARCHAR(100))  BEGIN
	IF EXISTS (SELECT * FROM hot_hotel where hot_cve_hotel=id)THEN
    	BEGIN
        	UPDATE hot_hotel SET hot_nombre =nombre, hot_estado=estado, hot_ciudad=ciudad,hot_estrellas=estrellas,hot_descripcion=descripcion WHERE hot_cve_hotel=id;
            SELECT '1' CLAVE;
        END;
        ELSE
         	SELECT '0' CLAVE;
        END IF;
END$$

CREATE DEFINER=`upmhworl`@`localhost` PROCEDURE `spEliminarHabitacion` (IN `claveHabitacion` INT(11))  BEGIN
	IF EXISTS (SELECT * FROM hot_habitacion where hab_cve_habitacion = claveHabitacion)THEN
    	BEGIN
        	DELETE FROM hot_habitacion WHERE hab_cve_habitacion = claveHabitacion;
            SELECT '1' CLAVE;
        END;
    ELSE
    	SELECT '0' CLAVE;
    END IF;
END$$

CREATE DEFINER=`upmhworl`@`localhost` PROCEDURE `spEliminarHotel` (IN `id` INT(11))  BEGIN
	IF EXISTS (SELECT * FROM hot_hotel where hot_cve_hotel=id)THEN
    	BEGIN
        	DELETE FROM hot_hotel WHERE hot_cve_hotel=id;
            DELETE FROM hot_habitacion WHERE hab_cve_hotel = id;
            SELECT '1' CLAVE;
        
    
   		END;
    ELSE
    	SELECT '0' CLAVE;
    END IF;
END$$

CREATE DEFINER=`upmhworl`@`localhost` PROCEDURE `spInsertarHabitacion` (IN `claveTipo` INT(11), IN `nombre` VARCHAR(50), IN `capacidad` VARCHAR(50), IN `ncamas` INT(11), IN `tarifa` INT(11), IN `imagen` VARCHAR(200), IN `estado` INT(11), IN `descripcion` VARCHAR(50), IN `claveHotel` INT(11))  BEGIN
	IF EXISTS (SELECT * FROM hot_hotel a,hot_tipo_habitacion c where claveTipo = c.tip_cve_habitacion AND claveHotel = a.hot_cve_hotel)THEN
    	BEGIN
        	INSERT INTO hot_habitacion VALUES (null,claveTipo,nombre,capacidad,ncamas,tarifa,imagen,estado,descripcion,claveHotel);
            SELECT '1' CLAVE;
        END;
    ELSE    
    	SELECT '0' CLAVE;
    END IF;
    	
    
END$$

CREATE DEFINER=`upmhworl`@`localhost` PROCEDURE `spInsertarHotel` (IN `nombre` VARCHAR(50), IN `estado` VARCHAR(50), IN `ciudad` VARCHAR(50), IN `estrellas` INT(11), IN `descripcion` VARCHAR(100))  BEGIN

	IF NOT EXISTS (SELECT * FROM hot_hotel  WHERE hot_nombre = nombre ) THEN
    	BEGIN
			INSERT INTO hot_hotel VALUES(NULL,nombre,estado,ciudad,estrellas,descripcion);
			SELECT '1' CLAVE;
   		END;
   	ELSE
		SELECT '0' CLAVE;
	END IF;

END$$

CREATE DEFINER=`upmhworl`@`localhost` PROCEDURE `spListarHabitacionesCliente` ()  BEGIN
		
         SELECT hab_cve_habitacion as CLAVE, hab_nombre as NOMBRE, hab_descripcion as DESCRIPCION, hab_tarifa as TARIFA, hab_imagen_principal as PRINCIPAL
        FROM hot_habitacion
        WHERE hab_estatus = 1;
      
      END$$

CREATE DEFINER=`upmhworl`@`localhost` PROCEDURE `spListarResHabCliente` (IN `USUARIO` INT)  BEGIN
		
        SELECT res_cve_habitacion as HABITACION, res_fecha_inicio as INICIO, res_fecha_fin as FIN
        FROM hot_reservacion_hab
        WHERE res_cve_usuario = USUARIO;
      
      END$$

CREATE DEFINER=`upmhworl`@`localhost` PROCEDURE `spListarResSalCliente` (IN `USUARIO` INT)  BEGIN
		
        SELECT res_cve_salon as SALON, res_fecha_inicio as INICIO, res_fecha_fin as FIN
        FROM hot_reservacion_sal
        WHERE res_cve_usuario = USUARIO;
      
      END$$

CREATE DEFINER=`upmhworl`@`localhost` PROCEDURE `spModificarSalones` (IN `clave` INT(11), IN `hotel_cve` INT(11), IN `nombre` VARCHAR(50), IN `capaci` VARCHAR(50), IN `tari` INT(11), IN `imag` VARCHAR(50), IN `descrp` VARCHAR(100))  BEGIN
IF EXISTS(select * from hot_salon where sal_cve_salon= clave) THEN
BEGIN
UPDATE hot_salon SET sal_cve_hotel=hotel_cve, sal_nombre=nombre,sal_capacidad=capaci,
sal_tarifa=tari,  sal_imagen_principal=imag,  sal_descripcion=descrp
where sal_cve_salon=clave;
SELECT "1" CLAVE;
END;
ELSE
SELECT "0" CLAVE;
END IF;
END$$

CREATE DEFINER=`upmhworl`@`localhost` PROCEDURE `spModificarUsuario` (IN `Clave` INT, IN `Nombre` VARCHAR(20), IN `ApellidoPaterno` VARCHAR(20), IN `ApellidoMaterno` VARCHAR(20), IN `Usuario` VARCHAR(20), IN `Correo` VARCHAR(50), IN `Sexo` VARCHAR(50), IN `Telefono` VARCHAR(50), IN `Foto` VARCHAR(50))  BEGIN
		
    
		UPDATE hot_usuarios SET usu_nombre = Nombre, usu_apellido_paterno = ApellidoPaterno, usu_apellido_materno = ApellidoMaterno, usu_usuario = Usuario, 
        usu_correo = Correo, usu_sexo = Sexo, usu_telefono = Telefono, usu_foto = Foto
        WHERE usu_cve_usuario = Clave;
		SELECT '1' CLAVE;
        
		
      
      END$$

CREATE DEFINER=`upmhworl`@`localhost` PROCEDURE `spMostrarInformes` (IN `id` INT(11))  BEGIN
	IF (id=0)THEN
    	BEGIN
        SELECT * FROM hot_informes;
        END;
    ELSE
    	SELECT * from hot_informes WHERE inf_cve_informes=id;
    END IF;
	
END$$

CREATE DEFINER=`upmhworl`@`localhost` PROCEDURE `spRegistrarReservacionHab` (IN `HABITACION` INT, IN `USUARIO` INT, IN `NOMBRE` VARCHAR(50), IN `APELLIDOPAT` VARCHAR(50), IN `APELLIDOMAT` VARCHAR(50), IN `INICIO` DATE, IN `FINAL` DATE, IN `PERSONAS` INT)  BEGIN
INSERT INTO hot_reservacion_hab values
(null, HABITACION, USUARIO, NOMBRE, APELLIDOPAT, APELLIDOMAT, INICIO, FINAL, PERSONAS);

UPDATE hot_habitacion SET hab_estatus = 2
        WHERE hab_cve_habitacion = HABITACION;

SELECT "1" CLAVE;

END$$

CREATE DEFINER=`upmhworl`@`localhost` PROCEDURE `spRegistrarSolicitud` (IN `nombre` VARCHAR(100), IN `correo` VARCHAR(100), IN `mensaje` VARCHAR(100))  BEGIN
IF not EXISTS(select * from hot_informes
where  mensaje = inf_mensaje) THEN
BEGIN
INSERT INTO hot_informes values
(null,1,
  nombre,
  correo,
  mensaje);

SELECT "1" CLAVE;
END;
ELSE

SELECT "0" CLAVE;
END IF;
END$$

CREATE DEFINER=`upmhworl`@`localhost` PROCEDURE `spRegistrarUsuario` (IN `NOMBRE` VARCHAR(50), IN `APELLIDOPAT` VARCHAR(50), IN `APELLIDOMAT` VARCHAR(50), IN `USUARIO` VARCHAR(50), IN `CONTRASENA` VARCHAR(50), IN `CORREO` VARCHAR(50))  BEGIN
	IF NOT EXISTS(select * from hot_usuarios where usu_usuario=USUARIO) THEN
		
	INSERT INTO `hot_usuarios`(`usu_cve_usuario`, `usu_cve_rol`, `usu_nombre`, `usu_apellido_paterno`, `usu_apellido_materno`, `usu_usuario`, 
	`usu_contrasena`, `usu_correo`, `usu_sexo`, `usu_telefono`, `usu_foto`, `usu_status`, `usu_fecha_registro`) 
	VALUES (null, 2, NOMBRE, APELLIDOPAT, APELLIDOMAT, USUARIO, CONTRASENA, CORREO, null, null, null, 1,now());
	SELECT "1" CLAVE;
	ELSE
	SELECT "0" CLAVE;
    END IF;  
END$$

CREATE DEFINER=`upmhworl`@`localhost` PROCEDURE `spValidarAcceso` (IN `Usuario` VARCHAR(50), IN `Contrasena` VARCHAR(50))  BEGIN
	IF EXISTS(SELECT * FROM hot_usuarios WHERE usu_usuario = Usuario AND usu_contrasena = Contrasena) THEN
		SELECT U.usu_cve_usuario AS CLAVE, U.usu_nombre AS NOMBRE, U.usu_apellido_paterno AS AP, U.usu_apellido_materno AS AM, R.rol_nombre AS ROL, U.usu_foto as FOTO, U.usu_usuario as USUARIO, U.usu_correo as CORREO,
        U.usu_sexo as SEXO, U.usu_telefono as TEL
		FROM hot_usuarios AS U, hot_rol AS R 
		WHERE U.usu_usuario=Usuario
		AND U.usu_contrasena = Contrasena
		AND U.usu_cve_rol= R.rol_cve_rol
		AND U.usu_status=1;
	ELSE
		SELECT '0' CLAVE;
	END IF;
      
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hot_det_compra`
--

CREATE TABLE `hot_det_compra` (
  `det_cve_compra` int(11) NOT NULL,
  `det_cve_paquete` int(11) NOT NULL,
  `det_cve_usuario` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hot_det_servicio`
--

CREATE TABLE `hot_det_servicio` (
  `det_cve_detservicio` int(11) NOT NULL,
  `det_cve_habitacion` int(11) NOT NULL,
  `det_cve_servicio` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hot_habitacion`
--

CREATE TABLE `hot_habitacion` (
  `hab_cve_habitacion` int(11) NOT NULL,
  `hab_cve_tipo` int(11) NOT NULL,
  `hab_nombre` varchar(50) NOT NULL,
  `hab_capacidad` int(50) NOT NULL,
  `hab_nocamas` int(11) NOT NULL,
  `hab_tarifa` int(11) NOT NULL,
  `hab_imagen_principal` varchar(200) NOT NULL,
  `hab_estatus` int(11) NOT NULL,
  `hab_descripcion` varchar(100) NOT NULL,
  `hab_cve_hotel` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hot_habitacion`
--

INSERT INTO `hot_habitacion` (`hab_cve_habitacion`, `hab_cve_tipo`, `hab_nombre`, `hab_capacidad`, `hab_nocamas`, `hab_tarifa`, `hab_imagen_principal`, `hab_estatus`, `hab_descripcion`, `hab_cve_hotel`) VALUES
(20, 1, 'Habitacion Simple Cancun', 6, 3, 2100, 'img/habitaciones/Habitacion Simple Cancun.jpg', 2, 'Habitacion simple en CancÃºn para 6 personas', 10),
(21, 1, 'Habitacion Simple Pachuca', 6, 3, 2100, 'img/habitaciones/Habitacion Simple Pachuca.jpg', 1, 'Habitacion simple para 6 personas', 11),
(22, 1, 'Habitacion Simple Guadalajara', 6, 3, 2500, 'img/habitaciones/Habitacion Simple Guadalajara.jpg', 1, 'Habitacion Simple Guadalajara', 12),
(23, 1, 'Habitacion Simple Acapulco', 6, 3, 3000, 'img/habitaciones/Habitacion Simple Acapulco.jpg', 1, 'Habitacion Simple Acapulco', 13),
(24, 2, 'Habitacion Doble Cancun', 7, 4, 4500, 'img/habitaciones/Habitacion Doble Cancun.jpg', 1, 'Habitacion Doble Cancun', 10),
(25, 2, 'Habitacion Doble Pachuca', 7, 4, 4500, 'img/habitaciones/Habitacion Doble Pachuca.jpg', 2, 'Habitacion Simple Pachuca', 11),
(26, 2, 'Habitacion Doble Guadalajara', 8, 4, 5600, 'img/habitaciones/Habitacion Doble Guadalajara.jpg', 1, 'Habitacion Doble Guadalajara', 12),
(27, 2, 'Habitacion Doble Acapulco', 9, 7, 8000, 'img/habitaciones/Habitacion Doble Acapulco.jpg', 1, 'Habitacion Doble Acapulco', 13),
(28, 3, 'Habitacion Premier Cancun', 3, 3, 9000, 'img/habitaciones/Habitacion Premier Cancun.jpg', 1, 'Habitacion Premier Cancun', 10),
(29, 4, 'Habitacion Premier Pachuca', 2, 2, 8000, 'img/habitaciones/Habitacion Premier Pachuca.jpg', 1, 'Habitacion Premier Pachuca', 11),
(30, 3, 'Habitacion Premier Acapulco', 1, 1, 11000, 'img/habitaciones/Habitacion Premier Acapulco.jpg', 2, 'Habitacion Premier Acapulco', 13),
(31, 4, 'Habitacion Delux CDMX', 4, 2, 9000, 'img/habitaciones/Habitacion Delux CDMX.jpg', 2, 'Habitacion Delux CDMX', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hot_hotel`
--

CREATE TABLE `hot_hotel` (
  `hot_cve_hotel` int(11) NOT NULL,
  `hot_nombre` varchar(50) NOT NULL,
  `hot_estado` varchar(50) NOT NULL,
  `hot_ciudad` varchar(50) NOT NULL,
  `hot_estrellas` int(11) NOT NULL,
  `hot_descripcion` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hot_hotel`
--

INSERT INTO `hot_hotel` (`hot_cve_hotel`, `hot_nombre`, `hot_estado`, `hot_ciudad`, `hot_estrellas`, `hot_descripcion`) VALUES
(10, 'Carmesi Cancun', 'Quintana Roo', 'Cancun', 5, 'Excelente hotel de 5 estrellas'),
(11, 'Carmesi Pachuca', 'Hidalgo', 'Pachuca', 3, 'Hotel de 3 estrellas'),
(12, 'Carmesi Guadalajara', 'Jalisco', 'Guadalajara', 4, 'Hotel de 4 estrellas '),
(13, 'Carmesi Acapulco', 'Guerrero', 'Acapulco', 2, 'Economico hotel 2 estrellas'),
(14, 'Carmesi CDMX', 'CDMX', 'CDMX', 4, 'Hotel de 4 estrellas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hot_imagenes_hab`
--

CREATE TABLE `hot_imagenes_hab` (
  `img_cve_imghab` int(11) NOT NULL,
  `img_cve_habitacion` int(11) NOT NULL,
  `img_habitacion_ruta` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hot_imagenes_sal`
--

CREATE TABLE `hot_imagenes_sal` (
  `img_cve_imgsal` int(11) NOT NULL,
  `img_cve_salon` int(11) NOT NULL,
  `img_salon_ruta` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hot_informes`
--

CREATE TABLE `hot_informes` (
  `inf_cve_informes` int(11) NOT NULL,
  `inf_cve_hotel` int(11) NOT NULL,
  `inf_nombre` varchar(100) NOT NULL,
  `inf_correo` varchar(100) NOT NULL,
  `inf_mensaje` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hot_informes`
--

INSERT INTO `hot_informes` (`inf_cve_informes`, `inf_cve_hotel`, `inf_nombre`, `inf_correo`, `inf_mensaje`) VALUES
(14, 1, 'Jorge Uriel Castillo HernÃ¡ndez ', 'jorgecastillo1946@hotmail.com', 'Solicito la informaciÃ³n del precio de una habitaciÃ³n '),
(13, 1, 'Javier', 'immortal_971@live.com.mx', 'Excelente precio'),
(15, 1, 'Hector Jimenez', 'hector@gmail.com', 'Necesito informes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hot_paquetes`
--

CREATE TABLE `hot_paquetes` (
  `paq_cve_paquete` int(11) NOT NULL,
  `paq_cve_hotel` int(11) NOT NULL,
  `paq_nombre` varchar(50) NOT NULL,
  `paq_descripcion` varchar(50) NOT NULL,
  `paq_banner` varchar(50) NOT NULL,
  `paq_tarifa` int(11) NOT NULL,
  `paq_status` int(11) DEFAULT NULL,
  `paq_cve_usuario` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hot_reservacion_hab`
--

CREATE TABLE `hot_reservacion_hab` (
  `res_cve_reshab` int(11) NOT NULL,
  `res_cve_habitacion` int(11) NOT NULL,
  `res_cve_usuario` int(11) DEFAULT NULL,
  `res_nombre` varchar(50) NOT NULL,
  `res_apellido_paterno` varchar(50) NOT NULL,
  `res_apellido_materno` varchar(50) NOT NULL,
  `res_fecha_inicio` date NOT NULL,
  `res_fecha_fin` date NOT NULL,
  `res_no_personas` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hot_reservacion_hab`
--

INSERT INTO `hot_reservacion_hab` (`res_cve_reshab`, `res_cve_habitacion`, `res_cve_usuario`, `res_nombre`, `res_apellido_paterno`, `res_apellido_materno`, `res_fecha_inicio`, `res_fecha_fin`, `res_no_personas`) VALUES
(8, 31, 12, 'Marcos', 'Jimenez', 'Hernandez', '2018-12-05', '2018-12-15', 3),
(9, 25, 0, 'Linda Luz', 'Carbonell Isidro', 'Isidro', '2018-12-01', '2018-12-07', 1),
(10, 30, 13, 'Linda Luz', 'Carbonell Isidro', 'Carbonell Isidro', '2018-12-11', '2018-12-19', 1),
(11, 20, 0, 'Wdm', 'Wdm', 'Wdn', '2018-12-05', '2018-12-19', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hot_reservacion_sal`
--

CREATE TABLE `hot_reservacion_sal` (
  `res_cve_ressal` int(11) NOT NULL,
  `res_cve_salon` int(11) NOT NULL,
  `res_cve_usuario` int(11) NOT NULL,
  `res_nombre` varchar(50) NOT NULL,
  `res_apellido_paterno` varchar(50) NOT NULL,
  `res_apellido_materno` varchar(50) NOT NULL,
  `res_fecha_inicio` date NOT NULL,
  `res_fecha_fin` date NOT NULL,
  `res_no_personas` int(11) NOT NULL,
  `res_detalles` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hot_rol`
--

CREATE TABLE `hot_rol` (
  `rol_cve_rol` int(11) NOT NULL,
  `rol_nombre` varchar(50) NOT NULL,
  `rol_descripcion` varchar(100) NOT NULL,
  `rol_status` int(11) NOT NULL,
  `rol_fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hot_rol`
--

INSERT INTO `hot_rol` (`rol_cve_rol`, `rol_nombre`, `rol_descripcion`, `rol_status`, `rol_fecha_registro`) VALUES
(1, 'Administrador', 'Se encarga de administrar el sitio', 1, '2018-11-18 22:18:25'),
(2, 'Cliente', 'Cliente de la cadena hotelera', 1, '2018-11-18 22:18:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hot_salon`
--

CREATE TABLE `hot_salon` (
  `sal_cve_salon` int(11) NOT NULL,
  `sal_cve_hotel` int(11) NOT NULL,
  `sal_nombre` varchar(50) NOT NULL,
  `sal_capacidad` varchar(50) NOT NULL,
  `sal_tarifa` int(11) NOT NULL,
  `sal_imagen_principal` varchar(50) NOT NULL,
  `sal_descripcion` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hot_salon`
--

INSERT INTO `hot_salon` (`sal_cve_salon`, `sal_cve_hotel`, `sal_nombre`, `sal_capacidad`, `sal_tarifa`, `sal_imagen_principal`, `sal_descripcion`) VALUES
(1, 2, 'Liviathan', '3000', 6647748, 'img1', 'gaxdiusg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hot_servicio`
--

CREATE TABLE `hot_servicio` (
  `ser_cve_servicio` int(11) NOT NULL,
  `ser_nombre` varchar(50) NOT NULL,
  `ser_descripcion` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hot_servicio`
--

INSERT INTO `hot_servicio` (`ser_cve_servicio`, `ser_nombre`, `ser_descripcion`) VALUES
(1, 'Internet', 'Desc 1'),
(2, 'Piscina privada', 'Desc 2'),
(3, 'Piscina compartida', 'Desc 3'),
(4, 'Acceso a buffet', 'Desc 4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hot_tipo_habitacion`
--

CREATE TABLE `hot_tipo_habitacion` (
  `tip_cve_habitacion` int(11) NOT NULL,
  `tip_nombre_habitacion` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hot_tipo_habitacion`
--

INSERT INTO `hot_tipo_habitacion` (`tip_cve_habitacion`, `tip_nombre_habitacion`) VALUES
(1, 'Simple'),
(2, 'Doble'),
(3, 'Premier'),
(4, 'Delux');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hot_usuarios`
--

CREATE TABLE `hot_usuarios` (
  `usu_cve_usuario` int(11) NOT NULL,
  `usu_cve_rol` int(11) NOT NULL,
  `usu_nombre` varchar(50) NOT NULL,
  `usu_apellido_paterno` varchar(50) NOT NULL,
  `usu_apellido_materno` varchar(50) NOT NULL,
  `usu_usuario` varchar(50) NOT NULL,
  `usu_contrasena` varchar(50) NOT NULL,
  `usu_correo` varchar(50) NOT NULL,
  `usu_sexo` varchar(2) DEFAULT NULL,
  `usu_telefono` varchar(15) DEFAULT NULL,
  `usu_foto` varchar(50) DEFAULT NULL,
  `usu_status` int(11) NOT NULL,
  `usu_fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hot_usuarios`
--

INSERT INTO `hot_usuarios` (`usu_cve_usuario`, `usu_cve_rol`, `usu_nombre`, `usu_apellido_paterno`, `usu_apellido_materno`, `usu_usuario`, `usu_contrasena`, `usu_correo`, `usu_sexo`, `usu_telefono`, `usu_foto`, `usu_status`, `usu_fecha_registro`) VALUES
(1, 1, 'Hector', 'Jimenez', 'Hernandez', 'HectorAJ', '123', 'correo@gmail.com', 'M', '5512345678', NULL, 1, '2018-11-18 22:20:15'),
(2, 1, 'Alicia', 'Morales', 'de Aquino', 'AliciaMA', '123', 'correo@gmail.com', 'F', '5512345678', NULL, 1, '2018-11-18 22:20:15'),
(3, 1, 'Jorge', 'Castillo', 'Hernandez', 'JorgeCH', '123', 'correo@gmail.com', 'M', '5512345678', NULL, 1, '2018-11-18 22:20:15'),
(4, 1, 'Javier', 'Morales', 'Bautista', 'JavierMB', '123', 'correo@gmail.com', 'M', '5512345678', NULL, 1, '2018-11-18 22:20:15'),
(11, 2, 'Jorge Uriel ', 'Castillo ', 'HernÃ¡ndez ', 'Url', '123456', 'uriel.messi1055@gmail.com', NULL, NULL, NULL, 1, '2018-12-03 02:42:11'),
(12, 2, 'Marcos', 'Jimenez', 'Hernandez', 'MarcosJH', '123', 'marcos@gmail.com', 'M', '5514109181', 'img/users/MarcosJH.jpg', 1, '2018-12-03 03:04:13'),
(13, 2, 'Linda Luz', 'Carbonell Isidro', 'Carbonell Isidro', 'lindaluz', '12345', 'lindacarboney@gmail.com', 'F', '7712224102', 'img/users/lindaluz.png', 1, '2018-12-03 03:46:59'),
(14, 2, 'Luis', 'Arturo', 'GutiÃ©rrez', 'Luisgp', 'Luisgp', '153110123@upmh.edu.mx', '', '', 'img/users/Luisgp.JPG', 1, '2018-12-03 04:51:51'),
(15, 2, 'Maria', 'Morales', 'De Aquino', 'Alim910', '0910', 'alimda1275@gmail.com', 'F', '5576146710', 'img/users/Alim910.jpeg', 1, '2018-12-03 21:40:20'),
(16, 2, 'Facebook', 'User', 'Demo', 'Facebook', '123', 'Facebook', NULL, NULL, NULL, 1, '2018-12-07 01:45:36'),
(17, 2, 'Alexis', 'Ortiz', 'Puebla', 'alex09', '090793', 'alexpuebla12@gmail.xom', '', '774', 'img/users/alex09.jpg', 1, '2018-12-09 20:28:09');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `hot_det_compra`
--
ALTER TABLE `hot_det_compra`
  ADD PRIMARY KEY (`det_cve_compra`);

--
-- Indices de la tabla `hot_det_servicio`
--
ALTER TABLE `hot_det_servicio`
  ADD PRIMARY KEY (`det_cve_detservicio`);

--
-- Indices de la tabla `hot_habitacion`
--
ALTER TABLE `hot_habitacion`
  ADD PRIMARY KEY (`hab_cve_habitacion`);

--
-- Indices de la tabla `hot_hotel`
--
ALTER TABLE `hot_hotel`
  ADD PRIMARY KEY (`hot_cve_hotel`);

--
-- Indices de la tabla `hot_imagenes_hab`
--
ALTER TABLE `hot_imagenes_hab`
  ADD PRIMARY KEY (`img_cve_imghab`);

--
-- Indices de la tabla `hot_imagenes_sal`
--
ALTER TABLE `hot_imagenes_sal`
  ADD PRIMARY KEY (`img_cve_imgsal`);

--
-- Indices de la tabla `hot_informes`
--
ALTER TABLE `hot_informes`
  ADD PRIMARY KEY (`inf_cve_informes`);

--
-- Indices de la tabla `hot_paquetes`
--
ALTER TABLE `hot_paquetes`
  ADD PRIMARY KEY (`paq_cve_paquete`);

--
-- Indices de la tabla `hot_reservacion_hab`
--
ALTER TABLE `hot_reservacion_hab`
  ADD PRIMARY KEY (`res_cve_reshab`);

--
-- Indices de la tabla `hot_reservacion_sal`
--
ALTER TABLE `hot_reservacion_sal`
  ADD PRIMARY KEY (`res_cve_ressal`);

--
-- Indices de la tabla `hot_rol`
--
ALTER TABLE `hot_rol`
  ADD PRIMARY KEY (`rol_cve_rol`);

--
-- Indices de la tabla `hot_salon`
--
ALTER TABLE `hot_salon`
  ADD PRIMARY KEY (`sal_cve_salon`);

--
-- Indices de la tabla `hot_servicio`
--
ALTER TABLE `hot_servicio`
  ADD PRIMARY KEY (`ser_cve_servicio`);

--
-- Indices de la tabla `hot_tipo_habitacion`
--
ALTER TABLE `hot_tipo_habitacion`
  ADD PRIMARY KEY (`tip_cve_habitacion`);

--
-- Indices de la tabla `hot_usuarios`
--
ALTER TABLE `hot_usuarios`
  ADD PRIMARY KEY (`usu_cve_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hot_det_compra`
--
ALTER TABLE `hot_det_compra`
  MODIFY `det_cve_compra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hot_det_servicio`
--
ALTER TABLE `hot_det_servicio`
  MODIFY `det_cve_detservicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hot_habitacion`
--
ALTER TABLE `hot_habitacion`
  MODIFY `hab_cve_habitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `hot_hotel`
--
ALTER TABLE `hot_hotel`
  MODIFY `hot_cve_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `hot_imagenes_hab`
--
ALTER TABLE `hot_imagenes_hab`
  MODIFY `img_cve_imghab` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hot_imagenes_sal`
--
ALTER TABLE `hot_imagenes_sal`
  MODIFY `img_cve_imgsal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hot_informes`
--
ALTER TABLE `hot_informes`
  MODIFY `inf_cve_informes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `hot_paquetes`
--
ALTER TABLE `hot_paquetes`
  MODIFY `paq_cve_paquete` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hot_reservacion_hab`
--
ALTER TABLE `hot_reservacion_hab`
  MODIFY `res_cve_reshab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `hot_reservacion_sal`
--
ALTER TABLE `hot_reservacion_sal`
  MODIFY `res_cve_ressal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hot_rol`
--
ALTER TABLE `hot_rol`
  MODIFY `rol_cve_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `hot_salon`
--
ALTER TABLE `hot_salon`
  MODIFY `sal_cve_salon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `hot_servicio`
--
ALTER TABLE `hot_servicio`
  MODIFY `ser_cve_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `hot_tipo_habitacion`
--
ALTER TABLE `hot_tipo_habitacion`
  MODIFY `tip_cve_habitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `hot_usuarios`
--
ALTER TABLE `hot_usuarios`
  MODIFY `usu_cve_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
