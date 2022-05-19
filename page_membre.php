<?php
include "includes.php";

if (!isset($_SESSION['user'])) {
  // Si l'utilisateur n'est aps connecté, il n'a rien à faire ici :)
  header('Location: indextodo.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../steeltodo.css" rel="stylesheet">
</head>

<body>

  <div class="titre">
    <h1>MyTotool</h1>
    <?php
    echo "<h2>Bienvenue " . $_SESSION['user'] . " !</h2>";
    ?>

  </div>

  <div class="todo">
    <form action="insert_task.php" method="post" class="insert">
      </br>
      <div class="case2">
        <label for="tache">Titre </label>
        </br>
        <input type="first name" name="titre" class="title" required="required">
      </div>
      </br>
      <div class="case3">
        <label for="contenu">Description </label>
        </br>
        <textarea type="des" name="description" class="desc" required="required"></textarea>
      </div>
      </br>
      <div class="case4">
        <label for="prio">Importance </label>
        </br>
        <select name="importance" id="importance" class="deroule" required="required">
          <option value="" disabled="disabled">Sélectionnez une option</option>
          <option value="urgent">Urgent</option>
          <option value="fort">Fort</option>
          <option value="moyen">Moyen</option>
          <option value="faible">Faible</option>
        </select>
      </div>
      </br>
      <div class="case5">
        <label for="avancement">Status </label>
        </br>
        <select name="status" id="status" class="deroule" required="required">
          <option value="" disabled="disabled">Sélectionnez une option</option>
          <option value="a faire">A faire</option>
          <option value="en cours">En cours</option>
          <option value="Fini">Fini</option>
        </select>
      </div>

      </br>

      <button class="btn-membre" type="submit" value="Ok" name='Envoyer'>Partager</button>

    </form>

    <button class="btn-deco" type="submit" value="Ok" name='Envoyer'><a href="logout.php">Déconnexion</a></button>

    <?php
    $values = selectall_task();
    ?>

    <table class="tableau">
      <tr>
        <th>Titre</th>
        <th>Description</th>
        <th>Importance</th>
        <th>Statu</th>
      </tr>


      <?php
      foreach ($values as $value) {
      ?>
        <!-- <form action="get_modif.php" method="POST">
  <table class="tableau">
    <tr>
      <input type="text" name="title" class="tab" value=" <?php echo $value['titre']; ?>">
      <textarea name="des" class="tab" ><?php echo $value["description"]; ?></textarea>
      <input type="text" name="stat" class="tab" value="<?php echo $value["status"]; ?>">
      <input type="text" name="imp" class="tab" value="<?php echo $value["importance"]; ?>">
      <input type="hidden" name="id" class="tab" value="<?php echo $value['Id']; ?>">
      <button type="submit" class="btn-modifier">Modifier</button>
      <div class="btn-supp">
        <a href="get_supp.php?id=<?php echo $value['Id']; ?>">Supprimer</a>
      </div>
    </tr>
  </table>
</form>
    -->
        <form action="get_modif.php" method="POST">
          <tr style="text-align:center">
            <td><input type="text" name="titre" class="tab" value="<?php echo $value['titre']; ?>"></td>
            <td><textarea type="text" name="description" class="tab" value="<?php echo $value["description"]; ?>"><?php echo $value["description"]; ?></textarea></td>
            <td>
              <select required="required" name="status" id="status" class="tab">
                <option value="" disabled="disabled">Sélectionnez une option</option>
                <option value="<?php echo $value["status"]; ?>"><?php echo $value["status"]; ?></option>
                <option value="a faire">A faire</option>
                <option value="en cours">En cours</option>
                <option value="Fini">Fini</option>
              </select>
            </td>
            <td>
              <select required="required" name="importance" class="tab">
                <option value="" disabled="disabled">Sélectionnez une option</option>
                <option value=""><?php echo $value["importance"]; ?></option>
                <option value="urgent">Urgent</option>
                <option value="fort">Fort</option>
                <option value="moyen">Moyen</option>
                <option value="faible">Faible</option>
              </select>
            </td>


            
              <input type="hidden" name="id" class="tab" value="<?php echo $value['id']; ?>">
           

            <td>
              <button type="submit" class="btn-modifier">Modifier</button>
            </td>
            <td>
              <div class="btn-supp"><a href="get_supp.php?id=<?php echo $value['id']; ?>">Supprimer</a>
              </div>
            </td>
          </tr>
        </form>
      <?php
      }
      ?>
    </table>



  </div>

</body>

</html>