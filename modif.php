<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.css">
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
<h2>Modifier une randonnée</h2>
<?php
include("connect.php");
$hiking = $pdo->query('SELECT * FROM hiking');
$allhikings = $hiking->fetchAll();
// var_dump($fullpublication);
foreach ($allhikings as $value) {
    echo "<div class='createsection'>
                    <p>Randonnée : ".$value->name."</p>
                    <p>Difficultée : ".$value->difficulty."</p>
                    <p>Distance : ".$value->distance."</p>
                    <p>Durée : ".$value->duration."</p>
                    <p>Dénivelé : ".$value->height_difference."</p></br>
                    <a class='ui green button' href='modif2.php?id=".$value->id."'>Modifier</a>
                  </div>";
}
?>
</body>
</html>
