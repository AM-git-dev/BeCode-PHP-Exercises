<?php

try {

    $bdd = new PDO('mysql:host=localhost;dbname=becode', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}

if (isset($_POST['submit'])) {
    $ville = $_POST['Ville'];
    $haut = $_POST['haut'];
    $bas = $_POST['bas'];

    $statement = $bdd->prepare("INSERT INTO meteo (Ville, haut, bas) VALUES(?, ?, ?)");
    $statement->execute(array($ville, $haut, $bas));


    if ($statement) {
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo '<script>alert("Erreur lors de la creation");</script>';

    }
}

$queryaffichage = $bdd ->query('SELECT * FROM meteo;');
$meteos = $queryaffichage -> fetchAll(PDO::FETCH_ASSOC);



echo '<form method="post">
<p>Ville : </p>
<input type="text" name="Ville" placeholder="Entrer une ville">
<br>
<p>Max Temp : </p>
<input type="text" name="haut" placeholder="Entrer la maximale">
<br>
<p>Min Temp : </p>
<input type="text" name="bas" placeholder="Entrer la minimale">
<br><br>
<input type="submit" name="submit"> 
</form>';

if (isset($_POST['submit2']) && $_POST['delete']) {
    $ville_a_suppr = $_POST["delete"];
    $statement = $bdd->prepare("DELETE FROM meteo WHERE Ville = ?");
    $statement->execute(array($ville_a_suppr));

    if ($statement) {
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }

}
echo '
    <form method="post">
    <table>
    <thead>
    <tr>
        <td>Ville</td>
        <td>Max Temp</td>
        <td>Min Temp</td>
        <td>Supprimer</td>
    </tr>
    </thead>
    <tbody> 
  ';

foreach ($meteos as $row => $meteo) {
    echo '<tr>';
    echo '<td>' . $meteo['Ville'] . '</td>';
    echo '<td>' . $meteo['haut'] . '</td>';
    echo '<td>' . $meteo['bas'] . '</td>';
    echo '<td><input type="checkbox" name="delete" value="' . $meteo['Ville'] . '" </td>';
    echo '</tr>';

}
    echo '</tbody>
</table>';
        echo '<input type="submit" name="submit2" value="Supprimer" >'
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

</body>
</html>