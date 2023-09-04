# ************************************************************
# Sequel Ace SQL dump
# Version 20035
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: localhost (MySQL 8.0.33)
# Database: hr_prvi
# Generation Time: 2023-09-04 18:06:37 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table clan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `clan`;

CREATE TABLE `clan` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `imePrezime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datumRodjenja` date DEFAULT NULL,
  `brojTelefona` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocenaRada` int DEFAULT NULL,
  `level_id` int DEFAULT NULL,
  `tim_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `clan` WRITE;
/*!40000 ALTER TABLE `clan` DISABLE KEYS */;

INSERT INTO `clan` (`id`, `imePrezime`, `datumRodjenja`, `brojTelefona`, `ocenaRada`, `level_id`, `tim_id`)
VALUES
	(1,'Ema Radak','1997-11-27','065 3232 211',8,2,3),
	(2,'Boris Zivkov','1994-03-25','065 323 333 3',2,4,1),
	(5,'test','2022-02-02','asffassf',1,1,1);

/*!40000 ALTER TABLE `clan` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table level
# ------------------------------------------------------------

DROP TABLE IF EXISTS `level`;

CREATE TABLE `level` (
  `level_id` int unsigned NOT NULL AUTO_INCREMENT,
  `naziv_levela` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`level_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `level` WRITE;
/*!40000 ALTER TABLE `level` DISABLE KEYS */;

INSERT INTO `level` (`level_id`, `naziv_levela`)
VALUES
	(1,'Pocetnik'),
	(2,'Vise od 2 godine'),
	(3,'Vise od 5 godina'),
	(4,'Senior');

/*!40000 ALTER TABLE `level` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tim
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tim`;

CREATE TABLE `tim` (
  `tim_id` int unsigned NOT NULL AUTO_INCREMENT,
  `naziv_tima` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`tim_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `tim` WRITE;
/*!40000 ALTER TABLE `tim` DISABLE KEYS */;

INSERT INTO `tim` (`tim_id`, `naziv_tima`)
VALUES
	(1,'HR'),
	(2,'PR'),
	(3,'IT'),
	(4,'Marketing'),
	(5,'Prodaja');

/*!40000 ALTER TABLE `tim` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
