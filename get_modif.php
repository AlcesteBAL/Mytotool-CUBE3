<?php
include 'includes.php';

// on check si user est connecte + les champs envoyés


	



$id = $_POST["id"];
$titre = $_POST["titre"];
$description = $_POST["description"];
$status = $_POST["status"];
$importance = $_POST["importance"];


// fonction pour metre a jour dans la base de donné
$sql = "UPDATE todo SET titre=?, description=?, status=?, importance=?, WHERE id=?";
$dbConnection = getConnection();
$stmt= $dbConnection->prepare($sql);
$stmt->execute([$titre, $description, $status, $importance, $id]);
header('Location:page_membre.php');



