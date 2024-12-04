<?php
require_once 'db_connect.php';

$query = $db->prepare("SELECT * FROM plat");
$query->execute();
$tableaux = $query->fetchAll(PDO::FETCH_OBJ);


echo json_encode($tableaux);
