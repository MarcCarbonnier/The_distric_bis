<?php
$title = "Plats";
include 'header.php';
?>

<head>
    <link rel="stylesheet" href="../CSS/plats.css">
</head>

<div class="corps">
    <div class="name">
        <h1 class="title">Tous les plats</h1>
    </div>
    <div class="row">
        <!--placer la balise hyperlien pour chaque conteneur  quand la page commande sera faite-->
        <?php foreach ($_SESSION["plats"] as $plats) : ?>
            <div class="col-md-2 mb-3">
                <div class="body-card">
                    <div class="banner-image">
                        <img id="commande"  src="./images_the_district/food/<?= htmlspecialchars($plats->image) ?>" alt="<?= $plats->libelle ?>">
                        <p id="commander">Commander</p>
                    </div>

                    <h3 class="card-title"><?= htmlspecialchars($plats->libelle) ?></h3>
                    <p class="card-text"><?= htmlspecialchars($plats->description) ?></p>
                </div>
            </div>
        <?php endforeach ?>
    </div>


    <div class="button-wrapper next">
        <a href="#" class="button">Ajouter</a>
    </div>
</div>

<script src="./JS/plats.js"></script>
<?php
include 'footer.php';
?>