<?php

include 'includes.php';

if(isset($_SESSION['user']) && isset($_GET['id'])){
	// fonction pour supprimer de la base de donné
	$id = intval($_GET["id"]);
	getConnection()->exec('DELETE FROM todo WHERE user_id = ' . $_SESSION['id'] . ' and id = '.$id);
}

header('Location: page_membre.php');