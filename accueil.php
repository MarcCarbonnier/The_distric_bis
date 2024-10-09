<head>
    <?php
    $title = 'Accueil';
    include 'header.php';
    ?>
    <link rel="stylesheet" href="../CSS/accueil.css">
</head>
<div class="bg">
    <div id="form" class="form-control">
        <form class="d-flex" id="formulaire" role="search" method="post">
            <input class="form-control me-2" id="search" name="search" type="search" placeholder="Recherche..."
                aria-label="Recherche" />
        </form>
    </div>
</div>
<div class="corps">
    <canvas id="bg-body">
        <h2>Welcome</h2>
    </canvas>
    <h2>Welcome</h2>
</div>
<?php
include 'footer.php';
?>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script src="/JS/accueil.js"></script>