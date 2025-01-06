<?php

$family = array('Maxime', 'Helly', 'Hime');



$recipes= ['Pates', 'Burger','Pizza'];

print_r($recipes);


$films=['Fight Club', 'Les 8 salopards', 'Star Wars'];


array_push($recipes, "Frites");
$recipes[] = "Fromage";
$recipes['Bernard'] = "Fromages";
$recipes['Bernard'] = "Burgers";
echo $recipes['Bernard'];