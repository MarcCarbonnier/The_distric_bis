<?php
session_start();
require_once 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = filter_input(INPUT_POST, 'nom');
    $couvert = filter_input(INPUT_POST, 'guests');
    $date = filter_input(INPUT_POST, 'date');
    $time = filter_input(INPUT_POST, 'appt-time');

    //var_dump($name);
    //var_dump($couvert);
    //var_dump($date);
    //var_dump($time);

    $formattedTime = date('H:i:s', strtotime($time));
    if(!$name || !$couvert || !$date ||!$time){
        echo "Données incomplètes";
    }

    try{
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $db->prepare("INSERT INTO  reservation (nom , Couvert , date_ , Heure)
        VALUES (:nom , :couvert , :date_, :heure)");
        $query->execute([
            ":nom"=>$name,
            ":couvert"=>$couvert,
            ":date_"=>$date,
            ":heure"=>$formattedTime
        ]);

    header("Location: reserver.php");

    }catch(PDOException $e){
        echo " Erreur lors de l'insertion des données " . $e->getMessage();
    }
    

}