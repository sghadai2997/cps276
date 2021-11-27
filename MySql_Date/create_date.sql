CREATE DATABASE IF NOT EXISTS TimeStamp;

USE TimeStamp;

CREATE TABLE dates ( 
	 id int(11) NOT NULL PRIMARY KEY,
	 date_time DATETIME NOT NULL, 
	 notes char(255) NOT NULL
	 ) ENGINE=InnoDB;
