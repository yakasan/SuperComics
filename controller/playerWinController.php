<?php

try {
    $connexion = new PDO ('mysql:host=localhost; dbname=SuperComics; charset=utf8', "stagiaire", "stagiaire");
    $result = $connexion->query("SELECT * FROM playerWin INNER JOIN player ON playerWin.id_player = player.id;");
    $playerWin=$result->fetchAll(PDO::FETCH_ASSOC);
    include("model/class.model.php");
    $playerWin = new PlayerWin();
    $tableWin = $playerWin->getAndJoinAll();
    include("/SuperComics/index.tpl");
    
} catch (PDOException $e){
    $errorMessage = $e->getMessage();
}

?>
