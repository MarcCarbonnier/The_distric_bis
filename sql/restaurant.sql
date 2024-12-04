DROP DATABASE IF EXISTS restaurant;

CREATE DATABASE restaurant;

USE restaurant;

CREATE TABLE client(
    id_client INT PRIMARY kEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(100)
);

CREATE TABLE reservation(
    id_client int PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    nom VARCHAR(50) , 
    Couvert INT, 
    date_ VARCHAR(50),
    Heure TIME
);