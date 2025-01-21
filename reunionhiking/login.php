<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=reunion', 'root', '0000');
}
catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}

session_start();




if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
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

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>

    <form action="" method="post">
      <div>
        <label for="username">Identifiant</label>
        <input type="text" name="username">
      </div>
      <div>
        <label for="password">Mot de passe </label>
        <input type="password" name="password">
      </div>
      <div>
        <button type="button" name="button">Se connecter</button>
      </div>
    </form>
  </body>
</html>
