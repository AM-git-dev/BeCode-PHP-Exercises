<!--Serie d'exo sur les conditions en PHP-->

<p style="font-weight: bold"> 1.2 Clean your room Exercise, improved. </p>
<br>
<?php
$possible_states = array(
    0 => 'sale',
    1 => 'moyennement sale',
    2 => 'propre'
);

$room_filthiness = $possible_states[2];

if($room_filthiness == 'sale'){
    echo "Go nettoyer ta chambre !";
} else if ($room_filthiness == 'moyennement sale'){
    echo 'Ramasse tes papiers qui trainent';
} else {
    echo "C'est propre gg";
}
?>

<p style="font-weight: bold">2 Different greetings according to time.</p>
<br>
<?php

$actual_hour = date("H");

if($actual_hour >= '05:00' AND $actual_hour < '09:00'){
    echo 'Bon réveil !';
} elseif ($actual_hour >= '09:01' AND $actual_hour < '12:00'){
    echo 'Bonne journée !';
} elseif ($actual_hour >= '12:01' AND $actual_hour < '16:00'){
    echo 'Bonne après midi ! ';
} elseif ($actual_hour >= '16:01' AND $actual_hour < '21:00'){
    echo 'Bonne soirée !';
} elseif ($actual_hour >= '21:01' AND $actual_hour < '04:59'){
    echo 'Bonne nuit !';
}

?>

<p style="font-weight: bold">5. Display a different greeting according to the user's age, gender and mothertongue.</p>

<form method="get" action="">
    <label for="age">Quel âge as tu ?
        <input type="number" name="age" min='0' id="age"> </label>
    <br><br>
    <label for="gender">De quel genre es tu ?
        <br><br>
        <input type="radio" id="femme" name="gender" value="Femme"> Femme
        <br>
        <input type="radio" id="homme" name="gender" value="Homme"> Homme
        <br><br>

        <label for="lang">Do you speak English?
            <input type="radio" id="lang_yes" name="lang" value="Yes"> Yes
            <input type="radio" id="lang_no" name="lang" value="No"> No
        </label>

        <br><br>
        <input type="submit" name="submit" value="Greet me now">
        <br><br>
</form>

<?php
if (isset($_GET['age'], $_GET['gender'], $_GET['lang'])) {
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $english = $_GET['lang'];
    $message = "";

    if ($english == 'Yes') {
        $message = 'Hello';
    } else {
        $message = 'Aloha';
    }

    if ($gender == 'Femme') {
        if ($age < 12) {
            echo "$message kiddo";
        } elseif ($age >= 12 && $age < 18) {
            echo "$message Miss Teen";
        } elseif ($age >= 18 && $age < 115) {
            echo "$message Miss!";
        } else {
            echo "Wow! Still Alive? Are you a robot, like me? Can I hug you?";
        }
    } else {
        if ($age < 12) {
            echo "$message kiddo";
        } elseif ($age >= 12 && $age < 18) {
            echo "$message Mister Teen";
        } elseif ($age >= 18 && $age < 115) {
            echo "$message Man!";
        } else {
            echo "Wow! Still Alive? Are you a robot, like me? Can I hug you?";
        }
    }
}

?>

<p style="font-weight: bold">6. The Girl Soccer team.</p>

<form action="" method="get">
    <label for="age">
        Quel âge as-tu ? <input type="number" id="age" min="0" name="age" required>
    </label>
    <br><br>
    <label for="gender">
        De quel genre es-tu ?
        <br><br>
        <input type="radio" id="gender_femme" name="gender" value="Femme"> Femme
        <br>
        <input type="radio" id="gender_homme" name="gender" value="Homme"> Homme
    </label>
    <br>
    <input type="submit" name="submit" value="Valider">
</form>

<?php

if (isset($_GET['age'], $_GET['gender'])) {
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $message = "";

    if ($gender == 'Femme' && $age >= 21 && $age <= 40) {
        $message = "Bienvenue dans l'équipe !";
    }

    if ($message == "") {
        $message = "Désolé, tu ne corresponds pas aux critères.";
    }

    echo $message;
}
?>

<p style="font-weight: bold">8. School Sucks!</p>

<form action="" method="get">
    <label for="grade">
       Note : <input type="number" id="grade" min="0" max="20" name="grade" required>
    </label>
    <input type="submit" name="submit" value="Générer l'appréciation">
</form>

<?php

if (isset($_GET['grade'])) {
    $grade = $_GET['grade'];
    $message = "";

    if($grade <= 4){
         $message="Ce travail est ni fait ni a faire! Tu es nul.";
    } elseif ($grade >= 5 && $grade <= 9) {
        echo "Travail insuffisant il va falloir réviser !";
    } elseif ($grade == 10) {
        $message= 'Juste Assez !';
    } elseif ($grade >= 11 && $grade < 15) {
        $message= 'Pas mal';
    } elseif ($grade >= 15 && $grade < 18) {
        $message= "Bravo, Bravissimo!";
    } else {
        $message= "Amene moi le tricheur ou tu seras collé";
    }
    echo $message;
}
?>





