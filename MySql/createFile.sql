CREATE DATABASE IF NOT EXISTS FileNames;

USE FileName;
CREATE TABLE `files` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `file_name` varchar(80) NOT NULL,
  `file_path` varchar(255) NOT NULL
) ENGINE=InnoDB;