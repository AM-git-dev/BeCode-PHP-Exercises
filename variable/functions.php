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