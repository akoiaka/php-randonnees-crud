<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.css">
      <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1>Liste des randonnées</h1>
    <h3>Bienvenue</h3>
    <h4>Voici la liste de vos randonnées</h4>
    <div class="randos">
    </div>

<!--    on injecte ci-dessous dans les balises selectionnees le php permettamt de recuperer
les valeurs de chaque item name difficulte distance etc .. -->

        <?php
        include("connection.php");
        $reponse = $bdd->query('SELECT * FROM hiking');
        $reponse1 = $reponse->fetchAll();
        // var_dump($reponse1);
        foreach ($reponse1 as $value) {
            echo '<div class="randos">
              <p>Nom de la randonnée : '.$value->name.'</p>
              <p>Difficulté : '.$value->difficulty.'</p>
              <p>Distance : '.$value->distance.'</p>
              <p>Durée de la randonnée : '.$value->duration.'</p>
              <p>Dénivelé de la randonnée : '.$value->height_difference.'</p><hr></div>';
        }
                ?>
<!--reprise du html pur -->
            <hr>
            <form action="blank.php" method="post" class="formulaire">
            <div class="return"></div>
            </form>
            <form action="blank.php">
            <input type="submit" action="blank.php"  class="submit" value="Supprimer">
            </form>
            <form action="modif.php">
            <input type="submit" class="submit" value="Modifier">
            </form>
            <br>
            <br>
            <form action="create.php">
            <input type="submit" class="submit" value="Retourner Accueil">
            </form>
            <div class="afficher"></div>';


        }

        ?>
  </body>
</html>
