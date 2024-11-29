DROP DATABASE IF EXISTS restaurant;

CREATE DATABASE restaurant;

USE restaurant;

CREATE TABLE client(
    id_client INT PRIMARY kEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(100)
);