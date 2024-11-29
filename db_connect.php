<?php 
$hostname = 'Localhost';
$dbname = 'restaurant';
$username = 'admin';
$password = 'Afpa1234';

try{
    //Connection à la BDD
    $db = new PDO ("mysql:hots=$hostname;dbname=$dbname;charset=utf8mb4",
    $username,
    $password
);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
    //affiche un message d'erreur si la connect à la BDD ne ce fait pas
    echo "Erreur de connect à la base de données" . $e->getMessage();
}