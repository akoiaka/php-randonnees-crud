<?php
include ('connection.php');

$name=$_POST['name'];
$difficulty=$_POST['difficulty'];
$distance=$_POST['distance'];
$duration=$_POST['duration'];
$height_difference=$_POST['height_difference'];

//var_dump($name, $difficulty, $distance, $duration, $height_difference);
$req = $bdd->prepare("INSERT INTO hiking (name, difficulty, distance, duration, height_difference)
VALUES (:name, :difficulty, :distance, :duration, :height_difference)");
//
//$req = $bdd->prepare('INSERT INTO `hiking` (`name`, `difficulty`, `distance`, `duration`, `height_difference`)
//VALUES (:name, :difficulty, :distance, :duration, :height_difference)');
$req->execute(array(
    'name' => $name,
    'difficulty' => $difficulty,
    'distance' => $distance,
    'duration' => $duration,
    'height_difference' => $height_difference));

?>
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
        <?php
        include("connection.php");
        $reponse = $bdd->query('SELECT * FROM hiking');
        $reponse1 = $reponse->fetchAll();
        // var_dump($reponse1);
        foreach ($reponse1 as $value) {
            echo '<p>Nous sommes le : '.$value->date.'</p><p>Voici la liste de vos randonnées: '.$value->saison.'</p>
            <img src="/Applications/MAMP/htdocs/html/php/php-randonnees-crud/css/images.jpg' . $value->img .'"> 
            <p> Article : ' . $value->article . '</p>
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
