<?php

require_once("model/class.model.php");


public function addPlayerWin(){
    $sql = 'SELECT * FROM playerWin';
    $req = $pdo->query($sql);
    while($row = $req->fetch()){
        echo "<tr><td>".$row['pseudo']."</td><td>".$row['date']."</td></tr>";
    }
}

public $playerWinTable = array(
        'playerWin' =>
            array(
                'className' => 'playerWin',
                'joinTable' => 'player',
                'foreignKey' => 'player_id',
                'associationForeignKey' => 'playerWin_id'      
           )
    );
