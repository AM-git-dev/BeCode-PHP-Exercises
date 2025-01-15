<?php

$bdd = new PDO('mysql:host=localhost;dbname=reunion', 'root', '0000');

$id= $_GET['id'];

$query = $bdd->prepare('DELETE FROM hiking WHERE id = :id');
$query-> execute(array('id' => $id));
header('Location: read.php');

