<?php
require_once 'DAO.php';
$id = isset($_GET['id']) ? $_GET['id'] : null;
$_SESSION['name'] = NameTitle($id, $db);

if ($id) {
    //print_r($_SESSION['name'][1]->libelles);
} else {
    echo "Aucun plats trouvés dans cette catégorie";
}





$title = $_SESSION['name'][0]->libelles;
require_once 'header.php';

?>

<link rel="stylesheet" href="../CSS/plats.css">

<div class="corps">
    <div class="name">
        <h1 class="title"><?= htmlspecialchars($_SESSION['name'][0]->libelles) ?></h1>
    </div>
    <div class="row">
            <?php foreach ($_SESSION['name'] as $_SESSION['plats']) : ?>
                <div class="col-md-2 mb-3">
                    <div class="body-card">
                        <div class="banner-image"><img src="./images_the_district/food/<?= htmlspecialchars($_SESSION['plats']->image) ?>" alt="<?= htmlspecialchars($_SESSION['plats']->libelle ?? 'IMAGE NOT FOUND') ?>"></div>
                        <h3 class="card-title"><?= htmlspecialchars($_SESSION['plats']->libelle  ?? 'No title provided') ?></h3>
                        <p class="card-text"><?= htmlspecialchars($_SESSION['plats']->description  ?? 'No description provided') ?></p>
                    </div>
                </div>
            <?php endforeach ?>
    </div>
    <div class="button-wrapper next">
        <a href="#" class="button">Ajouter</a>
    </div>
</div>

<?php require_once 'footer.php';
