<link rel="stylesheet" href="/CSS/contact.css">
<?php
include 'header.php';

if ($_SERVER['REQUEST_METHOD']== 'POST'){
    

    $email=htmlspecialchars ($_POST['email']); //Récupère l'adresse E'mail
    // Vérifier si l'email correspond à un format d'email valide
    if (preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z-]+\.[a-zA-Z]{2,}$/', $email)) {
        echo "L'email est valide<br>";
    } else {
        echo "Email invalide.<br>";
    }
    
    $telephone =htmlspecialchars ($_POST['tel']); // Récupérer le numéro de téléphone du formulaire
    // Vérifier si le numéro de téléphone est valide
    if (preg_match('/^0[1-9](\.\d{2}){4}+$/', $telephone)) {
        echo "Numéro de téléphone valide.<br>";
    } else {
        echo "Numéro de téléphone invalide.<br>";
    }
    
    $name= htmlspecialchars($_POST['nom']);
    //Vérifie si le nom et prénom sont valides
    if (preg_match('/^[a-zA-Z\s-]+$/', $name)){
        echo "Nom et prénom valide.<br>";
    }
    else{
        echo "Nom et prénom invalide.<br>";
    }}
     //Envoi sur la pageassocié
if ( isset( $_POST['submit'])) { 
    header('Location:' . $_SERVER("PHP_SELF")) ; //Renvoi vers la page
}
?>

<form id="formulaire" action='contact.php' method="POST" >
    <fieldset>
        <h1>Contactez-nous</h1>
        <div class="separation"></div>
        <div class="corps-formulaire">
            <div class="gauche">
                <div class="groupe">
                    <label for="nom">Votre Nom et Prénom</label>
                    <input type="text" id="nom" name="nom" required />
                    <i class="fas fa-user"></i>
                </div>
                <div class="groupe">
                    <label for="email">Votre adresse e-mail</label>
                    <input type="email" id="email" name="email" required />
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="groupe">
                    <label for="tel">Votre téléphone</label>
                    <input type="tel" id="tel" name="tel" required/>
                    <i class="fas fa-mobile"></i>
                </div>
            </div>

            <div class="droite">
                <div class="groupe">
                    <label for="message">Message</label>
                    <textarea id="message" placeholder="Saisissez ici..."></textarea>
                </div>
            </div>
        </div>

        <div class="pied-formulaire">
            <button id="submit" type="submit" name="submit">Envoyer le message</button>
            <button id="reset" type="reset" name="reset">Effacer</button>
        </div>
    </fieldset>
</form>

<?php
include 'footer.php'
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script src="./JS/contact.js"></script>