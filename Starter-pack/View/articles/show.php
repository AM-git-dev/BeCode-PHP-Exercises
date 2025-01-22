<?php require 'View/includes/header.php'?>

<?php // Use any data loaded in the controller here ?>

<section>
    <h1><?= $article->title ?></h1>
    <p><?= $article->formatPublishDate('d-m-Y') ?></p>
    <p><?= $article->description ?></p>

    <?php

    $idnext = $_GET['id']+1;
    $idprev = $_GET['id']-1;

    $bdd = DbConnexion::getBdd();
    $querymin = $bdd->prepare('SELECT MIN(id) FROM articles');
    $querymin->execute();
    $idmin = $querymin->fetch();
    $idminimum = $idmin[0];

    $querymax = $bdd->prepare('SELECT MAX(id) FROM articles');
    $querymax->execute();
    $idmax = $querymax->fetch();
    $idmaximum = $idmax[0];


    if ($_GET['id'] > $idminimum) {
        echo '<a href="index.php?page=show&id=' . $idprev . '">Previous article</a>';

    }
    echo " " . " ";

    if ($_GET['id'] < $idmaximum) {
       echo '<a href="index.php?page=show&id=' . $idnext . '" >Next article </a>';
    };
?>



</section>

<?php require 'View/includes/footer.php'?>