<?php require_once 'DAO.php';
$id = ($_GET['id']) ? $_GET['id'] : null;
$title = NameTitle($id,$db);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php foreach ($title as $titre) echo $titre->libelle ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="../CSS/H-F.css">
</head>

<body>
    <section class="para">
        <header>
            <nav class="nav navbar navbar-expand-lg">
                <div class="first">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Menu
                        </button>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="accueil.php">Accueil</a></li>
                            <li>
                                <a class="dropdown-item" href="categorie.php">Catégorie</a>
                            </li>
                            <li><a class="dropdown-item" href="plats.php">Plats</a></li>
                            <li>
                                <a class="dropdown-item" href="reserver.php">Réserver</a>
                            </li>
                            <li><a class="dropdown-item" href="contact.php">Contact</a></li>
                        </ul>
                    </div>

                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav fs-3">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="accueil.php">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="categorie.php">Catégorie</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="plats.php">Plats</a>
                            </li>
                        </ul>
                    </div>
                    <img id="logo" src="../images_the_district/the_district_brand/logo_transparent.png"
                        alt="logo_transparent" />
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav fs-3">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="../reserver.php">Réserver</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="../contact.php">Contact</a>
                            </li>
                            <li class="nav-item">
                                <div id="reseaux1">
                                    <div class="twitter">
                                        <img src="/images_the_district/the_district_brand/twitter_header_photo_1.png"
                                            alt="twitt" id="twitte" />
                                    </div>
                                    <div class="YT">
                                        <img src="../images_the_district/the_district_brand/youtube_profile_image.png"
                                            alt="youtube" id="youtube" />
                                    </div>
                                    <div class="insta">
                                        <img src="/images_the_district/the_district_brand/instagram_profile_image.png"
                                            alt="instagram" id="instagram" />
                                    </div>
                                </div>
                                <div id="reseaux2">
                                    <div class="linkedin">
                                        <img src="/images_the_district/the_district_brand/linkedin_banner_image_1.png"
                                            alt="linkedin" id="in" />
                                    </div>
                                    <div class="fb">
                                        <img src="/images_the_district/the_district_brand/facebook_profile_image.png"
                                            alt="facebook" id="facebook" />
                                    </div>
                                    <div class="pt">
                                        <img src="/images_the_district/the_district_brand/pinterest_profile_image.png"
                                            alt="pnterest" id="pinterest" />
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </section>