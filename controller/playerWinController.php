<?php
    include("/SuperComics/model/class.model.php");
    $result = $connexion->query("SELECT * FROM player");
    $playerWin=$result->fetchAll(PDO::FETCH_ASSOC);
    include("/SuperComics/index.tpl");

?>
