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


$me = array(
    'age' => 30,
    'prénom' => "Maxime",
    'nom' => "André",
    "films" => array ('Fight Club', 'Inception', 'Shutter Island'),
    "hobbies" => array ('PC')
);

$soulmate = array(
    'age' => 33,
    'prénom' => "Helly",
    'nom' => "Tessens",
    "films" => array ('Fight Club', 'Les Tuches', 'Le Pari'),
    "hobbies" => array ('PC', "Streaming")
);

echo '<pre>';
print_r($me);
echo '</pre>';

$mother = array(
    'age' => 53,
    'prénom' => "Astrid",
    'nom' => "Coufranc",
    "films" => array ('Fame', 'Dirty Dancing', 'Gremlins'),
    "hobbies" => array("Crafting", "DIY", "Painting")
);

$me['mother'] = $mother;

echo '<pre>';
print_r($me);
echo '</pre>';


$mother_count= count($mother['hobbies']);
$me_count= count($me['hobbies']);

echo $mother_count + $me_count;

$me['hobbies'][]="taxidermy";

echo '<pre>';
print_r($me);
echo '</pre>';


$me['nom'] = 'Durand';

print_r($me['nom']);

$possible_hobbies_via_intersection =array_intersect($me['hobbies'], $soulmate['hobbies']);
$possible_hobbies_via_merge=array_merge($me['hobbies'], $soulmate['hobbies']);

echo '<pre>';
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';


$web_development=array(
    "frontend" => array(),
    "backend" => array()
);

array_push($web_development['frontend'], "xhtml", "css", "js");
array_push($web_development['backend'], "Ruby on Rails" , "Flash");

echo "<pre>";
print_r($web_development);
echo "</pre>";

$web_development['frontend'][0] = "html";
array_splice($web_development['backend'], 1);

echo "<pre>";
print_r($web_development);
echo "</pre>";
