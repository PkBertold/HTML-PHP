# Host: localhost  (Version 5.5.5-10.4.17-MariaDB)
# Date: 2021-03-28 15:18:45
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "szerszamok"
#

CREATE TABLE `szerszamok` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nev` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `megjegyzes` text DEFAULT NULL,
  `termek` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

#
# Data for table "szerszamok"
#

INSERT INTO `szerszamok` VALUES (11,'vasarlo3','vasarlo3@gmail.com','Máskor is itt fogok vásárolni','Csavarhúzó'),(13,'vasarlo5','vasarlo5@gmail.com','Működik vajon?!','Fűrész'),(16,'vasarlo7','vasarlo7@gmail.com','123','Fűrész'),(17,'vasarlo8','vasarlo8@gmail.com','asd','Fűrész'),(18,'vasarlo9','vasarlo9@gmail.com','123123','Csavarhúzó');
