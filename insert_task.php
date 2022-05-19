<?php
include 'includes.php';

if (isset($_POST) && isset($_SESSION['id'])){

	$titre=$_POST['titre'];
	$description=$_POST['description'];
	$status=$_POST['status'];
	$importance=$_POST['importance'];
	$user_id= $_SESSION['id'];

	insert_task($titre, $description, $status, $importance, $user_id);
	header('location: page_membre.php');
}


