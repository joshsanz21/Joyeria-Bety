-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.19-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para joyeria
CREATE DATABASE IF NOT EXISTS `joyeria` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `joyeria`;

-- Volcando estructura para tabla joyeria.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_clientes` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `apellidopaterno` varchar(10) NOT NULL,
  `apellidomaterno` varchar(10) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `ciudad` varchar(12) NOT NULL,
  `colonia` varchar(20) NOT NULL,
  `calle` varchar(12) NOT NULL,
  `direccion` varchar(25) NOT NULL,
  PRIMARY KEY (`id_clientes`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla joyeria.cliente: 4 rows
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT IGNORE INTO `cliente` (`id_clientes`, `nombre`, `apellidopaterno`, `apellidomaterno`, `telefono`, `email`, `ciudad`, `colonia`, `calle`, `direccion`) VALUES
	(1, 'Jose Antonio', 'Perez', 'Sanchez', '9191171374', 'jose123@gmail.com', 'Mexico', 'Chilon', 'Lacanja', '3da Avenida'),
	(12, 'Marco Antonio', 'Lopez', 'Gomez', '9191934987', 'marco12@gmail.com', 'Mexico', 'San jose', 'Guerreo', '3Ave.norte'),
	(10, 'Leandro ', 'Montejo', 'Jimenez', '9843253234', 'Leandro@gmail.com', 'Mexico', 'Buena vista', 'Guerrerro', 'Av.sur.34'),
	(11, 'Nata', 'Montejo', 'Jimenez', '9161281097', 'nata@gmail.com', 'Mexico', 'las palmas', 'San miguel', 'Avenida sur.12');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Volcando estructura para tabla joyeria.empleados
CREATE TABLE IF NOT EXISTS `empleados` (
  `id_empleados` int(11) NOT NULL AUTO_INCREMENT,
  `curp` varchar(18) NOT NULL,
  `fecha_nac` date NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `sexo` enum('Masculino','Femenino') NOT NULL,
  `telefono` varchar(10) NOT NULL,
  PRIMARY KEY (`id_empleados`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla joyeria.empleados: 3 rows
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT IGNORE INTO `empleados` (`id_empleados`, `curp`, `fecha_nac`, `direccion`, `nombre`, `apellidos`, `email`, `sexo`, `telefono`) VALUES
	(1, 'MAHJ280603MSPRRV09', '2021-07-13', 'Salto de agua', 'Maria Jimena ', 'Martinez', 'montejo1jwn@gmail.com', 'Masculino', '9854203958'),
	(7, 'PERC561125MSPRMT03', '2021-07-14', 'Ocosingo', 'Catalina ', 'Peralta', 'cata123@gmail.com', 'Femenino', '8675967543'),
	(10, 'ROVI490617HSPDSS05', '2021-07-14', 'Palenque', 'Ismael ', 'Rodriguez ', 'ismaijwn@gmail.com', 'Masculino', '2147483647');
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;

-- Volcando estructura para tabla joyeria.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `claveproducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `stock` int(11) NOT NULL,
  `precioactual` varchar(50) NOT NULL DEFAULT '',
  `categoria` varchar(10) NOT NULL,
  `proveedor` varchar(10) NOT NULL,
  PRIMARY KEY (`claveproducto`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla joyeria.productos: 3 rows
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT IGNORE INTO `productos` (`claveproducto`, `nombre`, `stock`, `precioactual`, `categoria`, `proveedor`) VALUES
	(14, 'Arete', 3, '45.32', 'Dorado', 'Leandro'),
	(16, 'Pulseras ', 16, '34.7', 'Oro Puro', 'Jose'),
	(44, 'Pulseritas', 17, '67.54', 'Oro', 'Marco');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando estructura para tabla joyeria.proveedor
CREATE TABLE IF NOT EXISTS `proveedor` (
  `id_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `direccion` varchar(12) NOT NULL,
  PRIMARY KEY (`id_proveedor`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla joyeria.proveedor: 5 rows
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
INSERT IGNORE INTO `proveedor` (`id_proveedor`, `nombre`, `telefono`, `direccion`) VALUES
	(6, 'Cesar', '9191934987', 'Barrio Guada'),
	(9, 'Jose', '7465736273', 'Chilon'),
	(10, 'Marco', '9191934987', '3Ave.norte'),
	(11, 'Juan', '1234565432', 'Avenida.sur'),
	(12, 'Isamar', '5968504564', 'sur norte');
/*!40000 ALTER TABLE `proveedor` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
