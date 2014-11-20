<?php

try {

    $connexion = new PDO ('mysql:host=localhost; dbname=SuperComics; charset=utf8', "stagiaire", "stagiaire");
    
} catch (PDOException $e){
    $errorMessage = $e->getMessage();
}

?>
