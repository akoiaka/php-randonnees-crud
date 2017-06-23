<?php
include ('connection.php');

$name=$_POST['name'];
$difficulty=$_POST['difficulty'];
$distance=$_POST['distance'];
$duration=$_POST['duration'];
$height_difference=$_POST['height_difference'];

//var_dump($name, $difficulty, $distance, $duration, $height_difference);

// ci-dessous, les double guillemets sonts HYPER IMPORTANTS pour permettre une connection a sa bdd

$req = $bdd->prepare("INSERT INTO hiking (name, difficulty, distance, duration, height_difference)
VALUES (:name, :difficulty, :distance, :duration, :height_difference)");

// ci-dessous autre possibité d écrire en version sql avec des guillemets bien utiles pour perdre du temps
//$req = $bdd->prepare('INSERT INTO `hiking` (`name`, `difficulty`, `distance`, `duration`, `height_difference`)
//VALUES (:name, :difficulty, :distance, :duration, :height_difference)');

$req->execute(array(
    'name' => $name,
    'difficulty' => $difficulty,
    'distance' => $distance,
    'duration' => $duration,
    'height_difference' => $height_difference));

?>


