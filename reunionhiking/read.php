<?php

$bdd= new PDO('mysql:host=localhost;dbname=reunion', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

$data=$bdd->query('SELECT * FROM hiking');
$results= $data->fetchAll();
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href=css/basics.css media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1>Liste des randonnées</h1>
    <table>
     <thead>
     <tr class ="row">
         <td class="data">NOM</td>
         <td class="data">DIFFICULTE</td>
         <td class="data">DISTANCE (en m)</td>
         <td class="data">DUREE</td>
         <td class="data">DENIVELE</td>
         <td class="delete">SUPPRIMER</td>
     </tr>
     </thead>
        <tbody>
        <?php foreach ($results as $result) {
            echo '<tr class="row">';
            echo "<td class='data'><a href='update.php?id=" . $result['id'] . "'>" . $result["name"] . "</a></td>";
            echo "<td class='data'>" . $result["difficulty"] . "</td>";
            echo "<td class='data'>" . $result["distance"] . "</td>";
            echo "<td class='data'>" . $result["duration"] . "</td>";
            echo "<td class='data'>" . $result["height_difference"] . "</td>";
            echo "<td class='delete'><button><a href='delete.php?id=" . $result['id'] . "'>Supprimer</a></button></td>";
            echo "</tr>";
        } ?>
        </tbody>
    </table>
  </body>
</html>

