<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Excuses Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<h1>Générateur d'excuses pour votre enfant</h1>
<form action="" method="get">
    <label for="form">
        <p>Nom de l'Enfant :</p>
        <input type="text" id="form_name" name="name"> <br>
        <p>Quel est son genre :</p><br>
        <input type="radio" id=form_gender_female name="gender" value="Fille">
        <p>Fille</p> <br>
        <input type="radio" id=form_gender_male name="gender" value="Garçon">
        <p>Garçon</p><br>
        <p>Nom du Professeur :</p>
        <input type="text" id="form_prof_name" name="prof"> <br>
        <p>Durée de l'absence :</p>
        <input type="number" name="duration" id="duration"> <br>

        <p>Raison :</p> <br>
        <label for="reasons">
        <input type="radio" id="reason-illness" name="reason" value="illness"><p>Maladie</p><br>
            <input type="radio" id="reason-death" name="reason" value="death"><p>Décès dans la famille</p><br>
            <input type="radio" id="reason-extra-activity" name="reason" value="extra-activity"><p>Activité extra scolaire prioritaire</p><br>
            <input type="radio" id="reason-other" name="reason" value="other"><p>Autre :</p>
        <input type="text" name="other" id="other"><br>
        </label>
        <input type="submit" id="button" value="Générer">

    </label>
</form>

</body>
</html>

<?php

if(isset($_GET["name"], $_GET["gender"], $_GET["prof"], $_GET["duration"], $_GET["reason"], $_GET["other"])) {
    $gender = $_GET["gender"];
    $name = $_GET["name"];
    $prof = $_GET["prof"];
    $reason = $_GET["reason"];
    $other = $_GET["other"];
    $duration = $_GET["duration"];
    $gender_choice = "";
    $day_or_days = "";
    $gender_absent = "";

    if ($gender == "Fille") {
        $gender_choice = "ma fille";
        $gender_absent = "absente";
    } else {
        $gender_choice = "mon fils";
        $gender_absent = "absent";
    }

    if ($duration <= 1) {
        $day_or_days = "jour";
    } else {
        $day_or_days = "jours";
    }


    $excuse_illness = "<br><br><p>Madame/Monsieur $prof, <br><br> Suite à notre visite chez le médecin, je vous informe aujourd'hui que $gender_choice $name sera $gender_absent pour une durée de $duration $day_or_days.<br> Merci de votre compréhension.<br><br> Cordialement.<br><br> Le père de $name.</p><br>";
    $excuse_death = "<br><br><p>Madame/Monsieur $prof,<br><br> Suite a un décès dans la famille, je vous informe que $gender_choice $name sera $gender_absent $duration $day_or_days, merci de votre compréhension.<br><br> Cordialement.<br><br> Le père de $name</p><br>";
    $excuse_extra = "<br><br><p>Madame/Monsieur $prof, <br><br> Aujourd'hui $gender_choice $name, a une compétition de League of Legends, et sera donc $gender_absent $duration $day_or_days, merci de votre compréhension.<br><br> Cordialement.<br><br> Le père de $name</p><br>";
    $excuse_other = "<br><br><p>Madame/Monsieur $prof, <br><br> $other et sera donc $gender_absent pour une durée de $duration $day_or_days, merci de votre compréhension.<br><br> Cordialement.<br><br> Le père de $name</p><br>";
    $today = date("d/m/Y");
    switch ($reason) {
        case "illness":
            echo $excuse_illness;
            echo "<p class='date'>Fait le $today</p>";
            break;
        case "death":
            echo $excuse_death;
            echo "<p class='date'>Fait le $today</p>";
            break;
        case "extra-activity":
            echo $excuse_extra;
            echo "<p class='date'>Fait le $today</p>";
            break;
        case "other":
            echo $excuse_other;
            echo "<p class='date'>Fait le $today</p>";
            break;
    }
}
?>


