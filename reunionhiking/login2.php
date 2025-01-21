<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=reunion', 'root', '0000');
}
catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}

session_start();




if (isset($_POST['submit'])) {
    $username = $_POST['login'];
    $password = $_POST['pwd'];
    $querySelect = $bdd->prepare('SELECT * FROM user WHERE email = :email');
    $querySelect->execute(array('email' => $username));
    $user = $querySelect->fetch();

    echo "$ GLOBALS resultat : <br>";
    echo '<pre>';
    print_r($GLOBALS);
    echo '</pre>';

    if (password_verify($password, $user["password"])) {
        $_SESSION['login'] = $user['email'];
        header('Location: read.php');
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect";
    }

}
?>

<html lang="en">
<head>
    <title>Formulaire d'identification</title>
</head>

<body>
<form action="" method="post">
    Votre login : <input type="text" name="login">
    <br />
    Votre mot de passe : <input type="password" name="pwd"><br />
    <input type="submit" name="submit" value="Connexion">
</form>

</body>
</html>