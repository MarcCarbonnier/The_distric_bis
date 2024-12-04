<head>
    <?php
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    $title = "Catégorie";
    require_once 'header.php';
    ?>




    <link rel="stylesheet" href="../CSS/categorie.css">
</head>

<div class="body row">
    <?php if (!empty($_SESSION["categorie"])): ?>
        <?php foreach ($_SESSION["categorie"] as $categorie): ?>
            <div class="col-md-3  mb-4">
                <div class="card  col-10">
                    <div class="col-md-12">
                        <a href="details_categorie.php?id=<?= $categorie->id ?>">
                            <div class="body-card">
                                <img src="./images_the_district/category/<?= $categorie->image ?>" alt="image">
                                <h3 class="title"><?= htmlspecialchars($categorie->libelles); ?></h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    <?php else: ?>
        <p>Aucune catégorie trouvé</p>
    <?php endif; ?>
</div>
<script src="./JS/categorie.js"></script>

<?php
include 'footer.php'
?>