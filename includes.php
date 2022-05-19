<?php

//Ouverture de la session.
session_start();


//Récupération de la connection à la bdd.
function getConnection(){
     
    try{
        $dbConnection = new PDO('mysql:host=localhost;dbname=inscription_connexion_todo', 'root', 'root');
        //echo "Connexion à la base de données réussie";
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    return $dbConnection;
}

//Inscription.
function insert_user($identifiant, $password, $mail){

    $requete_string = "INSERT INTO membre(identifiant, password, mail) VALUES (:user, :password, :mail)";
    $dbConnection = getConnection();
    $requete = $dbConnection->prepare($requete_string);
    $requete->bindValue(':user', $identifiant, PDO::PARAM_STR);
    $requete->bindValue(':password', $password, PDO::PARAM_STR);
    $requete->bindValue(':mail', $mail, PDO::PARAM_STR);
    $requete->execute();
}



//selectionner/récupérer un utilisateur dans la bdd.
function select_user($login, $password){
    $requete_string = "SELECT * FROM membre WHERE identifiant = '$login' and password = '$password'";
    $dbConnection = getConnection();
    $requete = $dbConnection->prepare($requete_string);
    $requete->execute();
    $result = $requete->fetchAll();
    return $result;
    //a sécuriser
}


// Fonction connect user.
function connect_user($login, $password){

	$user = select_user($login, $password);


	if (empty($user)) {
   	 	echo "Identifiant ou mot de pass incorrect. Veuillez réessayer ou créer votre espace.";
	}

//Ouverture d'une session propre à un membre.

	else{

	    $_SESSION['login'] = true;
	    $_SESSION['user'] = $user[0]['identifiant'];
	    $_SESSION['id'] = $user[0]['id'];

	    header ('location: page_membre.php');
	}

}


// Fonction disconect user.
function disconnect_user(){
    session_unset();
	session_destroy();
}



//Récupérer les tâches.
function selectall_task(){
	$dbConnection = getConnection();
    $requete_string = "SELECT * FROM todo WHERE user_id = ".$_SESSION['id']."";
    $requete = $dbConnection->prepare($requete_string);
    $requete->execute();
    $result = $requete->fetchAll();
    return $result;
}


//Enregistrer les tâches.
function insert_task($titre, $description, $status, $importance, $user_id){

    $requete_string = "INSERT INTO todo(titre, description, status, importance, user_id) VALUES (:title, :description, :status, :importance, :user_id)";
    $dbConnection = getConnection();
    $requete = $dbConnection->prepare($requete_string);
    $requete->bindValue(':title', $titre, PDO::PARAM_STR);
    $requete->bindValue(':description', $description, PDO::PARAM_STR);
    $requete->bindValue(':status', $status, PDO::PARAM_STR);
    $requete->bindValue(':importance', $importance, PDO::PARAM_STR);
    $requete->bindValue(':user_id', $user_id, PDO::PARAM_INT);

    $requete->execute();
}

//Modifier les projets.
function get_modif(){
	$requete_string = "INSERT INTO todo(titre, description, status, importance, id) VALUES (:titre, :description, :status, :importance, :id)";
    $dbConnection = getConnection();
}

//Suprimer un projet.