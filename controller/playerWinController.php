<?php
include("model/class.model.php");
    $result = $connexion->query("SELECT * FROM playerWin INNER JOIN player ON playerWin.id_player = player.id;");
    $playerWin=$result->fetchAll(PDO::FETCH_ASSOC);
    
    $playerWin = new SuperComics();
    $tableWin = $playerWin->getAndJoinAll();
    include("/SuperComics/index.tpl");

?>
