<head>
    <?php
    $title = "Catégorie";
    include 'header.php';
    ?>
    <link rel="stylesheet" href="../CSS/categorie.css">
</head>

<div class="corps">
    <div class="part1">
        <a href="/categorie/wrap.php">
            <div class="wrap pad">
                <h3 class="titre-img">WRAP</h3>
            </div>
        </a>
        <a href="/categorie/veggie.php">
            <div class="veggie pad">
                <h3 class="titre-img">VEGGIE</h3>
            </div>
        </a>
        <a href="/categorie/salade.php">
            <div class="salade pad">
                <h3 class="titre-img">SALADE</h3>
            </div>
        </a>
        <a href="/categorie/sandwich.php">
            <div class="sandwich pad">
                <h3 class="titre-img">SANDWICH</h3>
            </div>
        </a>
    </div>
    <div class="part2">
        <a href="/categorie/burger.php">
            <div class="burger pad">
                <h3 class="titre-img">BURGER</h3>
            </div>
        </a>
        <a href="/categorie/pate.php">
            <div class="pate pad">
                <h3 class="titre-img">PATES</h3>
            </div>
        </a>
        <a href="/categorie/sushi.php">
            <div class="sushi pad">
                <h3 class="titre-img">SUSHI</h3>
            </div>
        </a>
        <a href="/categorie/pizza.php">
            <div class="pizza pad">
                <h3 class="titre-img">PIZZA</h3>
            </div>
        </a>
    </div>
</div>

<?php
include 'footer.php'
?>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script src="/JS/categorie.js"></script>