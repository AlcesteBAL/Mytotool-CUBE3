<?php
//code PHP pour s'inscrire et créer son espace membre
include 'includes.php';

//page sécurisé. je sécurise mes données avec htmlspecialchars().

if (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['mail'])){

    $user= htmlspecialchars($_POST['login']);
    $password=htmlspecialchars($_POST['password']);
    $mail=htmlspecialchars($_POST['mail']);

    insert_user($user, $password, $mail);
    header ('location: page_membre.php');

}