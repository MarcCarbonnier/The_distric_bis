<?php 
require_once 'DAO.php';
$id = ($_GET['id']) ? $_GET['id'] : null;
if ($id) {
    //var_dump(getPlatsbyCategorie($id, $db)); //Debug de $id
    $plats = getPlatsbyCategorie($id, $db);
} else {
    echo "No disc_id provided in URL.";
}





$title = $id;
require_once 'header.php' ;


?>

<link rel="stylesheet" href="../CSS/plats.css">

<div class="corps">
    <div class="name">
        <h1 class="title"><?= htmlspecialchars($_SESSION["PlatsbyCat"]['libelle']) ?></h1>
    </div>
    <div class="row">
        <?php foreach ($_SESSION["plats"] as $plats) : ?>

            <div class="col-md-2 mb-3">
                <div class="body-card">
                    <div class="banner-image"><img src="./images_the_district/food/<?= htmlspecialchars($plats->image) ?>" alt="<?= $plats->libelle ?>"></div>
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

<?php require_once 'footer.php';