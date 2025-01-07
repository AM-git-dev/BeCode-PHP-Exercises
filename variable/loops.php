<?php
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

$code_or_codes="";

foreach ($pronouns as $pronoun) {
    if ($pronoun == "He/She") {
        $code_or_codes = "codes";
    } else {
        $code_or_codes = "code";
    }

    echo "$pronoun $code_or_codes <br>";
}

//$numbers = 1;
//
//while ($numbers <= 120) {
//    echo "<br>" . $numbers++;
//}


for ($numbers = 1; $numbers <=120; $numbers++) {
    echo $numbers. "<br>";
}

$my_startup=["Maxime", "Hugo", "Stephen", "Farid", "Kiki"];

foreach($my_startup as $firstname){
    echo "$firstname <br>";
};
$countries=[
    "FR" => "France",
    "BE" => "Belgique",
    "JP" => "Japon",
    "ES" => "Espagne",
    "US" => "USA",
    "IR" => "Irlande",
    "EN" => "Angleterre",
    "DE" => "Allemagne",
    "CH" => "Suisse"
];



?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="" method="get">
    <label for="countries">
    <select name="countries" id="countries">
        <?php

        foreach ($countries as $keys => $values) {
            echo "<option value=$keys> $values";
        }

        ?>
    </select>
    </label>
    </form>

</body>
</html>
