<?php

$bdd = new PDO('mysql:host=localhost;dbname=reunion', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

$id = $_GET['id'];

$statement = $bdd->prepare('SELECT * FROM hiking WHERE id = :id');
$statement -> execute(array('id' => $id));
$hiking = $statement -> fetch();

if (isset($_POST['button'])) {
    $name = $_POST['name'];
    $difficulty = $_POST['difficulty'];
    $distance = $_POST['distance'];
    $duration = $_POST['duration'];
    $height_difference = $_POST['height_difference'];

    $query = $bdd -> prepare('UPDATE hiking SET name = :name, difficulty = :difficulty, distance = :distance, duration = :duration, height_difference= :height_difference WHERE id = :id');
    $query -> execute(array('name' => $name, 'difficulty' => $difficulty, 'distance' => $distance, 'duration' => $duration, 'height_difference' => $height_difference, 'id' => $id));
    header('location: read.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modifier une randonnée</title>
	<link rel="stylesheet" href=css/basics.css media="screen" title="no title" charset="utf-8">
</head>
<body>
	<a href=read.php>Liste des données</a>
	<h1>Modifier</h1>
	<form action="" method="post">
		<div>
			<label for="name">Name</label>
			<input style="width: 350px; text-align: left" type="text" name="name" value="<?= $hiking['name'] ?>">
		</div>

		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
                <?php $difficulties = array("Très Facile","Facile", "Moyen", "Difficile", "Très Difficile");
                foreach ($difficulties as $difficulty) {
                    $selected = ($difficulty == $hiking['difficulty']) ? "selected" : "";
                    echo '<option value ="' . $difficulty . '" ' . $selected .'>' . $difficulty . '</option>';
                }?>
			</select>
		</div>
		
		<div>
			<label for="distance">Distance</label>
			<input  type="text" name="distance" value=<?= $hiking['distance'] ?>">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="duration" name="duration" value="<?= $hiking['duration'] ?>">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="text" name="height_difference" value="<?= $hiking['height_difference'] ?>">
		</div>
		<button type="submit" name="button">Modifier</button>
	</form>
</body>
</html>
