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
    print_r($result);
}

select($dbConnection);


if(isset($_POST['login']) && isset($_POST['password']) ){
	
	if($login==$_POST['login'] && $password==$_POST['password']){
	echo 'ok';


session_start ();

$_SESSION['login'] = $_POST['login'];
$_SESSION['password'] = $_POST['password'];

header ('location: page_membre.php');

}

else{
	echo 'Echec connection';
}

}

?>