<?php

$login= 'user';
$password= 's3cr3t';


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