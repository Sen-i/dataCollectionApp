# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Database: shapeDB
# Generation Time: 2020-03-24 12:04:54 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table shapes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shapes`;

CREATE TABLE `shapes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ShapeName` varchar(255) DEFAULT NULL,
  `NumberOfCorners` tinyint(1) DEFAULT NULL,
  `AreaFormula` varchar(255) DEFAULT NULL,
  `Comments` varchar(255) DEFAULT NULL,
  `imgurl` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `shapes` WRITE;
/*!40000 ALTER TABLE `shapes` DISABLE KEYS */;

INSERT INTO `shapes` (`ID`, `ShapeName`, `NumberOfCorners`, `AreaFormula`, `Comments`, `imgurl`)
VALUES
	(1,'Circle',0,'2*pi*rardius*radius','This is a Circle','https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Circle-withsegments.svg/440px-Circle-withsegments.svg.png'),
	(2,'Rectangle',4,'length*width','This is a Rectangle','https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Rectangle_Geometry_Vector.svg/440px-Rectangle_Geometry_Vector.svg.png'),
	(3,'Triangle',3,'0.5*height*base','This is a Triangle','https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Regular_polygon_3_annotated.svg/440px-Regular_polygon_3_annotated.svg.png');

/*!40000 ALTER TABLE `shapes` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
