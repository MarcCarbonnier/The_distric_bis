<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = htmlspecialchars($_POST['nom']);
    $couvert = (int)$_POST['guests'];
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['appt-time']);

    //var_dump($name);
    //var_dump($couvert);
    //var_dump($date);
    //var_dump($time);

    $_SESSION["name"]=$name;
    $_SESSION["couvert"]=$couvert;
    $_SESSION["date"]=$date;
    $_SESSION["time"]=$name;


        echo "<div class= boite>";
        echo "<h2 class='nom'>Merci de votre réservation, $name ! </h2>";
        echo "<p>Détails de votre réservation :</p>";
        echo "<ul>";
        echo "<li>Nom : $name</li>";
        echo "<li>Date : $date</li>";
        echo "<li>Heure : $time</li>";
        echo "<li>Nombre de personnes : $couvert</li>";
        echo "</ul>";
        echo "</div>";
}