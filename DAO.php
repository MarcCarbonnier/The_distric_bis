<?php
session_start();
require_once 'db_connect.php';

function NameTitle($id,$db){
    $query = $db->prepare("SELECT * FROM categorie c LEFT JOIN plat p ON c.id = p.id_categorie WHERE c.id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $title = $query->fetchALL(PDO::FETCH_OBJ);
    return $title;
}

function getCategorie($db){
    $query = $db->prepare("SELECT * FROM categorie");
    $query->execute();
    $cat = $query->fetchALL(PDO::FETCH_OBJ);
    return $cat;
}
$_SESSION['categorie']=getCategorie($db);
//debug de session : var_dump($_SESSION["categorie"]);


function getPlats($db){
    $query = $db->prepare("SELECT * FROM plat ");
    $query->execute();
    $plat = $query->fetchALL(PDO::FETCH_OBJ);
    return $plat;
}
$_SESSION["plats"] = getPlats($db);
//debug de session : var_dump($_SESSION["plats"]);


function getPlatsbyCategorie($id, $db) {
    // Vérification initiale de $id
    if (!$id) {
        return 'ID invalide ou manquant';
    }

    // Préparation de la requête
    $query = $db->prepare("SELECT * FROM categorie c LEFT JOIN plat p ON c.id = p.id_categorie WHERE p.id_categorie = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    
    // Récupération des résultats
    $platsId = $query->fetchAll(PDO::FETCH_OBJ);

    // Vérification des résultats
    if (empty($platsId)) {
        return 'Aucun plat trouvé pour cette catégorie';
    }

    return $platsId;
}