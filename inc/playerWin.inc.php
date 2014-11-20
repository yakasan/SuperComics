<table > 

    <tr>
        <td> Pseudo joueurs gagnant</td>
        <td> Date de la partie gagnée</td>
    </tr>
    
    <?php
    
    $playerWin = array(
        '1'=>'pseudo1',
        '2'=>'pseudo2',
        '3'=>'pseudo3',
        '4'=>'pseudo4',
        '5'=>'pseudo5',
        '6'=>'pseudo6',
        '7'=>'pseudo7',
        '8'=>'pseudo8',
        '9'=>'pseudo9',
        '10'=>'pseudo10',
        '11'=>'pseudo11',
        '12'=>'pseudo12'
    );
    
        foreach ($playerWin as $key => $value){
            if($key<11){
            echo "<tr><td>".$value."</td><td>test date</td> </tr>";
            }
        }
    ?>
    
            
</table>
