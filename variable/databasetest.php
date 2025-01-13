<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=becode', 'root', '0000');
}
catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}

