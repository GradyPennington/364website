DROP DATABASE IF EXISTS airportDB;
CREATE DATABASE airportDB;
USE airportDB;
CREATE TABLE airportEmployee(
	Id INTEGER NOT NULL,
	jobCode INTEGER NOT NULL,
	PRIMARY KEY(Id)
	);
INSERT INTO airportEmployee(Id, jobCode)
VALUES (738183, 192839),
(102937,370),
(104581,370),
(520100,800),
(987356,800),
(209919,800),
(234765,456),
(384718,456),
(102333,456),
(474636,456),
(389191,230),
(467376,230),
(364747,900),
(567373,900),
(855755,900);


CREATE TABLE Pilots(
	licenseNumber INTEGER NOT NULL,
	Airline CHARACTER VARYING(30),
	seniorityNum INTEGER NOT NULL,
	PRIMARY KEY(licenseNumber)
	);
INSERT INTO Pilots(licenseNumber, Airline, seniorityNum)
VALUES
(03973627,'Southwest Airlines',30),
(95768173,'American Airlines',401),
(65738193,'Delta Airlines',213),
(78914375,'JetBlue Airlines',23),
(98765432,'Frontier Airlines',94),
(89315634,'Southwest Airlines',49),
(67883345,'Spirit Airlines',1),
(98761234,'United Airlines', 312),
(80918347,'American Airlines',34),
(93741204,'Horizon Airways',10),
(10563728,'Alaska Airlines',4),
(04618369,'Lufthansa',340),
(94376838,'American Airlines',46),
(04765867,'Southwest Airlines',32),
(12096986,'Delta Airlines',6);
	
CREATE TABLE Flights(
	Airline CHARACTER VARYING(30),
	regNum CHARACTER VARYING(10),
	numPax INTEGER NOT NULL,
	depTime INTEGER NOT NULL,
	PRIMARY KEY(regNum)
);
INSERT INTO Flights(Airline, regNum, numPax, depTime)
VALUES
('American Airlines','N23451',102,1400),
('Southwest Airlines','NL0192',130,1400),
('Delta Airlines','NLJK45',45,1550),
('Frontier Airlines','N25117',2,1555),
('JetBlue Airlines', 'N8202F',145,1600),
('United Airlines','N23DFD',245,1950),
('Horizon Airways','N765GH',87,1545),
('Spirit Airlines','NJHDGH',34,1100),
('MILAIR','Dagger5',3,1310),
('RyanAir','NPL876',67,0550),
('Lufthansa','NEDF65',340,0700),
('Delta Airlines','NID812',65,2300),
('United Airlines','NJDHGF',120,2230),
('American Airlines','NHDGFY',30,0300),
('Alaska Airlines','NALAKS',45,1555);

CREATE TABLE Users (
	id INT PRIMARY KEY,
	username VARCHAR(50) NOT NULL UNIQUE,
	password_hash VARCHAR(255) NOT NULL
	);
INSERT INTO Users(id, username, password_hash)
VALUES(1, 'student', '$2y$10$B0LiVjc.mxmQwaH1TYnWweg/jz6zCwfXUuFXLpC0XLAcIxoIVmk6y');


