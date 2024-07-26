CREATE DATABASE `Person`;

USE `Person`;

CREATE TABLE `PersonDetail`(

    `ID` INT PRIMARY KEY AUTO_INCREMENT,
    `Name` VARCHAR(250) NOT NULL,
    `Address` VARCHAR(250) NOT NULL,
    `PinCode` VARCHAR(250) NOT NULL,
    `State` VARCHAR(250) NOT NULL,
    `City` VARCHAR(250) NOT NULL,
    `MobileNumber` VARCHAR(250) NOT NULL,
    `Gender` VARCHAR(250) NOT NULL,
    `Hobby` VARCHAR(250) NOT NULL
);