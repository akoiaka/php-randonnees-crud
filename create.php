<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.css">
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">

</head>
<body>
	<a href="read.php">Liste des données</a>
	<h1>Ajouter</h1>
	<form action="read.php" method="post">
		<div>
			<label for="name">Nom</label>
			<input type="text" name="name" value="">
		</div>

		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
				<option value="tres facile" name="tf">Très facile</option>
				<option value="facile" name="f">Facile</option>
				<option value="moyen" name="m">Moyen</option>
				<option value="difficile" name="d">Difficile</option>
				<option value="tres difficile" name="td">Très difficile</option>
			</select>
		</div>
		
		<div>
			<label for="distance">Distance</label>
			<input id="red" type="text" name="distance" value="">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="duration" name="duration" value="">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="text" name="height_difference" value="">
		</div>
<!--        <div id="bouton" class="ui animated fade button" tabindex="0" name="button">-->
<!--            <div class="visible content" name="button" type='submit'>Envie de randonner?</div>-->
<!--            <div class="hidden content" type="submit" name="button">cliquez ICI</div>-->
<!--            <button type="submit"></button>-->
<!--        </div>-->
        <button type="submit" name="button">Valider</button>
	</form>
</body>
</html>
