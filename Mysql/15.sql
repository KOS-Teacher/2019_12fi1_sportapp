-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 21. Feb 2020 um 08:31
-- Server-Version: 10.1.39-MariaDB
-- PHP-Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

SET FOREIGN_KEY_CHECKS=0;

DROP DATABASE IF EXISTS `sporttag`;

CREATE DATABASE `sporttag`
    CHARACTER SET 'utf8'
    COLLATE 'utf8_general_ci';

USE `sporttag`;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `sporttag`
--

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
  `Klasse_Punkte` INTEGER(11) NOT NULL,
  PRIMARY KEY USING BTREE (`Klasse_ID`)
) ENGINE=InnoDB
CHARACTER SET 'utf8' COLLATE 'utf8_general_ci'
;

/* Struktur für die Tabelle `schueler`:  */

CREATE TABLE `schueler` (
  `Schueler_ID` VARCHAR(20) COLLATE utf8_general_ci NOT NULL,
  `Klasse_ID` VARCHAR(225) COLLATE utf8_general_ci DEFAULT NULL,
  `Schueler_Punkte` INTEGER(11) DEFAULT NULL,
  `Schueler_Krank` TINYINT(1) DEFAULT NULL,
  PRIMARY KEY USING BTREE (`Schueler_ID`),
  KEY `schueler_fk_klasse` USING BTREE (`Klasse_ID`),
  CONSTRAINT `schueler_fk_klasse` FOREIGN KEY (`Klasse_ID`) REFERENCES `klasse` (`Klasse_ID`)
) ENGINE=InnoDB
CHARACTER SET 'utf8' COLLATE 'utf8_general_ci'
;

/* Struktur für die Tabelle `station`:  */

CREATE TABLE `station` (
  `Station_ID` INTEGER(11) NOT NULL AUTO_INCREMENT,
  `Station_Name` VARCHAR(225) COLLATE utf8_general_ci DEFAULT NULL,
  `Station_Punkte` INTEGER(11) DEFAULT NULL,
  `Station_Ort` VARCHAR(225) COLLATE utf8_general_ci DEFAULT NULL,
  `Station_Zeitpunkt_von` DATETIME DEFAULT NULL,
  `Station_zeitpunkt_bis` DATETIME DEFAULT NULL,
  `Station_Passwort` VARCHAR(225) COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY USING BTREE (`Station_ID`)
) ENGINE=InnoDB
AUTO_INCREMENT=4 CHARACTER SET 'utf8' COLLATE 'utf8_general_ci'
;

/* Struktur für die Tabelle `schuelerauswertung`:  */

CREATE TABLE `schuelerauswertung` (
  `Schueler_ID` VARCHAR(20) COLLATE utf8_general_ci NOT NULL,
  `Station_ID` INTEGER(11) NOT NULL,
  `TimeStamp` DATETIME NOT NULL,
  PRIMARY KEY USING BTREE (`Schueler_ID`, `Station_ID`, `TimeStamp`),
  KEY `Station_ID` USING BTREE (`Station_ID`),
  CONSTRAINT `schuelerauswertung_ibfk_1` FOREIGN KEY (`Schueler_ID`) REFERENCES `schueler` (`Schueler_ID`),
  CONSTRAINT `schuelerauswertung_ibfk_2` FOREIGN KEY (`Station_ID`) REFERENCES `station` (`Station_ID`)
) ENGINE=InnoDB
CHARACTER SET 'utf8' COLLATE 'utf8_general_ci'
;

/* Data for the `klasse` table  (LIMIT 0,500) */

INSERT INTO `klasse` (`Klasse_ID`, `Klasse_Anzahlschueler`, `Klasse_Punkte`) VALUES
  ('12FI1',20,42),
  ('69G66',11,0),
  ('Flaya Alarm',4,0),
  ('Ste12fi1',5,0);
COMMIT;

/* Data for the `schueler` table  (LIMIT 0,500) */

INSERT INTO `schueler` (`Schueler_ID`, `Klasse_ID`, `Schueler_Punkte`, `Schueler_Krank`) VALUES
  ('12FI11','12FI1',4,0),
  ('12FI110','12FI1',8,0),
  ('12FI111','12FI1',2,0),
  ('12FI112','12FI1',4,0),
  ('12FI113','12FI1',2,0),
  ('12FI114','12FI1',10,0),
  ('12FI115','12FI1',4,0),
  ('12FI116','12FI1',2,0),
  ('12FI117','12FI1',2,0),
  ('12FI118','12FI1',4,0),
  ('12FI119','12FI1',0,1),
  ('12FI12','12FI1',0,1),
  ('12FI120','12FI1',0,1),
  ('12FI13','12FI1',0,0),
  ('12FI14','12FI1',0,0),
  ('12FI15','12FI1',0,0),
  ('12FI16','12FI1',0,0),
  ('12FI17','12FI1',0,0),
  ('12FI18','12FI1',0,0),
  ('12FI19','12FI1',0,0),
  ('69G661','69G66',0,0),
  ('69G6610','69G66',0,0),
  ('69G6611','69G66',0,0),
  ('69G662','69G66',0,0),
  ('69G663','69G66',0,0),
  ('69G664','69G66',0,0),
  ('69G665','69G66',0,0),
  ('69G666','69G66',0,0),
  ('69G667','69G66',0,0),
  ('69G668','69G66',0,0),
  ('69G669','69G66',0,0),
  ('Flaya Alarm1','Flaya Alarm',0,0),
  ('Flaya Alarm2','Flaya Alarm',0,0),
  ('Flaya Alarm3','Flaya Alarm',0,0),
  ('Flaya Alarm4','Flaya Alarm',0,0),
  ('Ste12fi11','Ste12fi1',0,0),
  ('Ste12fi12','Ste12fi1',0,0),
  ('Ste12fi13','Ste12fi1',0,0),
  ('Ste12fi14','Ste12fi1',0,0),
  ('Ste12fi15','Ste12fi1',0,0);
COMMIT;

/* Data for the `station` table  (LIMIT 0,500) */

INSERT INTO `station` (`Station_ID`, `Station_Name`, `Station_Punkte`, `Station_Ort`, `Station_Zeitpunkt_von`, `Station_zeitpunkt_bis`, `Station_Passwort`) VALUES
  (1,'Schachspiel',2,'B101','2019-11-20 09:00:00','2019-11-20 12:00:00','s123'),
  (2,'Fussball',4,'Sporthalle','2019-11-20 10:00:00','2019-11-20 13:00:00','f123'),
  (3,'Nähen',2,'A008','2019-11-20 13:00:00','2019-11-20 16:00:00','n123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;