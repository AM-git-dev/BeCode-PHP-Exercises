<?php

class DbConnexion {

    private static $bdd = null;

    public static function getBdd() {
        if (self::$bdd === null) {
            try {
                self::$bdd = new PDO('mysql:host=localhost;dbname=mvc', 'root', '0000');
                echo 'Connexion Ok';
            } catch (PDOException $e) {

                echo 'Erreur : ' . $e->getMessage();
            }

        }
        return self::$bdd;
    }
}



?>