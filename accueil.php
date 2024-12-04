<head>
    <?php
    $title = 'Accueil';
    require_once 'header.php';
    require_once 'DAO.php';

    ?>
    <link rel="stylesheet" href="../CSS/accueil.css">
</head>
<div class="bg">
    <div id="form" class="form-control">
        <form class="d-flex" id="formulaire" role="search" method="post" action="DAO.php" >
            <input class="form-control me-2" id="search" name="search" type="search" placeholder="Recherche..."
                aria-label="Recherche" />
                <a href="plats.php"><div id="results"></div></a>
        </form>
    </div>
</div>
<div class="corps">
    <canvas id="bg-body">
        <h2>Welcome</h2>
    </canvas>
    <h2>Welcome</h2>
</div>
<script src="/JS/accueil.js"></script>
<?php
include 'footer.php';
?>