<?php
//code PHP pour se connecter à son espace membre
include ("includes.php");

if (isset($_POST)){
    
    $login=$_POST['login'];
    $password=$_POST['password'];

    connect_user($login, $password);
}