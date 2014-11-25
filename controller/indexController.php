<?php
include("/SuperComics/model/class.index.php");

try {
    $playerWin = getPlayerWin();
    include("/SuperComics/index.tpl");
    
} catch (PDOException $e){
    $errorMessage = $e->getMessage();
}

?>
