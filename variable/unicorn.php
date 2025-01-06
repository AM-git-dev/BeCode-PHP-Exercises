<p style="font-weight: bold">11. Ternary exercises</p>
<form action="" method="get">
    <label for="gender">
        Tu es : <br><br>
        <input type=radio id="gender_unicorn" name="gender" value="licorne"> Une Licorne <br>
        <input type=radio id="gender_human" name="gender" value="humain"> Un Humain <br>
        <input type=radio id="gender_cat" name="gender" value="chat"> Un Chat <br><br>
        <input type="submit" name="submit" value="Valider">
    </label>
</form>

<?php
if (isset($_GET['gender'])) {
$img="";
switch ($_GET['gender']) {
    case 'licorne': $img="licorne";
        break;
    case 'humain': $img="humain";
        break;
    case 'chat': $img="chat";
}

echo '<img src="gif/'.$img.'.webp">';
}