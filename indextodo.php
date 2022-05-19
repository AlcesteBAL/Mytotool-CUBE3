<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../steeltodo.css" rel="stylesheet">
    <title>Todoliste</title>
</head>
<body>
  <!-- Page d'acceuil Mytotool pour se connecter ou créer son espace en s'inscrivant -->
  <div class="titre">
     <h1>MyTotool</h1>
     <h2>Mon projet bien organisé!</h2>
  </div>
  <div class="formulaire">
  <form class="connexion" action="login_ddbase.php" method="post">
    <h3>Se connecter</h3>
    <div class="etape1">
      <label for="nom">Identifiant :</label>
      <input type="text" name="login" id="identifiant" required="required">
    </div>
    <div class="etape2">
      <label for="enter">Mot de passe : </label>
      <input type="password" name="password" id="mp" required="required">
    </div>
    </br>
  <button class="btn" type="submit" value="Ok" name='Envoyer'>
    Valider
  </button>
  </form>
  <form class="inscription" action="inscription_ddbase.php" method="post">
    <h3>M'inscrire</h3>
    <div class="info1">
      <label for="nom">Identifiant :</label>
      <input type="text" name="login" id="identifiant" required="required">
    </div>
    <div class="info2">
      <label for="nom">Mot de passe :</label>
      <input name="mot_de_passe" type="password" id="mot_de_passe" size="20" required="required"/>
    </div>
    <div class="info3">
      <label for="nom">e-mail :</label>
      <input type="text" name="mail" id="mail" required="required">
    </div>
    </br>
    <button class="btn" type="submit" value="Ok" name='Envoyer'>Envoyer</button>
  </form>  
  </div>
</body>
</html>