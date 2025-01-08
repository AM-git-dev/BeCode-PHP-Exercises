<?php
function capitalize($word)
{
    echo ucfirst($word);
}

capitalize("maxime <br>");

echo date("d/m/Y - H:i:s");

function sum ($num1, $num2) {

    if(is_numeric($num1) && is_numeric($num2)){
        return $num1 + $num2;
    } else {
        return 'Someone Help Me';
    }

}
echo "<br>";

echo sum("1", "9");

function acronym_of($string){

    $words = explode(' ', $string);

    $final_string = "";

    foreach($words as $word)
    {
        $final_string = $final_string . $word[0];
    }

return $final_string;
}

echo "<br>";

echo acronym_of("In Code We Trust");

function replace_letter($string){

    echo str_replace("ae", "æ", $string);

}

echo "<br>";

replace_letter("caecotrophie");

function rereplace_letter($string)
{
     echo str_replace("æ", "ae", $string);
}
echo "<br>";
rereplace_letter("caecotrophie");

function feedback($message, $class = "info") {

    echo "<div class=$class>" . ucfirst($class) . " : " . "$message </div>";
}

feedback("Incorrect email address");


function decapitalize($word) {

    echo strtolower($word);

}

decapitalize("STOP YELLING I CAN'T HEAR MYSELF THINKING!!<br>");

function calculate_cone_volume($rayon, $hauteur) {

    $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3);
    echo "Le volume d'un cône de $rayon cm de rayon et de $hauteur cm de hauteur est de ". round($volume, 2). "cm3";
}

calculate_cone_volume(5, 2);
function create_string($minlength, $maxlength){

$final_length = rand($minlength, $maxlength);
$letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$letterslength = strlen($letters);
$randomstring = "";
for ($i = 0; $i < $final_length; $i++) {
    $randomstring .= $letters[rand(0, $letterslength - 1)];
}
return $randomstring;

}
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
$word1 = create_string(1, 5);
$word2 = create_string(7, 15);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Generate New Word</h1>
<p>Word 1 <?php echo $word1 ?></p>
<p>Word 2 <?php echo $word2 ?></p>
<form method="post">
    <button type="submit"> Generate </button>
</form>
</body>
</html>



