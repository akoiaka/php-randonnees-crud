<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.css">
      <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
<!--  <body>-->
<!--  <header>-->
<!--      <div class="ui inverted segment">-->
<!--      <div class="ui inverted secondary pointing menu">-->
<!--          <a href="index.php" class="active item">Accueil</a>-->
<!--          <a href="read.php" class="item">Randonnées</a>-->
<!--          <a href="create.php" class="item">Modifier</a>-->
<!--      </div>-->
<!--  </header>-->
<!--  </div>-->
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
              <p>Dénivelé de la randonnée : '.$value->height_difference.'</p><hr></div>
      
           
            <form action="blank.php" method="post" value="Supprimer" >
            <input type="submit" action="blank.php"  class="submit" value="Supprimer">
            </form>
            <form action="modif.php">
            <input type="submit" class="submit" value="Modifier">
            </form>
            <br>
            <br>
            <form action="index.php">
            <input type="submit" class="submit" value="Retourner Accueil">
            </form>';
        }
                ?>
<!--reprise du html pur -->

            <div class="afficher"></div>';


        }

        ?>
  </body>
</html>
