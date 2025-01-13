<?php
include("connexion.php");
global $bdd; ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Manager</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Gestion des Contacts</h1>
<div class="containercreateandlist">
<div class="createcontact">
<h2>Creer un contact</h2>
<form action="" method="post">
    Nom : <input type="text" name="lastname" placeholder="Entre le Nom"> <br><br>
    Prénom : <input type="text" name="firstname" placeholder="Entre le Prénom"> <br><br>
    Numéro de GSM : <input type="text" name="phonenumber" placeholder="Entre le numéro de GSM"> <br><br>
    Adresse E-Mail : <input type="text" name="email" placeholder="Entre une addresse E-Mail"> <br><br>
    <input type="submit" name="submit" value="Valider">
</form>
</div>
<table class="contactlist">
    <thead>
    <tr>
    <td>NOM</td>
    <td>PRENOM</td>
    <td>EMAIL</td>
    <td>NUMERO</td>
    </tr>
    </thead>
    <tbody>
 <?php

$retrievedContacts = $bdd->query("SELECT * FROM contact");
$contacts = $retrievedContacts->fetchAll();

foreach ($contacts as $contact) {
    echo '<tr><td>' . $contact['last_name'] . '</td>'
        . '<td>' . $contact['first_name'] . '</td>'
        . '<td>' . $contact['email'] . '</td>'
        . '<td>' . $contact['phone_number'] . '</td></tr>'
        . '<br>';
}?>
    </tbody>
</table>
</div>

</body>
</html>


<?php

if (isset($_POST['submit'])) {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $phone_number = $_POST['phonenumber'];
    $email = $_POST['email'];

    $statement = $bdd->prepare('INSERT INTO contact (first_name, last_name, email, phone_number) VALUES(?, ?, ?, ?)');
    $statement->execute(array($firstname, $lastname, $email, $phone_number));
    if ($statement) {
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}

?>