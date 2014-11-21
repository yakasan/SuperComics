<table > 
    <tr>
        <td> Pseudo joueurs gagnant </td>
        <td> Date de la partie gagnée </td>
    </tr>
    
    <?php
    $connexion = new PDO('mysql:host=localhost; dbname=SuperComics', 'stagiaire', 'stagiaire');
    $sql = 'SELECT * FROM player';
    $req = $connexion->query($sql);
    //print_r($req);
    while($row = $req->fetch()){
        echo "<tr><td>".$row['pseudo']."</td><td>".$row['id']."</td></tr>";
    }
    ?>
</table>
