-- Create DateBase "Sporttag"
drop database if exists sporttag;
CREATE DATABASE IF not EXISTS sporttag;
use sporttag;

-- Create Tables
CREATE TABLE IF not EXISTS Administrator (
    Admin_ID int PRIMARY KEY AUTO_INCREMENT, 
    Admin_Passwort varchar(225)

);

-- einträge um zu testen 




CREATE TABLE IF not EXISTS Station (
    Station_ID int PRIMARY KEY AUTO_INCREMENT, 
    Station_Name varchar(225),
    Station_Punkte int,
	Station_Ort varchar(225),
    Station_Zeitpunkt_von DateTime,
    Station_Zeitpunkt_bis datetime,
    Station_Passwort varchar(225),
    Station_Bemerkung varchar(225)
);

-- einträge um zu testen 
insert into Station ( Station_Name , Station_Punkte , Station_Ort , Station_Zeitpunkt_von , Station_zeitpunkt_bis ,  station_passwort)
values     ('Schachspiel', 2  , '11Fi1', '2019-11-20 09:00:00','2019-11-20 12:00:00', '1' ),
           ('Fußball', 2  , '12Fi3', '2019-11-20 10:00:00','2019-11-20 13:00:00', '2s' );

CREATE TABLE IF not EXISTS Klasse (
    Klasse_ID varchar(225) PRIMARY KEY, 
    Klasse_Anzahlschueler int
); 



CREATE TABLE IF not EXISTS Schueler (
    Schueler_ID int PRIMARY KEY AUTO_INCREMENT, 
    Klasse_ID varchar(225),
    Schueler_Punkte int,
    Schueler_Krank boolean,
    FOREIGN KEY (Klasse_ID) REFERENCES Klasse(Klasse_ID)
);

CREATE TABLE IF not EXISTS schuelerAuswertung (
    Schueler_ID int, 
    Station_ID int,
    TimeStamp datetime,
    FOREIGN KEY (Schueler_ID) REFERENCES Schueler(Schueler_ID),
	FOREIGN KEY (Station_ID) REFERENCES Station(Station_ID),
    primary key(Schueler_ID, Station_ID, Timestamp)
); 

















-- select* from lehrer as leh inner join  Station as st on leh.lehrer_ID = st.lehrer_ID; 


-- select * from station where id in (select id from lehrer) ;





 
 
