-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para citytours
CREATE DATABASE IF NOT EXISTS `citytours` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `citytours`;

-- Volcando estructura para procedimiento citytours.lugares
DELIMITER //
CREATE PROCEDURE `lugares`()
BEGIN
insert into lugaresturisticos values("Machu Picchu","images/machu.jpg","machu_picchu");
insert into lugaresturisticos values("Fortaleza de Kuélap","images/kuelap.jpg","fortaleza_kuelap");
insert into lugaresturisticos values("Huayna Picchu","images/huaynapicchu.jpg","huayna_picchu");
insert into lugaresturisticos values("Choququirao","images/choququirao.jpg","choquequirao");
insert into lugaresturisticos values("Sacsay Huaman","images/sacsayhuaman.jpg","sacsay_huaman");
insert into lugaresturisticos values("Valle Sagrado","images/vallesagrado.jpg","valle_sagrado");
END//
DELIMITER ;

-- Volcando estructura para tabla citytours.lugaresturisticos
CREATE TABLE IF NOT EXISTS `lugaresturisticos` (
  `nombre` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla citytours.lugaresturisticos: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `lugaresturisticos` DISABLE KEYS */;
INSERT IGNORE INTO `lugaresturisticos` (`nombre`, `img`, `url`) VALUES
	('Machu Picchu', 'images/machu.jpg', 'machu_picchu'),
	('Valle Sagrado', 'images/vallesagrado.jpg', 'valle_sagrado'),
	('Fortaleza de Kuélap', 'images/kuelap.jpg', 'fortaleza_kuelap'),
	('Huayna Picchu', 'images/huaynapicchu.jpg', 'huayna_picchu'),
	('Choquequirao', 'images/choquequirao.jpg', 'choquequirao'),
	('Sacsay Huaman', 'images/sacsayhuaman.jpg', 'sacsay_huaman');
/*!40000 ALTER TABLE `lugaresturisticos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
