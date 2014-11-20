<table > 

    <tr>
        <td> Pseudo joueurs gagnant</td>
        <td> Date de la partie gagnée</td>
    </tr>
    
    <?php foreach ($tableWin as $playerWin):?>
    <tr>
        <td> <?=$playerWin["pseudo"]?> </td>
        <td> <?=$playerWin["date"]?> </td>
    </tr>
    <?php endforeach; ?>
            
</table>
