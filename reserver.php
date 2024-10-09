<link rel="stylesheet" href="../CSS/reserver.css">

<?php
include 'header.php';

if ($_SERVER['REQUEST_METHOD']== 'POST'){
    
    $name = htmlspecialchars($_POST['nom']);
    $couvert = (int)$_POST['guests'];
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['appt-time']);


    if(empty($name) || $couvert <= 0 || empty($date) || empty($time)){}
        else {
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
}
?>

    <div class="box">
        <h1>Réservation</h1>
        <form class="nom formulaire" id="formulaire" method="POST" action="reserver.php">
            <input type="text" name="nom" class="nom" id="nom" placeholder="Nom de la Réservation" required>
            <div class="couverts pad">
                <label for="guests">Nombre de couverts :</label>
                <input type="number" id="guests" name="guests" class="menu" min="1" max="20" required>
            </div>
            <div class="date pad">
                <input type="date" id="date" name="date" required />
            </div>
            <div class="horaire pad">
                <div class="nativeTimePicker">
                    <input id="appt-time" type="time" name="appt-time" min="11:00" max="13h30" required />
                    <span class="validity"></span>
                </div>
                <div class="fallbackTimePicker">
                </div>
            </div>
            <div class="reserve pad">
                <input type="submit" id="submit" class="reserveenvoi" value="Réserver" />
            </div>
        </form>
    </div>



    <?php 
    include 'footer.php'
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <script src="./JS/reserver.js"></script>