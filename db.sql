DROP DATABASE IF EXISTS `myDatabase`;
CREATE DATABASE IF NOT EXISTS `myDatabase`;
USE `myDatabase`;
DROP TABLE IF EXISTS `userTable`;
CREATE TABLE IF NOT EXISTS `userTable` (
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    username VARCHAR(50) NOT NULL,
    create_password VARCHAR(100) NOT NULL,
    confirm_password VARCHAR(100) NOT NULL
);
