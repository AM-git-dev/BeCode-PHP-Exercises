<p style="font-weight: bold">9. The "Switch" Structure</p>

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


    switch ($grade) {
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:  $message= "Ce travail est ni fait ni a faire! Tu es nul.";
            break;
        case 5:
        case 6:
        case 7:
        case 8:
        case 9: $message="Travail insuffisant il va falloir réviser !";
            break;
        case 10: $message="Juste Assez !";
            break;
        case 11:
        case 12:
        case 13:
        case 14: $message= 'Pas mal';
            break;
        case 15:
        case 16:
        case 17:
        case 18: $message= "Bravo, Bravissimo!";
            break;
        case 19:
        case 20: $message= "Amene moi le tricheur ou tu seras collé";
            break;

    }
    echo $message;
}
?>



