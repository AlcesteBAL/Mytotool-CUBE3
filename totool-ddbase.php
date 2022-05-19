<!-- code PHP pour se connecter à la base de données -->

<?php

$dbConnection = null;

function getConnection(){
    

    
    try{
        $dbConnection = new PDO('mysql:host=localhost;dbname=inscription_connexion_todo', 'root', 'root');
        echo "Connexion à la base de données réussie";
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    return $dbConnection;
}

$dbConnection=getConnection();

function select($dbConnection){
    $requete_string = "SELECT * FROM membre";
    $requete = $dbConnection->prepare($requete_string);
    $requete->execute();
    $result = $requete->fetchAll();
   	return $result;
}


$users = select($dbConnection);


?>