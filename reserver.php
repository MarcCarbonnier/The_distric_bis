<?php
$title= "Reservation";
include 'header.php';?>
<link rel="stylesheet" href="../CSS/reserver.css">
<?php



?>

    <div class="box">
        <h1>Réservation</h1>
        <form class="nom formulaire" id="formulaire" method="POST" action="script.php">
    <input type="text" name="nom" class="nom" id="nom" placeholder="Nom de la Réservation" required>
    <div class="couverts pad">
        <label for="guests">Nombre de couverts :</label>
        <input type="number" id="guests" name="guests" class="menu" min="1" max="20" required>
    </div>
    <div class="date pad">
        <input type="date" id="date" name="date" required />
    </div>
    <div class="horaire pad">
        <div class="nativeTimePicker" id="time">
            <input id="appt-time" type="time" name="appt-time" min="11:00" max="21:30" required />
            <span class="validity"></span>
        </div>
        <div class="fallbackTimePicker">
        </div>
    </div>
    <div class="reserve pad">
        <input type="submit" id="submitBtn" class="reserveenvoi" value="Réserver" />
    </div>
</form>

    </div>



    <?php 
    include 'footer.php'
    ?>

    <script src="./JS/reserver.js"></script>