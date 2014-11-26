<table > 

    <tr>
        <td> Pseudo joueurs gagnant</td>
        <td> Date de la partie gagnée</td>
    </tr>
    
    <?php foreach ($playerWinTable as $playerWin):?>
    <tr>
        <td> <?=$playerWin["pseudo"]?> </td>
        <td> <?=$playerWin["date_win"]?> </td>
    </tr>
    <?php endforeach; ?>
            
</table>
