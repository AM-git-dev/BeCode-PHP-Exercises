<?php
//Check if credentials are valid
try {
    $bdd = new PDO('mysql:host=localhost;dbname=reunion', 'root', '0000');
}
catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}


if (isset($_POST['submit'])) {
    $username = $_POST['login'];
    $password = $_POST['pwd'];
    $querySelect = $bdd->prepare('SELECT * FROM user WHERE email = :email');
    $querySelect->execute(array('email' => $username));
    $user = $querySelect->fetch();


    if (password_verify($password, $user["password"])) {
        echo 'Bienvenue';
    } else {
        echo 'Mauvais mdp frerot';
    }
}
    ?>