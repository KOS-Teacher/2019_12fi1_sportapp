/* SQL Manager Lite for MySQL                              5.7.2.52112 */
/* ------------------------------------------------------------------- */
/* Host     : localhost                                                */
/* Port     : 3306                                                     */
/* Database : sporttag                                                 */


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES 'latin1' */;

SET FOREIGN_KEY_CHECKS=0;

DROP DATABASE IF EXISTS `sporttag`;

CREATE DATABASE `sporttag`
    CHARACTER SET 'utf8'
    COLLATE 'utf8_general_ci';

USE `sporttag`;

/* Struktur für die Tabelle `administrator`:  */

CREATE TABLE `administrator` (
  `Admin_ID` INTEGER(11) NOT NULL AUTO_INCREMENT,
  `Admin_Passwort` VARCHAR(225) COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY USING BTREE (`Admin_ID`)
) ENGINE=InnoDB
AUTO_INCREMENT=1 CHARACTER SET 'utf8' COLLATE 'utf8_general_ci'
;

/* Struktur für die Tabelle `klasse`:  */

CREATE TABLE `klasse` (
  `Klasse_ID` VARCHAR(225) COLLATE utf8_general_ci NOT NULL,
  `Klasse_Anzahlschueler` INTEGER(11) DEFAULT NULL,
  PRIMARY KEY USING BTREE (`Klasse_ID`)
) ENGINE=InnoDB
CHARACTER SET 'utf8' COLLATE 'utf8_general_ci'
;

/* Struktur für die Tabelle `schueler`:  */

CREATE TABLE `schueler` (
  `Schueler_ID` INTEGER(11) NOT NULL AUTO_INCREMENT,
  `Klasse_ID` VARCHAR(225) COLLATE utf8_general_ci DEFAULT NULL,
  `Schueler_Punkte` INTEGER(11) DEFAULT NULL,
  `Schueler_Krank` TINYINT(1) DEFAULT NULL,
  PRIMARY KEY USING BTREE (`Schueler_ID`),
  KEY `schueler_fk_klasse` USING BTREE (`Klasse_ID`),
  CONSTRAINT `schueler_fk_klasse` FOREIGN KEY (`Klasse_ID`) REFERENCES `klasse` (`Klasse_ID`)
) ENGINE=InnoDB
AUTO_INCREMENT=333346 CHARACTER SET 'utf8' COLLATE 'utf8_general_ci'
;

/* Struktur für die Tabelle `station`:  */

CREATE TABLE `station` (
  `Station_ID` INTEGER(11) NOT NULL AUTO_INCREMENT,
  `Station_Name` VARCHAR(225) COLLATE utf8_general_ci DEFAULT NULL,
  `Station_Punkte` INTEGER(11) DEFAULT NULL,
  `Station_Ort` VARCHAR(225) COLLATE utf8_general_ci DEFAULT NULL,
  `Station_Zeitpunkt_von` DATETIME DEFAULT NULL,
  `Station_Zeitpunkt_bis` DATETIME DEFAULT NULL,
  `Station_Passwort` VARCHAR(225) COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY USING BTREE (`Station_ID`),
  Station_Bemerkung varchar(225) COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB
AUTO_INCREMENT=3 CHARACTER SET 'utf8' COLLATE 'utf8_general_ci'
;

/* Struktur für die Tabelle `schuelerauswertung`:  */

CREATE TABLE `schuelerauswertung` (
  `Schueler_ID` INTEGER(11) NOT NULL,
  `Station_ID` INTEGER(11) NOT NULL,
  `TimeStamp` DATETIME DEFAULT NULL,
  PRIMARY KEY USING BTREE (`Schueler_ID`, `Station_ID`),
  KEY `Station_ID` USING BTREE (`Station_ID`),
  CONSTRAINT `schuelerauswertung_ibfk_1` FOREIGN KEY (`Schueler_ID`) REFERENCES `schueler` (`Schueler_ID`),
  CONSTRAINT `schuelerauswertung_ibfk_2` FOREIGN KEY (`Station_ID`) REFERENCES `station` (`Station_ID`)
) ENGINE=InnoDB
CHARACTER SET 'latin1' COLLATE 'latin1_swedish_ci'
;

/* Data for the `klasse` table  (LIMIT 0,500) */

INSERT INTO `klasse` (`Klasse_ID`, `Klasse_Anzahlschueler`) VALUES
  ('12FI1',27),
  ('12FI3',20);
COMMIT;

/* Data for the `schueler` table  (LIMIT 0,500) */

INSERT INTO `schueler` (`Schueler_ID`, `Klasse_ID`, `Schueler_Punkte`, `Schueler_Krank`) VALUES
  (123456,'12FI3',45,NULL),
  (134532,'12FI1',32,NULL),
  (324565,'12FI1',NULL,NULL),
  (333345,'12FI3',NULL,NULL);
COMMIT;

/* Data for the `station` table  (LIMIT 0,500) */

INSERT INTO `station` (`Station_ID`, `Station_Name`, `Station_Punkte`, `Station_Ort`, `Station_Zeitpunkt_von`, `Station_zeitpunkt_bis`, `Station_Passwort`) VALUES
  (1,'Schachspiel',2,'11Fi1','2019-11-20 09:00:00','2019-11-20 12:00:00','1'),
  (2,'Fußball',2,'12Fi3','2019-11-20 10:00:00','2019-11-20 13:00:00','2s');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;