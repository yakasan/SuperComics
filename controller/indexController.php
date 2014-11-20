<?php
include("view/connexionController.php");

try {
    $result = $connexion->query("SELECT * FROM player_win;");
    $tableWin = $result->fetchAll(PDO::FETCH_ASSOC);
    include("class/class.playerWin.php");
    $playerWin = new PlayerWin();
    $tableWin = $playerWin->getAndJoinAll();
    include("index.php");
    
    
} catch (PDOException $e){
    $errorMessage = $e->getMessage();
}

?>
